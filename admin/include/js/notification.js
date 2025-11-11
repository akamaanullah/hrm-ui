// ===== NOTIFICATION REDIRECT FUNCTIONALITY =====

document.addEventListener('DOMContentLoaded', function() {
    initNotificationRedirects();
});

function initNotificationRedirects() {
    const notificationItems = document.querySelectorAll('.notification-item[data-redirect]');
    
    notificationItems.forEach(item => {
        // Make notification content clickable
        const notificationContent = item.querySelector('.notification-content');
        const notificationImage = item.querySelector('.notification-image-wrapper');
        const redirectUrl = item.getAttribute('data-redirect');
        
        if (notificationContent && redirectUrl) {
            // Add click handler to content area
            notificationContent.addEventListener('click', function(e) {
                // Don't redirect if clicking on a button
                if (!e.target.closest('.notification-actions')) {
                    window.location.href = redirectUrl;
                }
            });
            
            // Add click handler to image area
            if (notificationImage) {
                notificationImage.addEventListener('click', function(e) {
                    if (!e.target.closest('.notification-actions')) {
                        window.location.href = redirectUrl;
                    }
                });
            }
            
            // Click handler for the entire item (excluding buttons)
            item.addEventListener('click', function(e) {
                // Only redirect if not clicking on the action buttons
                if (!e.target.closest('.notification-actions') && !e.target.closest('.btn-notification-action')) {
                    window.location.href = redirectUrl;
                }
            });
        }
    });
}

