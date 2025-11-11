// ===== ADD EMPLOYEE FORM FUNCTIONALITY =====

let currentStep = 1;
const totalSteps = 4;
let currentDateInput = null;

$(document).ready(function() {
    // Initialize form
    updateStepIndicator();
    updateNavigationButtons();
    
    // File input change handlers
    handleFileInputs();
    
    // Form submission
    $('#addEmployeeForm').on('submit', function(e) {
        e.preventDefault();
        // Handle form submission here
        console.log('Form submitted');
        // You can add AJAX call here to submit the form
    });
});

// Change Step Function
function changeStep(direction) {
    // Validate current step before moving
    if (direction > 0 && !validateCurrentStep()) {
        return;
    }
    
    // Update step
    currentStep += direction;
    
    // Ensure step is within bounds
    if (currentStep < 1) {
        currentStep = 1;
    } else if (currentStep > totalSteps) {
        currentStep = totalSteps;
    }
    
    // Update UI
    updateStepIndicator();
    updateFormSteps();
    updateNavigationButtons();
    
    // Scroll to top of form
    $('.add-employee-form').get(0).scrollIntoView({ behavior: 'smooth', block: 'start' });
}

// Update Step Indicator
function updateStepIndicator() {
    $('.step-item').each(function(index) {
        const stepNumber = index + 1;
        $(this).removeClass('active completed');
        
        if (stepNumber < currentStep) {
            $(this).addClass('completed');
        } else if (stepNumber === currentStep) {
            $(this).addClass('active');
        }
    });
}

// Update Form Steps Visibility
function updateFormSteps() {
    $('.form-step').removeClass('active');
    $(`.form-step[data-step="${currentStep}"]`).addClass('active');
}

// Update Navigation Buttons
function updateNavigationButtons() {
    // Previous Button
    if (currentStep === 1) {
        $('#prevBtn').hide();
    } else {
        $('#prevBtn').show();
    }
    
    // Next/Submit Button
    if (currentStep === totalSteps) {
        $('#nextBtn').hide();
        $('#submitBtn').show();
    } else {
        $('#nextBtn').show();
        $('#submitBtn').hide();
    }
}

// Validate Current Step
function validateCurrentStep() {
    const currentStepElement = $(`.form-step[data-step="${currentStep}"]`);
    const requiredFields = currentStepElement.find('[required]');
    let isValid = true;
    
    requiredFields.each(function() {
        const field = $(this);
        if (!field.val() || field.val().trim() === '') {
            isValid = false;
            field.addClass('error');
            field.css('border-color', '#ff6b6b');
        } else {
            field.removeClass('error');
            field.css('border-color', '');
        }
    });
    
    // Remove error class after user starts typing
    requiredFields.on('input change', function() {
        $(this).removeClass('error');
        $(this).css('border-color', '');
    });
    
    return isValid;
}

// Handle File Inputs
function handleFileInputs() {
    // Resume Attachment
    $('#resumeAttachment').on('change', function() {
        const file = this.files[0];
        if (file) {
            $(this).siblings('.file-input-label').find('.file-input-name').text(file.name);
        } else {
            $(this).siblings('.file-input-label').find('.file-input-name').text('No file chosen');
        }
    });
    
    // ID Card Attachment
    $('#idCardAttachment').on('change', function() {
        const file = this.files[0];
        if (file) {
            $(this).siblings('.file-input-label').find('.file-input-name').text(file.name);
        } else {
            $(this).siblings('.file-input-label').find('.file-input-name').text('No file chosen');
        }
    });
    
    // Other Documents (multiple files)
    $('#otherDocuments').on('change', function() {
        const files = this.files;
        if (files.length > 0) {
            const fileNames = Array.from(files).map(file => file.name).join(', ');
            $(this).siblings('.file-input-label').find('.file-input-name').text(files.length + ' file(s) selected');
        } else {
            $(this).siblings('.file-input-label').find('.file-input-name').text('No file chosen');
        }
    });
}

// Toggle Password Visibility
function togglePassword(inputId) {
    const input = $('#' + inputId);
    const button = input.siblings('.btn-toggle-password');
    const icon = button.find('i');
    
    if (input.attr('type') === 'password') {
        input.attr('type', 'text');
        icon.removeClass('fa-eye').addClass('fa-eye-slash');
    } else {
        input.attr('type', 'password');
        icon.removeClass('fa-eye-slash').addClass('fa-eye');
    }
}

// Date Picker Functions
function openDatePicker(inputId) {
    currentDateInput = inputId;
    const currentValue = $('#' + inputId).val();
    
    // Set current date if available
    if (currentValue) {
        const dateParts = currentValue.split('/');
        if (dateParts.length === 3) {
            // Convert mm/dd/yyyy to yyyy-mm-dd
            const formattedDate = dateParts[2] + '-' + dateParts[0] + '-' + dateParts[1];
            $('#datePickerInput').val(formattedDate);
        }
    } else {
        $('#datePickerInput').val('');
    }
    
    $('#datePickerModal').fadeIn();
}

function closeDatePicker() {
    $('#datePickerModal').fadeOut();
    currentDateInput = null;
}

function setSelectedDate() {
    if (!currentDateInput) return;
    
    const selectedDate = $('#datePickerInput').val();
    if (selectedDate) {
        // Convert yyyy-mm-dd to mm/dd/yyyy
        const dateParts = selectedDate.split('-');
        const formattedDate = dateParts[1] + '/' + dateParts[2] + '/' + dateParts[0];
        $('#' + currentDateInput).val(formattedDate);
    }
    
    closeDatePicker();
}

// Close date picker when clicking outside
$(document).on('click', '.date-picker-modal', function(e) {
    if ($(e.target).hasClass('date-picker-modal')) {
        closeDatePicker();
    }
});

// Close date picker on Escape key
$(document).on('keydown', function(e) {
    if (e.key === 'Escape' && $('#datePickerModal').is(':visible')) {
        closeDatePicker();
    }
});

