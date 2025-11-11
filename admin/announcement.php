<?php include 'header.php'; ?>

<!-- Announcement Content -->
<div class="attendance-content">
    
    <!-- Filter Section -->
    <div class="filter-section">
        <div class="filter-row">
            <div class="filter-group">
                <label>Search</label>
                <input type="text" class="filter-input" id="announcementSearch" placeholder="Search announcements...">
            </div>
            <div class="filter-group">
                <label>Department</label>
                <select class="filter-select" id="announcementDepartmentFilter">
                    <option value="">All Departments</option>
                    <option value="All Departments">All Departments</option>
                    <option value="Production">Production</option>
                    <option value="Management">Management</option>
                    <option value="HR">HR</option>
                    <option value="Sales">Sales</option>
                </select>
            </div>
            <div class="filter-group">
                <label>Status</label>
                <select class="filter-select" id="announcementStatusFilter">
                    <option value="">All Status</option>
                    <option value="Active">Active</option>
                    <option value="Expired">Expired</option>
                    <option value="Draft">Draft</option>
                </select>
            </div>
            <div class="filter-group">
                <button class="btn-clear-filters" id="clearAnnouncementFilters">
                    <i class="fas fa-times"></i>
                    <span>Clear Filters</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Page Header Actions -->
    <div class="page-header-actions">
        <div class="action-buttons">
            <button class="btn-action btn-add-announcement" data-bs-toggle="modal" data-bs-target="#addAnnouncementModal">
                <i class="fas fa-plus"></i>
                <span>Add Announcement</span>
            </button>
        </div>
    </div>

    <!-- Announcements Section -->
    <div class="announcements-section">
        <div class="announcements-grid">
            <!-- Announcement Card 1 -->
            <div class="announcement-card" data-title="Company Holiday Schedule" data-department="All Departments" data-status="Active" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/image/announcement.jpg');">
                <div class="announcement-header">
                    <div class="announcement-title-section">
                        <h3 class="announcement-title">Company Holiday Schedule</h3>
                        <div class="announcement-meta">
                            <div class="announcement-date">
                                <i class="fas fa-calendar"></i>
                                <span>Published: Nov 15, 2025</span>
                            </div>
                            <div class="announcement-department">
                                <i class="fas fa-building"></i>
                                <span>All Departments</span>
                            </div>
                        </div>
                    </div>
                    <div class="announcement-status">
                        <span class="badge badge-active">Active</span>
                    </div>
                </div>
                <div class="announcement-body">
                    <p class="announcement-description">
                        Please note the upcoming holiday schedule for the month of December. All employees are required to review and plan accordingly...
                    </p>
                </div>
                <div class="announcement-footer">
                    <div class="announcement-author">
                        <i class="fas fa-user"></i>
                        <span>HR Department</span>
                    </div>
                    <div class="announcement-actions">
                        <button class="btn-announcement-action btn-view-announcement" data-bs-toggle="modal" data-bs-target="#viewAnnouncementModal" title="View">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn-announcement-action btn-edit-announcement" data-bs-toggle="modal" data-bs-target="#editAnnouncementModal" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn-announcement-action btn-delete-announcement" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Announcement Card 2 -->
            <div class="announcement-card" data-title="Team Building Event" data-department="Production" data-status="Active" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/image/announcement.jpg');">
                <div class="announcement-header">
                    <div class="announcement-title-section">
                        <h3 class="announcement-title">Team Building Event</h3>
                        <div class="announcement-meta">
                            <div class="announcement-date">
                                <i class="fas fa-calendar"></i>
                                <span>Published: Nov 15, 2025</span>
                            </div>
                            <div class="announcement-department">
                                <i class="fas fa-building"></i>
                                <span>Production</span>
                            </div>
                        </div>
                    </div>
                    <div class="announcement-status">
                        <span class="badge badge-active">Active</span>
                    </div>
                </div>
                <div class="announcement-body">
                    <p class="announcement-description">
                        Join us for an exciting team building event this weekend. All production team members are invited to participate in various activities...
                    </p>
                </div>
                <div class="announcement-footer">
                    <div class="announcement-author">
                        <i class="fas fa-user"></i>
                        <span>Management</span>
                    </div>
                    <div class="announcement-actions">
                        <button class="btn-announcement-action btn-view-announcement" data-bs-toggle="modal" data-bs-target="#viewAnnouncementModal" title="View">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn-announcement-action btn-edit-announcement" data-bs-toggle="modal" data-bs-target="#editAnnouncementModal" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn-announcement-action btn-delete-announcement" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Announcement Card 3 -->
            <div class="announcement-card" data-title="New Policy Update" data-department="HR" data-status="Expired" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/image/announcement.jpg');">
                <div class="announcement-header">
                    <div class="announcement-title-section">
                        <h3 class="announcement-title">New Policy Update</h3>
                        <div class="announcement-meta">
                            <div class="announcement-date">
                                <i class="fas fa-calendar"></i>
                                <span>Published: Nov 15, 2025</span>
                            </div>
                            <div class="announcement-department">
                                <i class="fas fa-building"></i>
                                <span>HR</span>
                            </div>
                        </div>
                    </div>
                    <div class="announcement-status">
                        <span class="badge badge-expired">Expired</span>
                    </div>
                </div>
                <div class="announcement-body">
                    <p class="announcement-description">
                        Important policy updates regarding leave management and attendance tracking. All employees must review the new guidelines...
                    </p>
                </div>
                <div class="announcement-footer">
                    <div class="announcement-author">
                        <i class="fas fa-user"></i>
                        <span>HR Manager</span>
                    </div>
                    <div class="announcement-actions">
                        <button class="btn-announcement-action btn-view-announcement" data-bs-toggle="modal" data-bs-target="#viewAnnouncementModal" title="View">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn-announcement-action btn-edit-announcement" data-bs-toggle="modal" data-bs-target="#editAnnouncementModal" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn-announcement-action btn-delete-announcement" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Announcement Card 4 -->
            <div class="announcement-card" data-title="Training Workshop" data-department="Sales" data-status="Active" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/image/announcement.jpg');">
                <div class="announcement-header">
                    <div class="announcement-title-section">
                        <h3 class="announcement-title">Training Workshop</h3>
                        <div class="announcement-meta">
                            <div class="announcement-date">
                                <i class="fas fa-calendar"></i>
                                <span>Published: Nov 15, 2025</span>
                            </div>
                            <div class="announcement-department">
                                <i class="fas fa-building"></i>
                                <span>Sales</span>
                            </div>
                        </div>
                    </div>
                    <div class="announcement-status">
                        <span class="badge badge-active">Active</span>
                    </div>
                </div>
                <div class="announcement-body">
                    <p class="announcement-description">
                        Sales team training workshop on effective communication and customer relations. All sales team members must attend...
                    </p>
                </div>
                <div class="announcement-footer">
                    <div class="announcement-author">
                        <i class="fas fa-user"></i>
                        <span>Sales Manager</span>
                    </div>
                    <div class="announcement-actions">
                        <button class="btn-announcement-action btn-view-announcement" data-bs-toggle="modal" data-bs-target="#viewAnnouncementModal" title="View">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn-announcement-action btn-edit-announcement" data-bs-toggle="modal" data-bs-target="#editAnnouncementModal" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn-announcement-action btn-delete-announcement" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Announcement Card 5 -->
            <div class="announcement-card" data-title="Performance Review Schedule" data-department="Management" data-status="Draft" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/image/announcement.jpg');">
                <div class="announcement-header">
                    <div class="announcement-title-section">
                        <h3 class="announcement-title">Performance Review Schedule</h3>
                        <div class="announcement-meta">
                            <div class="announcement-date">
                                <i class="fas fa-calendar"></i>
                                <span>Published: Nov 15, 2025</span>
                            </div>
                            <div class="announcement-department">
                                <i class="fas fa-building"></i>
                                <span>Management</span>
                            </div>
                        </div>
                    </div>
                    <div class="announcement-status">
                        <span class="badge badge-draft">Draft</span>
                    </div>
                </div>
                <div class="announcement-body">
                    <p class="announcement-description">
                        Quarterly performance review schedule for all departments. Please prepare your reports and documentation...
                    </p>
                </div>
                <div class="announcement-footer">
                    <div class="announcement-author">
                        <i class="fas fa-user"></i>
                        <span>HR Department</span>
                    </div>
                    <div class="announcement-actions">
                        <button class="btn-announcement-action btn-view-announcement" data-bs-toggle="modal" data-bs-target="#viewAnnouncementModal" title="View">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn-announcement-action btn-edit-announcement" data-bs-toggle="modal" data-bs-target="#editAnnouncementModal" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn-announcement-action btn-delete-announcement" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Announcement Card 6 -->
            <div class="announcement-card" data-title="Office Renovation Notice" data-department="All Departments" data-status="Active" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/image/announcement.jpg');">
                <div class="announcement-header">
                    <div class="announcement-title-section">
                        <h3 class="announcement-title">Office Renovation Notice</h3>
                        <div class="announcement-meta">
                            <div class="announcement-date">
                                <i class="fas fa-calendar"></i>
                                <span>Published: Nov 15, 2025</span>
                            </div>
                            <div class="announcement-department">
                                <i class="fas fa-building"></i>
                                <span>All Departments</span>
                            </div>
                        </div>
                    </div>
                    <div class="announcement-status">
                        <span class="badge badge-active">Active</span>
                    </div>
                </div>
                <div class="announcement-body">
                    <p class="announcement-description">
                        Office renovation work will begin next week. All employees should be aware of temporary workspace arrangements...
                    </p>
                </div>
                <div class="announcement-footer">
                    <div class="announcement-author">
                        <i class="fas fa-user"></i>
                        <span>Facilities Manager</span>
                    </div>
                    <div class="announcement-actions">
                        <button class="btn-announcement-action btn-view-announcement" data-bs-toggle="modal" data-bs-target="#viewAnnouncementModal" title="View">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn-announcement-action btn-edit-announcement" data-bs-toggle="modal" data-bs-target="#editAnnouncementModal" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn-announcement-action btn-delete-announcement" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Announcement Modal -->
