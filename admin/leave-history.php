<?php include 'header.php'; ?>

<!-- Leave History Content -->
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
                <label>Leave Type</label>
                <select class="filter-select">
                    <option value="">All Types</option>
                    <option value="Sick Leave">Sick Leave</option>
                    <option value="Casual Leave">Casual Leave</option>
                    <option value="Annual Leave">Annual Leave</option>
                    <option value="Emergency Leave">Emergency Leave</option>
                </select>
            </div>
            <div class="filter-group">
                <label>Status</label>
                <select class="filter-select">
                    <option value="">All Status</option>
                    <option value="approved">Approved</option>
                    <option value="pending">Pending</option>
                    <option value="rejected">Rejected</option>
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
            <!-- Leave Management Button -->
            <button class="btn-action btn-leave-management" data-bs-toggle="modal" data-bs-target="#leaveManagementModal">
                <i class="fas fa-cog"></i>
                <span>Leave Management</span>
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
            <table id="leaveHistoryTable" class="attendance-table">
                <thead>
                    <tr>
                        <th>Emp ID</th>
                        <th>Name</th>
                        <th>Leave Type</th>
                        <th>From Date</th>
                        <th>To Date</th>
                        <th>Days</th>
                        <th>Status</th>
                        <th>Document</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>syed mahad bukhari</td>
                        <td>Sick Leave</td>
                        <td>15/10/2025</td>
                        <td>17/10/2025</td>
                        <td>3</td>
                        <td><span class="badge badge-approved">approved</span></td>
                        <td>
                            <button class="btn-view-report" style="padding: 0.4rem 0.8rem; font-size: 0.8rem;" data-bs-toggle="modal" data-bs-target="#documentViewModal">
                                <i class="fas fa-file-pdf"></i>
                                <span>View</span>
                            </button>
                        </td>
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewLeaveModal">
                                <i class="fas fa-eye"></i>
                                <span>View / Edit</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>zain ul abidin khan</td>
                        <td>Casual Leave</td>
                        <td>20/10/2025</td>
                        <td>20/10/2025</td>
                        <td>1</td>
                        <td><span class="badge badge-pending">pending</span></td>
                        <td>-</td>
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewLeaveModal">
                                <i class="fas fa-eye"></i>
                                <span>View / Edit</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>test test test</td>
                        <td>Annual Leave</td>
                        <td>01/11/2025</td>
                        <td>05/11/2025</td>
                        <td>5</td>
                        <td><span class="badge badge-approved">approved</span></td>
                        <td>
                            <button class="btn-view-report" style="padding: 0.4rem 0.8rem; font-size: 0.8rem;" data-bs-toggle="modal" data-bs-target="#documentViewModal">
                                <i class="fas fa-file-pdf"></i>
                                <span>View</span>
                            </button>
                        </td>
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewLeaveModal">
                                <i class="fas fa-eye"></i>
                                <span>View / Edit</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>abc abc abc</td>
                        <td>Emergency Leave</td>
                        <td>10/10/2025</td>
                        <td>10/10/2025</td>
                        <td>1</td>
                        <td><span class="badge badge-rejected">rejected</span></td>
                        <td>-</td>
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewLeaveModal">
                                <i class="fas fa-eye"></i>
                                <span>View / Edit</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>user user user</td>
                        <td>Sick Leave</td>
                        <td>12/10/2025</td>
                        <td>14/10/2025</td>
                        <td>3</td>
                        <td><span class="badge badge-approved">approved</span></td>
                        <td>
                            <button class="btn-view-report" style="padding: 0.4rem 0.8rem; font-size: 0.8rem;" data-bs-toggle="modal" data-bs-target="#documentViewModal">
                                <i class="fas fa-file-pdf"></i>
                                <span>View</span>
                            </button>
                        </td>
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewLeaveModal">
                                <i class="fas fa-eye"></i>
                                <span>View / Edit</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Mike Johnson</td>
                        <td>Casual Leave</td>
                        <td>25/10/2025</td>
                        <td>27/10/2025</td>
                        <td>3</td>
                        <td><span class="badge badge-pending">pending</span></td>
                        <td>-</td>
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewLeaveModal">
                                <i class="fas fa-eye"></i>
                                <span>View / Edit</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Sarah Williams</td>
                        <td>Annual Leave</td>
                        <td>08/11/2025</td>
                        <td>12/11/2025</td>
                        <td>5</td>
                        <td><span class="badge badge-approved">approved</span></td>
                        <td>
                            <button class="btn-view-report" style="padding: 0.4rem 0.8rem; font-size: 0.8rem;" data-bs-toggle="modal" data-bs-target="#documentViewModal">
                                <i class="fas fa-file-pdf"></i>
                                <span>View</span>
                            </button>
                        </td>
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewLeaveModal">
                                <i class="fas fa-eye"></i>
                                <span>View / Edit</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>David Brown</td>
                        <td>Sick Leave</td>
                        <td>18/10/2025</td>
                        <td>18/10/2025</td>
                        <td>1</td>
                        <td><span class="badge badge-approved">approved</span></td>
                        <td>-</td>
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewLeaveModal">
                                <i class="fas fa-eye"></i>
                                <span>View / Edit</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Emma Davis</td>
                        <td>Emergency Leave</td>
                        <td>22/10/2025</td>
                        <td>22/10/2025</td>
                        <td>1</td>
                        <td><span class="badge badge-pending">pending</span></td>
                        <td>-</td>
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewLeaveModal">
                                <i class="fas fa-eye"></i>
                                <span>View / Edit</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Chris Wilson</td>
                        <td>Annual Leave</td>
                        <td>15/11/2025</td>
                        <td>20/11/2025</td>
                        <td>6</td>
                        <td><span class="badge badge-approved">approved</span></td>
                        <td>
                            <button class="btn-view-report" style="padding: 0.4rem 0.8rem; font-size: 0.8rem;" data-bs-toggle="modal" data-bs-target="#documentViewModal">
                                <i class="fas fa-file-pdf"></i>
                                <span>View</span>
                            </button>
                        </td>
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewLeaveModal">
                                <i class="fas fa-eye"></i>
                                <span>View / Edit</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Lisa Anderson</td>
                        <td>Casual Leave</td>
                        <td>28/10/2025</td>
                        <td>29/10/2025</td>
                        <td>2</td>
                        <td><span class="badge badge-rejected">rejected</span></td>
                        <td>-</td>
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewLeaveModal">
                                <i class="fas fa-eye"></i>
                                <span>View / Edit</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Robert Taylor</td>
                        <td>Sick Leave</td>
                        <td>05/11/2025</td>
                        <td>07/11/2025</td>
                        <td>3</td>
                        <td><span class="badge badge-approved">approved</span></td>
                        <td>
                            <button class="btn-view-report" style="padding: 0.4rem 0.8rem; font-size: 0.8rem;" data-bs-toggle="modal" data-bs-target="#documentViewModal">
                                <i class="fas fa-file-pdf"></i>
                                <span>View</span>
                            </button>
                        </td>
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewLeaveModal">
                                <i class="fas fa-eye"></i>
                                <span>View / Edit</span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Table Footer / Pagination (DataTables will handle this) -->
    </div>
