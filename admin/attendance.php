<?php include 'header.php'; ?>

<!-- Attendance Content -->
<div class="attendance-content">

    <!-- Filter Section -->
    <div class="filter-section">
        <div class="filter-row">
            <div class="filter-group">
                <label>Employee ID</label>
                <input type="text" class="filter-input" placeholder="Enter Employee ID">
            </div>
            <div class="filter-group">
                <label>Name</label>
                <input type="text" class="filter-input" placeholder="Enter Name">
            </div>
            <div class="filter-group">
                <label>Department</label>
                <select class="filter-select">
                    <option value="">All Departments</option>
                    <option value="production">Production</option>
                    <option value="management">Management</option>
                    <option value="hr">HR</option>
                    <option value="sales">Sales</option>
                </select>
            </div>
            <div class="filter-group">
                <label>Status</label>
                <select class="filter-select">
                    <option value="">All Status</option>
                    <option value="present">Present</option>
                    <option value="late">Late</option>
                    <option value="absent">Absent</option>
                </select>
            </div>
            <div class="filter-group">
                <label>Date</label>
                <div class="date-input-wrapper">
                    <input type="text" class="filter-input date-input" placeholder="mm/dd/yyyy">
                    <i class="fas fa-calendar-alt date-icon"></i>
                </div>
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
            <button class="btn-action btn-auto-attendance" data-bs-toggle="modal" data-bs-target="#autoAttendanceModal">
                <i class="fas fa-edit"></i>
                <span>Auto Attendance</span>
            </button>
            
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
            <table id="attendanceTable" class="attendance-table">
                <thead>
                    <tr>
                        <th>Emp ID</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Shift</th>
                        <th>Date</th>
                        <th>Clock In</th>
                        <th>Clock Out</th>
                        <th>Working Hours</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>5</td>
                        <td>user user user</td>
                        <td>Production</td>
                        <td>A (8:00 pm - 5:00 am)</td>
                        <td>29/10/2025</td>
                        <td>5:25 pm</td>
                        <td>-</td>
                        <td>-</td>
                        <td><span class="badge badge-present">present</span></td>
                        <td>
                            <a href="attendance-report.php" class="btn-view-report">
                                <i class="fas fa-calendar-check"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>test test test</td>
                        <td>Production</td>
                        <td>A (8:00 pm - 5:00 am)</td>
                        <td>27/10/2025</td>
                        <td>4:03 pm</td>
                        <td>-</td>
                        <td>-</td>
                        <td><span class="badge badge-present">present</span></td>
                        <td>
                            <a href="attendance-report.php" class="btn-view-report">
                                <i class="fas fa-calendar-check"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>abc abc abc</td>
                        <td>Management</td>
                        <td>B (9:00 pm - 6:00 am)</td>
                        <td>23/10/2025</td>
                        <td>6:25 am</td>
                        <td>-</td>
                        <td>-</td>
                        <td><span class="badge badge-late">late</span></td>
                        <td>
                            <a href="attendance-report.php" class="btn-view-report">
                                <i class="fas fa-calendar-check"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>HR</td>
                        <td>A (8:00 pm - 5:00 am)</td>
                        <td>28/10/2025</td>
                        <td>5:30 pm</td>
                        <td>5:00 am</td>
                        <td>11.5</td>
                        <td><span class="badge badge-present">present</span></td>
                        <td>
                            <a href="attendance-report.php" class="btn-view-report">
                                <i class="fas fa-calendar-check"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>Sales</td>
                        <td>B (9:00 pm - 6:00 am)</td>
                        <td>28/10/2025</td>
                        <td>6:15 am</td>
                        <td>-</td>
                        <td>-</td>
                        <td><span class="badge badge-late">late</span></td>
                        <td>
                            <a href="attendance-report.php" class="btn-view-report">
                                <i class="fas fa-calendar-check"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Mike Johnson</td>
                        <td>Production</td>
                        <td>A (8:00 pm - 5:00 am)</td>
                        <td>26/10/2025</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td><span class="badge badge-absent">absent</span></td>
                        <td>
                            <a href="attendance-report.php" class="btn-view-report">
                                <i class="fas fa-calendar-check"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Sarah Williams</td>
                        <td>Management</td>
                        <td>B (9:00 pm - 6:00 am)</td>
                        <td>25/10/2025</td>
                        <td>5:45 pm</td>
                        <td>6:00 am</td>
                        <td>12.25</td>
                        <td><span class="badge badge-present">present</span></td>
                        <td>
                            <a href="attendance-report.php" class="btn-view-report">
                                <i class="fas fa-calendar-check"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>David Brown</td>
                        <td>HR</td>
                        <td>A (8:00 pm - 5:00 am)</td>
                        <td>24/10/2025</td>
                        <td>5:20 pm</td>
                        <td>5:00 am</td>
                        <td>11.67</td>
                        <td><span class="badge badge-present">present</span></td>
                        <td>
                            <a href="attendance-report.php" class="btn-view-report">
                                <i class="fas fa-calendar-check"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Emma Davis</td>
                        <td>Sales</td>
                        <td>B (9:00 pm - 6:00 am)</td>
                        <td>22/10/2025</td>
                        <td>6:30 am</td>
                        <td>-</td>
                        <td>-</td>
                        <td><span class="badge badge-late">late</span></td>
                        <td>
                            <a href="attendance-report.php" class="btn-view-report">
                                <i class="fas fa-calendar-check"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Chris Wilson</td>
                        <td>Production</td>
                        <td>A (8:00 pm - 5:00 am)</td>
                        <td>21/10/2025</td>
                        <td>5:00 pm</td>
                        <td>5:00 am</td>
                        <td>12</td>
                        <td><span class="badge badge-present">present</span></td>
                        <td>
                            <a href="attendance-report.php" class="btn-view-report">
                                <i class="fas fa-calendar-check"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Lisa Anderson</td>
                        <td>Management</td>
                        <td>B (9:00 pm - 6:00 am)</td>
                        <td>20/10/2025</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td><span class="badge badge-absent">absent</span></td>
                        <td>
                            <a href="attendance-report.php" class="btn-view-report">
                                <i class="fas fa-calendar-check"></i>
                                <span>View</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Robert Taylor</td>
                        <td>HR</td>
                        <td>A (8:00 pm - 5:00 am)</td>
                        <td>19/10/2025</td>
                        <td>5:15 pm</td>
                        <td>5:00 am</td>
                        <td>11.75</td>
                        <td><span class="badge badge-present">present</span></td>
                        <td>
                            <a href="attendance-report.php" class="btn-view-report">
                                <i class="fas fa-calendar-check"></i>
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

