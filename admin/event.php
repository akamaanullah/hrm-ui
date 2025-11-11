<?php include 'header.php'; ?>

<div class="event-page">

    <section class="event-surface event-header-card">
        <div class="event-header-primary">
            <div class="event-title-group">
                <h2 class="event-heading">Calendar</h2>
                <p class="event-subheading">Stay on top of upcoming company meetings, launches, and celebrations.</p>
            </div>
            <label class="event-search">
                <i class="fas fa-search"></i>
                <span class="visually-hidden">Search events</span>
                <input type="search" placeholder="Search events" aria-label="Search events">
            </label>
        </div>

        <div class="event-toolbar">
            <div class="event-toolbar-left">
                <div class="event-range-controls">
                    <button type="button" class="event-nav-btn" aria-label="Previous month" data-event-nav="prev">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <div class="event-month-meta">
                        <h3 data-calendar-label="title">January 2025</h3>
                        <p data-calendar-label="range">Jan 1, 2025 — Jan 31, 2025</p>
                    </div>
                    <button type="button" class="event-nav-btn" aria-label="Next month" data-event-nav="next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
                <button type="button" class="event-today-btn" data-event-action="today">Today</button>
            </div>
            <div class="event-toolbar-right">
                <button type="button" class="event-add-btn btn-add-announcement" data-bs-toggle="modal" data-bs-target="#eventScheduleModal">
                    <i class="fas fa-plus"></i>
                    <span>Add event</span>
                </button>
            </div>
        </div>
    </section>

    <section class="event-surface event-calendar-card">
        <div class="event-calendar-wrapper">
            <div class="event-weekdays">
                <span>Mon</span>
                <span>Tue</span>
                <span>Wed</span>
                <span>Thu</span>
                <span>Fri</span>
                <span>Sat</span>
                <span>Sun</span>
            </div>

            <div class="event-calendar-grid" data-calendar-grid>
                <!-- Calendar cells rendered via JavaScript -->
            </div>
        </div>
    </section>
</div>

<!-- Create / Schedule Event Modal -->
<div class="modal fade event-modal" id="eventScheduleModal" tabindex="-1" aria-labelledby="eventScheduleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title text-dark" id="eventScheduleModalLabel">Create New Event</h5>
                    <p class="modal-subtitle mb-0">You can create meeting, event and task</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="event-modal-form">
                <div class="modal-body">
                    <div class="event-form-section">
                        <label class="form-label">Add a title</label>
                        <input type="text" class="form-control event-input" placeholder="Write title..." />
                    </div>

                    <div class="event-form-section">
                        <label class="form-label">What are you working on? <span class="required">*</span></label>
                        <div class="event-type-toggle">
                            <input type="radio" class="btn-check" name="eventType" id="eventTypeCelebration" autocomplete="off" checked>
                            <label class="btn btn-outline-event" for="eventTypeCelebration">Celebration</label>

                            <input type="radio" class="btn-check" name="eventType" id="eventTypeMeeting" autocomplete="off">
                            <label class="btn btn-outline-event" for="eventTypeMeeting">Meeting</label>

                            <input type="radio" class="btn-check" name="eventType" id="eventTypeHoliday" autocomplete="off">
                            <label class="btn btn-outline-event" for="eventTypeHoliday">Holiday</label>
                        </div>
                    </div>

                    <div class="event-form-section">
                        <label class="form-label">Description</label>
                        <textarea class="form-control event-input" rows="3" placeholder="Write text..."></textarea>
                    </div>

                    <div class="row g-3 event-form-section">
                        <div class="col-md-6">
                            <label class="form-label">Date input</label>
                            <div class="input-group event-input-group">
                                <input type="date" class="form-control event-input" value="2025-01-10" />
                                <span class="input-group-text event-input-addon" role="button" tabindex="0"><i class="fas fa-calendar"></i></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Time input</label>
                            <div class="input-group event-input-group">
                                <input type="time" class="form-control event-input" value="11:30" />
                                <span class="input-group-text event-input-addon" role="button" tabindex="0"><i class="fas fa-clock"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="event-form-section">
                        <label class="form-label">Attendees</label>
                        <div class="attendee-picker" data-attendee-picker>
                            <div class="attendee-input-wrapper">
                                <i class="fas fa-search attendee-input-icon"></i>
                                <input type="text" class="form-control event-input attendee-input" placeholder="Search attendee by name or email..." autocomplete="off" data-attendee-search>
                            </div>
                            <ul class="attendee-suggestions" data-attendee-suggestions></ul>
                            <div class="attendee-selected" data-attendee-selected></div>
                        </div>
                    </div>

                    <div class="event-form-section">
                        <label class="form-label">Add link</label>
                        <input type="url" class="form-control event-input" placeholder="https://example.com/meeting-link" />
                    </div>

                </div>
                <div class="modal-footer event-modal-footer">
                    <button type="submit" class="btn btn-primary event-create-btn">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit / Schedule Event Modal -->