</div>

<!-- Document View Modal -->
<div class="modal fade" id="documentViewModal" tabindex="-1" aria-labelledby="documentViewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="documentViewModalLabel">
                    <span>Document View</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="document-viewer">
                    <img src="https://images.sampletemplates.com/wp-content/uploads/2016/04/26155851/Sample-Medical-Leave-Form.jpg" alt="Document" style="width: 100%; height: 600px;">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- View Leave Details Modal -->
<div class="modal fade" id="viewLeaveModal" tabindex="-1" aria-labelledby="viewLeaveModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="viewLeaveModalLabel">
                    <span> View / Edit Leave Details</span>
                </h5>
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="viewLeaveForm">
                    <!-- Leave Information Card -->
                    <div class="leave-info-card mb-4">
                        <div class="leave-info-header">
                            <span>Leave Information</span>
                        </div>
                        
                        <div class="leave-details-grid">
                            <!-- Employee Name -->
                            <div class="leave-detail-item full-width">
                                <div class="detail-icon-wrapper">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="detail-content-wrapper">
                                    <label class="detail-label">Employee Name</label>
                                    <div class="detail-value-box">
                                        <span id="viewEmpName">syed mahad bukhari</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Leave Type -->
                            <div class="leave-detail-item">
                                <div class="detail-icon-wrapper">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div class="detail-content-wrapper">
                                    <label class="detail-label">Leave Type</label>
                                    <div class="detail-value-box">
                                        <span id="viewLeaveType">Sick Leave</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Days -->
                            <div class="leave-detail-item">
                                <div class="detail-icon-wrapper">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="detail-content-wrapper">
                                    <label class="detail-label">Days</label>
                                    <div class="detail-value-box">
                                        <span id="viewDays">3</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- From Date -->
                            <div class="leave-detail-item">
                                <div class="detail-icon-wrapper">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                                <div class="detail-content-wrapper">
                                    <label class="detail-label">From Date</label>
                                    <div class="detail-value-box">
                                        <span id="viewFromDate">15/10/2025</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- To Date -->
                            <div class="leave-detail-item">
                                <div class="detail-icon-wrapper">
                                    <i class="fas fa-calendar-times"></i>
                                </div>
                                <div class="detail-content-wrapper">
                                    <label class="detail-label">To Date</label>
                                    <div class="detail-value-box">
                                        <span id="viewToDate">17/10/2025</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Admin Comment Section -->
                    <div class="admin-comment-card">
                        <div class="admin-comment-header">
                            <span>Admin Comment</span>
                        </div>
                        <div class="admin-comment-content">
                            <textarea class="form-control admin-comment-textarea" id="viewAdminComment" rows="4" placeholder="Enter your comment here...">Approved - Take care</textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-reject-leave">
                    <i class="fas fa-times-circle"></i>
                    <span>Reject</span>
                </button>
                <button type="button" class="btn btn-approve-leave">
                    <i class="fas fa-check-circle"></i>
                    <span>Approve</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Leave Management Modal -->
