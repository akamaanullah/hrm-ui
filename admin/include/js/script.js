// ===== HRM Dashboard JavaScript =====

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all functionality
    initMobileMenu();
    initNavigation();
    initCharts();
    initResponsiveFeatures();
    initAnimations();
    initEscKeyRedirect();
});

// ===== MOBILE MENU FUNCTIONALITY =====
function initMobileMenu() {
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.querySelector('.main-content');
    
    if (mobileMenuToggle && sidebar) {
        mobileMenuToggle.addEventListener('click', function() {
            sidebar.classList.toggle('open');
            document.body.classList.toggle('menu-open');
            
            // Prevent body scroll when sidebar is open
            if (sidebar.classList.contains('open')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
            
            // Update toggle icon
            const icon = this.querySelector('i');
            if (sidebar.classList.contains('open')) {
                icon.className = 'fas fa-times';
            } else {
                icon.className = 'fas fa-bars';
            }
        });
        
        // Close menu when clicking outside on mobile
        document.addEventListener('click', function(e) {
            if (window.innerWidth <= 991) {
                if (!sidebar.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
                    sidebar.classList.remove('open');
                    document.body.classList.remove('menu-open');
                    document.body.style.overflow = '';
                    mobileMenuToggle.querySelector('i').className = 'fas fa-bars';
                }
            }
        });
        
        // Close menu on window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 991) {
                sidebar.classList.remove('open');
                document.body.classList.remove('menu-open');
                document.body.style.overflow = '';
                mobileMenuToggle.querySelector('i').className = 'fas fa-bars';
            }
        });
    }

    // Sidebar Close Button
    const sidebarCloseBtn = document.getElementById('sidebarCloseBtn');
    if (sidebarCloseBtn && sidebar) {
        sidebarCloseBtn.addEventListener('click', function() {
            sidebar.classList.remove('open');
            document.body.classList.remove('menu-open');
            document.body.style.overflow = '';
            
            // Update toggle icon
            if (mobileMenuToggle) {
                mobileMenuToggle.querySelector('i').className = 'fas fa-bars';
            }
        });
    }
}

// ===== NAVIGATION FUNCTIONALITY =====
function initNavigation() {
    // Simple HTML navigation - no JavaScript interference
    // Just close mobile menu when link is clicked
    const navItems = document.querySelectorAll('.nav-item');
    
    navItems.forEach(item => {
        item.addEventListener('click', function() {
            // Close mobile menu if open (for mobile responsiveness)
            const sidebar = document.getElementById('sidebar');
            if (sidebar && sidebar.classList.contains('open')) {
                sidebar.classList.remove('open');
                document.body.classList.remove('menu-open');
                document.body.style.overflow = '';
                const toggleBtn = document.getElementById('mobileMenuToggle');
                if (toggleBtn) {
                    toggleBtn.querySelector('i').className = 'fas fa-bars';
                }
            }
            // Let browser handle navigation naturally - no preventDefault()
        });
    });
}


// ===== CHARTS AND ANIMATIONS =====
function initCharts() {
    // Removed heavy animations for better performance
    // Just initialize tooltips (lightweight)
    initTooltips();
}

// Removed heavy animation functions for better performance

function initTooltips() {
    // Removed tooltips for better performance
    // Can be enabled if needed later
}

// Removed tooltip functions for better performance

// ===== RESPONSIVE FEATURES =====
function initResponsiveFeatures() {
    // Handle window resize (debounced for performance)
    window.addEventListener('resize', debounce(handleResize, 250));
    
    // Removed ResizeObserver for charts (heavy performance impact)
    // Charts are already responsive via CSS
    
    // Handle orientation change
    window.addEventListener('orientationchange', function() {
        setTimeout(handleResize, 100);
    });
}

function handleResize() {
    const width = window.innerWidth;
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.querySelector('.main-content');
    
    // Update sidebar behavior based on screen size
    if (width <= 991) {
        if (sidebar) {
            sidebar.classList.remove('open');
        }
        if (mainContent) {
            mainContent.style.marginLeft = '0';
        }
    } else {
        if (sidebar) {
            sidebar.classList.remove('open');
        }
        // if (mainContent) {
        //     mainContent.style.marginLeft = '280px';
        // }
    }
    
    // Removed updateChartSizes() - charts are responsive via CSS
}

