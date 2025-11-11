<?php include 'header.php'; ?>

<!-- Employee Content -->
<div class="attendance-content">

    <!-- Filter Section -->
    <div class="filter-section">
        <div class="filter-row">
            <div class="filter-group">
                <label>Employee ID</label>
                <input type="text" class="filter-input" placeholder="Employee ID">
            </div>
            <div class="filter-group">
                <label>Name</label>
                <input type="text" class="filter-input" placeholder="Employee Name">
            </div>
            <div class="filter-group">
                <label>Department</label>
                <select class="filter-select">
                    <option value="">All Departments</option>
                    <option value="Production">Production</option>
                    <option value="Management">Management</option>
                    <option value="HR">HR</option>
                    <option value="Sales">Sales</option>
                </select>
            </div>
            <div class="filter-group">
                <button class="btn-clear-filters">
                    <i class="fas fa-times"></i>
                    <span>Clear Filters</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Page Header Actions -->
    <div class="page-header-actions">
        <div class="action-buttons">
            <!-- Add Department Button -->
            <button class="btn-action btn-add-depart" data-bs-toggle="modal" data-bs-target="#addDepartmentModal">
                <i class="fas fa-plus"></i>
                <span>Depart Management</span>
            </button>

            <!-- Add Shifts Button -->
            <button class="btn-action btn-add-shifts" data-bs-toggle="modal" data-bs-target="#addShiftModal">
                <i class="fas fa-plus"></i>
                <span>Shift Management</span>
            </button>
            
            <!-- Add Employee Button -->
            <a href="addemployee.php" class="btn-action btn-add-employee">
                <i class="fas fa-plus"></i>
                <span>Add Employee</span>
            </a>
            
            <!-- Export Dropdown -->
            <div class="dropdown export-dropdown">
                <button class="btn-action btn-export-dropdown" type="button" id="exportDropdownBtn">
                    <i class="fas fa-download"></i>
                    <span>Export</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div class="dropdown-menu export-dropdown-menu" id="exportDropdownMenu">
                    <a href="#" class="dropdown-item export-option" data-format="excel">
                        <i class="fas fa-file-excel"></i>
                        <span>Export as Excel</span>
                    </a>
                    <a href="#" class="dropdown-item export-option" data-format="csv">
                        <i class="fas fa-file-csv"></i>
                        <span>Export as CSV</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Section -->
    <div class="table-section">
        <div class="table-wrapper">
            <table id="employeeTable" class="attendance-table">
                <thead>
                    <tr>
                        <th>Emp ID</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Job Title</th>
                        <th>Shift</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>syed mahad bukhari</td>
                        <td>HR</td>
                        <td>HR Manager</td>
                        <td>A (8:00 pm - 5:00 am)</td>
                        <td>0300-1234567</td>
                        <td>
                            <a href="employeeprofile.php" class="btn-view-report">
                                <i class="fas fa-eye"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>zain ul abidin khan</td>
                        <td>Sales</td>
                        <td>Sales Executive</td>
                        <td>B (9:00 pm - 6:00 am)</td>
                        <td>0301-2345678</td>
                        <td>
                            <a href="employeeprofile.php" class="btn-view-report">
                                <i class="fas fa-eye"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>test test test</td>
                        <td>Production</td>
                        <td>Production Worker</td>
                        <td>A (8:00 pm - 5:00 am)</td>
                        <td>0302-3456789</td>
                        <td>
                            <a href="employeeprofile.php" class="btn-view-report">
                                <i class="fas fa-eye"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>abc abc abc</td>
                        <td>Management</td>
                        <td>General Manager</td>
                        <td>C (8:00 am - 5:00 pm)</td>
                        <td>0303-4567890</td>
                        <td>
                            <a href="employeeprofile.php" class="btn-view-report">
                                <i class="fas fa-eye"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>user user user</td>
                        <td>Production</td>
                        <td>Production Supervisor</td>
                        <td>B (9:00 pm - 6:00 am)</td>
                        <td>0304-5678901</td>
                        <td>
                            <a href="employeeprofile.php" class="btn-view-report">
                                <i class="fas fa-eye"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Mike Johnson</td>
                        <td>Production</td>
                        <td>Production Worker</td>
                        <td>C (8:00 am - 5:00 pm)</td>
                        <td>0305-6789012</td>
                        <td>
                            <a href="employeeprofile.php" class="btn-view-report">
                                <i class="fas fa-eye"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Sarah Williams</td>
                        <td>Management</td>
                        <td>Operations Manager</td>
                        <td>C (8:00 am - 5:00 pm)</td>
                        <td>0306-7890123</td>
                        <td>
                            <a href="employeeprofile.php" class="btn-view-report">
                                <i class="fas fa-eye"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>David Brown</td>
                        <td>HR</td>
                        <td>HR Assistant</td>
                        <td>A (8:00 pm - 5:00 am)</td>
                        <td>0307-8901234</td>
                        <td>
                            <a href="employeeprofile.php" class="btn-view-report">
                                <i class="fas fa-eye"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Emma Davis</td>
                        <td>Sales</td>
                        <td>Sales Representative</td>
                        <td>C (8:00 am - 5:00 pm)</td>
                        <td>0308-9012345</td>
                        <td>
                            <a href="employeeprofile.php" class="btn-view-report">
                                <i class="fas fa-eye"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Chris Wilson</td>
                        <td>Production</td>
                        <td>Production Worker</td>
                        <td>B (9:00 pm - 6:00 am)</td>
                        <td>0309-0123456</td>
                        <td>
                            <a href="employeeprofile.php" class="btn-view-report">
                                <i class="fas fa-eye"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Lisa Anderson</td>
                        <td>Management</td>
                        <td>Assistant Manager</td>
                        <td>C (8:00 am - 5:00 pm)</td>
                        <td>0310-1234567</td>
                        <td>
                            <a href="employeeprofile.php" class="btn-view-report">
                                <i class="fas fa-eye"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Robert Taylor</td>
                        <td>HR</td>
                        <td>HR Executive</td>
                        <td>B (9:00 pm - 6:00 am)</td>
                        <td>0311-2345678</td>
                        <td>
                            <a href="employeeprofile.php" class="btn-view-report">
                                <i class="fas fa-eye"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Table Footer / Pagination (DataTables will handle this) -->
    </div>
