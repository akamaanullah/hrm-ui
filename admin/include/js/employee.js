// ===== EMPLOYEE TABLE WITH DATATABLES =====

$(document).ready(function() {
    // Initialize DataTables with buttons (hidden, triggered programmatically)
    var table = $('#employeeTable').DataTable({
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
                    columns: [0, 1, 2, 3, 4, 5] // All columns except Action (0-5: Emp ID, Name, Department, Job Title, Shift, Phone)
                }
            },
            {
                extend: 'csv',
                text: 'CSV',
                className: 'hidden-export-btn',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5] // All columns except Action (0-5: Emp ID, Name, Department, Job Title, Shift, Phone)
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
        drawCallback: function() {
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
        var infoElement = $('#employeeTable_info');
        var paginateElement = $('#employeeTable_paginate');
        var wrapper = $('#employeeTable').closest('.dataTables_wrapper');
        
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

    // Department filter
    $('select.filter-select').eq(0).on('change', function() {
        var val = $(this).val();
        if (val === '') {
            table.column(2).search('').draw();
        } else {
            table.column(2).search(val, false, true).draw();
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

// ===== TIME PICKER FUNCTIONALITY =====
$(document).ready(function() {
    // Initialize time pickers for start and end time
    initTimePicker('#startTime', '#startTimePicker');
    initTimePicker('#endTime', '#endTimePicker');
    
    // Close time picker when clicking outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.time-picker-wrapper').length) {
            $('.time-picker-dropdown').removeClass('show');
        }
    });
});

function initTimePicker(inputId, pickerId) {
    var $input = $(inputId);
    var $picker = $(pickerId);
    var $wrapper = $input.closest('.time-picker-wrapper');
    
    // Store selected values
    var selectedTime = {
        hours: null,
        minutes: null,
        period: null
    };
    
    // Open/close picker on input or icon click
    $wrapper.on('click', function(e) {
        e.stopPropagation();
        $('.time-picker-dropdown').not($picker).removeClass('show');
        $picker.toggleClass('show');
    });
    
    // Handle option click
    $picker.on('click', '.time-picker-option', function(e) {
        e.stopPropagation();
        var $option = $(this);
        var $column = $option.closest('.time-picker-column');
        var value = $option.data('value');
        
        // Remove active class from siblings
        $column.find('.time-picker-option').removeClass('active');
        $option.addClass('active');
        
        // Store selected value based on column type
        if ($column.find('.time-picker-header').text() === 'Hours') {
            selectedTime.hours = value;
        } else if ($column.find('.time-picker-header').text() === 'Minutes') {
            selectedTime.minutes = value;
        } else if ($column.find('.time-picker-header').text() === 'Period') {
            selectedTime.period = value;
        }
        
        // Update input field if all values are selected
        if (selectedTime.hours && selectedTime.minutes && selectedTime.period) {
            var timeString = selectedTime.hours + ':' + selectedTime.minutes + ' ' + selectedTime.period.toLowerCase();
            $input.val(timeString);
        }
    });
    
    // Don't set default - let user select time
}