// Removed ResizeObserver functions for better performance

// ===== ANIMATIONS =====
function initAnimations() {
    // Removed heavy hover effects for better performance
    // Hover effects are already handled via CSS transitions
}

// ===== UTILITY FUNCTIONS =====
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

function showPageTransition(page) {
    // Page transition without preloader
    console.log('Navigating to:', page);
}

// ===== EXPORT FUNCTIONALITY =====
function initExport() {
    const exportBtn = document.querySelector('.export-btn');
    
    if (exportBtn) {
        exportBtn.addEventListener('click', function() {
            // Show export options
            showExportModal();
        });
    }
}

function showExportModal() {
    // Create modal for export options
    const modal = document.createElement('div');
    modal.className = 'export-modal';
    modal.innerHTML = `
        <div class="modal-content">
            <h3>Export Dashboard</h3>
            <div class="export-options">
                <button class="export-option" data-format="pdf">
                    <i class="fas fa-file-pdf"></i>
                    Export as PDF
                </button>
                <button class="export-option" data-format="excel">
                    <i class="fas fa-file-excel"></i>
                    Export as Excel
                </button>
                <button class="export-option" data-format="image">
                    <i class="fas fa-image"></i>
                    Export as Image
                </button>
            </div>
            <button class="close-modal">Close</button>
        </div>
    `;
    
    modal.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10000;
    `;
    
    const modalContent = modal.querySelector('.modal-content');
    modalContent.style.cssText = `
        background: rgba(26, 77, 58, 0.95);
        padding: 2rem;
        border-radius: 12px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        max-width: 400px;
        width: 90%;
    `;
    
    document.body.appendChild(modal);
    
    // Handle export options
    const exportOptions = modal.querySelectorAll('.export-option');
    exportOptions.forEach(option => {
        option.addEventListener('click', function() {
            const format = this.getAttribute('data-format');
            handleExport(format);
            modal.remove();
        });
    });
    
    // Handle close
    modal.querySelector('.close-modal').addEventListener('click', function() {
        modal.remove();
    });
    
    // Close on backdrop click
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.remove();
        }
    });
}

function handleExport(format) {
    // Export without preloader
    showNotification(`Dashboard exported as ${format.toUpperCase()} successfully!`, 'success');
}

function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.textContent = message;
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: ${type === 'success' ? '#4CAF50' : type === 'error' ? '#f44336' : '#2196F3'};
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 8px;
        z-index: 10001;
        transform: translateX(100%);
        transition: transform 0.3s ease;
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.transform = 'translateX(0)';
    }, 100);
    
    setTimeout(() => {
        notification.style.transform = 'translateX(100%)';
        setTimeout(() => {
            notification.remove();
        }, 300);
    }, 3000);
}

// ===== INITIALIZE EXPORT =====
initExport();

// ===== CSS ANIMATIONS =====
const style = document.createElement('style');
style.textContent = `
    .export-option {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        width: 100%;
        padding: 1rem;
        margin: 0.5rem 0;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 8px;
        color: white;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .export-option:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-2px);
    }
    
    .close-modal {
        width: 100%;
        padding: 0.75rem;
        margin-top: 1rem;
        background: #4CAF50;
        border: none;
        border-radius: 8px;
        color: white;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .close-modal:hover {
        background: #45a049;
    }
`;
document.head.appendChild(style);

// ===== ESC KEY REDIRECT TO WELCOME SCREEN =====
function initEscKeyRedirect() {
    document.addEventListener('keydown', function(e) {
        // Check if ESC key is pressed
        if (e.key === 'Escape' || e.keyCode === 27) {
            // Get current page
            const currentPage = window.location.pathname.split('/').pop();
            
            // Only redirect if not already on welcome screen (index.php)
            if (currentPage !== 'index.php' && currentPage !== 'admin/index.php') {
                // Redirect to welcome screen
                window.location.href = 'index.php';
            }
        }
    });
}

// ===== LOGOUT FUNCTIONALITY =====
function handleLogout() {
    // Confirmation dialog
    if (confirm('Are you sure you want to logout?')) {
        // Here you can add actual logout logic
        // For example: window.location.href = 'logout.php';
        // Or: window.location.href = 'index.php';
        
        // For now, just redirect to login page (adjust path as needed)
        window.location.href = '../index.php';
    }
}
