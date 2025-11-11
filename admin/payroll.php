<?php include 'header.php'; ?>

<!-- Payroll Content -->
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
                    <option value="production">Production</option>
                    <option value="management">Management</option>
                    <option value="hr">HR</option>
                    <option value="sales">Sales</option>
                </select>
            </div>
            <div class="filter-group">
                <label>Month</label>
                <select class="filter-select">
                    <option value="">All Months</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
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

        <button class="btn-action btn-auto-payslip" data-bs-toggle="modal" data-bs-target="#autoGeneratePayslipModal">
            <i class="fas fa-file-invoice-dollar"></i>
            <span>Auto Generate payslip</span>
        </button>

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
                        <th>Actions</th>
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
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewPayrollModal">
                                <i class="fas fa-edit"></i>
                                <span>Edit</span>
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
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewPayrollModal">
                                <i class="fas fa-edit"></i>
                                <span>Edit</span>
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
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewPayrollModal">
                                <i class="fas fa-edit"></i>
                                <span>Edit</span>
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
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewPayrollModal">
                                <i class="fas fa-edit"></i>
                                <span>Edit</span>
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
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewPayrollModal">
                                <i class="fas fa-edit"></i>
                                <span>Edit</span>
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
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewPayrollModal">
                                <i class="fas fa-edit"></i>
                                <span>Edit</span>
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
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewPayrollModal">
                                <i class="fas fa-edit"></i>
                                <span>Edit</span>
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
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewPayrollModal">
                                <i class="fas fa-edit"></i>
                                <span>Edit</span>
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
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewPayrollModal">
                                <i class="fas fa-edit"></i>
                                <span>Edit</span>
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
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewPayrollModal">
                                <i class="fas fa-edit"></i>
                                <span>Edit</span>
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
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewPayrollModal">
                                <i class="fas fa-edit"></i>
                                <span>Edit</span>
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
                        <td>
                            <button class="btn-view-report" data-bs-toggle="modal" data-bs-target="#viewPayrollModal">
                                <i class="fas fa-edit"></i>
                                <span>Edit</span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Table Footer / Pagination (DataTables will handle this) -->
    </div>
</div>


<!-- Edit Payroll Details Modal -->
<div class="modal fade" id="viewPayrollModal" tabindex="-1" aria-labelledby="viewPayrollModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="viewPayrollModalLabel">
                    <span>Edit Payroll Details</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="viewPayrollForm">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="payrollEmpId" class="form-label text-dark">Employee ID</label>
                            <input type="text" class="form-control" id="payrollEmpId" value="5" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="payrollSelectMonth" class="form-label text-dark">Select Month</label>
                            <select class="form-select" id="payrollSelectMonth">
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November" selected>November</option>
                                <option value="December">December</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="payrollBasicSalary" class="form-label text-dark">Basic Salary</label>
                            <input type="text" class="form-control" id="payrollBasicSalary" value="15000.00" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="payrollFuelAllowance" class="form-label text-dark">Fuel Allowance</label>
                            <input type="text" class="form-control" id="payrollFuelAllowance" value="2100.00" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="payrollHouseRent" class="form-label text-dark">House Rent Allowance</label>
                            <input type="text" class="form-control" id="payrollHouseRent" value="7500.00" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="payrollUtilityAllowance" class="form-label text-dark">Utility Allowance</label>
                            <input type="text" class="form-control" id="payrollUtilityAllowance" value="3900.00"
                                readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="payrollMobileAllowance" class="form-label text-dark">Mobile Allowance</label>
                            <input type="text" class="form-control" id="payrollMobileAllowance" value="1500.00"
                                readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="payrollProvidentFund" class="form-label text-dark">Provident Fund</label>
                            <input type="number" class="form-control" id="payrollProvidentFund" value="0.00" step="0.01"
                                min="0">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="payrollLoan" class="form-label text-dark">Loan</label>
                            <input type="text" class="form-control" id="payrollLoan" value="0.00" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="payrollTotalLeaves" class="form-label text-dark">Total Leaves</label>
                            <input type="text" class="form-control" id="payrollTotalLeaves" value="8" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="payrollTotalLate" class="form-label text-dark">Total Late</label>
                            <input type="text" class="form-control" id="payrollTotalLate" value="" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="payrollTotalHalfDay" class="form-label text-dark">Total Half-day</label>
                            <input type="text" class="form-control" id="payrollTotalHalfDay" value="" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="payrollBank" class="form-label text-dark">Bank</label>
                            <select class="form-select" id="payrollBank">
                                <option value="HBL" selected>HBL</option>
                                <option value="UBL">UBL</option>
                                <option value="MCB">MCB</option>
                                <option value="Allied Bank">Allied Bank</option>
                                <option value="Meezan Bank">Meezan Bank</option>
                                <option value="Bank Alfalah">Bank Alfalah</option>
                                <option value="Askari Bank">Askari Bank</option>
                                <option value="Faysal Bank">Faysal Bank</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="payrollPaymentDate" class="form-label text-dark">Payment Date</label>
                            <input type="date" class="form-control" id="payrollPaymentDate" value="2025-11-20">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="payrollProfessionalTax" class="form-label text-dark">Professional Tax</label>
                            <input type="text" class="form-control" id="payrollProfessionalTax" value="0.00" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="payrollTotalEarnings" class="form-label text-dark">Total Earnings</label>
                            <input type="text" class="form-control" id="payrollTotalEarnings" value="30000.00" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="payrollNetSalary" class="form-label text-dark">Net Salary</label>
                            <input type="text" class="form-control" id="payrollNetSalary" value="22000.00" readonly>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">
                    <i class="fas fa-save"></i>
                    <span>Save Changes</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Auto Generate Payslip Modal -->
