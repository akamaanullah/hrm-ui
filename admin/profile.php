<?php include 'header.php'; ?>

<!-- Profile Content -->
<div class="attendance-content">
    
    <!-- Profile Header Section -->
    <div class="profile-header-card mb-4">
        <div class="profile-header-content">
            <div class="profile-image-section">
                <img src="https://i.pinimg.com/474x/56/d8/d3/56d8d3b46b5d6d415b52b010be3f4dc2.jpg" alt="Profile" class="profile-main-img">
                <button class="btn-edit-profile-image" title="Edit Profile Image">
                    <i class="fas fa-camera"></i>
                </button>
            </div>
            <div class="profile-header-info">
                <h2 class="profile-main-name">Martin Doe</h2>
                <p class="profile-main-role">
                    <i class="fas fa-briefcase"></i>
                    Administrator
                </p>
                <div class="profile-main-id">
                    <i class="fas fa-id-card"></i>
                    <span>Employee ID: EMP-001</span>
                </div>
            </div>
            <div class="profile-header-actions">
                <button class="btn-edit-profile">
                    <i class="fas fa-edit"></i>
                    <span>Edit Profile</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Profile Sections Grid -->
    <div class="profile-sections-grid">
        <!-- Left Column -->
        <div class="profile-left-column">
            
            <!-- Personal Information -->
            <div class="profile-section-card mb-4">
                <div class="profile-section-header">
                    <i class="fas fa-user"></i>
                    <span>Personal Information</span>
                </div>
                <div class="profile-section-body">
                    <div class="profile-info-grid">
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-user"></i>
                                <span>Gender</span>
                            </div>
                            <div class="info-value">Male</div>
                        </div>
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-birthday-cake"></i>
                                <span>Date of Birth</span>
                            </div>
                            <div class="info-value">15/03/1990</div>
                        </div>
                        <div class="profile-info-item full-width">
                            <div class="info-label">
                                <i class="fas fa-id-card"></i>
                                <span>ID Card Number</span>
                            </div>
                            <div class="info-value">35202-1234567-8</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="profile-section-card mb-4">
                <div class="profile-section-header">
                    <i class="fas fa-address-book"></i>
                    <span>Contact Information</span>
                </div>
                <div class="profile-section-body">
                    <div class="profile-info-grid">
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-phone"></i>
                                <span>Phone</span>
                            </div>
                            <div class="info-value">+92 300 1234567</div>
                        </div>
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-envelope"></i>
                                <span>Email</span>
                            </div>
                            <div class="info-value">martin.doe@company.com</div>
                        </div>
                        <div class="profile-info-item full-width">
                            <div class="info-label">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Address</span>
                            </div>
                            <div class="info-value">123 Main Street, City, Country</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Emergency Contact -->
            <div class="profile-section-card mb-4">
                <div class="profile-section-header">
                    <i class="fas fa-phone-alt"></i>
                    <span>Emergency Contact</span>
                </div>
                <div class="profile-section-body">
                    <div class="profile-info-grid">
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-user-friends"></i>
                                <span>Emergency Contact</span>
                            </div>
                            <div class="info-value">John Doe</div>
                        </div>
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-link"></i>
                                <span>Relation</span>
                            </div>
                            <div class="info-value">Brother</div>
                        </div>
                        <div class="profile-info-item full-width">
                            <div class="info-label">
                                <i class="fas fa-phone"></i>
                                <span>Contact Number</span>
                            </div>
                            <div class="info-value">+92 300 9876543</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Educational Background -->
            <div class="profile-section-card mb-4">
                <div class="profile-section-header">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Educational Background</span>
                </div>
                <div class="profile-section-body">
                    <div class="profile-info-grid">
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-certificate"></i>
                                <span>Qualification</span>
                            </div>
                            <div class="info-value">Bachelor's Degree</div>
                        </div>
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-award"></i>
                                <span>Degree / Certification</span>
                            </div>
                            <div class="info-value">BS Computer Science</div>
                        </div>
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-university"></i>
                                <span>College / University</span>
                            </div>
                            <div class="info-value">University of Technology</div>
                        </div>
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-tools"></i>
                                <span>Professional Expertise</span>
                            </div>
                            <div class="info-value">Web Development, Database Management</div>
                        </div>
                    </div>
                </div>
            </div>

              <!-- Leave History -->
              <div class="profile-section-card mb-4">
                <div class="profile-section-header">
                    <i class="fas fa-clock-rotate-left"></i>
                    <span>Leave History</span>
                </div>
                <div class="profile-section-body">
                    <div class="leave-history-summary">
                        <div class="leave-summary-item">
                            <span class="summary-label">Total Leaves</span>
                            <span class="summary-value">15</span>
                        </div>
                        <div class="leave-summary-item">
                            <span class="summary-label">Used Leaves</span>
                            <span class="summary-value">8</span>
                        </div>
                        <div class="leave-summary-item">
                            <span class="summary-label">Remaining</span>
                            <span class="summary-value">7</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Right Column -->
        <div class="profile-right-column">
            
            <!-- Employment Details -->
            <div class="profile-section-card mb-4">
                <div class="profile-section-header">
                    <i class="fas fa-briefcase"></i>
                    <span>Employment Details</span>
                </div>
                <div class="profile-section-body">
                    <div class="profile-info-grid">
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-building"></i>
                                <span>Department</span>
                            </div>
                            <div class="info-value">IT</div>
                        </div>
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-sitemap"></i>
                                <span>Sub Department</span>
                            </div>
                            <div class="info-value">Software Development</div>
                        </div>
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-calendar-check"></i>
                                <span>Joining Date</span>
                            </div>
                            <div class="info-value">01/01/2020</div>
                        </div>
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-calendar-plus"></i>
                                <span>Created Date</span>
                            </div>
                            <div class="info-value">01/01/2020</div>
                        </div>
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-clock"></i>
                                <span>Timing</span>
                            </div>
                            <div class="info-value">9:00 AM - 5:00 PM</div>
                        </div>
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-user-tie"></i>
                                <span>Job Type</span>
                            </div>
                            <div class="info-value">Full Time</div>
                        </div>
                        <div class="profile-info-item full-width">
                            <div class="info-label">
                                <i class="fas fa-dollar-sign"></i>
                                <span>Salary</span>
                            </div>
                            <div class="info-value">$50,000 / Year</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Banking Information -->
            <div class="profile-section-card mb-4">
                <div class="profile-section-header">
                    <i class="fas fa-university"></i>
                    <span>Banking Information</span>
                </div>
                <div class="profile-section-body">
                    <div class="profile-info-grid">
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-landmark"></i>
                                <span>Bank Name</span>
                            </div>
                            <div class="info-value">ABC Bank</div>
                        </div>
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-credit-card"></i>
                                <span>Bank Type</span>
                            </div>
                            <div class="info-value">Current Account</div>
                        </div>
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-user-circle"></i>
                                <span>Account Title</span>
                            </div>
                            <div class="info-value">Martin Doe</div>
                        </div>
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-code-branch"></i>
                                <span>Bank Branch</span>
                            </div>
                            <div class="info-value">Main Branch</div>
                        </div>
                        <div class="profile-info-item full-width">
                            <div class="info-label">
                                <i class="fas fa-hashtag"></i>
                                <span>Account Number</span>
                            </div>
                            <div class="info-value">1234567890123456</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Work Experience -->
            <div class="profile-section-card mb-4">
                <div class="profile-section-header">
                    <i class="fas fa-briefcase"></i>
                    <span>Work Experience</span>
                </div>
                <div class="profile-section-body">
                    <div class="profile-info-grid">
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-building"></i>
                                <span>Last Employer</span>
                            </div>
                            <div class="info-value">XYZ Corporation</div>
                        </div>
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-user-tie"></i>
                                <span>Last Designation</span>
                            </div>
                            <div class="info-value">Senior Developer</div>
                        </div>
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-calendar-alt"></i>
                                <span>Experience From</span>
                            </div>
                            <div class="info-value">01/01/2015</div>
                        </div>
                        <div class="profile-info-item">
                            <div class="info-label">
                                <i class="fas fa-calendar-alt"></i>
                                <span>Experience To</span>
                            </div>
                            <div class="info-value">31/12/2019</div>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Uploaded Documents -->
             <div class="profile-section-card mb-4">
                <div class="profile-section-header">
                    <i class="fas fa-file-alt"></i>
                    <span>Uploaded Documents</span>
                </div>
                <div class="profile-section-body">
                    <div class="documents-list">
                        <div class="document-item">
                            <div class="document-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div class="document-info">
                                <div class="document-name">CNIC Copy</div>
                                <div class="document-date">
                                    <i class="fas fa-calendar"></i>
                                    <span>Uploaded: 01/01/2020</span>
                                </div>
                            </div>
                            <div class="document-actions">
                                <button class="btn-view-document" title="View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn-download-document" title="Download">
                                    <i class="fas fa-download"></i>
                                </button>
                            </div>
                        </div>
                        <div class="document-item">
                            <div class="document-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div class="document-info">
                                <div class="document-name">Educational Certificate</div>
                                <div class="document-date">
                                    <i class="fas fa-calendar"></i>
                                    <span>Uploaded: 01/01/2020</span>
                                </div>
                            </div>
                            <div class="document-actions">
                                <button class="btn-view-document" title="View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn-download-document" title="Download">
                                    <i class="fas fa-download"></i>
                                </button>
                            </div>
                        </div>
                        <div class="document-item">
                            <div class="document-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div class="document-info">
                                <div class="document-name">Experience Letter</div>
                                <div class="document-date">
                                    <i class="fas fa-calendar"></i>
                                    <span>Uploaded: 01/01/2020</span>
                                </div>
                            </div>
                            <div class="document-actions">
                                <button class="btn-view-document" title="View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn-download-document" title="Download">
                                    <i class="fas fa-download"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<?php include 'footer.php'; ?>
