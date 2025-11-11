// ===== PAYROLL TABLE WITH DATATABLES =====

$(document).ready(function() {
    // Initialize DataTables with buttons (hidden, triggered programmatically)
    var table = $('#payrollTable').DataTable({
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
                    columns: [0, 1, 2, 3, 4, 5] // All columns except Actions (0-5: Emp ID, Name, Total Earnings, Net Salary, Date of Payment, Payslip)
                }
            },
            {
                extend: 'csv',
                text: 'CSV',
                className: 'hidden-export-btn',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5] // All columns except Actions (0-5: Emp ID, Name, Total Earnings, Net Salary, Date of Payment, Payslip)
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
            $('#payrollTable .badge').each(function() {
                var status = $(this).text().trim().toLowerCase();
                $(this).removeClass('badge-paid badge-pending badge-failed');
                if (status === 'paid') {
                    $(this).addClass('badge-paid');
                } else if (status === 'pending') {
                    $(this).addClass('badge-pending');
                } else if (status === 'failed') {
                    $(this).addClass('badge-failed');
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
        var infoElement = $('#payrollTable_info');
        var paginateElement = $('#payrollTable_paginate');
        var wrapper = $('#payrollTable').closest('.dataTables_wrapper');
        
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
    $('input[placeholder="Employee ID"]').on('keyup', function() {
        table.column(0).search(this.value).draw();
    });

    // Name filter
    $('input[placeholder="Employee Name"]').on('keyup', function() {
        table.column(1).search(this.value).draw();
    });

    // Department filter (disabled - no department column in table now)
    $('select.filter-select').eq(0).on('change', function() {
        // Department column removed from table, so this filter is disabled
        // Keeping UI element for consistency but it won't filter data
    });

    // Month filter (searches in Date of Payment column)
    $('select.filter-select').eq(1).on('change', function() {
        var val = $(this).val();
        if (val === '') {
            table.column(4).search('').draw(); // Date of Payment column (index 4)
        } else {
            // Search month name in Date of Payment column
            table.column(4).search(val, false, true).draw();
        }
    });

    // Clear Filters button
    $('.btn-clear-filters').on('click', function() {
        // Clear all filter inputs
        $('.filter-input').val('');
        $('.filter-select').val('');
        
        // Clear all column searches
        table.search('').columns().search('').draw();
    });
}

// ===== AUTO GENERATE PAYSLIP MODAL FUNCTIONALITY =====

$(document).ready(function() {
    initGeneratePayslipModal();
});

function initGeneratePayslipModal() {
    // Select All Checkbox Functionality
    $('#selectAllCheckbox').on('change', function() {
        $('.row-checkbox').prop('checked', this.checked);
    });
    
    // Individual checkbox change - update select all state
    $(document).on('change', '.row-checkbox', function() {
        const totalCheckboxes = $('.row-checkbox').length;
        const checkedCheckboxes = $('.row-checkbox:checked').length;
        
        $('#selectAllCheckbox').prop('checked', totalCheckboxes === checkedCheckboxes);
        $('#selectAllCheckbox').prop('indeterminate', checkedCheckboxes > 0 && checkedCheckboxes < totalCheckboxes);
    });
    
    // Modal Filters
    $('#modalEmpIdFilter').on('input', function() {
        filterModalTable();
    });
    
    $('#modalNameFilter').on('input', function() {
        filterModalTable();
    });
    
    $('#modalDepartmentFilter').on('change', function() {
        filterModalTable();
    });
    
    $('#modalMonthFilter').on('change', function() {
        filterModalTable();
    });
}

function filterModalTable() {
    const empIdValue = $('#modalEmpIdFilter').val().toLowerCase();
    const nameValue = $('#modalNameFilter').val().toLowerCase();
    const departmentValue = $('#modalDepartmentFilter').val();
    
    $('#generatePayslipTable tbody tr').each(function() {
        const $row = $(this);
        const empId = $row.find('td').eq(1).text().toLowerCase();
        const name = $row.find('td').eq(2).text().toLowerCase();
        const department = $row.find('td').eq(4).text().trim();
        
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