<div class="modal fade" id="autoGeneratePayslipModal" tabindex="-1" aria-labelledby="autoGeneratePayslipModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="autoGeneratePayslipModalLabel">
                    <span>Generate Payslip</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Filters Section -->
                <div class="filter-section mb-4">
                    <div class="filter-row">
                        <div class="filter-group">
                            <label>Filter by Emp ID</label>
                            <input type="text" class="filter-input" id="modalEmpIdFilter" placeholder="Filter by Emp ID">
                        </div>
                        <div class="filter-group">
                            <label>Filter by Name</label>
                            <input type="text" class="filter-input" id="modalNameFilter" placeholder="Filter by Name">
                        </div>
                        <div class="filter-group">
                            <label>Department</label>
                            <select class="filter-select" id="modalDepartmentFilter">
                                <option value="">All Departments</option>
                                <option value="Production">Production</option>
                                <option value="Management">Management</option>
                                <option value="HR">HR</option>
                                <option value="Sales">Sales</option>
                                <option value="IT">IT</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label>Month</label>
                            <input type="month" class="filter-input" id="modalMonthFilter" value="2025-11">
                        </div>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="table-section">
                    <div class="table-wrapper">
                        <table id="generatePayslipTable" class="attendance-table">
                            <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" id="selectAllCheckbox" title="Select All">
                                    </th>
                                    <th>Emp ID</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Department</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="row-checkbox">
                                    </td>
                                    <td>5</td>
                                    <td>user user user</td>
                                    <td>user</td>
                                    <td>Production</td>
                                    <td>30000.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="row-checkbox">
                                    </td>
                                    <td>4</td>
                                    <td>abc abc abc</td>
                                    <td>test</td>
                                    <td>Management</td>
                                    <td>13000.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="row-checkbox">
                                    </td>
                                    <td>3</td>
                                    <td>test test test</td>
                                    <td>test </td>
                                    <td>Production</td>
                                    <td>12000.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="row-checkbox">
                                    </td>
                                    <td>2</td>
                                    <td>zain ul abidin khan</td>
                                    <td>Manager</td>
                                    <td>Management</td>
                                    <td>53000.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="row-checkbox">
                                    </td>
                                    <td>1</td>
                                    <td>syed mahad bukhari</td>
                                    <td>Developer</td>
                                    <td>IT</td>
                                    <td>60000.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="row-checkbox">
                                    </td>
                                    <td>6</td>
                                    <td>Mike Johnson</td>
                                    <td>Analyst</td>
                                    <td>HR</td>
                                    <td>49500.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="row-checkbox">
                                    </td>
                                    <td>2</td>
                                    <td>zain ul abidin khan</td>
                                    <td>Manager</td>
                                    <td>Management</td>
                                    <td>53000.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="row-checkbox">
                                    </td>
                                    <td>1</td>
                                    <td>syed mahad bukhari</td>
                                    <td>Developer</td>
                                    <td>IT</td>
                                    <td>60000.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="row-checkbox">
                                    </td>
                                    <td>6</td>
                                    <td>Mike Johnson</td>
                                    <td>Analyst</td>
                                    <td>HR</td>
                                    <td>49500.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="row-checkbox">
                                    </td>
                                    <td>6</td>
                                    <td>Mike Johnson</td>
                                    <td>Analyst</td>
                                    <td>HR</td>
                                    <td>49500.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="row-checkbox">
                                    </td>
                                    <td>2</td>
                                    <td>zain ul abidin khan</td>
                                    <td>Manager</td>
                                    <td>Management</td>
                                    <td>53000.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="row-checkbox">
                                    </td>
                                    <td>1</td>
                                    <td>syed mahad bukhari</td>
                                    <td>Developer</td>
                                    <td>IT</td>
                                    <td>60000.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="row-checkbox">
                                    </td>
                                    <td>6</td>
                                    <td>Mike Johnson</td>
                                    <td>Analyst</td>
                                    <td>HR</td>
                                    <td>49500.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="row-checkbox">
                                    </td>
                                    <td>2</td>
                                    <td>zain ul abidin khan</td>
                                    <td>Manager</td>
                                    <td>Management</td>
                                    <td>53000.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="row-checkbox">
                                    </td>
                                    <td>1</td>
                                    <td>syed mahad bukhari</td>
                                    <td>Developer</td>
                                    <td>IT</td>
                                    <td>60000.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="row-checkbox">
                                    </td>
                                    <td>6</td>
                                    <td>Mike Johnson</td>
                                    <td>Analyst</td>
                                    <td>HR</td>
                                    <td>49500.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="row-checkbox">
                                    </td>
                                    <td>6</td>
                                    <td>Mike Johnson</td>
                                    <td>Analyst</td>
                                    <td>HR</td>
                                    <td>49500.00</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="generatePayslipBtn">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <span>Generate Payslip</span>
                </button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>