<?php include 'header.php'; ?>

<!-- Payroll Content -->
<div class="attendance-content">

    <!-- Page Header Actions -->
    <div class="page-header-actions">

        <div class="action-buttons">
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
            <table id="payrollTable" class="attendance-table">
                <thead>
                    <tr>
                        <th>Emp ID</th>
                        <th>Name</th>
                        <th>Total Earnings</th>
                        <th>Net Salary</th>
                        <th>Date of Payment</th>
                        <th>Payslip</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>syed mahad bukhari</td>
                        <td>60000</td>
                        <td>55000</td>
                        <td>05/11/2025</td>
                        <td>
                            <button class="btn-view-report" style="padding: 0.4rem 0.8rem; font-size: 0.8rem;"
                                data-bs-toggle="modal" data-bs-target="#documentViewModal">
                                <i class="fas fa-file-pdf"></i>
                                <span>View</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>zain ul abidin khan</td>
                        <td>53000</td>
                        <td>49000</td>
                        <td>05/11/2025</td>
                        <td>
                            <button class="btn-view-report" style="padding: 0.4rem 0.8rem; font-size: 0.8rem;"
                                data-bs-toggle="modal" data-bs-target="#documentViewModal">
                                <i class="fas fa-file-pdf"></i>
                                <span>View</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>test test test</td>
                        <td>47000</td>
                        <td>44000</td>
                        <td>05/11/2025</td>
                        <td>
                            <button class="btn-view-report" style="padding: 0.4rem 0.8rem; font-size: 0.8rem;"
                                data-bs-toggle="modal" data-bs-target="#documentViewModal">
                                <i class="fas fa-file-pdf"></i>
                                <span>View</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>abc abc abc</td>
                        <td>95000</td>
                        <td>87000</td>
                        <td>05/11/2025</td>
                        <td>
                            <button class="btn-view-report" style="padding: 0.4rem 0.8rem; font-size: 0.8rem;"
                                data-bs-toggle="modal" data-bs-target="#documentViewModal">
                                <i class="fas fa-file-pdf"></i>
                                <span>View</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>user user user</td>
                        <td>44000</td>
                        <td>41200</td>
                        <td>05/11/2025</td>
                        <td>
                            <button class="btn-view-report" style="padding: 0.4rem 0.8rem; font-size: 0.8rem;"
                                data-bs-toggle="modal" data-bs-target="#documentViewModal">
                                <i class="fas fa-file-pdf"></i>
                                <span>View</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Mike Johnson</td>
                        <td>49500</td>
                        <td>46000</td>
                        <td>05/11/2025</td>
                        <td>
                            <button class="btn-view-report" style="padding: 0.4rem 0.8rem; font-size: 0.8rem;"
                                data-bs-toggle="modal" data-bs-target="#documentViewModal">
                                <i class="fas fa-file-pdf"></i>
                                <span>View</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Sarah Williams</td>
                        <td>89000</td>
                        <td>81500</td>
                        <td>05/11/2025</td>
                        <td>
                            <button class="btn-view-report" style="padding: 0.4rem 0.8rem; font-size: 0.8rem;"
                                data-bs-toggle="modal" data-bs-target="#documentViewModal">
                                <i class="fas fa-file-pdf"></i>
                                <span>View</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>David Brown</td>
                        <td>57000</td>
                        <td>52500</td>
                        <td>05/11/2025</td>
                        <td>
                            <button class="btn-view-report" style="padding: 0.4rem 0.8rem; font-size: 0.8rem;"
                                data-bs-toggle="modal" data-bs-target="#documentViewModal">
                                <i class="fas fa-file-pdf"></i>
                                <span>View</span>
                            </button>
                        </td>
                       
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Emma Davis</td>
                        <td>51500</td>
                        <td>47700</td>
                        <td>05/11/2025</td>
                        <td>
                            <button class="btn-view-report" style="padding: 0.4rem 0.8rem; font-size: 0.8rem;"
                                data-bs-toggle="modal" data-bs-target="#documentViewModal">
                                <i class="fas fa-file-pdf"></i>
                                <span>View</span>
                            </button>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Chris Wilson</td>
                        <td>45500</td>
                        <td>42600</td>
                        <td>05/11/2025</td>
                        <td>
                            <button class="btn-view-report" style="padding: 0.4rem 0.8rem; font-size: 0.8rem;"
                                data-bs-toggle="modal" data-bs-target="#documentViewModal">
                                <i class="fas fa-file-pdf"></i>
                                <span>View</span>
                            </button>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Lisa Anderson</td>
                        <td>83000</td>
                        <td>76000</td>
                        <td>05/11/2025</td>
                        <td>
                            <button class="btn-view-report" style="padding: 0.4rem 0.8rem; font-size: 0.8rem;"
                                data-bs-toggle="modal" data-bs-target="#documentViewModal">
                                <i class="fas fa-file-pdf"></i>
                                <span>View</span>
                            </button>
                        </td>
                       
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Robert Taylor</td>
                        <td>61500</td>
                        <td>56700</td>
                        <td>05/11/2025</td>
                        <td>
                            <button class="btn-view-report" style="padding: 0.4rem 0.8rem; font-size: 0.8rem;"
                                data-bs-toggle="modal" data-bs-target="#documentViewModal">
                                <i class="fas fa-file-pdf"></i>
                                <span>View</span>
                            </button>
                        </td>
                        
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Table Footer / Pagination (DataTables will handle this) -->
    </div>
</div>



<?php include 'footer.php'; ?>