<div class="modal fade" id="addAnnouncementModal" tabindex="-1" aria-labelledby="addAnnouncementModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="addAnnouncementModalLabel">
                    <span>Add New Announcement</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addAnnouncementForm">
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="announcementTitle" class="form-label text-dark">Title</label>
                            <input type="text" class="form-control" id="announcementTitle" placeholder="Enter announcement title">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="announcementDescription" class="form-label text-dark">Description</label>
                            <textarea class="form-control" id="announcementDescription" rows="5" placeholder="Enter announcement description"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="announcementDepartment" class="form-label text-dark">Department</label>
                            <select class="form-select" id="announcementDepartment">
                                <option value="" selected>All Departments</option>
                                <option value="Production">Production</option>
                                <option value="Management">Management</option>
                                <option value="HR">HR</option>
                                <option value="Sales">Sales</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="" class="form-label text-dark">Start Date</label>
                            <input type="date" class="form-control" ">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-dark">End Date</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="saveAnnouncementBtn">
                    <i class="fas fa-save"></i>
                    <span>Save Announcement</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- View Announcement Modal -->
<div class="modal fade" id="viewAnnouncementModal" tabindex="-1" aria-labelledby="viewAnnouncementModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="viewAnnouncementModalLabel">
                    <span>Announcement Details</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="view-announcement-section">
                    <!-- Title Section -->
                    <div class="view-announcement-item">
                        <div class="view-announcement-label">
                            <i class="fas fa-heading"></i>
                            <span>Title</span>
                        </div>
                        <div class="view-announcement-value">Company Holiday Schedule</div>
                    </div>
                    
                    <!-- Description Section -->
                    <div class="view-announcement-item">
                        <div class="view-announcement-label">
                            <i class="fas fa-align-left"></i>
                            <span>Description</span>
                        </div>
                        <div class="view-announcement-description">Please note the upcoming holiday schedule for the month of December. All employees are required to review and plan accordingly. The holiday schedule includes several public holidays and company-specific holidays. Detailed information about each holiday and its impact on work schedules will be communicated separately. Please note the upcoming holiday schedule for the month of December. All employees are required to review and plan accordingly. The holiday schedule includes several public holidays and company-specific holidays. Detailed information about each holiday and its impact on work schedules will be communicated separately.</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#editAnnouncementModal">
                    <i class="fas fa-edit"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Announcement Modal -->
