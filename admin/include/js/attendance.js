// ===== ATTENDANCE TABLE WITH DATATABLES =====

$(document).ready(function() {
    // Initialize DataTables with buttons (hidden, triggered programmatically)
    var table = $('#attendanceTable').DataTable({
        pageLength: 10,
        lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        order: [[0, 'desc']], // Default sort by Employee ID descending
        dom: 'Brtip', // Buttons, table, info, pagination (removed 'f' for search/filter)
        buttons: [
            {
                extend: 'excel',
                text: 'Excel',
                className: 'hidden-export-btn',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8] // All columns except Action
                }
            },
            {
                extend: 'csv',
                text: 'CSV',
                className: 'hidden-export-btn',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8] // All columns except Action
                }
            }
        ],
        language: {
            search: "Search:",
            lengthMenu: "Show _MENU_ entries",
            info: "Showing _START_ to _END_ of _TOTAL_ entries",
            infoEmpty: "Showing 0 to 0 of 0 entries",
            infoFiltered: "(filtered from _MAX_ total entries)",
            paginate: {
                first: "First",
                last: "Last",
                next: "Next",
                previous: "Previous"
            }
        },
        responsive: true,
        // Custom styling ke liye
        drawCallback: function() {
            // Maintain custom badge styling
            $('.badge').each(function() {
                var status = $(this).text().trim().toLowerCase();
                $(this).removeClass('badge-present badge-late badge-absent');
                if (status === 'present') {
                    $(this).addClass('badge-present');
                } else if (status === 'late') {
                    $(this).addClass('badge-late');
                } else if (status === 'absent') {
                    $(this).addClass('badge-absent');
                }
            });
            
            // Combine info and pagination in one container
            combinePaginationInfo();
        },
        initComplete: function() {
            // Combine info and pagination in one container on initialization
            combinePaginationInfo();
        }
    });

    // Custom filter functionality
    initFilters(table);
    
    // Combine pagination and info sections
    combinePaginationInfo();
    
    // Export Dropdown functionality
    initExportDropdown(table);
});

// ===== COMBINE PAGINATION AND INFO =====
function combinePaginationInfo() {
    setTimeout(function() {
        var infoElement = $('#attendanceTable_info');
        var paginateElement = $('#attendanceTable_paginate');
        var wrapper = $('#attendanceTable').closest('.dataTables_wrapper');
        
        // Check if elements exist
        if (infoElement.length && paginateElement.length && wrapper.length) {
            var infoParent = infoElement.parent();
            var paginateParent = paginateElement.parent();
            
            // If they're already siblings in the same parent, ensure it's .dataTables_bottom
            if (infoParent.is(paginateParent) && infoParent.hasClass('dataTables_bottom')) {
                return;
            }
            
            // Find existing bottom container or create one
            var bottomElement = wrapper.find('.dataTables_bottom').first();
            
            if (!bottomElement.length) {
                // Create new bottom container and append to wrapper
                bottomElement = $('<div class="dataTables_bottom"></div>');
                wrapper.append(bottomElement);
            }
            
            // Move info element to bottom container
            if (!infoElement.parent().is(bottomElement)) {
                infoElement.detach().appendTo(bottomElement);
            }
            
            // Move pagination element to bottom container
            if (!paginateElement.parent().is(bottomElement)) {
                paginateElement.detach().appendTo(bottomElement);
            }
        }
    }, 100);
}

// ===== EXPORT DROPDOWN FUNCTIONALITY =====
function initExportDropdown(table) {
    var exportBtn = $('#exportDropdownBtn');
    var exportMenu = $('#exportDropdownMenu');
    var exportDropdown = $('.export-dropdown');
    
    // Toggle dropdown on button click
    exportBtn.on('click', function(e) {
        e.stopPropagation();
        exportMenu.toggleClass('show');
        exportDropdown.toggleClass('active');
    });
    
    // Close dropdown when clicking outside
    $(document).on('click', function(e) {
        if (!exportDropdown.is(e.target) && exportDropdown.has(e.target).length === 0) {
            exportMenu.removeClass('show');
            exportDropdown.removeClass('active');
        }
    });
    
    // Handle export option clicks
    $('.export-option').on('click', function(e) {
        e.preventDefault();
        var format = $(this).data('format');
        
        // Close dropdown
        exportMenu.removeClass('show');
        exportDropdown.removeClass('active');
        
        // Trigger export based on format using hidden buttons
        if (format === 'excel') {
            // Trigger Excel export button (index 0)
            var excelBtn = $('.dt-button.hidden-export-btn').first();
            if (excelBtn.length) {
                excelBtn.click();
            } else {
                // Fallback: trigger via DataTables API
                table.button(0).trigger();
            }
        } else if (format === 'csv') {
            // Trigger CSV export button (index 1)
            var csvBtn = $('.dt-button.hidden-export-btn').last();
            if (csvBtn.length) {
                csvBtn.click();
            } else {
                // Fallback: trigger via DataTables API
                table.button(1).trigger();
            }
        }
    });
}