<!-- Auto Attendance Modal -->
<div class="modal fade" id="autoAttendanceModal" tabindex="-1" aria-labelledby="autoAttendanceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="autoAttendanceModalLabel">
                    <span>Auto Generate Attendance</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Filters Section -->
                <div class="filter-section mb-4">
                    <div class="filter-row">
                        <div class="filter-group">
                            <label>Filter by Emp ID</label>
                            <input type="text" class="filter-input" id="attendanceModalEmpIdFilter" placeholder="Filter by Emp ID">
                        </div>
                        <div class="filter-group">
                            <label>Filter by Name</label>
                            <input type="text" class="filter-input" id="attendanceModalNameFilter" placeholder="Filter by Name">
                        </div>
                        <div class="filter-group">
                            <label>Department</label>
                            <select class="filter-select" id="attendanceModalDepartmentFilter">
                                <option value="">All Departments</option>
                                <option value="Production">Production</option>
                                <option value="Management">Management</option>
                                <option value="HR">HR</option>
                                <option value="Sales">Sales</option>
                                <option value="IT">IT</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label>Date</label>
                            <input type="date" class="filter-input" id="attendanceModalDateFilter" value="<?php echo date('Y-m-d'); ?>">
                        </div>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="table-section">
                    <div class="table-wrapper">
                        <table id="markAttendanceTable" class="attendance-table">
                            <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" id="attendanceSelectAllCheckbox" title="Select All">
                                    </th>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Department</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="attendance-row-checkbox">
                                    </td>
                                    <td>5</td>
                                    <td>user user user</td>
                                    <td>Production</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="attendance-row-checkbox">
                                    </td>
                                    <td>4</td>
                                    <td>abc abc abc</td>
                                    <td>Management</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="attendance-row-checkbox">
                                    </td>
                                    <td>3</td>
                                    <td>test test test</td>
                                    <td>Production</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="attendance-row-checkbox">
                                    </td>
                                    <td>2</td>
                                    <td>zain ul abidin khan</td>
                                    <td>Management</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="attendance-row-checkbox">
                                    </td>
                                    <td>1</td>
                                    <td>syed mahad bukhari</td>
                                    <td>IT</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="attendance-row-checkbox">
                                    </td>
                                    <td>6</td>
                                    <td>Mike Johnson</td>
                                    <td>HR</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="markAttendanceBtn">
                    <i class="fas fa-check-circle"></i>
                    <span>Mark Attendance</span>
                </button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