<div class="modal fade" id="editAnnouncementModal" tabindex="-1" aria-labelledby="editAnnouncementModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="editAnnouncementModalLabel">
                    <span>Edit Announcement</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editAnnouncementForm">
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="editAnnouncementTitle" class="form-label text-dark">Title</label>
                            <input type="text" class="form-control" id="editAnnouncementTitle" placeholder="Enter announcement title">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="editAnnouncementDescription" class="form-label text-dark">Description</label>
                            <textarea class="form-control" id="editAnnouncementDescription" rows="5" placeholder="Enter announcement description"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="editAnnouncementDepartment" class="form-label text-dark">Department</label>
                            <select class="form-select" id="editAnnouncementDepartment">
                                <option value="" selected>All Departments</option>
                                <option value="Production">Production</option>
                                <option value="Management">Management</option>
                                <option value="HR">HR</option>
                                <option value="Sales">Sales</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="editAnnouncementStartDate" class="form-label text-dark">Start Date</label>
                            <input type="date" class="form-control" id="editAnnouncementStartDate">
                        </div>
                        <div class="col-md-6">
                            <label for="editAnnouncementEndDate" class="form-label text-dark">End Date</label>
                            <input type="date" class="form-control" id="editAnnouncementEndDate">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="updateAnnouncementBtn">
                    <i class="fas fa-save"></i>
                    <span>Update</span>
                </button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
