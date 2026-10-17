<?php
// ==========================================================
// of.php - Online Admission Form with Header & Footer
// ==========================================================

// Database connection
$conn = mysqli_connect("localhost", "root", "", "ewcm");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check for success/error messages
$success = isset($_GET['success']) && $_GET['success'] == 1;
$error = isset($_GET['error']) && $_GET['error'] == 1;

// Fetch courses for dropdown (if courses table exists)
$courses_result = mysqli_query($conn, "SELECT * FROM courses ORDER BY course_name");
if (!$courses_result) {
    $courses_result = null;
}

include("../../includes/header.php");
include("../../includes/navbar.php");
?>

<?php include("../../includes/enquiry_form.php"); ?>
<link rel="stylesheet" href="../../assets/css/global.css">
<!-- ========================================================== -->
<!-- ====== PAGE-SPECIFIC STYLES ====== -->
<!-- ========================================================== -->
<style>
    .admission-wrapper {
        max-width: 850px;
        margin: 40px auto;
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        padding: 40px 35px;
        position: relative;
        overflow: hidden;
    }
    .admission-wrapper::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 6px;
        background: linear-gradient(90deg, #e84393, #fd79a8, #e84393);
    }

    .admission-header {
        text-align: center;
        margin-bottom: 30px;
    }
    .admission-header h1 {
        color: #2d1b69;
        font-size: 32px;
        font-weight: 800;
    }
    .admission-header h1 i {
        color: #e84393;
        margin-right: 10px;
    }
    .admission-header p {
        color: #6c7a8d;
        font-size: 15px;
        margin-top: 5px;
    }

    .msg {
        padding: 18px 25px;
        border-radius: 12px;
        margin-bottom: 25px;
        font-weight: 600;
        font-size: 16px;
        display: flex;
        align-items: center;
        gap: 12px;
    }
    .msg-success {
        background: #d4edda;
        color: #155724;
        border: 2px solid #c3e6cb;
    }
    .msg-success i {
        font-size: 28px;
        color: #28a745;
    }
    .msg-error {
        background: #f8d7da;
        color: #721c24;
        border: 2px solid #f5c6cb;
    }
    .msg-error i {
        font-size: 28px;
        color: #dc3545;
    }

    .progress-steps {
        display: flex;
        justify-content: space-between;
        margin-bottom: 35px;
        position: relative;
    }
    .progress-steps::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        height: 3px;
        background: #e0e4ea;
        transform: translateY(-50%);
        z-index: 1;
    }
    .step {
        display: flex;
        flex-direction: column;
        align-items: center;
        z-index: 2;
        background: #fff;
        padding: 0 10px;
    }
    .step .step-circle {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #e0e4ea;
        color: #999;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 14px;
        transition: all 0.3s;
        border: 3px solid #e0e4ea;
    }
    .step.active .step-circle {
        background: #e84393;
        color: #fff;
        border-color: #e84393;
        box-shadow: 0 4px 15px rgba(232, 67, 147, 0.3);
    }
    .step.done .step-circle {
        background: #6bcb77;
        color: #fff;
        border-color: #6bcb77;
    }
    .step .step-label {
        font-size: 11px;
        color: #999;
        margin-top: 6px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .step.active .step-label {
        color: #2d1b69;
    }

    .form-section {
        display: none;
        animation: fadeSlide 0.4s ease;
    }
    .form-section.active {
        display: block;
    }
    @keyframes fadeSlide {
        from { opacity: 0; transform: translateX(20px); }
        to { opacity: 1; transform: translateX(0); }
    }

    .form-section h2 {
        color: #2d1b69;
        font-size: 20px;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #f1f2f6;
    }
    .form-section h2 i {
        color: #e84393;
        margin-right: 10px;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }
    .form-group {
        margin-bottom: 18px;
    }
    .form-group.full-width {
        grid-column: 1 / -1;
    }
    .form-group label {
        display: block;
        font-weight: 600;
        color: #2d1b69;
        font-size: 14px;
        margin-bottom: 5px;
    }
    .form-group label .required {
        color: #e84393;
        margin-left: 3px;
    }
    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 12px 16px;
        border: 2px solid #e0e4ea;
        border-radius: 10px;
        font-size: 15px;
        transition: all 0.3s;
        font-family: inherit;
        background: #fafbfc;
        box-sizing: border-box;
    }
    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        border-color: #e84393;
        outline: none;
        background: #fff;
        box-shadow: 0 0 0 4px rgba(232, 67, 147, 0.1);
    }
    .form-group textarea {
        resize: vertical;
        min-height: 80px;
    }
    .form-group .file-input-wrapper input[type="file"] {
        padding: 10px;
        background: #fafbfc;
        cursor: pointer;
        border: 2px dashed #e0e4ea;
        border-radius: 10px;
        width: 100%;
    }
    .form-group small {
        color: #999;
        font-size: 12px;
        display: block;
        margin-top: 4px;
    }

    .form-nav {
        display: flex;
        justify-content: space-between;
        margin-top: 30px;
        padding-top: 20px;
        border-top: 2px solid #f1f2f6;
    }
    .btn {
        padding: 12px 35px;
        border: none;
        border-radius: 50px;
        font-weight: 700;
        font-size: 15px;
        cursor: pointer;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    .btn-prev {
        background: #f1f2f6;
        color: #555;
    }
    .btn-prev:hover {
        background: #e0e4ea;
    }
    .btn-next {
        background: linear-gradient(135deg, #e84393, #fd79a8);
        color: #fff;
    }
    .btn-next:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(232, 67, 147, 0.3);
    }
    .btn-submit {
        background: linear-gradient(135deg, #6bcb77, #2ecc71);
        color: #fff;
        font-size: 17px;
        padding: 14px 45px;
    }
    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(107, 203, 119, 0.3);
    }

    .declaration {
        background: #f8f9fa;
        padding: 20px 25px;
        border-radius: 12px;
        border-left: 5px solid #e84393;
        margin-bottom: 20px;
    }
    .declaration p {
        color: #333;
        line-height: 1.7;
        margin-bottom: 15px;
    }
    .declaration label {
        font-weight: 600;
        cursor: pointer;
        color: #2d1b69;
    }
    .declaration input[type="checkbox"] {
        margin-right: 12px;
        transform: scale(1.3);
        accent-color: #e84393;
    }

    .fee-note {
        background: #f8f9fa;
        padding: 15px 20px;
        border-radius: 10px;
        margin: 20px 0;
    }
    .fee-note p {
        color: #2d1b69;
        font-weight: 600;
    }
    .fee-note i {
        color: #e84393;
        margin-right: 8px;
    }

    @media (max-width: 768px) {
        .admission-wrapper { padding: 25px 15px; }
        .form-row { grid-template-columns: 1fr; }
        .progress-steps { flex-wrap: wrap; gap: 10px; justify-content: center; }
        .progress-steps::before { display: none; }
        .admission-header h1 { font-size: 24px; }
        .form-nav { flex-direction: column; gap: 10px; }
        .form-nav .btn { width: 100%; justify-content: center; }
    }
</style>

<!-- ========================================================== -->
<!-- ====== MAIN CONTENT ====== -->
<!-- ========================================================== -->
<div class="container admission-wrapper">

    <div class="admission-header">
        <h1><i class="fas fa-graduation-cap"></i> Online Admission Form</h1>
        <p>Apply now for your dream course</p>
    </div>

    <!-- Success / Error Messages -->
    <?php if ($success): ?>
        <div class="msg msg-success">
            <i class="fas fa-check-circle"></i>
            <div>
                <strong>🎉 Application Submitted Successfully!</strong><br>
                Your application has been received. Our admission team will contact you soon.
                <br><small style="color:#155724; font-weight:400;">A confirmation email has been sent to your registered email ID.</small>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($error): ?>
        <div class="msg msg-error">
            <i class="fas fa-exclamation-circle"></i>
            <div>
                <strong>❌ Submission Failed!</strong><br>
                Please try again or contact the admission office for assistance.
            </div>
        </div>
    <?php endif; ?>

    <!-- Progress Steps -->
    <div class="progress-steps">
        <div class="step active" id="step1">
            <div class="step-circle">1</div>
            <span class="step-label">Personal</span>
        </div>
        <div class="step" id="step2">
            <div class="step-circle">2</div>
            <span class="step-label">Academic</span>
        </div>
        <div class="step" id="step3">
            <div class="step-circle">3</div>
            <span class="step-label">Documents</span>
        </div>
        <div class="step" id="step4">
            <div class="step-circle">4</div>
            <span class="step-label">Confirm</span>
        </div>
    </div>

    <!-- ========================================================== -->
    <!-- FORM STARTS -->
    <!-- ========================================================== -->
    <form id="admissionForm" action="submit_admission.php" method="POST" enctype="multipart/form-data" onsubmit="return validateFinalStep()">

        <!-- STEP 1: PERSONAL -->
        <div class="form-section active" data-step="1">
            <h2><i class="fas fa-user"></i> Personal Details</h2>
            <div class="form-row">
                <div class="form-group">
                    <label>Full Name <span class="required">*</span></label>
                    <input type="text" name="full_name" id="full_name" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label>Date of Birth <span class="required">*</span></label>
                    <input type="date" name="dob" id="dob" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Gender <span class="required">*</span></label>
                    <select name="gender" id="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nationality <span class="required">*</span></label>
                    <input type="text" name="nationality" id="nationality" placeholder="e.g., Indian" value="Indian" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Father's Name <span class="required">*</span></label>
                    <input type="text" name="father_name" id="father_name" placeholder="Enter father's name" required>
                </div>
                <div class="form-group">
                    <label>Mother's Name <span class="required">*</span></label>
                    <input type="text" name="mother_name" id="mother_name" placeholder="Enter mother's name" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Email Address <span class="required">*</span></label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label>Mobile Number <span class="required">*</span></label>
                    <input type="tel" name="mobile" id="mobile" placeholder="Enter 10-digit mobile number" pattern="[0-9]{10}" maxlength="10" required>
                </div>
            </div>
            <div class="form-group full-width">
                <label>Current Address <span class="required">*</span></label>
                <textarea name="address" id="address" rows="3" placeholder="Enter your complete address" required></textarea>
            </div>
            <div class="form-nav">
                <span></span>
                <button type="button" class="btn btn-next" onclick="nextStep(2)">
                    Next <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>

        <!-- STEP 2: ACADEMIC -->
        <div class="form-section" data-step="2">
            <h2><i class="fas fa-book-open"></i> Academic Details</h2>
            <div class="form-row">
                <div class="form-group">
                    <label>Course Applying For <span class="required">*</span></label>
                    <select name="course" id="course" required>
                        <option value="">Select Course</option>
                        <?php if ($courses_result && mysqli_num_rows($courses_result) > 0): ?>
                            <?php while ($row = mysqli_fetch_assoc($courses_result)): ?>
                                <option value="<?php echo $row['course_name']; ?>"><?php echo $row['course_name']; ?></option>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <option value="BCA">BCA</option>
                            <option value="MCA">MCA</option>
                            <option value="B.Tech">B.Tech</option>
                            <option value="MBA">MBA</option>
                            <option value="B.Com">B.Com</option>
                            <option value="M.Com">M.Com</option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Academic Year <span class="required">*</span></label>
                    <select name="academic_year" id="academic_year" required>
                        <option value="">Select Year</option>
                        <option value="2026-27" selected>2026-27</option>
                        <option value="2025-26">2025-26</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Qualifying Exam <span class="required">*</span></label>
                    <select name="qualifying_exam" id="qualifying_exam" required>
                        <option value="">Select Exam</option>
                        <option value="10+2">10+2 (PUC)</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Graduation">Graduation</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Board / University</label>
                    <input type="text" name="board" id="board" placeholder="e.g., CBSE, PUE">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Year of Passing <span class="required">*</span></label>
                    <input type="number" name="passing_year" id="passing_year" placeholder="e.g., 2026" min="2010" max="2026" required>
                </div>
                <div class="form-group">
                    <label>Percentage / CGPA <span class="required">*</span></label>
                    <input type="number" name="percentage" id="percentage" placeholder="e.g., 85.5" step="0.01" min="0" max="100" required>
                </div>
            </div>
            <div class="form-nav">
                <button type="button" class="btn btn-prev" onclick="prevStep(1)">
                    <i class="fas fa-arrow-left"></i> Previous
                </button>
                <button type="button" class="btn btn-next" onclick="nextStep(3)">
                    Next <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>

        <!-- STEP 3: DOCUMENTS -->
        <div class="form-section" data-step="3">
            <h2><i class="fas fa-upload"></i> Upload Documents</h2>
            <p style="color:#6c7a8d; margin-bottom:20px;">Please upload clear scanned copies of your documents (JPEG, PNG, or PDF format, max 2MB each).</p>
            <div class="form-row">
                <div class="form-group">
                    <label>Recent Passport Size Photo <span class="required">*</span></label>
                    <div class="file-input-wrapper">
                        <input type="file" name="photo" id="photo" accept=".jpg,.jpeg,.png" required>
                    </div>
                    <small>(JPG / PNG, max 2MB)</small>
                </div>
                <div class="form-group">
                    <label>Signature <span class="required">*</span></label>
                    <div class="file-input-wrapper">
                        <input type="file" name="signature" id="signature" accept=".jpg,.jpeg,.png" required>
                    </div>
                    <small>(JPG / PNG, max 1MB)</small>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>10th / 12th Marksheet <span class="required">*</span></label>
                    <div class="file-input-wrapper">
                        <input type="file" name="marksheet" id="marksheet" accept=".pdf,.jpg,.jpeg,.png" required>
                    </div>
                    <small>(PDF / JPG / PNG, max 5MB)</small>
                </div>
                <div class="form-group">
                    <label>Caste Certificate (if applicable)</label>
                    <div class="file-input-wrapper">
                        <input type="file" name="caste_cert" id="caste_cert" accept=".pdf,.jpg,.jpeg,.png">
                    </div>
                    <small>(Optional, PDF / JPG / PNG, max 2MB)</small>
                </div>
            </div>
            <div class="form-nav">
                <button type="button" class="btn btn-prev" onclick="prevStep(2)">
                    <i class="fas fa-arrow-left"></i> Previous
                </button>
                <button type="button" class="btn btn-next" onclick="nextStep(4)">
                    Next <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>

        <!-- STEP 4: DECLARATION & SUBMIT -->
        <div class="form-section" data-step="4">
            <h2><i class="fas fa-check-circle"></i> Declaration</h2>
            <div class="declaration">
                <p>
                    I hereby declare that all the information provided in this application form is true and correct to the best of my knowledge.
                    I understand that any false or misleading information may result in cancellation of my admission.
                </p>
                <label>
                    <input type="checkbox" name="declaration" id="declaration" required>
                    I accept the terms and conditions and confirm that all details are correct.
                </label>
            </div>
            <div class="fee-note">
                <p><i class="fas fa-info-circle"></i> Application Fee: ₹500 (to be paid after form submission)</p>
            </div>
            <div class="form-nav">
                <button type="button" class="btn btn-prev" onclick="prevStep(3)">
                    <i class="fas fa-arrow-left"></i> Previous
                </button>
                <button type="submit" class="btn btn-submit" id="finalSubmit">
                    <i class="fas fa-paper-plane"></i> Submit Application
                </button>
            </div>
        </div>

    </form>
</div>

<!-- ========================================================== -->
<!-- ====== JAVASCRIPT WITH EMAIL VALIDATION ====== -->
<!-- ========================================================== -->
<script>
    let currentStep = 1;
    const totalSteps = 4;

    // ---------- EMAIL VALIDATION ----------
    function isValidEmail(email) {
        // Must contain @ and at least one dot after @
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }

    // ---------- STEP NAVIGATION ----------
    function nextStep(step) {
        if (validateStep(currentStep)) {
            document.querySelector('.form-section.active').classList.remove('active');
            document.querySelector(`.form-section[data-step="${step}"]`).classList.add('active');

            document.querySelectorAll('.step').forEach(el => el.classList.remove('active', 'done'));
            for (let i = 1; i <= totalSteps; i++) {
                const stepEl = document.getElementById(`step${i}`);
                if (i < step) stepEl.classList.add('done');
                else if (i === step) stepEl.classList.add('active');
            }
            currentStep = step;
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    }

    function prevStep(step) {
        document.querySelector('.form-section.active').classList.remove('active');
        document.querySelector(`.form-section[data-step="${step}"]`).classList.add('active');

        document.querySelectorAll('.step').forEach(el => el.classList.remove('active', 'done'));
        for (let i = 1; i <= totalSteps; i++) {
            const stepEl = document.getElementById(`step${i}`);
            if (i < step) stepEl.classList.add('done');
            else if (i === step) stepEl.classList.add('active');
        }
        currentStep = step;
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    // ---------- STEP VALIDATION ----------
    function validateStep(step) {
        const section = document.querySelector(`.form-section[data-step="${step}"]`);
        const inputs = section.querySelectorAll('input[required], select[required], textarea[required]');
        let valid = true;

        // Check required fields
        inputs.forEach(input => {
            if (!input.value.trim()) {
                input.style.borderColor = '#ff6b6b';
                valid = false;
            } else {
                input.style.borderColor = '#6bcb77';
            }
        });

        // ----- ADDITIONAL EMAIL CHECK FOR STEP 1 -----
        if (step === 1) {
            const emailInput = document.getElementById('email');
            if (emailInput && emailInput.value.trim()) {
                if (!isValidEmail(emailInput.value.trim())) {
                    emailInput.style.borderColor = '#ff6b6b';
                    valid = false;
                    alert('⚠️ Please enter a valid email address (must contain @ and domain, e.g., name@example.com).');
                    return false;
                } else {
                    emailInput.style.borderColor = '#6bcb77';
                }
            }
        }

        if (!valid) {
            alert('⚠️ Please fill in all required fields before proceeding.');
        }
        return valid;
    }

    // ---------- FINAL SUBMIT VALIDATION ----------
    function validateFinalStep() {
        // Check declaration
        const decl = document.getElementById('declaration');
        if (!decl.checked) {
            alert('⚠️ Please accept the declaration by checking the box.');
            decl.style.outline = '2px solid #ff6b6b';
            return false;
        }
        return true;
    }

    // ---------- REAL-TIME STYLING ----------
    document.querySelectorAll('input[required], select[required], textarea[required]').forEach(el => {
        el.addEventListener('blur', function() {
            if (this.value.trim()) {
                this.style.borderColor = '#6bcb77';
            } else {
                this.style.borderColor = '#ff6b6b';
            }
        });
        el.addEventListener('focus', function() {
            this.style.borderColor = '#e84393';
        });
    });

    // ---------- REAL-TIME EMAIL CHECK ----------
    document.getElementById('email').addEventListener('blur', function() {
        if (this.value.trim()) {
            if (!isValidEmail(this.value.trim())) {
                this.style.borderColor = '#ff6b6b';
                // Don't show alert here – wait for step validation
            } else {
                this.style.borderColor = '#6bcb77';
            }
        }
    });
</script>

<script>
// Auto-hide success/error messages after 10 seconds and remove query params
window.addEventListener('DOMContentLoaded', function() {
    var msg = document.querySelector('.msg-success, .msg-error');
    if (msg) {
        // Remove the query string from URL after 1 second to prevent showing on refresh
        setTimeout(function() {
            var cleanUrl = window.location.href.split('?')[0];
            window.history.replaceState({}, document.title, cleanUrl);
        }, 1000);

        // Hide the message after 10 seconds
        setTimeout(function() {
            msg.style.transition = 'opacity 0.5s ease';
            msg.style.opacity = '0';
            setTimeout(function() {
                msg.style.display = 'none';
            }, 500);
        }, 10000);
    }
});
</script>
<?php include("../../includes/footer.php"); ?>