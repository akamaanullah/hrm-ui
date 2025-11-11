<?php include 'header.php'; ?>

<div class="attendance-content attendance-page">
    <header class="attendance-header">
        <!-- <div class="attendance-header-text">
            <h1>Attendance History</h1>
            <p>Track check-in trends, punctuality, and daily status across your team.</p>
        </div> -->
        <div class="attendance-header-actions">
            <div class="attendance-view-switch">
                <button type="button" class="attendance-view-toggle active" data-view="cards" aria-pressed="true" title="Card view">
                    <i class="fas fa-th-large"></i>
                </button>
                <button type="button" class="attendance-view-toggle" data-view="table" aria-pressed="false" title="Table view">
                    <i class="fas fa-list"></i>
                </button>
            </div>
            <form class="attendance-range-form" onsubmit="return false;">
                <label class="attendance-range-label">
                    <span>From</span>
                    <input type="date" id="attendanceRangeFrom">
                </label>
                <span class="attendance-range-separator">—</span>
                <label class="attendance-range-label">
                    <span>To</span>
                    <input type="date" id="attendanceRangeTo">
                </label>
                <button type="button" class="attendance-range-clear">
                    <i class="fas fa-undo"></i>
                    <span>Reset</span>
                </button>
            </form>
        </div>
    </header>

    <section class="attendance-view-container">
        <div class="attendance-cards-view" data-view-target="cards">
            <div class="attendance-cards-grid">
                <article class="attendance-card status-on-time" data-emp="EMP-001" data-name="John Doe"
                    data-department="HR" data-status="on-time" data-date="2025-03-08"
                    data-clock-in="08:53 AM" data-clock-out="05:15 PM" data-hours="8h 22m">
                    <header class="attendance-card-header">
                        <div class="attendance-card-date">
                            <i class="far fa-calendar-alt"></i>
                            <span>March 08, 2025</span>
                        </div>
                        <span class="attendance-card-status badge-on-time">Present</span>
                    </header>
                    <div class="attendance-card-body">
                        <dl>
                            <div>
                                <dt>Clock In</dt>
                                <dd>08:53 AM</dd>
                            </div>
                            <div>
                                <dt>Clock Out</dt>
                                <dd>05:15 PM</dd>
                            </div>
                        </dl>
                    </div>
                    <footer class="attendance-card-footer">
                        <span class="attendance-card-hours">Working Hours · 8h 22m</span>
                        <button type="button" class="btn-card-message" title="Add note" aria-label="Add note"
                            data-bs-toggle="modal" data-bs-target="#attendanceCommentModal">
                            <i class="fas fa-comment-dots"></i>
                        </button>
                    </footer>
                </article>

                <article class="attendance-card status-late" data-emp="EMP-002" data-name="Jane Smith"
                    data-department="Sales" data-status="late" data-date="2025-03-07"
                    data-clock-in="08:27 AM" data-clock-out="05:09 PM" data-hours="8h 42m">
                    <header class="attendance-card-header">
                        <div class="attendance-card-date">
                            <i class="far fa-calendar-alt"></i>
                            <span>March 07, 2025</span>
                        </div>
                        <span class="attendance-card-status badge-late">Late</span>
                    </header>
                    <div class="attendance-card-body">
                        <dl>
                            <div>
                                <dt>Clock In</dt>
                                <dd>08:27 AM</dd>
                            </div>
                            <div>
                                <dt>Clock Out</dt>
                                <dd>05:09 PM</dd>
                            </div>
                        </dl>
                    </div>
                    <footer class="attendance-card-footer">
                        <span class="attendance-card-hours">Working Hours · 8h 42m</span>
                        <button type="button" class="btn-card-message" title="Add note" aria-label="Add note"
                            data-bs-toggle="modal" data-bs-target="#attendanceCommentModal">
                            <i class="fas fa-comment-dots"></i>
                        </button>
                    </footer>
                </article>

                <article class="attendance-card status-absent" data-emp="EMP-003" data-name="David Brown"
                    data-department="Production" data-status="absent" data-date="2025-03-06"
                    data-clock-in="—" data-clock-out="—" data-hours="—">
                    <header class="attendance-card-header">
                        <div class="attendance-card-date">
                            <i class="far fa-calendar-alt"></i>
                            <span>March 06, 2025</span>
                        </div>
                        <span class="attendance-card-status badge-absent">Absent</span>
                    </header>
                    <div class="attendance-card-body">
                        <dl>
                            <div>
                                <dt>Clock In</dt>
                                <dd>—</dd>
                            </div>
                            <div>
                                <dt>Clock Out</dt>
                                <dd>—</dd>
                            </div>
                        </dl>
                    </div>
                    <footer class="attendance-card-footer">
                        <span class="attendance-card-hours">Working Hours · —</span>
                        <button type="button" class="btn-card-message" title="Add note" aria-label="Add note"
                            data-bs-toggle="modal" data-bs-target="#attendanceCommentModal">
                            <i class="fas fa-comment-dots"></i>
                        </button>
                    </footer>
                </article>

                <article class="attendance-card status-on-time" data-emp="EMP-004" data-name="Sarah Williams"
                    data-department="Management" data-status="on-time" data-date="2025-03-05"
                    data-clock-in="08:31 AM" data-clock-out="05:05 PM" data-hours="8h 34m">
                    <header class="attendance-card-header">
                        <div class="attendance-card-date">
                            <i class="far fa-calendar-alt"></i>
                            <span>March 05, 2025</span>
                        </div>
                        <span class="attendance-card-status badge-on-time">Present</span>
                    </header>
                    <div class="attendance-card-body">
                        <dl>
                            <div>
                                <dt>Clock In</dt>
                                <dd>08:31 AM</dd>
                            </div>
                            <div>
                                <dt>Clock Out</dt>
                                <dd>05:05 PM</dd>
                            </div>
                        </dl>
                    </div>
                    <footer class="attendance-card-footer">
                        <span class="attendance-card-hours">Working Hours · 8h 34m</span>
                        <button type="button" class="btn-card-message" title="Add note" aria-label="Add note"
                            data-bs-toggle="modal" data-bs-target="#attendanceCommentModal">
                            <i class="fas fa-comment-dots"></i>
                        </button>
                    </footer>
                </article>

                <article class="attendance-card status-on-time" data-emp="EMP-005" data-name="Emma Davis"
                    data-department="HR" data-status="on-time" data-date="2025-03-04"
                    data-clock-in="08:45 AM" data-clock-out="05:18 PM" data-hours="8h 33m">
                    <header class="attendance-card-header">
                        <div class="attendance-card-date">
                            <i class="far fa-calendar-alt"></i>
                            <span>March 04, 2025</span>
                        </div>
                        <span class="attendance-card-status badge-on-time">Present</span>
                    </header>
                    <div class="attendance-card-body">
                        <dl>
                            <div>
                                <dt>Clock In</dt>
                                <dd>08:45 AM</dd>
                            </div>
                            <div>
                                <dt>Clock Out</dt>
                                <dd>05:18 PM</dd>
                            </div>
                        </dl>
                    </div>
                    <footer class="attendance-card-footer">
                        <span class="attendance-card-hours">Working Hours · 8h 33m</span>
                        <button type="button" class="btn-card-message" title="Add note" aria-label="Add note"
                            data-bs-toggle="modal" data-bs-target="#attendanceCommentModal">
                            <i class="fas fa-comment-dots"></i>
                        </button>
                    </footer>
                </article>

                <article class="attendance-card status-late" data-emp="EMP-006" data-name="Chris Wilson"
                    data-department="Production" data-status="late" data-date="2025-03-03"
                    data-clock-in="09:05 AM" data-clock-out="05:20 PM" data-hours="8h 15m">
                    <header class="attendance-card-header">
                        <div class="attendance-card-date">
                            <i class="far fa-calendar-alt"></i>
                            <span>March 03, 2025</span>
                        </div>
                        <span class="attendance-card-status badge-late">Late</span>
                    </header>
                    <div class="attendance-card-body">
                        <dl>
                            <div>
                                <dt>Clock In</dt>
                                <dd>09:05 AM</dd>
                            </div>
                            <div>
                                <dt>Clock Out</dt>
                                <dd>05:20 PM</dd>
                            </div>
                        </dl>
                    </div>
                    <footer class="attendance-card-footer">
                        <span class="attendance-card-hours">Working Hours · 8h 15m</span>
                        <button type="button" class="btn-card-message" title="Add note" aria-label="Add note"
                            data-bs-toggle="modal" data-bs-target="#attendanceCommentModal">
                            <i class="fas fa-comment-dots"></i>
                        </button>
                    </footer>
                </article>
            </div>
        </div>

        <div class="attendance-table-view is-hidden" data-view-target="table">
            <div class="table-section">
                <div class="table-wrapper">
                    <table class="attendance-table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Clock In</th>
                                <th>Clock Out</th>
                                <th>Working Hours</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr >
                                <td>March 08, 2025</td>
                                <td>08:53 AM</td>
                                <td>05:15 PM</td>
                                <td><span class="attendance-hours">8h 22m</span></td>
                                <td><span class="attendance-status-chip chip-on-time">Present</span></td>
                                <td class="actions-cell">
                                    <button type="button" class="btn-card-message" title="Add note" aria-label="Add note">
                                        <i class="fas fa-comment-dots"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>March 07, 2025</td>
                                <td>08:27 AM</td>
                                <td>05:09 PM</td>
                                <td><span class="attendance-hours">8h 42m</span></td>
                                <td><span class="attendance-status-chip chip-late">Late</span></td>
                                <td class="actions-cell">
                                    <button type="button" class="btn-card-message" title="Add note" aria-label="Add note">
                                        <i class="fas fa-comment-dots"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>March 06, 2025</td>
                                <td>—</td>
                                <td>—</td>
                                <td><span class="attendance-hours">—</span></td>
                                <td><span class="attendance-status-chip chip-absent">Absent</span></td>
                                <td class="actions-cell">
                                    <button type="button" class="btn-card-message" title="Add note" aria-label="Add note">
                                        <i class="fas fa-comment-dots"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>March 05, 2025</td>
                                <td>08:31 AM</td>
                                <td>05:05 PM</td>
                                <td><span class="attendance-hours">8h 34m</span></td>
                                <td><span class="attendance-status-chip chip-on-time">Present</span></td>
                                <td class="actions-cell">
                                    <button type="button" class="btn-card-message" title="Add note" aria-label="Add note">
                                        <i class="fas fa-comment-dots"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>March 04, 2025</td>
                                <td>08:45 AM</td>
                                <td>05:18 PM</td>
                                <td><span class="attendance-hours">8h 33m</span></td>
                                <td><span class="attendance-status-chip chip-on-time">Present</span></td>
                                <td class="actions-cell">
                                    <button type="button" class="btn-card-message" title="Add note" aria-label="Add note">
                                        <i class="fas fa-comment-dots"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>March 03, 2025</td>
                                <td>09:05 AM</td>
                                <td>05:20 PM</td>
                                <td><span class="attendance-hours">8h 15m</span></td>
                                <td><span class="attendance-status-chip chip-late">Late</span></td>
                                <td class="actions-cell">
                                    <button type="button" class="btn-card-message" title="Add note" aria-label="Add note">
                                        <i class="fas fa-comment-dots"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Attendance Comment Modal -->
