$(document).ready(function() {
    // ===== ANNOUNCEMENT FILTER FUNCTIONALITY =====
    
    function filterAnnouncements() {
        var searchValue = $('#announcementSearch').val().toLowerCase();
        var departmentValue = $('#announcementDepartmentFilter').val();
        var statusValue = $('#announcementStatusFilter').val();
        
        $('.announcement-card').each(function() {
            var $card = $(this);
            var title = ($card.data('title') || '').toLowerCase();
            var department = $card.data('department') || '';
            var status = $card.data('status') || '';
            var description = $card.find('.announcement-description').text().toLowerCase();
            
            var matchesSearch = searchValue === '' || 
                title.includes(searchValue) || 
                description.includes(searchValue);
            
            var matchesDepartment = departmentValue === '' || department === departmentValue;
            var matchesStatus = statusValue === '' || status === statusValue;
            
            if (matchesSearch && matchesDepartment && matchesStatus) {
                $card.show();
            } else {
                $card.hide();
            }
        });
    }
    
    // Search filter
    $('#announcementSearch').on('keyup', function() {
        filterAnnouncements();
    });
    
    // Department filter
    $('#announcementDepartmentFilter').on('change', function() {
        filterAnnouncements();
    });
    
    // Status filter
    $('#announcementStatusFilter').on('change', function() {
        filterAnnouncements();
    });
    
    // Clear Filters button
    $('#clearAnnouncementFilters').on('click', function() {
        $('#announcementSearch').val('');
        $('#announcementDepartmentFilter').val('');
        $('#announcementStatusFilter').val('');
        filterAnnouncements();
    });
});

