<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - HRM</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="include/css/style.css">
</head>
<body>
    <!-- Main Container -->
    <div class="main-container">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-content">
                <!-- Logo Section -->
                <div class="logo-section">
                    <div class="logo">
                        <i class="fas fa-sun logo-icon"></i>
                        <span class="logo-text">HRM</span>
                    </div>
                    <button class="sidebar-close-btn" id="sidebarCloseBtn" aria-label="Close sidebar">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <!-- Search Bar -->
                <div class="search-section">
                    <div class="search-box">
                        <i class="fas fa-search search-icon"></i>
                        <input type="text" placeholder="Search here..." class="search-input">
                    </div>
                </div>
                
                <!-- Navigation Menu -->
                <nav class="navigation">
                    <div class="nav-grid">
                        <?php
                        $currentPage = basename($_SERVER['PHP_SELF']);
                        $isDashboard = ($currentPage == 'dashboard.php');
                        $isWelcome = ($currentPage == 'index.php');
                        $isAttendance = ($currentPage == 'attendance.php');
                        $isLeaveHistory = ($currentPage == 'leave-history.php');
                        $isPayroll = ($currentPage == 'payroll.php');
                        $isEmployee = ($currentPage == 'employee.php');
                        $isAnnouncement = ($currentPage == 'announcement.php');
                        $isNotification = ($currentPage == 'notification.php');
                        $isRecruitment = ($currentPage == 'recruitment.php');
                        $isEvent = ($currentPage == 'event.php');
                        ?>
                        <a href="dashboard.php" class="nav-item <?php echo $isDashboard ? 'active' : ''; ?>" data-page="dashboard">
                            <i class="fas fa-chart-line"></i>
                            <span>Dashboard</span>
                        </a>
                        <a href="employee.php" class="nav-item <?php echo $isEmployee ? 'active' : ''; ?>" data-page="all-employee">
                            <i class="fas fa-users-gear"></i>
                            <span>All Employee</span>
                        </a>
                        <a href="attendance.php" class="nav-item <?php echo $isAttendance ? 'active' : ''; ?>" data-page="attendance">
                            <i class="fas fa-fingerprint"></i>
                            <span>Attendance</span>
                        </a>
                        <a href="leave-history.php" class="nav-item <?php echo $isLeaveHistory ? 'active' : ''; ?>" data-page="leave-history">
                            <i class="fas fa-clock-rotate-left"></i>
                            <span>Leave History</span>
                        </a>
                        <a href="payroll.php" class="nav-item <?php echo $isPayroll ? 'active' : ''; ?>" data-page="payroll">
                            <i class="fas fa-wallet"></i>
                            <span>Payroll</span>
                        </a>
                        <a href="recruitment.php" class="nav-item <?php echo $isRecruitment ? 'active' : ''; ?>" data-page="recruitment">
                            <i class="fas fa-handshake"></i>
                            <span>Recruitment</span>
                        </a>
                        <a href="event.php" class="nav-item <?php echo $isEvent ? 'active' : ''; ?>" data-page="event">
                            <i class="fas fa-calendar-day"></i>
                            <span>Events</span>
                        </a>
                        <a href="announcement.php" class="nav-item <?php echo $isAnnouncement ? 'active' : ''; ?>" data-page="announcement">
                            <i class="fas fa-bullhorn"></i>
                            <span>Announcement</span>
                        </a>
                        <a href="notification.php" class="nav-item <?php echo $isNotification ? 'active' : ''; ?>" data-page="notification">
                            <i class="fas fa-bell"></i>
                            <span>Notification</span>
                        </a>
                    </div>
                </nav>
                
                <!-- Profile Section -->
                <div class="sidebar-profile">
                    <a href="profile.php" class="profile-info">
                        <img src="https://i.pinimg.com/474x/56/d8/d3/56d8d3b46b5d6d415b52b010be3f4dc2.jpg" alt="Profile" class="sidebar-profile-img">
                        <div class="profile-details">
                            <span class="profile-name">Martin Doe</span>
                            <span class="profile-role">Administrator</span>
                        </div>
                    </a>
                </div>
                
            </div>
        </aside>
        
        <!-- Main Content -->
        <main class="main-content">
            <!-- Top Bar -->
            <header class="topbar">
                <div class="topbar-left">
                    <button class="mobile-menu-toggle" id="mobileMenuToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <?php
                    $currentPage = basename($_SERVER['PHP_SELF']);
                    $pageTitle = 'Dashboard';
                    if ($currentPage == 'attendance.php') {
                        $pageTitle = 'Attendance Management';
                    } elseif ($currentPage == 'attendance-report.php') {
                        $pageTitle = 'Attendance Report';
                    } elseif ($currentPage == 'index.php') {
                        $pageTitle = 'Welcome';
                    } elseif ($currentPage == 'dashboard.php') {
                        $pageTitle = 'Dashboard';
                    } elseif ($currentPage == 'leave-history.php') {
                        $pageTitle = 'Leave History';
                    } elseif ($currentPage == 'payroll.php') {
                        $pageTitle = 'Payroll Management';
                    } elseif ($currentPage == 'employee.php') {
                        $pageTitle = 'Employee Management';
                    } elseif ($currentPage == 'announcement.php') {
                        $pageTitle = 'Announcement Management';
                    } elseif ($currentPage == 'notification.php') {
                        $pageTitle = 'Notification Management';
                    } elseif ($currentPage == 'recruitment.php') {
                        $pageTitle = 'Recruitment Management';
                    } elseif ($currentPage == 'event.php') {
                        $pageTitle = 'Event Management';
                    } elseif ($currentPage == 'profile.php') {
                        $pageTitle = 'Profile';
                    } elseif ($currentPage == 'employeeprofile.php') {
                        $pageTitle = 'Employee Profile';
                    } elseif ($currentPage == 'addemployee.php') {
                        $pageTitle = 'Add Employee';
                    }
                    ?>
                    <h1 class="page-title"><?php echo $pageTitle; ?></h1>
                </div>
                <div class="topbar-right">
                    <div class="topbar-actions">
                        <button class="btn-logout" onclick="handleLogout()">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </button>
                    </div>
                </div>
            </header>