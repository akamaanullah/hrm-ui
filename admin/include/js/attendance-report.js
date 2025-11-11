// ===== ATTENDANCE CALENDAR VIEW =====

// Sample attendance data (replace with actual data from API)
var attendanceData = {
    '2025-11-01': { status: 'present', shift: 'A (8:00 pm - 5:00 am)', clockIn: '5:15 pm', clockOut: '5:00 am', hours: '11.75', message: '-', messageTime: '-' },
    '2025-11-02': { status: 'present', shift: 'A (8:00 pm - 5:00 am)', clockIn: '5:20 pm', clockOut: '5:00 am', hours: '11.67', message: '-', messageTime: '-' },
    '2025-11-03': { status: 'present', shift: 'A (8:00 pm - 5:00 am)', clockIn: '5:00 pm', clockOut: '5:00 am', hours: '12.00', message: '-', messageTime: '-' },
    '2025-11-04': { status: 'absent', shift: 'A (8:00 pm - 5:00 am)', message: 'Medical emergency', messageTime: '04/11/2025 9:30 am' },
    '2025-11-05': { status: 'present', shift: 'A (8:00 pm - 5:00 am)', clockIn: '5:30 pm', clockOut: '5:00 am', hours: '11.5', message: '-', messageTime: '-' },
    '2025-11-06': { status: 'late', shift: 'A (8:00 pm - 5:00 am)', clockIn: '5:45 pm', message: 'Traffic jam', messageTime: '06/11/2025 6:15 pm' },
    '2025-11-07': { status: 'present', shift: 'A (8:00 pm - 5:00 am)', clockIn: '5:10 pm', clockOut: '5:00 am', hours: '11.83', message: '-', messageTime: '-' },
    '2025-11-08': { status: 'present', shift: 'A (8:00 pm - 5:00 am)', clockIn: '5:25 pm', clockOut: '5:00 am', hours: '11.58', message: '-', messageTime: '-' },
    '2025-11-09': { status: 'absent', shift: 'A (8:00 pm - 5:00 am)', message: 'Family emergency', messageTime: '09/11/2025 8:00 am' },
    '2025-11-10': { status: 'late', shift: 'A (8:00 pm - 5:00 am)', clockIn: '6:00 pm', message: 'Personal work', messageTime: '10/11/2025 6:30 pm' },
    '2025-11-11': { status: 'present', shift: 'A (8:00 pm - 5:00 am)', clockIn: '5:15 pm', clockOut: '5:00 am', hours: '11.75', message: '-', messageTime: '-' },
    '2025-11-12': { status: 'present', shift: 'A (8:00 pm - 5:00 am)', clockIn: '5:20 pm', clockOut: '5:00 am', hours: '11.67', message: '-', messageTime: '-' },
    '2025-11-13': { status: 'halfday', shift: 'A (8:00 pm - 5:00 am)', clockIn: '5:00 pm', clockOut: '11:00 pm', hours: '6.00', message: '-', messageTime: '-' }
};

var currentMonth = new Date().getMonth();
var currentYear = new Date().getFullYear();

// Initialize Calendar
function initCalendar() {
    renderCalendar(currentYear, currentMonth);
    updateStatistics();
    
    // Month navigation
    $('#calendarPrevMonth').on('click', function() {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        renderCalendar(currentYear, currentMonth);
        updateStatistics();
    });
    
    $('#calendarNextMonth').on('click', function() {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        renderCalendar(currentYear, currentMonth);
        updateStatistics();
    });
}