<div class="modal fade event-modal" id="editEventScheduleModal" tabindex="-1" aria-labelledby="editEventScheduleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title text-dark" id="eventScheduleModalLabel">Edit Event</h5>
                    <p class="modal-subtitle mb-0">You can create meeting, event and task</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="event-modal-form">
                <div class="modal-body">
                    <div class="event-form-section">
                        <label class="form-label">Add a title</label>
                        <input type="text" class="form-control event-input" placeholder="Write title..." />
                    </div>

                    <div class="event-form-section">
                        <label class="form-label">What are you working on? <span class="required">*</span></label>
                        <div class="event-type-toggle">
                            <input type="radio" class="btn-check" name="eventType" id="eventTypeCelebration" autocomplete="off" checked>
                            <label class="btn btn-outline-event" for="eventTypeCelebration">Celebration</label>

                            <input type="radio" class="btn-check" name="eventType" id="eventTypeMeeting" autocomplete="off">
                            <label class="btn btn-outline-event" for="eventTypeMeeting">Meeting</label>

                            <input type="radio" class="btn-check" name="eventType" id="eventTypeHoliday" autocomplete="off">
                            <label class="btn btn-outline-event" for="eventTypeHoliday">Holiday</label>
                        </div>
                    </div>

                    <div class="event-form-section">
                        <label class="form-label">Description</label>
                        <textarea class="form-control event-input" rows="3" placeholder="Write text..."></textarea>
                    </div>

                    <div class="row g-3 event-form-section">
                        <div class="col-md-6">
                            <label class="form-label">Date input</label>
                            <div class="input-group event-input-group">
                                <input type="date" class="form-control event-input" value="2025-01-10" />
                                <span class="input-group-text event-input-addon" role="button" tabindex="0"><i class="fas fa-calendar"></i></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Time input</label>
                            <div class="input-group event-input-group">
                                <input type="time" class="form-control event-input" value="11:30" />
                                <span class="input-group-text event-input-addon" role="button" tabindex="0"><i class="fas fa-clock"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="event-form-section">
                        <label class="form-label">Attendees</label>
                        <div class="attendee-picker" data-attendee-picker>
                            <div class="attendee-input-wrapper">
                                <i class="fas fa-search attendee-input-icon"></i>
                                <input type="text" class="form-control event-input attendee-input" placeholder="Search attendee by name or email..." autocomplete="off" data-attendee-search>
                            </div>
                            <ul class="attendee-suggestions" data-attendee-suggestions></ul>
                            <div class="attendee-selected" data-attendee-selected></div>
                        </div>
                    </div>

                    <div class="event-form-section">
                        <label class="form-label">Add link</label>
                        <input type="url" class="form-control event-input" placeholder="https://example.com/meeting-link" />
                    </div>

                </div>
                <div class="modal-footer event-modal-footer">
                    <button type="submit" class="btn btn-primary event-create-btn">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Day Events Modal -->
<div class="modal fade event-modal" id="eventDayModal" tabindex="-1" aria-labelledby="eventDayModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title text-dark" id="eventDayModalLabel">Events</h5>
                    <p class="modal-subtitle mb-0" data-day-modal-label>January 10, 2025</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body event-day-modal-body">
                <div class="event-day-list" data-day-events></div>
            </div>
            <div class="modal-footer event-modal-footer">
            </div>
        </div>
    </div>
</div>

<!-- Event Details Modal -->
<div class="modal fade event-modal" id="eventDetailsModal" tabindex="-1" aria-labelledby="eventDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title text-dark" id="eventDetailsModalLabel">Event Details</h5>
                    <p class="modal-subtitle mb-0">Review information for this calendar item</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body event-details-body">
                <div class="event-detail-group">
                    <span class="event-detail-label">Event title</span>
                    <p class="event-detail-value" data-event-detail="title">Celebration Lunch</p>
                </div>

                <div class="event-detail-group">
                    <span class="event-detail-label">Category</span>
                    <span class="event-detail-badge celebration" data-event-detail="category">Celebration</span>
                </div>

                <div class="event-detail-group">
                    <span class="event-detail-label">When</span>
                    <div class="event-detail-flex">
                        <span class="event-detail-chip">
                            <i class="fas fa-calendar"></i>
                            <span data-event-detail="date">January 10, 2025</span>
                        </span>
                        <span class="event-detail-chip">
                            <i class="fas fa-clock"></i>
                            <span data-event-detail="time">11:30 AM</span>
                        </span>
                    </div>
                </div>

                <div class="event-detail-group">
                    <span class="event-detail-label">Attendees</span>
                    <div class="event-detail-attendees" data-event-detail="attendees">
                        <span class="event-detail-attendee">
                            <span class="avatar" style="background:#2563eb;">SMB</span>
                            <span class="name">Syed Mahad Bukhari</span>
                        </span>
                        <span class="event-detail-attendee">
                            <span class="avatar" style="background:#f97316;">SS</span>
                            <span class="name">Shayan Shaikh</span>
                        </span>
                    </div>
                </div>

                <div class="event-detail-group">
                    <span class="event-detail-label">Link</span>
                    <a href="#" target="_blank" rel="noopener" class="event-detail-link" data-event-detail="link">https://example.com/meeting-link</a>
                </div>

                <div class="event-detail-group">
                    <span class="event-detail-label">Description</span>
                    <p class="event-detail-value" data-event-detail="description">
                        Team celebration for achieving the quarterly milestone. Casual lunch at the rooftop cafe.
                    </p>
                </div>
            </div>
            <div class="modal-footer event-modal-footer">
            <button type="submit" class="btn btn-primary event-create-btn" data-bs-toggle="modal" data-bs-target="#editEventScheduleModal">Edit</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
