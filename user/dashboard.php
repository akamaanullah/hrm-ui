<?php include 'header.php'; ?>
            
            <!-- Dashboard Content -->
            <div class="dashboard-content">
                <!-- Greeting Section -->
                <div class="greeting-section">
                    <h2 class="greeting">Good Morning, Martin Doe!!</h2>
                    <p class="date-info">It's a Friday, 11 October 2024</p>
                </div>
                
                <!-- Metrics Cards -->
                <div class="row metrics-row">
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="metric-card">
                            <div class="metric-content">
                                <h3 class="metric-number">534</h3>
                                <p class="metric-label">Total Employees</p>
                            </div>
                            <div class="metric-bg">
                                <div class="bg-lines"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="metric-card">
                            <div class="metric-content">
                                <h3 class="metric-number">89%</h3>
                                <p class="metric-label">Attendance Overview</p>
                            </div>
                            <div class="attendance-chart">
                                <div class="donut-chart">
                                    <div class="donut-segment present"></div>
                                    <div class="donut-segment leave"></div>
                                </div>
                                <div class="chart-legend">
                                    <div class="legend-item">
                                        <span class="legend-dot present"></span>
                                        <span>70% Present</span>
                                    </div>
                                    <div class="legend-item">
                                        <span class="legend-dot leave"></span>
                                        <span>30% On Leave</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="metric-card">
                            <div class="metric-content">
                                <h3 class="metric-number">34</h3>
                                <p class="metric-label">Ongoing Projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="metric-card">
                            <div class="metric-content">
                                <h3 class="metric-number">12</h3>
                                <p class="metric-label">New Joiners</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Charts Row -->
                <div class="row charts-row">
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="chart-card">
                            <div class="chart-header">
                                <h5>Attendance Rate</h5>
                            </div>
                            <div class="chart-content">
                                <div class="attendance-visual">
                                    <div class="attendance-sculpture"></div>
                                </div>
                                <div class="attendance-info">
                                    <p class="attendance-desc">Total attendance rate of employees this month.</p>
                                    <h2 class="attendance-percentage">65%</h2>
                                    <p class="attendance-label">Total employee attendance</p>
                                </div>
                                <div class="attendance-bars">
                                    <div class="bar-chart">
                                        <div class="bar on-time" style="height: 100%"></div>
                                        <div class="bar on-time" style="height: 100%"></div>
                                        <div class="bar on-time" style="height: 100%"></div>
                                        <div class="bar on-time" style="height: 100%"></div>
                                        <div class="bar late" style="height: 60%"></div>
                                    </div>
                                    <div class="bar-labels">
                                        <span>Mon</span>
                                        <span>Tue</span>
                                        <span>Wed</span>
                                        <span>Thu</span>
                                        <span>Fri</span>
                                    </div>
                                </div>
                                <div class="chart-legend">
                                    <div class="legend-item">
                                        <span class="legend-dot on-time"></span>
                                        <span>On-Time</span>
                                    </div>
                                    <div class="legend-item">
                                        <span class="legend-dot late"></span>
                                        <span>Late Attent</span>
                                    </div>
                                    <div class="legend-item">
                                        <span class="legend-dot absent"></span>
                                        <span>Absent</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="chart-card">
                            <div class="chart-header">
                                <h5>Average KPI Score</h5>
                            </div>
                            <div class="chart-content">
                                <div class="kpi-score">
                                    <h2 class="kpi-percentage">70.67%</h2>
                                </div>
                                <div class="kpi-chart">
                                    <div class="candlestick-chart">
                                        <div class="candlestick high"></div>
                                        <div class="candlestick medium"></div>
                                        <div class="candlestick low"></div>
                                        <div class="candlestick high"></div>
                                        <div class="candlestick medium"></div>
                                        <div class="candlestick low"></div>
                                        <div class="candlestick high"></div>
                                        <div class="candlestick medium"></div>
                                        <div class="candlestick low"></div>
                                        <div class="candlestick high"></div>
                                        <div class="candlestick medium"></div>
                                        <div class="candlestick low"></div>
                                    </div>
                                    <div class="chart-tooltip">
                                        <span>63% August 2024</span>
                                        <i class="fas fa-arrow-up"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Bottom Charts Row -->
                <div class="row bottom-charts-row">
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="chart-card">
                            <div class="chart-header">
                                <h5>Employment Levels</h5>
                            </div>
                            <div class="chart-content">
                                <div class="employment-chart">
                                    <div class="employment-bars">
                                        <div class="employment-bar permanent"></div>
                                        <div class="employment-bar contract"></div>
                                        <div class="employment-bar probation"></div>
                                    </div>
                                    <p class="employment-total">534 Total employer and staff</p>
                                </div>
                                <div class="employment-legend">
                                    <div class="legend-item">
                                        <span class="legend-dot permanent"></span>
                                        <span>Permanent: 60%</span>
                                    </div>
                                    <div class="legend-item">
                                        <span class="legend-dot contract"></span>
                                        <span>Contract: 25%</span>
                                    </div>
                                    <div class="legend-item">
                                        <span class="legend-dot probation"></span>
                                        <span>Probation: 15%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="chart-card">
                            <div class="chart-header">
                                <h5>Interviews</h5>
                            </div>
                            <div class="chart-content">
                                <div class="interviews-content">
                                    <div class="interview-avatars">
                                        <img src="https://via.placeholder.com/30x30/4CAF50/FFFFFF?text=1" alt="Interview 1">
                                        <img src="https://via.placeholder.com/30x30/4CAF50/FFFFFF?text=2" alt="Interview 2">
                                        <img src="https://via.placeholder.com/30x30/4CAF50/FFFFFF?text=3" alt="Interview 3">
                                        <img src="https://via.placeholder.com/30x30/4CAF50/FFFFFF?text=4" alt="Interview 4">
                                        <img src="https://via.placeholder.com/30x30/4CAF50/FFFFFF?text=5" alt="Interview 5">
                                        <img src="https://via.placeholder.com/30x30/4CAF50/FFFFFF?text=6" alt="Interview 6">
                                        <img src="https://via.placeholder.com/30x30/4CAF50/FFFFFF?text=7" alt="Interview 7">
                                        <img src="https://via.placeholder.com/30x30/4CAF50/FFFFFF?text=8" alt="Interview 8">
                                        <img src="https://via.placeholder.com/30x30/4CAF50/FFFFFF?text=9" alt="Interview 9">
                                        <img src="https://via.placeholder.com/30x30/4CAF50/FFFFFF?text=10" alt="Interview 10">
                                    </div>
                                    <p class="interview-count">10 people</p>
                                    <div class="interview-graphic">
                                        <div class="wavy-line"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
<?php include 'footer.php'; ?>
   