// Render Calendar
function renderCalendar(year, month) {
    var monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 
                      'July', 'August', 'September', 'October', 'November', 'December'];
    var dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    
    // Update month/year display
    $('#calendarMonthYear').text(monthNames[month] + ' ' + year);
    
    // Get first day of month and number of days
    var firstDay = new Date(year, month, 1).getDay();
    var daysInMonth = new Date(year, month + 1, 0).getDate();
    
    var calendarHTML = '';
    
    // Day headers
    dayNames.forEach(function(day) {
        calendarHTML += '<div class="calendar-day-header">' + day + '</div>';
    });
    
    // Empty cells for days before month starts
    for (var i = 0; i < firstDay; i++) {
        calendarHTML += '<div class="calendar-day-cell empty"></div>';
    }
    
    // Days of the month
    for (var day = 1; day <= daysInMonth; day++) {
        var dateStr = year + '-' + String(month + 1).padStart(2, '0') + '-' + String(day).padStart(2, '0');
        var dayData = attendanceData[dateStr];
        var status = dayData ? dayData.status : '';
        var isWeekend = new Date(year, month, day).getDay() === 0 || new Date(year, month, day).getDay() === 6;
        
        var cellClass = 'calendar-day-cell';
        if (isWeekend && !dayData) {
            cellClass += ' status-weekoff';
        } else if (status) {
            cellClass += ' status-' + status;
        }
        
        var content = '';
        if (dayData) {
            if (dayData.status === 'present') {
                content = 'On Time<br>' + (dayData.clockIn || '') + ' - ' + (dayData.clockOut || '');
            } else if (dayData.status === 'absent') {
                content = 'Absent';
            } else if (dayData.status === 'late') {
                content = 'Late';
            } else if (dayData.status === 'halfday') {
                content = 'Half Day<br>' + (dayData.clockIn || '') + ' - ' + (dayData.clockOut || '');
            }
        } else if (isWeekend) {
            content = 'Week Off';
        }
        
        calendarHTML += '<div class="' + cellClass + '" data-date="' + dateStr + '">';
        calendarHTML += '<div class="calendar-day-number">' + day + '</div>';
        calendarHTML += '<div class="calendar-day-content">' + content + '</div>';
        calendarHTML += '</div>';
    }
    
    $('#attendanceCalendarGrid').html(calendarHTML);
    
    // Add click handlers to calendar cells
    $(document).off('click', '.calendar-day-cell:not(.empty)').on('click', '.calendar-day-cell:not(.empty)', function() {
        var date = $(this).data('date');
        if (date) {
            // Find corresponding table row and open modal
            var dateParts = date.split('-');
            var formattedDate = dateParts[2] + '/' + dateParts[1] + '/' + dateParts[0];
            
            // Get day data from attendanceData
            var dayData = attendanceData[date];
            
            if (dayData) {
                // Update modal with data from attendanceData
                $('#viewAttendanceDate').text(formattedDate);
                $('#viewAttendanceShift').text(dayData.shift || 'A (8:00 pm - 5:00 am)');
                $('#viewAttendanceHours').text(dayData.hours || '-');
                
                // Update status badge
                var status = dayData.status;
                var statusText = '';
                if (status === 'present') {
                    statusText = 'On Time';
                } else if (status === 'late') {
                    statusText = 'Late';
                } else if (status === 'absent') {
                    statusText = 'Absent';
                } else if (status === 'halfday') {
                    statusText = 'Half Day';
                } else {
                    statusText = status.charAt(0).toUpperCase() + status.slice(1);
                }
                var statusHtml = '<span class="badge badge-' + status + '">' + statusText + '</span>';
                $('#viewAttendanceStatus').html(statusHtml);
                
                $('#viewAttendanceMessage').text(dayData.message || '-');
                $('#viewAttendanceMessageTime').text(dayData.messageTime || '-');
                
                // Update clock in/out times
                if (dayData.clockIn && dayData.clockIn !== '-') {
                    var clockInTime = convertTo24Hour(dayData.clockIn);
                    $('#viewClockIn').val(clockInTime);
                } else {
                    $('#viewClockIn').val('');
                }
                if (dayData.clockOut && dayData.clockOut !== '-') {
                    var clockOutTime = convertTo24Hour(dayData.clockOut);
                    $('#viewClockOut').val(clockOutTime);
                } else {
                    $('#viewClockOut').val('');
                }
                
                // Open modal
                $('#viewAttendanceDetailModal').modal('show');
            } else {
                // If no data, still open modal with default values
                $('#viewAttendanceDate').text(formattedDate);
                $('#viewAttendanceShift').text('A (8:00 pm - 5:00 am)');
                $('#viewAttendanceHours').text('-');
                $('#viewAttendanceStatus').html('<span class="badge badge-present">On Time</span>');
                $('#viewAttendanceMessage').text('-');
                $('#viewAttendanceMessageTime').text('-');
                $('#viewClockIn').val('');
                $('#viewClockOut').val('');
                $('#viewAttendanceDetailModal').modal('show');
            }
        }
    });
}

// Update Statistics
function updateStatistics() {
    var stats = {
        present: 0,
        absent: 0,
        late: 0,
        halfday: 0
    };
    
    // Count statuses for current month
    Object.keys(attendanceData).forEach(function(dateStr) {
        var date = new Date(dateStr);
        if (date.getMonth() === currentMonth && date.getFullYear() === currentYear) {
            var status = attendanceData[dateStr].status;
            if (stats.hasOwnProperty(status)) {
                stats[status]++;
            }
        }
    });
    
    $('#calendarStatPresent').text(stats.present);
    $('#calendarStatAbsent').text(stats.absent);
    $('#calendarStatLate').text(stats.late);
    $('#calendarStatHalfday').text(stats.halfday);
}