</div>

<!-- Add New Department Modal -->
<div class="modal fade" id="addDepartmentModal" tabindex="-1" aria-labelledby="addDepartmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="addDepartmentModalLabel">
                    <span>Add New Department</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addDepartmentForm">
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="departmentName" class="form-label text-dark">Department Name</label>
                            <input type="text" class="form-control" id="departmentName" placeholder="Enter department name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="departmentManager" class="form-label text-dark">Department Manager</label>
                            <select class="form-select" id="departmentManager">
                                <option value="" selected>Select Department Manager</option>
                                <option value="1">syed mahad bukhari</option>
                                <option value="2">zain ul abidin khan</option>
                                <option value="3">abc abc abc</option>
                                <option value="4">user user user</option>
                            </select>
                            <small class="form-text text-muted">Select an employee to be the department manager (Optional - can be assigned later)</small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="departmentHead" class="form-label text-dark">Department Head (Optional)</label>
                            <select class="form-select" id="departmentHead">
                                <option value="" selected>Select Department Head</option>
                                <option value="1">syed mahad bukhari</option>
                                <option value="2">zain ul abidin khan</option>
                                <option value="3">abc abc abc</option>
                                <option value="4">user user user</option>
                            </select>
                            <small class="form-text text-muted">Select an employee to be the department head</small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label class="form-label text-dark mb-3">Existing Departments</label>
                            <div class="existing-departments-list">
                                <div class="department-item">
                                    <div class="department-info">
                                        <div class="department-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="department-details">
                                            <div class="department-name">Production</div>
                                            <div class="department-manager">Manager: abc abc abc</div>
                                            <div class="department-head">Head: Not assigned</div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn-delete-department" title="Delete Department">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                                <div class="department-item">
                                    <div class="department-info">
                                        <div class="department-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="department-details">
                                            <div class="department-name">Management</div>
                                            <div class="department-manager">Manager: abc abc abc</div>
                                            <div class="department-head">Head: Not assigned</div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn-delete-department" title="Delete Department">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                                <div class="department-item">
                                    <div class="department-info">
                                        <div class="department-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="department-details">
                                            <div class="department-name">HR</div>
                                            <div class="department-manager">Manager: syed mahad bukhari</div>
                                            <div class="department-head">Head: Not assigned</div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn-delete-department" title="Delete Department">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                                <div class="department-item">
                                    <div class="department-info">
                                        <div class="department-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="department-details">
                                            <div class="department-name">Sales</div>
                                            <div class="department-manager">Manager: zain ul abidin khan</div>
                                            <div class="department-head">Head: Not assigned</div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn-delete-department" title="Delete Department">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                                <div class="department-item">
                                    <div class="department-info">
                                        <div class="department-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="department-details">
                                            <div class="department-name">IT</div>
                                            <div class="department-manager">Manager: Not assigned</div>
                                            <div class="department-head">Head: Not assigned</div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn-delete-department" title="Delete Department">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                                <div class="department-item">
                                    <div class="department-info">
                                        <div class="department-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="department-details">
                                            <div class="department-name">Finance</div>
                                            <div class="department-manager">Manager: Not assigned</div>
                                            <div class="department-head">Head: Not assigned</div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn-delete-department" title="Delete Department">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveDepartmentBtn">
                    <i class="fas fa-save"></i>
                    <span>Save Department</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Add New Shift Modal -->