<div class="modal fade" id="leaveManagementModal" tabindex="-1" aria-labelledby="leaveManagementModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="leaveManagementModalLabel">
                    <i class="fas fa-cog"></i>
                    <span>Leave Management</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add Leave Type Form -->
                <div class="leave-type-form mb-4">
                    <label for="leaveTypeName" class="form-label">Leave Type Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="leaveTypeName" placeholder="Enter leave type name">
                    </div>
                </div>

                <!-- Leave Types List -->
                <div class="leave-types-list">
                    <label class="form-label mb-3">Added Leave Types</label>
                    <div class="leave-types-container" id="leaveTypesContainer">
                        <!-- Leave types will be added here dynamically -->
                        <div class="leave-type-item">
                            <span class="leave-type-name">Sick Leave</span>
                            <button type="button" class="btn-delete-leave-type" data-leave-type="Sick Leave">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="leave-type-item">
                            <span class="leave-type-name">Casual Leave</span>
                            <button type="button" class="btn-delete-leave-type" data-leave-type="Casual Leave">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="leave-type-item">
                            <span class="leave-type-name">Annual Leave</span>
                            <button type="button" class="btn-delete-leave-type" data-leave-type="Annual Leave">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="leave-type-item">
                            <span class="leave-type-name">Emergency Leave</span>
                            <button type="button" class="btn-delete-leave-type" data-leave-type="Emergency Leave">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" disabled>
                    <i class="fas fa-plus"></i>
                    <span>Add</span>
                </button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
