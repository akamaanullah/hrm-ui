<?php include 'header.php'; ?>

<!-- Add Employee Content -->
<div class="attendance-content">
    
    <!-- Step Progress Indicator -->
    <div class="form-step-indicator">
        <div class="step-item active" data-step="1">
            <div class="step-number">1</div>
            <div class="step-label">Personal Info</div>
        </div>
        <div class="step-item" data-step="2">
            <div class="step-number">2</div>
            <div class="step-label">Job & Banking</div>
        </div>
        <div class="step-item" data-step="3">
            <div class="step-number">3</div>
            <div class="step-label">Education & Experience</div>
        </div>
        <div class="step-item" data-step="4">
            <div class="step-number">4</div>
            <div class="step-label">Documents</div>
        </div>
    </div>

    <!-- Form Container -->
    <form id="addEmployeeForm" class="add-employee-form">
        
        <!-- Step 1: Personal Information & Contact -->
        <div class="form-step active" data-step="1">
            <div class="form-step-header">
                <h3>Personal Information & Contact Details</h3>
                <p>Please provide the employee's personal information and contact details</p>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="firstName">First Name <span class="required">*</span></label>
                    <input type="text" id="firstName" name="firstName" class="form-input" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <label for="middleName">Middle Name</label>
                    <input type="text" id="middleName" name="middleName" class="form-input" placeholder="Middle Name">
                </div>
            </div>

            <div class="form-row">
            <div class="form-group">
                    <label for="lastName">Last Name <span class="required">*</span></label>
                    <input type="text" id="lastName" name="lastName" class="form-input" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender" class="form-select">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="dateOfBirth">Date of Birth</label>
                    <input type="date" id="dateOfBirth" name="dateOfBirth" class="form-input" placeholder="Select Date">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" class="form-input" placeholder="Phone">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" class="form-input" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="idCardNumber">ID card Number</label>
                    <input type="text" id="idCardNumber" name="idCardNumber" class="form-input" placeholder="ID card Number">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="emergencyContact">Emergency Contact</label>
                    <input type="text" id="emergencyContact" name="emergencyContact" class="form-input" placeholder="Emergency Contact">
                </div>
                <div class="form-group">
                    <label for="emergencyContactRelation">Emergency Contact Relation</label>
                    <input type="text" id="emergencyContactRelation" name="emergencyContactRelation" class="form-input" placeholder="Emergency Contact Relation">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" id="email" name="email" class="form-input" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="password-input-wrapper">
                        <input type="password" id="password" name="password" class="form-input password-input" placeholder="Password">
                        <button type="button" class="btn-toggle-password" onclick="togglePassword('password')">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="shiftTiming">Shift Timing</label>
                    <select id="shiftTiming" name="shiftTiming" class="form-select">
                        <option value="">Select Shift</option>
                        <option value="A">A (8:00 pm - 5:00 am)</option>
                        <option value="B">B (9:00 pm - 6:00 am)</option>
                        <option value="C">C (8:00 am - 5:00 pm)</option>
                        <option value="D">D (10:00 am - 7:00 pm)</option>
                        <option value="E">E (11:00 pm - 8:00 am)</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Step 2: Job Details & Banking Information -->
        <div class="form-step" data-step="2">
            <div class="form-step-header">
                <h3>Job Details & Banking Information</h3>
                <p>Please provide employment and banking details</p>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="jobTitle">Job Title</label>
                    <input type="text" id="jobTitle" name="jobTitle" class="form-input" placeholder="Job Title">
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <select id="department" name="department" class="form-select">
                        <option value="">Select Department</option>
                        <option value="Production">Production</option>
                        <option value="Management">Management</option>
                        <option value="HR">HR</option>
                        <option value="Sales">Sales</option>
                        <option value="IT">IT</option>
                        <option value="Finance">Finance</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="subDepartment">Sub Department</label>
                    <input type="text" id="subDepartment" name="subDepartment" class="form-input" placeholder="Sub Department">
                </div>
                <div class="form-group">
                    <label for="bankName">Bank Name</label>
                    <select id="bankName" name="bankName" class="form-select">
                        <option value="">Select Bank</option>
                        <option value="HBL">HBL</option>
                        <option value="UBL">UBL</option>
                        <option value="MCB">MCB</option>
                        <option value="Allied Bank">Allied Bank</option>
                        <option value="Standard Chartered">Standard Chartered</option>
                        <option value="Bank Alfalah">Bank Alfalah</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="accountType">Account Type</label>
                    <select id="accountType" name="accountType" class="form-select">
                        <option value="">Select Account Type</option>
                        <option value="Account Number">Account Number</option>
                        <option value="IBAN Number">IBAN Number</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="accountTitle">Account Title</label>
                    <input type="text" id="accountTitle" name="accountTitle" class="form-input" placeholder="Account Title">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="accountNumber">Account Number</label>
                    <input type="text" id="accountNumber" name="accountNumber" class="form-input" placeholder="Account Number">
                </div>
                <div class="form-group">
                    <label for="bankBranch">Bank Branch</label>
                    <input type="text" id="bankBranch" name="bankBranch" class="form-input" placeholder="Bank Branch">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="jobType">Job Type</label>
                    <select id="jobType" name="jobType" class="form-select">
                        <option value="">Select Job Type</option>
                        <option value="Probation">Probation</option>
                        <option value="Internship">Internship</option>
                        <option value="Permanent">Permanent</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="salary">Salary</label>
                    <input type="number" id="salary" name="salary" class="form-input" placeholder="Salary" step="0.01">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="joiningDate">Joining Date</label>
                    <input type="date" id="joiningDate" name="joiningDate" class="form-input" placeholder="Select Date">
                </div>
            </div>
        </div>

        <!-- Step 3: Educational Background & Experience -->
        <div class="form-step" data-step="3">
            <div class="form-step-header">
                <h3>Educational Background & Work Experience</h3>
                <p>Please provide educational qualifications and work experience details</p>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="qualification">Qualification</label>
                    <input type="text" id="qualification" name="qualification" class="form-input" placeholder="Qualification">
                </div>
                <div class="form-group">
                    <label for="degreeCertification">Degree / Certification</label>
                    <input type="text" id="degreeCertification" name="degreeCertification" class="form-input" placeholder="Degree / Certification">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="professionalExpertise">Professional Expertise</label>
                    <input type="text" id="professionalExpertise" name="professionalExpertise" class="form-input" placeholder="Professional Expertise">
                </div>
                <div class="form-group">
                    <label for="collegeUniversity">College / University</label>
                    <input type="text" id="collegeUniversity" name="collegeUniversity" class="form-input" placeholder="College / University">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="lastEmployer">Last Employer</label>
                    <input type="text" id="lastEmployer" name="lastEmployer" class="form-input" placeholder="Last Employer">
                </div>
                <div class="form-group">
                    <label for="lastJobTitle">Last Job Title</label>
                    <input type="text" id="lastJobTitle" name="lastJobTitle" class="form-input" placeholder="Last Job Title">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="experienceFromDate">Experience From Date</label>
                    <input type="date" id="experienceFromDate" name="experienceFromDate" class="form-input" placeholder="Select Date">
                </div>
                <div class="form-group">
                    <label for="experienceToDate">Experience To Date</label>
                    <input type="date" id="experienceToDate" name="experienceToDate" class="form-input" placeholder="Select Date">
                </div>
            </div>
        </div>

        <!-- Step 4: Document Uploads -->
        <div class="form-step" data-step="4">
            <div class="form-step-header">
                <h3>Document Attachments</h3>
                <p>Please upload required documents</p>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="resumeAttachment">Resume Attachment</label>
                    <div class="file-input-wrapper">
                        <input type="file" id="resumeAttachment" name="resumeAttachment" class="file-input" accept=".pdf,.doc,.docx">
                        <label for="resumeAttachment" class="file-input-label">
                            <span class="file-input-text">Choose file</span>
                            <span class="file-input-name">No file chosen</span>
                        </label>
                    </div>
                    <small class="form-help-text">Upload Resume (PDF, DOC, DOCX only)</small>
                </div>
                <div class="form-group">
                    <label for="idCardAttachment">ID Card Attachment <span class="required">*</span></label>
                    <div class="file-input-wrapper">
                        <input type="file" id="idCardAttachment" name="idCardAttachment" class="file-input" accept=".jpg,.jpeg,.png,.pdf" required>
                        <label for="idCardAttachment" class="file-input-label">
                            <span class="file-input-text">Choose file</span>
                            <span class="file-input-name">No file chosen</span>
                        </label>
                    </div>
                    <small class="form-help-text">Upload ID Card (JPG, PNG, PDF only)</small>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="otherDocuments">Other Documents</label>
                    <div class="file-input-wrapper">
                        <input type="file" id="otherDocuments" name="otherDocuments[]" class="file-input" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" multiple>
                        <label for="otherDocuments" class="file-input-label">
                            <span class="file-input-text">Choose files</span>
                            <span class="file-input-name">No file chosen</span>
                        </label>
                    </div>
                    <small class="form-help-text">Upload other relevant documents (PDF, DOC, DOCX, JPG, PNG)</small>
                </div>
            </div>
        </div>

        <!-- Form Navigation Buttons -->
        <div class="form-navigation">
            <button type="button" class="btn-form btn-prev" id="prevBtn" onclick="changeStep(-1)" style="display: none;">
                <i class="fas fa-arrow-left"></i>
                <span>Previous</span>
            </button>
            <div class="form-navigation-right">
                <button type="button" class="btn-form btn-cancel" onclick="window.location.href='employee.php'">
                    <i class="fas fa-times"></i>
                    <span>Cancel</span>
                </button>
                <button type="button" class="btn-form btn-next" id="nextBtn" onclick="changeStep(1)">
                    <span>Next</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
                <button type="submit" class="btn-form btn-submit" id="submitBtn" style="display: none;">
                    <i class="fas fa-save"></i>
                    <span>Submit</span>
                </button>
            </div>
        </div>
    </form>
</div>

<!-- Date Picker Modal (if needed) -->
<div class="date-picker-modal" id="datePickerModal" style="display: none;">
    <div class="date-picker-content">
        <div class="date-picker-header">
            <h4>Select Date</h4>
            <button type="button" class="btn-close-datepicker" onclick="closeDatePicker()">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="date-picker-body">
            <!-- Date picker will be implemented here -->
            <input type="date" id="datePickerInput" class="date-picker-input">
        </div>
        <div class="date-picker-footer">
            <button type="button" class="btn-form btn-cancel" onclick="closeDatePicker()">Cancel</button>
            <button type="button" class="btn-form btn-submit" onclick="setSelectedDate()">Select</button>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