<div class="modal fade" id="addShiftModal" tabindex="-1" aria-labelledby="addShiftModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="addShiftModalLabel">
                    <span>Add New Shift</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addShiftForm">
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="shiftName" class="form-label text-dark">Shift Name</label>
                            <input type="text" class="form-control" id="shiftName" placeholder="Enter shift name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="startTime" class="form-label text-dark">Start Time</label>
                            <div class="time-picker-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control time-picker-input" id="startTime" placeholder="--:-- --" readonly>
                                    <span class="input-group-text time-picker-icon">
                                        <i class="fas fa-clock"></i>
                                    </span>
                                </div>
                                <div class="time-picker-dropdown" id="startTimePicker">
                                    <div class="time-picker-column">
                                        <div class="time-picker-header">Hours</div>
                                        <div class="time-picker-options hours-options">
                                            <?php for($i = 1; $i <= 12; $i++): ?>
                                                <div class="time-picker-option" data-value="<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                    <div class="time-picker-column">
                                        <div class="time-picker-header">Minutes</div>
                                        <div class="time-picker-options minutes-options">
                                            <?php for($i = 0; $i <= 59; $i++): ?>
                                                <div class="time-picker-option" data-value="<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                    <div class="time-picker-column">
                                        <div class="time-picker-header">Period</div>
                                        <div class="time-picker-options period-options">
                                            <div class="time-picker-option" data-value="AM">AM</div>
                                            <div class="time-picker-option" data-value="PM">PM</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="endTime" class="form-label text-dark">End Time</label>
                            <div class="time-picker-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control time-picker-input" id="endTime" placeholder="--:-- --" readonly>
                                    <span class="input-group-text time-picker-icon">
                                        <i class="fas fa-clock"></i>
                                    </span>
                                </div>
                                <div class="time-picker-dropdown" id="endTimePicker">
                                    <div class="time-picker-column">
                                        <div class="time-picker-header">Hours</div>
                                        <div class="time-picker-options hours-options">
                                            <?php for($i = 1; $i <= 12; $i++): ?>
                                                <div class="time-picker-option" data-value="<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                    <div class="time-picker-column">
                                        <div class="time-picker-header">Minutes</div>
                                        <div class="time-picker-options minutes-options">
                                            <?php for($i = 0; $i <= 59; $i++): ?>
                                                <div class="time-picker-option" data-value="<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                    <div class="time-picker-column">
                                        <div class="time-picker-header">Period</div>
                                        <div class="time-picker-options period-options">
                                            <div class="time-picker-option" data-value="AM">AM</div>
                                            <div class="time-picker-option" data-value="PM">PM</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="graceTime" class="form-label text-dark">Grace Time (minutes)</label>
                            <input type="number" class="form-control" id="graceTime" placeholder="Enter grace time in minutes" min="0">
                        </div>
                        <div class="col-md-6">
                            <label for="halfdayHours" class="form-label text-dark">Halfday (Hours)</label>
                            <input type="number" class="form-control" id="halfdayHours" placeholder="Enter halfday hours" step="0.5" min="0">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label class="form-label text-dark mb-3">Existing Shifts</label>
                            <div class="existing-shifts-list">
                                <div class="shift-item">
                                    <div class="shift-info">
                                        <div class="shift-details">
                                            <div class="shift-name">Shift A</div>
                                            <div class="shift-time">Start Time: 8:00 pm</div>
                                            <div class="shift-time">End Time: 5:00 am</div>
                                            <div class="shift-meta">Grace Time: 15 minutes | Halfday: 4 Hours</div>
                                        </div>
                                    </div>
                                    <div class="shift-actions">
                                        <button type="button" class="btn-edit-shift" title="Edit Shift">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn-delete-shift" title="Delete Shift">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="shift-item">
                                    <div class="shift-info">
                                        <div class="shift-details">
                                            <div class="shift-name">Shift B</div>
                                            <div class="shift-time">Start Time: 9:00 pm</div>
                                            <div class="shift-time">End Time: 6:00 am</div>
                                            <div class="shift-meta">Grace Time: 20 minutes | Halfday: 4.5 Hours</div>
                                        </div>
                                    </div>
                                    <div class="shift-actions">
                                        <button type="button" class="btn-edit-shift" title="Edit Shift">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn-delete-shift" title="Delete Shift">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="shift-item">
                                    <div class="shift-info">
                                        <div class="shift-details">
                                            <div class="shift-name">Shift C</div>
                                            <div class="shift-time">Start Time: 8:00 am</div>
                                            <div class="shift-time">End Time: 5:00 pm</div>
                                            <div class="shift-meta">Grace Time: 10 minutes | Halfday: 4 Hours</div>
                                        </div>
                                    </div>
                                    <div class="shift-actions">
                                        <button type="button" class="btn-edit-shift" title="Edit Shift">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn-delete-shift" title="Delete Shift">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="shift-item">
                                    <div class="shift-info">
                                        <div class="shift-details">
                                            <div class="shift-name">Shift D</div>
                                            <div class="shift-time">Start Time: 10:00 am</div>
                                            <div class="shift-time">End Time: 7:00 pm</div>
                                            <div class="shift-meta">Grace Time: 15 minutes | Halfday: 4 Hours</div>
                                        </div>
                                    </div>
                                    <div class="shift-actions">
                                        <button type="button" class="btn-edit-shift" title="Edit Shift">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn-delete-shift" title="Delete Shift">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="shift-item">
                                    <div class="shift-info">
                                        <div class="shift-details">
                                            <div class="shift-name">Shift E</div>
                                            <div class="shift-time">Start Time: 11:00 pm</div>
                                            <div class="shift-time">End Time: 8:00 am</div>
                                            <div class="shift-meta">Grace Time: 25 minutes | Halfday: 4.5 Hours</div>
                                        </div>
                                    </div>
                                    <div class="shift-actions">
                                        <button type="button" class="btn-edit-shift" title="Edit Shift">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn-delete-shift" title="Delete Shift">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveShiftBtn">
                    <i class="fas fa-save"></i>
                    <span>Save</span>
                </button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