<div class="modal fade attendance-comment-modal" id="attendanceCommentModal" tabindex="-1" aria-labelledby="attendanceCommentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form id="attendanceCommentForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="attendanceCommentModalLabel">Add Attendance Comment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3 modal-summary-row">
                        <div class="col-md-4 col-6">
                            <div class="summary-tile">
                                <span class="summary-label text-secondary">Employee</span>
                                <span class="summary-value text-muted" data-comment-field="employee">John Doe</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="summary-tile">
                                <span class="summary-label text-secondary">Date</span>
                                <span class="summary-value text-muted" data-comment-field="date">March 08, 2025</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="summary-tile">
                                <span class="summary-label text-secondary">Status</span>
                                <span class="summary-value status-chip status-on-time" data-comment-field="status">Present</span>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3 modal-summary-row">
                        <div class="col-md-4 col-6">
                            <div class="summary-tile">
                                <span class="summary-label text-secondary">Clock In</span>
                                <span class="summary-value text-muted" data-comment-field="clock-in">08:53 AM</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="summary-tile">
                                <span class="summary-label text-secondary">Clock Out</span>
                                <span class="summary-value text-muted" data-comment-field="clock-out">05:15 PM</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="summary-tile">
                                <span class="summary-label text-secondary">Working Hours</span>
                                <span class="summary-value text-muted" data-comment-field="hours">8h 22m</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="attendanceCommentMessage" class="form-label d-flex align-items-center justify-content-between">
                            <span>Add Message</span>
                            <i class="bi bi-pencil-square"></i>
                        </label>
                        <textarea class="form-control" id="attendanceCommentMessage" rows="3" placeholder="Optional message to notify the employee...">Hi John, sharing this note for your records. Let me know if you need any adjustments.</textarea>
                        <div class="form-text">Optional: send a quick message along with this comment.</div>
                    </div>
                    <input type="hidden" id="attendanceCommentEmpId">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-send-fill"></i>
                        <span>Save Comment</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
