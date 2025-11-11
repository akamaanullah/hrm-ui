<?php include 'header.php'; ?>

<!-- Notification Content -->
<div class="attendance-content">
    
    <!-- Notifications Section -->
    <div class="notifications-section">
        <div class="notifications-list">
            <!-- Notification Item 1 -->
            <div class="notification-item notification-unread" data-redirect="payroll.php">
            <div class="notification-image-wrapper">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSo0GwB7LYqWJmp16EnT_RXiUAvVampPnK0TQ&s" alt="Notification" class="notification-image">
                </div>
                <div class="notification-content">
                    <div class="notification-header-content">
                        <h4 class="notification-name">David Brown</h4>
                        <span class="notification-time">Just now</span>
                    </div>
                    <p class="notification-message">
                        Your payslip for December 2025 has been generated. Review the salary break-up and download your copy.
                    </p>
                </div>
                <div class="notification-actions">
                    <button class="btn-notification-action btn-mark-read" title="Mark as Read">
                        <i class="fas fa-check"></i>
                    </button>
                </div>
            </div>

            <!-- Notification Item 2 -->
            <div class="notification-item notification-unread" data-redirect="leave-history.php">
            <div class="notification-image-wrapper">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSo0GwB7LYqWJmp16EnT_RXiUAvVampPnK0TQ&s" alt="Notification" class="notification-image">
                </div>
                <div class="notification-content">
                    <div class="notification-header-content">
                        <h4 class="notification-name">Sarah Williams</h4>
                        <span class="notification-time">1 hour ago</span>
                    </div>
                    <p class="notification-message">
                        Great news! Your leave request for 8-10 January 2026 has been approved. Enjoy your time off.
                    </p>
                </div>
                <div class="notification-actions">
                    <button class="btn-notification-action btn-mark-read" title="Mark as Read">
                        <i class="fas fa-check"></i>
                    </button>
                </div>
            </div>

            <!-- Notification Item 3 -->
            <div class="notification-item notification-read" data-redirect="leave-history.php">
            <div class="notification-image-wrapper">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSo0GwB7LYqWJmp16EnT_RXiUAvVampPnK0TQ&s" alt="Notification" class="notification-image">
                </div>
                <div class="notification-content">
                    <div class="notification-header-content">
                        <h4 class="notification-name">Emma Davis</h4>
                        <span class="notification-time">Yesterday</span>
                    </div>
                    <p class="notification-message">
                        Your leave request for 23-24 December 2025 has been declined due to resource allocation. Please discuss with your manager.
                    </p>
                </div>
                <div class="notification-actions">
                    <button class="btn-notification-action btn-mark-read" title="Mark as Read">
                        <i class="fas fa-check-double"></i>
                    </button>
                </div>
            </div>

            <!-- Notification Item 4 -->
            <div class="notification-item notification-read" data-redirect="announcement.php">
            <div class="notification-image-wrapper">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSo0GwB7LYqWJmp16EnT_RXiUAvVampPnK0TQ&s" alt="Notification" class="notification-image">
                </div>
                <div class="notification-content">
                    <div class="notification-header-content">
                        <h4 class="notification-name">Lisa Anderson</h4>
                        <span class="notification-time">2 days ago</span>
                    </div>
                    <p class="notification-message">
                        A new company-wide announcement has been published: Quarterly Townhall on 15 January 2026. Check the details and RSVP.
                    </p>
                </div>
                <div class="notification-actions">
                    <button class="btn-notification-action btn-mark-read" title="Mark as Read">
                        <i class="fas fa-check-double"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
