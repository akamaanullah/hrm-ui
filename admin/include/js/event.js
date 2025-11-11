(() => {
    const calendarContainer = document.querySelector('[data-calendar-grid]');
    const monthTitleEl = document.querySelector('[data-calendar-label="title"]');
    const monthRangeEl = document.querySelector('[data-calendar-label="range"]');
    const navButtons = document.querySelectorAll('[data-event-nav]');
    const todayButton = document.querySelector('[data-event-action="today"]');

    if (!calendarContainer || !monthTitleEl || !monthRangeEl) {
        return;
    }

    const EVENT_CATEGORY_CLASS = {
        celebration: 'event-chip--pink',
        meeting: 'event-chip--navy',
        holiday: 'event-chip--orange'
    };

    const MAX_VISIBLE_EVENTS = 3;
    const ATTENDEE_DIRECTORY = [
        { id: 'SMB', name: 'Syed Mahad Bukhari', email: 'mah...@company.com', initials: 'SMB', color: '#2563eb' },
        { id: 'SS', name: 'Shayan Shaikh', email: 'shayan@company.com', initials: 'SS', color: '#f97316' },
        { id: 'US', name: 'Unzila Shaikh', email: 'unzila@company.com', initials: 'US', color: '#22c55e' },
        { id: 'ZK', name: 'Zain Ul Abidin Khan', email: 'zain@company.com', initials: 'ZK', color: '#8b5cf6' },
        { id: 'AK', name: 'Ayesha Khan', email: 'ayesha@company.com', initials: 'AK', color: '#ec4899' },
        { id: 'RT', name: 'Rahul Thakur', email: 'rahul@company.com', initials: 'RT', color: '#0ea5e9' },
        { id: 'CM', name: 'Chloe Martin', email: 'chloe@company.com', initials: 'CM', color: '#facc15' }
    ];

    const seededEvents = {
        '2025-01-01': [
            {
                title: 'New Year Townhall',
                time: '10:00 AM',
                category: 'meeting',
                description: 'Company-wide meeting to outline goals for the year.',
                link: 'https://example.com/townhall',
                attendees: ['SMB', 'SS', 'US']
            },
            {
                title: 'Welcome Back Celebration',
                time: '1:30 PM',
                category: 'celebration',
                description: 'Casual lunch gathering to welcome everyone back.',
                link: '',
                attendees: ['SMB', 'US', 'AK', 'RT']
            },
            {
                title: 'Company Holiday',
                time: 'All day',
                category: 'holiday',
                description: 'Office closed for New Year holiday.',
                link: '',
                attendees: []
            }
        ],
        '2025-01-02': [
            {
                title: 'Strategy Sync',
                time: '9:30 AM',
                category: 'meeting',
                description: 'Quarterly strategy alignment session.',
                link: 'https://example.com/strategy',
                attendees: ['SMB', 'SS', 'ZK', 'CM']
            },
            {
                title: 'Client Review Call',
                time: '2:00 PM',
                category: 'meeting',
                description: 'Monthly performance review with key client.',
                link: 'https://example.com/client',
                attendees: ['SS', 'US']
            },
            {
                title: 'Birthday Spotlight',
                time: '4:30 PM',
                category: 'celebration',
                description: 'Celebrating January birthdays in the lounge.',
                link: '',
                attendees: ['SMB', 'US', 'AK', 'RT', 'CM']
            },
            {
                title: 'Office Closed (Maintenance)',
                time: 'All day',
                category: 'holiday',
                description: 'Facilities maintenance scheduled. Remote work recommended.',
                link: '',
                attendees: []
            }
        ],
        '2025-01-03': [
            {
                title: 'Design Huddle',
                time: '11:00 AM',
                category: 'meeting',
                description: 'Weekly design team huddle and backlog grooming.',
                link: 'https://example.com/design',
                attendees: ['US', 'AK', 'CM']
            },
            {
                title: 'Product Demo',
                time: '3:30 PM',
                category: 'meeting',
                description: 'Internal demo of the new dashboard features.',
                link: 'https://example.com/demo',
                attendees: ['SMB', 'RT', 'ZK']
            }
        ],
        '2025-01-04': [
            {
                title: 'Team Dinner',
                time: '7:00 PM',
                category: 'celebration',
                description: 'Team dinner at downtown restaurant.',
                link: '',
                attendees: ['SMB', 'SS', 'US', 'ZK', 'AK', 'RT', 'CM']
            }
        ],
        '2025-01-05': [
            {
                title: 'Annual Day Preparation',
                time: '10:00 AM',
                category: 'celebration',
                description: 'Planning committee sync for annual day event.',
                link: '',
                attendees: ['SMB', 'US', 'AK']
            },
            {
                title: 'Support Rotation Brief',
                time: '2:00 PM',
                category: 'meeting',
                description: 'Hand-off meeting for support rotation assignments.',
                link: '',
                attendees: ['SS', 'RT']
            }
        ],
        '2025-01-06': [
            {
                title: 'Marketing Weekly Kickoff',
                time: '9:00 AM',
                category: 'meeting',
                description: 'Weekly kickoff for marketing campaigns.',
                link: 'https://example.com/marketing',
                attendees: ['SMB', 'US', 'AK', 'CM']
            },
            {
                title: 'Quarter Milestone Party',
                time: '5:30 PM',
                category: 'celebration',
                description: 'Celebrating milestone completion with snacks.',
                link: '',
                attendees: ['SMB', 'SS', 'US', 'ZK', 'AK', 'RT', 'CM']
            }
        ],
        '2025-01-07': [
            {
                title: 'Public Holiday - Regional Festival',
                time: 'All day',
                category: 'holiday',
                description: 'Regional public holiday. Office closed.',
                link: '',
                attendees: []
            }
        ],
        '2025-01-08': [
            {
                title: 'Sales Pipeline Review',
                time: '9:30 AM',
                category: 'meeting',
                description: 'Pipeline review with sales leadership.',
                link: 'https://example.com/pipeline',
                attendees: ['SS', 'RT', 'CM']
            },
            {
                title: 'Customer Success Roundtable',
                time: '1:00 PM',
                category: 'meeting',
                description: 'Roundtable with customer success managers.',
                link: 'https://example.com/success',
                attendees: ['US', 'AK', 'CM']
            },
            {
                title: 'Launch Celebration',
                time: '6:00 PM',
                category: 'celebration',
                description: 'Celebrating new product launch via online toast.',
                link: 'https://example.com/celebrate',
                attendees: ['SMB', 'SS', 'US', 'AK', 'RT']
            }
        ],
        '2025-01-09': [
            {
                title: 'Workshop: Team Building',
                time: '4:00 PM',
                category: 'celebration',
                description: 'Interactive workshop to enhance collaboration.',
                link: '',
                attendees: ['SMB', 'US', 'AK', 'RT']
            },
            {
                title: 'Partner Sync',
                time: '11:30 AM',
                category: 'meeting',
                description: 'Sync call with strategic partner team.',
                link: 'https://example.com/partner',
                attendees: ['SS', 'ZK']
            }
        ],
        '2025-01-10': [
            {
                title: 'Sprint Planning',
                time: '9:00 AM',
                category: 'meeting',
                description: 'Planning session for sprint 12 tasks.',
                link: 'https://example.com/sprint',
                attendees: ['SMB', 'US', 'ZK']
            },
            {
                title: 'Mid-Month Celebration',
                time: '3:00 PM',
                category: 'celebration',
                description: 'Mid-month treat in the cafeteria.',
                link: '',
                attendees: ['SMB', 'SS', 'US', 'AK', 'RT', 'CM']
            },
            {
                title: 'Optional Day Off',
                time: 'All day',
                category: 'holiday',
                description: 'Optional day off for teams ahead of launch.',
                link: '',
                attendees: []
            }
        ],
        '2025-01-11': [
            {
                title: 'Leadership Fireside',
                time: '10:30 AM',
                category: 'meeting',
                description: 'Informal Q&A with leadership.',
                link: 'https://example.com/fireside',
                attendees: ['SMB', 'SS', 'US', 'ZK', 'AK']
            },
            {
                title: 'Team Picnic',
                time: '1:00 PM',
                category: 'celebration',
                description: 'Outdoor picnic at Central Park.',
                link: '',
                attendees: ['SMB', 'SS', 'US', 'ZK', 'AK', 'RT', 'CM']
            }
        ],
        '2025-01-12': [
            {
                title: 'Volunteer Day',
                time: 'All day',
                category: 'holiday',
                description: 'Company-sponsored volunteering day.',
                link: '',
                attendees: []
            }
        ]
    };

    const seededMonths = new Set(
        Object.keys(seededEvents).map(date => date.slice(0, 7))
    );

    const toISODate = date => date.toISOString().split('T')[0];

    const formatMonthTitle = date =>
        date.toLocaleDateString(undefined, { year: 'numeric', month: 'long' });

    const formatRange = (start, end) => {
        const formatter = new Intl.DateTimeFormat(undefined, {
            month: 'short',
            day: 'numeric',
            year: 'numeric'
        });
        return `${formatter.format(start)} — ${formatter.format(end)}`;
    };

    let currentPointer = new Date(2025, 0, 1);
    const today = new Date();

    const renderCalendar = () => {
        const year = currentPointer.getFullYear();
        const month = currentPointer.getMonth();

        const startOfMonth = new Date(year, month, 1);
        const endOfMonth = new Date(year, month + 1, 0);

        monthTitleEl.textContent = formatMonthTitle(currentPointer);
        monthRangeEl.textContent = formatRange(startOfMonth, endOfMonth);

        const firstDayOffset = (startOfMonth.getDay() + 6) % 7;
        const gridStart = new Date(startOfMonth);
        gridStart.setDate(startOfMonth.getDate() - firstDayOffset);

        calendarContainer.innerHTML = '';

        for (let index = 0; index < 42; index += 1) {
            const cellDate = new Date(gridStart);
            cellDate.setDate(gridStart.getDate() + index);
            const isoKey = toISODate(cellDate);
            const isCurrentMonth = cellDate.getMonth() === month;
            const isToday =
                cellDate.getFullYear() === today.getFullYear() &&
                cellDate.getMonth() === today.getMonth() &&
                cellDate.getDate() === today.getDate();

            const cell = document.createElement('div');
            cell.className = 'event-calendar-cell';
            if (!isCurrentMonth) {
                cell.classList.add('is-muted');
            }
            if (isToday) {
                cell.classList.add('is-today');
            }

            const header = document.createElement('div');
            header.className = 'event-day-header';
            const dayNumber = document.createElement('span');
            dayNumber.className = 'event-day-number';
            dayNumber.textContent = String(cellDate.getDate());
            header.appendChild(dayNumber);
            cell.appendChild(header);

            const body = document.createElement('div');
            body.className = 'event-day-body';

            const events = seededEvents[isoKey] || [];
            if (events.length) {
                const visibleEvents = events.slice(0, MAX_VISIBLE_EVENTS);
                visibleEvents.forEach((eventItem, visibleIndex) => {
                    const chip = document.createElement('div');
                    const categoryClass =
                        EVENT_CATEGORY_CLASS[eventItem.category] || EVENT_CATEGORY_CLASS.meeting;
                    chip.className = `event-chip ${categoryClass}`;
                    chip.dataset.eventDate = isoKey;
                    chip.dataset.eventIndex = String(events.indexOf(eventItem));

                    const titleSpan = document.createElement('span');
                    titleSpan.className = 'event-chip-title';
                    titleSpan.textContent = eventItem.title;

                    const timeSpan = document.createElement('span');
                    timeSpan.className = 'event-chip-time';
                    timeSpan.textContent = eventItem.time;

                    chip.appendChild(titleSpan);
                    chip.appendChild(timeSpan);
                    body.appendChild(chip);
                });

                const overflowCount = events.length - MAX_VISIBLE_EVENTS;
                if (overflowCount > 0) {
                    const moreBadge = document.createElement('span');
                    moreBadge.className = 'event-more-indicator';
                    moreBadge.textContent = `+${overflowCount} more`;
                    moreBadge.dataset.eventDate = isoKey;
                    body.appendChild(moreBadge);
                }
            }

            cell.appendChild(body);
            calendarContainer.appendChild(cell);
        }
    };

    navButtons.forEach(button => {
        button.addEventListener('click', () => {
            const direction = button.getAttribute('data-event-nav');
            currentPointer.setMonth(currentPointer.getMonth() + (direction === 'prev' ? -1 : 1));
            renderCalendar();
        });
    });

    if (todayButton) {
        todayButton.addEventListener('click', () => {
            currentPointer = new Date(today.getFullYear(), today.getMonth(), 1);
            renderCalendar();
        });
    }

    if (seededMonths.size && !seededMonths.has('2025-01')) {
        seededMonths.add('2025-01');
    }

    renderCalendar();

    const pickerAddons = document.querySelectorAll('#eventScheduleModal .event-input-addon');
    pickerAddons.forEach(addon => {
        const input = addon.previousElementSibling;
        if (!(input instanceof HTMLInputElement)) return;

        const openPicker = () => {
            if (typeof input.showPicker === 'function') input.showPicker();
            else {
                input.focus();
                input.click();
            }
        };

        addon.addEventListener('click', openPicker);
        addon.addEventListener('keydown', event => {
            if (event.key === 'Enter' || event.key === ' ') {
                event.preventDefault();
                openPicker();
            }
        });
    });

    const attendeePicker = document.querySelector('[data-attendee-picker]');
    if (attendeePicker) {
        const searchInput = attendeePicker.querySelector('[data-attendee-search]');
        const suggestionsList = attendeePicker.querySelector('[data-attendee-suggestions]');
        const selectedContainer = attendeePicker.querySelector('[data-attendee-selected]');
        const selectedIds = new Set();

        const hideSuggestions = () => {
            suggestionsList.classList.remove('is-visible');
            suggestionsList.innerHTML = '';
        };

        const renderSelected = () => {
            selectedContainer.innerHTML = '';
            selectedIds.forEach(id => {
                const attendee = ATTENDEE_DIRECTORY.find(item => item.id === id);
                if (!attendee) return;

                const chip = document.createElement('span');
                chip.className = 'attendee-chip';

                const avatar = document.createElement('span');
                avatar.className = 'attendee-avatar';
                avatar.textContent = attendee.initials;
                avatar.style.background = attendee.color;

                const label = document.createElement('span');
                label.textContent = attendee.name;

                const removeBtn = document.createElement('button');
                removeBtn.type = 'button';
                removeBtn.className = 'remove-attendee';
                removeBtn.setAttribute('aria-label', `Remove ${attendee.name}`);
                removeBtn.innerHTML = '&times;';
                removeBtn.addEventListener('click', () => {
                    selectedIds.delete(id);
                    renderSelected();
                });

                chip.appendChild(avatar);
                chip.appendChild(label);
                chip.appendChild(removeBtn);
                selectedContainer.appendChild(chip);
            });
        };

        const renderSuggestions = value => {
            const term = value.trim().toLowerCase();
            if (!term) {
                hideSuggestions();
                return;
            }

            const matches = ATTENDEE_DIRECTORY.filter(attendee =>
                attendee.name.toLowerCase().includes(term) ||
                attendee.email.toLowerCase().includes(term)
            ).slice(0, 6);

            if (!matches.length) {
                hideSuggestions();
                return;
            }

            suggestionsList.innerHTML = '';
            matches.forEach(attendee => {
                const li = document.createElement('li');

                const avatar = document.createElement('span');
                avatar.className = 'attendee-avatar';
                avatar.textContent = attendee.initials;
                avatar.style.background = attendee.color;

                const details = document.createElement('div');
                details.style.display = 'flex';
                details.style.flexDirection = 'column';

                const nameSpan = document.createElement('span');
                nameSpan.textContent = attendee.name;

                const emailSpan = document.createElement('span');
                emailSpan.textContent = attendee.email;
                emailSpan.style.fontSize = '0.7rem';
                emailSpan.style.color = '#64748b';

                details.appendChild(nameSpan);
                details.appendChild(emailSpan);

                li.appendChild(avatar);
                li.appendChild(details);

                li.addEventListener('click', () => {
                    selectedIds.add(attendee.id);
                    renderSelected();
                    searchInput.value = '';
                    hideSuggestions();
                    searchInput.focus();
                });

                suggestionsList.appendChild(li);
            });

            suggestionsList.classList.add('is-visible');
        };

        searchInput.addEventListener('input', () => renderSuggestions(searchInput.value));
        searchInput.addEventListener('focus', () => renderSuggestions(searchInput.value));

        document.addEventListener('click', event => {
            if (!attendeePicker.contains(event.target)) hideSuggestions();
        });

        renderSelected();
    }

    const detailsModalEl = document.getElementById('eventDetailsModal');
    const detailsModal = detailsModalEl ? new bootstrap.Modal(detailsModalEl) : null;
    const detailNodes = detailsModalEl
        ? {
            title: detailsModalEl.querySelector('[data-event-detail="title"]'),
            category: detailsModalEl.querySelector('[data-event-detail="category"]'),
            date: detailsModalEl.querySelector('[data-event-detail="date"]'),
            time: detailsModalEl.querySelector('[data-event-detail="time"]'),
            attendees: detailsModalEl.querySelector('[data-event-detail="attendees"]'),
            link: detailsModalEl.querySelector('[data-event-detail="link"]'),
            description: detailsModalEl.querySelector('[data-event-detail="description"]')
        }
        : null;

    const dayModalEl = document.getElementById('eventDayModal');
    const dayModal = dayModalEl ? new bootstrap.Modal(dayModalEl) : null;
    const dayModalNodes = dayModalEl
        ? {
            label: dayModalEl.querySelector('[data-day-modal-label]'),
            list: dayModalEl.querySelector('[data-day-events]')
        }
        : null;

    const openEventDetails = (dateKey, index) => {
        if (!detailsModal || !detailNodes) return;
        const events = seededEvents[dateKey] || [];
        const eventData = events[index];
        if (!eventData) return;

        detailNodes.title.textContent = eventData.title;
        detailNodes.category.textContent =
            eventData.category.charAt(0).toUpperCase() + eventData.category.slice(1);
        detailNodes.category.classList.remove('celebration', 'meeting', 'holiday');
        detailNodes.category.classList.add(eventData.category);

        const dateObj = new Date(dateKey);
        detailNodes.date.textContent = dateObj.toLocaleDateString(undefined, {
            month: 'long',
            day: 'numeric',
            year: 'numeric'
        });
        detailNodes.time.textContent = eventData.time;

        detailNodes.attendees.innerHTML = '';
        if (eventData.attendees?.length) {
            eventData.attendees.forEach(attId => {
                const attendee = ATTENDEE_DIRECTORY.find(item => item.id === attId);
                if (!attendee) return;

                const wrapper = document.createElement('span');
                wrapper.className = 'event-detail-attendee';

                const avatar = document.createElement('span');
                avatar.className = 'avatar';
                avatar.textContent = attendee.initials;
                avatar.style.background = attendee.color;

                const name = document.createElement('span');
                name.className = 'name';
                name.textContent = attendee.name;

                wrapper.appendChild(avatar);
                wrapper.appendChild(name);
                detailNodes.attendees.appendChild(wrapper);
            });
        } else {
            detailNodes.attendees.textContent = 'No attendees linked';
        }

        if (eventData.link) {
            detailNodes.link.textContent = eventData.link;
            detailNodes.link.href = eventData.link;
        } else {
            detailNodes.link.textContent = 'No link provided';
            detailNodes.link.removeAttribute('href');
        }

        detailNodes.description.textContent = eventData.description || 'No description provided.';

        detailsModal.show();
    };

    const openDayEvents = dateKey => {
        if (!dayModal || !dayModalNodes) return;
        const events = seededEvents[dateKey] || [];
        const dateObj = new Date(dateKey);
        dayModalNodes.label.textContent = dateObj.toLocaleDateString(undefined, {
            month: 'long',
            day: 'numeric',
            year: 'numeric'
        });

        dayModalNodes.list.innerHTML = '';

        if (!events.length) {
            const emptyMessage = document.createElement('p');
            emptyMessage.className = 'text-muted mb-0';
            emptyMessage.textContent = 'No events scheduled for this day.';
            dayModalNodes.list.appendChild(emptyMessage);
        } else {
            events.forEach((eventItem, index) => {
                const chip = document.createElement('div');
                const categoryClass =
                    EVENT_CATEGORY_CLASS[eventItem.category] || EVENT_CATEGORY_CLASS.meeting;
                chip.className = `event-chip ${categoryClass}`;
                chip.dataset.eventDate = dateKey;
                chip.dataset.eventIndex = String(index);

                const titleSpan = document.createElement('span');
                titleSpan.className = 'event-chip-title';
                titleSpan.textContent = eventItem.title;

                const timeSpan = document.createElement('span');
                timeSpan.className = 'event-chip-time';
                timeSpan.textContent = eventItem.time;

                chip.appendChild(titleSpan);
                chip.appendChild(timeSpan);
                dayModalNodes.list.appendChild(chip);
            });
        }

        dayModal.show();
    };

    calendarContainer.addEventListener('click', event => {
        const moreBadge = event.target.closest('.event-more-indicator');
        if (moreBadge) {
            const dateKey = moreBadge.dataset.eventDate;
            if (dateKey) openDayEvents(dateKey);
            return;
        }

        const chip = event.target.closest('.event-chip');
        if (!chip) return;
        const dateKey = chip.dataset.eventDate;
        const index = Number(chip.dataset.eventIndex);
        openEventDetails(dateKey, index);
    });

    if (dayModalEl) {
        dayModalEl.addEventListener('click', event => {
            const chip = event.target.closest('.event-chip');
            if (!chip) return;
            const dateKey = chip.dataset.eventDate;
            const index = Number(chip.dataset.eventIndex);
            dayModal.hide();
            openEventDetails(dateKey, index);
        });
    }
})();