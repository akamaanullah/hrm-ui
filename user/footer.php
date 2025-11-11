 <!-- jQuery (DataTables requirement) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    
    <!-- DataTables Buttons Extension (Export ke liye) -->
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>
    
    <!-- JSZip (Excel export ke liye) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    
    <!-- DataTables HTML5 Export -->
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    
    <!-- Custom JS -->
    <script src="include/js/script.js"></script>
    
    <?php
    // Include page-specific JS files
    $currentPage = basename($_SERVER['PHP_SELF']);
    if ($currentPage == 'attendance.php') {
        echo '<script src="include/js/attendance.js"></script>';
    } elseif ($currentPage == 'attendance-report.php') {
        echo '<script src="include/js/attendance-report.js"></script>';
    } elseif ($currentPage == 'leave-history.php') {
        echo '<script src="include/js/leave-history.js"></script>';
    } elseif ($currentPage == 'payroll.php') {
        echo '<script src="include/js/payroll.js"></script>';
    } elseif ($currentPage == 'employee.php') {
        echo '<script src="include/js/employee.js"></script>';
    } elseif ($currentPage == 'notification.php') {
        echo '<script src="include/js/notification.js"></script>';
    } elseif ($currentPage == 'addemployee.php') {
        echo '<script src="include/js/addemployee.js"></script>';
    } elseif ($currentPage == 'announcement.php') {
        echo '<script src="include/js/announcement.js"></script>';
    }
    ?>
</body>
</html>