// ===== CUSTOM FILTER FUNCTIONALITY =====
function initFilters(table) {
    // Employee ID filter
    $('input[placeholder="Enter Employee ID"]').on('keyup', function() {
        table.column(0).search(this.value).draw();
    });

    // Name filter
    $('input[placeholder="Enter Name"]').on('keyup', function() {
        table.column(1).search(this.value).draw();
    });

    // Department filter
    $('select.filter-select').eq(0).on('change', function() {
        var val = $(this).val();
        if (val === '') {
            table.column(2).search('').draw();
        } else {
            table.column(2).search(val, false, true).draw();
        }
    });

    // Status filter - search in badge text
    $('select.filter-select').eq(1).on('change', function() {
        var val = $(this).val();
        if (val === '') {
            table.column(8).search('').draw();
        } else {
            // Simply search by text - DataTables will find the badge text
            table.column(8).search(val).draw();
        }
    });

    // Date filter (custom date search)
    $('.date-input').on('keyup change', function() {
        var dateValue = $(this).val();
        table.column(4).search(dateValue).draw();
    });

    // Clear Filters button
    $('.btn-clear-filters').on('click', function() {
        // Clear all filter inputs
        $('.filter-input').val('');
        $('.filter-select').val('');
        $('.date-input').val('');
        
        // Clear all column searches
        table.search('').columns().search('').draw();
    });
}

// ===== AUTO ATTENDANCE MODAL FUNCTIONALITY =====

$(document).ready(function() {
    // Remove any existing click handlers on Auto Attendance button
    $('.btn-auto-attendance').off('click');
    
    // Ensure modal opens properly
    $('.btn-auto-attendance').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $('#autoAttendanceModal').modal('show');
    });
    
    initAutoAttendanceModal();
});

function initAutoAttendanceModal() {
    // Select All Checkbox Functionality
    $('#attendanceSelectAllCheckbox').on('change', function() {
        $('.attendance-row-checkbox').prop('checked', this.checked);
    });
    
    // Individual checkbox change - update select all state
    $(document).on('change', '.attendance-row-checkbox', function() {
        const totalCheckboxes = $('.attendance-row-checkbox').length;
        const checkedCheckboxes = $('.attendance-row-checkbox:checked').length;
        
        $('#attendanceSelectAllCheckbox').prop('checked', totalCheckboxes === checkedCheckboxes);
        $('#attendanceSelectAllCheckbox').prop('indeterminate', checkedCheckboxes > 0 && checkedCheckboxes < totalCheckboxes);
    });
    
    // Modal Filters
    $('#attendanceModalEmpIdFilter').on('input', function() {
        filterAttendanceModalTable();
    });
    
    $('#attendanceModalNameFilter').on('input', function() {
        filterAttendanceModalTable();
    });
    
    $('#attendanceModalDepartmentFilter').on('change', function() {
        filterAttendanceModalTable();
    });
    
    $('#attendanceModalDateFilter').on('change', function() {
        filterAttendanceModalTable();
    });
    
    // Mark Attendance Button
    $('#markAttendanceBtn').on('click', function() {
        const selectedRows = $('.attendance-row-checkbox:checked').length;
        if (selectedRows === 0) {
            alert('Please select at least one employee to mark attendance.');
            return;
        }
        
        // Get selected employee IDs
        const selectedEmpIds = [];
        $('.attendance-row-checkbox:checked').each(function() {
            const empId = $(this).closest('tr').find('td').eq(1).text();
            selectedEmpIds.push(empId);
        });
        
        console.log('Selected Employee IDs:', selectedEmpIds);
        // Here you can add AJAX call to mark attendance
        
        alert(`Attendance marked for ${selectedRows} employee(s).`);
        $('#autoAttendanceModal').modal('hide');
    });
}

function filterAttendanceModalTable() {
    const empIdValue = $('#attendanceModalEmpIdFilter').val().toLowerCase();
    const nameValue = $('#attendanceModalNameFilter').val().toLowerCase();
    const departmentValue = $('#attendanceModalDepartmentFilter').val();
    
    $('#markAttendanceTable tbody tr').each(function() {
        const $row = $(this);
        const empId = $row.find('td').eq(1).text().toLowerCase();
        const name = $row.find('td').eq(2).text().toLowerCase();
        const department = $row.find('td').eq(3).text().trim();
        
        const matchesEmpId = !empIdValue || empId.includes(empIdValue);
        const matchesName = !nameValue || name.includes(nameValue);
        const matchesDepartment = !departmentValue || department === departmentValue;
        
        if (matchesEmpId && matchesName && matchesDepartment) {
            $row.show();
        } else {
            $row.hide();
        }
    });
}
