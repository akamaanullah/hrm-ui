<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment Form - HRM System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --primary-bg: #0F2A24;
        --secondary-bg: #143A32;
        --accent-mint: #7FFFD4;
        --accent-yellow: #FFD633;
        --text-primary: #FFFFFF;
        --text-secondary: #A6C7C1;
        --mint-light: #b2ffe4;
        --deep-forest-green: #0f2a24;
        --dark-teal-green: #001E18;
        --rich-emerald-green: #1E4C42;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: #f5f5f5;
        min-height: 100vh;
        padding: 2rem 1rem;
    }

    .form-container {
        max-width: 900px;
        margin: 0 auto;
        background: #ffffff;
        border-radius: 8px;
        padding: 2.5rem;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .form-header {
        text-align: center;
        margin-bottom: 3rem;
    }

    .form-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        font-style: italic;
        color: #333333;
        margin-bottom: 0;
        letter-spacing: 1px;
    }

    .form-section {
        margin-bottom: 2.5rem;
    }

    .section-title {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-size: 1.5rem;
        font-weight: 700;
        color: #333333;
        margin-bottom: 1.5rem;
        margin-top: 2rem;
    }

    .section-title:first-of-type {
        margin-top: 0;
    }

    .section-title i {
        font-size: 1rem;
        color: #ffffff;
        background: var(--rich-emerald-green);
        width: 32px;
        height: 32px;
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .form-row {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-group.full-width {
        grid-column: 1 / -1;
    }

    .form-group label {
        font-size: 0.80rem;
        font-weight: 500;
        color: #000000;
        margin-bottom: 0.5rem;
    }

    .form-group label .required {
        color: #ff0000;
        margin-left: 0.25rem;
    }

    .form-group {
        position: relative;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        padding: 10px 10px;
        border: 1px solid #e0e0e0;
        border-radius: 7px;
        font-size: 1rem;
        font-family: 'Poppins', sans-serif;
        background: #ffffff;
        color: #333333;
        transition: all 0.3s ease;
        width: 100%;
    }

    .form-group input[type="file"] {
        padding: 8px;
        cursor: pointer;
    }

    .form-group input[type="file"]::-webkit-file-upload-button {
        padding: 0.5rem 1rem;
        background: #f5f5f5;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 1rem;
        font-family: 'Poppins', sans-serif;
    }

    .file-help-text {
        display: block;
        margin-top: 0.5rem;
        font-size: 0.75rem;
        color: #666666;
        font-style: italic;
    }

    .form-group input[type="date"] {
        padding-right: 1rem;
    }

    .form-group select {
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23333' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 1rem center;
        padding-right: 2.5rem;
    }

    .form-group input::placeholder,
    .form-group textarea::placeholder {
        color: #999999;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
    border-color: #c5c5c5;
    background: #ffffff;
    }

    .form-group select {
        cursor: pointer;
    }

    .form-group textarea {
        resize: vertical;
        min-height: 100px;
    }

    .btn-submit {
        width: 50%;
        padding: 1rem;
        background: linear-gradient(135deg, var(--rich-emerald-green) 0%, var(--secondary-bg) 100%);
        color: #ffffff;
        border: none;
        border-radius: 7px;
        font-size: 1.1rem;
        font-weight: 600;
        font-family: 'Poppins', sans-serif;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(30, 76, 66, 0.3);
        margin: 1rem auto 0;
        display: block;
    }

    .btn-submit:hover {
        background: linear-gradient(135deg, var(--secondary-bg) 0%, var(--rich-emerald-green) 100%);
        box-shadow: 0 4px 12px rgba(30, 76, 66, 0.4);
        transform: translateY(-1px);
    }

    .btn-submit:active {
        transform: translateY(0);
    }

    /* Responsive Design */
    @media (max-width: 1024px) and (min-width: 769px) {
        .form-row {
            grid-template-columns: repeat(2, 1fr);
            gap: 1.25rem;
        }
    }

    @media (max-width: 768px) {
        .form-container {
            padding: 1.5rem;
        }

        .form-header h1 {
            font-size: 2rem;
        }

        .form-row {
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        .section-title {
            font-size: 1.25rem;
        }
    }

    @media (max-width: 480px) {
        body {
            padding: 1rem 0.5rem;
        }

        .form-container {
            padding: 1.25rem;
        }

        .form-header h1 {
            font-size: 1.75rem;
        }
    }
    </style>
</head>

<body>
    <div class="form-container">
        <div class="form-header">
            <h1>JOINING FORM</h1>
        </div>

        <form id="recruitmentForm">

            <!-- Personal Information -->
            <div class="form-section">
                <h2 class="section-title">
                    <i class="fas fa-user-circle"></i>
                    <span>Personal Information</span>
                </h2>

                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">First Name <span class="required">*</span></label>
                        <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label for="middleName">Middle Name</label>
                        <input type="text" id="middleName" name="middleName" placeholder="Middle Name">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="lastName">Last Name <span class="required">*</span></label>
                        <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <label for="dateOfBirth">Date of Birth</label>
                        <input type="date" id="dateOfBirth" name="dateOfBirth" placeholder="mm/dd/yyyy">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" placeholder="03XX-XXXXXXX">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email <span class="required">*</span></label>
                        <input type="email" id="email" name="email" placeholder="you@email.com" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" placeholder="Your Address">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="jobTitle">Job Title</label>
                        <input type="text" id="jobTitle" name="jobTitle" placeholder="Your Job Title">
                    </div>
                    <div class="form-group">
                        <label for="idCardNumber">ID card Number</label>
                        <input type="text" id="idCardNumber" name="idCardNumber" placeholder="XXXXX-XXXXXXX-X">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="emergencyContact">Emergency Contact</label>
                        <input type="text" id="emergencyContact" name="emergencyContact" placeholder="03XX-XXXXXXX">
                    </div>
                    <div class="form-group">
                        <label for="emergencyContactRelation">Emergency Contact Relation</label>
                        <input type="text" id="emergencyContactRelation" name="emergencyContactRelation" placeholder="Father, Mother, Brother, Sister, Spouse Etc.">
                    </div>
                </div>
            </div>

            <!-- Bank Details -->
            <div class="form-section">
                <h2 class="section-title">
                    <i class="fas fa-landmark"></i>
                    <span>Bank Details</span>
                </h2>

                <div class="form-row">
                    <div class="form-group">
                        <label for="bankName">Bank Name</label>
                        <select id="bankName" name="bankName">
                            <option value="">Select Bank</option>
                            <option value="HBL">HBL</option>
                            <option value="UBL">UBL</option>
                            <option value="MCB">MCB</option>
                            <option value="Allied Bank">Allied Bank</option>
                            <option value="Standard Chartered">Standard Chartered</option>
                            <option value="Bank Alfalah">Bank Alfalah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="accountType">Account Type</label>
                        <select id="accountType" name="accountType">
                            <option value="">Select Account Type</option>
                            <option value="Account Number">Account Number</option>
                            <option value="IBAN Number">IBAN Number</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="accountTitle">Account Title</label>
                        <input type="text" id="accountTitle" name="accountTitle" placeholder="Account Title">
                    </div>
                    <div class="form-group">
                        <label for="accountNumber">Account Number</label>
                        <input type="text" id="accountNumber" name="accountNumber" placeholder="Account Number">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="bankBranch">Bank Branch</label>
                        <input type="text" id="bankBranch" name="bankBranch" placeholder="Bank Branch">
                    </div>
                </div>
            </div>

            <!-- Education -->
            <div class="form-section">
                <h2 class="section-title">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Education</span>
                </h2>

                <div class="form-row">
                    <div class="form-group">
                        <label for="qualification">Qualification</label>
                        <input type="text" id="qualification" name="qualification" placeholder="Qualification">
                    </div>
                    <div class="form-group">
                        <label for="degreeCertification">Degree / Certification</label>
                        <input type="text" id="degreeCertification" name="degreeCertification" placeholder="Degree Or Certification">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="professionalExpertise">Professional Expertise</label>
                        <input type="text" id="professionalExpertise" name="professionalExpertise" placeholder="Professional Expertise">
                    </div>
                    <div class="form-group">
                        <label for="collegeUniversity">College / University</label>
                        <input type="text" id="collegeUniversity" name="collegeUniversity" placeholder="College / University">
                    </div>
                </div>
            </div>


            <!-- Experience -->
            <div class="form-section">
                <h2 class="section-title">
                    <i class="fas fa-briefcase"></i>
                    <span>Experience</span>
                </h2>

                <div class="form-row">
                    <div class="form-group">
                        <label for="lastEmployer">Last Employer</label>
                        <input type="text" id="lastEmployer" name="lastEmployer" placeholder="Last Employer">
                    </div>
                    <div class="form-group">
                        <label for="lastDesignation">Last Designation</label>
                        <input type="text" id="lastDesignation" name="lastDesignation" placeholder="Last Designation">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="experienceFrom">Experience From Date</label>
                        <input type="date" id="experienceFrom" name="experienceFrom">
                    </div>
                    <div class="form-group">
                        <label for="experienceTo">Experience To Date</label>
                        <input type="date" id="experienceTo" name="experienceTo">
                    </div>
                </div>
            </div>

            <!-- Documents Attachment -->
            <div class="form-section">
                <h2 class="section-title">
                    <i class="fas fa-paperclip"></i>
                    <span>Documents Attachment</span>
                </h2>

                <div class="form-row">
                    <div class="form-group">
                        <label for="resumeAttachment">Resume Attachment</label>
                        <input type="file" id="resumeAttachment" name="resumeAttachment" accept=".pdf,.doc,.docx">
                        <small class="file-help-text">Upload your Resume (PDF, DOC, DOCX only)</small>
                    </div>
                    <div class="form-group">
                        <label for="idCardAttachment">Id Card Attachment</label>
                        <input type="file" id="idCardAttachment" name="idCardAttachment" accept=".pdf,.jpg,.jpeg,.png">
                        <small class="file-help-text">Upload your Id Card (PDF, JPG, PNG only)</small>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="otherDocumentsAttachment">Other Documents Attachment</label>
                        <input type="file" id="otherDocumentsAttachment" name="otherDocumentsAttachment" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png">
                        <small class="file-help-text">Upload other relevant documents Attachment (PDF, DOC, DOCX, JPG, PNG)</small>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn-submit">
                <i class="fas fa-paper-plane"></i>
                Submit Form
            </button>
        </form>
    </div>

    <script>
    document.getElementById('recruitmentForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Form validation
        const firstName = document.getElementById('firstName').value;
        const lastName = document.getElementById('lastName').value;
        const email = document.getElementById('email').value;

        if (!firstName || !lastName || !email) {
            alert('Please fill in all required fields');
            return;
        }

        // Here you can add form submission logic
        alert('Form submitted successfully!');
        // this.reset();
    });
    </script>
</body>

</html>