// Convert 12-hour time to 24-hour format
function convertTo24Hour(time12h) {
    if (!time12h || time12h === '-') return '';
    
    var time = time12h.trim();
    var isPM = time.toLowerCase().includes('pm');
    var timeOnly = time.replace(/\s*(am|pm)/i, '');
    var parts = timeOnly.split(':');
    
    if (parts.length === 2) {
        var hours = parseInt(parts[0]);
        var minutes = parts[1];
        
        if (isPM && hours !== 12) {
            hours += 12;
        } else if (!isPM && hours === 12) {
            hours = 0;
        }
        
        return String(hours).padStart(2, '0') + ':' + minutes;
    }
    
    return '';
}

// ===== VIEW TOGGLE FUNCTIONALITY =====
function initViewToggle() {
    // Default: List View active
    $('#listViewSection').show();
    $('#calendarViewSection').hide();
    
    // List View Button
    $('#listViewBtn').on('click', function() {
        // Update button states
        $('.btn-view-toggle').removeClass('active');
        $(this).addClass('active');
        
        // Show list view, hide calendar view
        $('#listViewSection').show();
        $('#calendarViewSection').hide();
    });
    
    // Calendar View Button
    $('#calendarViewBtn').on('click', function() {
        // Update button states
        $('.btn-view-toggle').removeClass('active');
        $(this).addClass('active');
        
        // Show calendar view, hide list view
        $('#listViewSection').hide();
        $('#calendarViewSection').show();
    });
}

// ===== ATTENDANCE REPORT TABLE WITH DATATABLES =====

$(document).ready(function() {
    // Initialize Calendar
    initCalendar();
    
    // View Toggle Functionality
    initViewToggle();
    
    // Initialize DataTables with buttons (hidden, triggered programmatically)
    var table = $('#attendanceReportTable').DataTable({
        pageLength: 10,
        lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        order: [[0, 'desc']], // Default sort by Date descending
        dom: 'Brtip', // Buttons, table, info, pagination
        buttons: [
            {
                extend: 'excel',
                text: 'Excel',
                className: 'hidden-export-btn',
                filename: function() {
                    var employeeName = $('#reportEmployeeSelect option:selected').text() || 'All Employees';
                    var month = $('#reportMonthSelect').val() || new Date().toISOString().slice(0, 7);
                    return 'Attendance_Report_' + employeeName.replace(/[^a-z0-9]/gi, '_') + '_' + month;
                },
                title: function() {
                    var employeeName = $('#reportEmployeeSelect option:selected').text() || 'All Employees';
                    var month = $('#reportMonthSelect').val() || new Date().toISOString().slice(0, 7);
                    return 'Attendance Report - ' + employeeName + ' - ' + month;
                },
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7], // All columns except Action
                    format: {
                        body: function(data, row, column, node) {
                            // Remove HTML tags from badges and get text content
                            if (column === 5) { // Status column
                                var $temp = $('<div>').html(data);
                                return $temp.text().trim();
                            }
                            return data;
                        }
                    }
                }
            },
            {
                extend: 'csv',
                text: 'CSV',
                className: 'hidden-export-btn',
                filename: function() {
                    var employeeName = $('#reportEmployeeSelect option:selected').text() || 'All Employees';
                    var month = $('#reportMonthSelect').val() || new Date().toISOString().slice(0, 7);
                    return 'Attendance_Report_' + employeeName.replace(/[^a-z0-9]/gi, '_') + '_' + month;
                },
                title: function() {
                    var employeeName = $('#reportEmployeeSelect option:selected').text() || 'All Employees';
                    var month = $('#reportMonthSelect').val() || new Date().toISOString().slice(0, 7);
                    return 'Attendance Report - ' + employeeName + ' - ' + month;
                },
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7], // All columns except Action
                    format: {
                        body: function(data, row, column, node) {
                            // Remove HTML tags from badges and get text content
                            if (column === 5) { // Status column
                                var $temp = $('<div>').html(data);
                                return $temp.text().trim();
                            }
                            return data;
                        }
                    }
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
                $(this).removeClass('badge-present badge-late badge-absent badge-halfday');
                if (status === 'present' || status === 'on time') {
                    $(this).addClass('badge-present');
                } else if (status === 'late') {
                    $(this).addClass('badge-late');
                } else if (status === 'absent') {
                    $(this).addClass('badge-absent');
                } else if (status === 'half-day' || status === 'halfday') {
                    $(this).addClass('badge-halfday');
                }
            });
        }
    });

    // Initialize export dropdown
    initReportExportDropdown(table);
});

// ===== EXPORT DROPDOWN FUNCTIONALITY =====
function initReportExportDropdown(table) {
    var exportBtn = $('#reportExportDropdownBtn');
    var exportMenu = $('#reportExportDropdownMenu');
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

