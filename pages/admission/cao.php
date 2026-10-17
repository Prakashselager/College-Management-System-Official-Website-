<?php
// ===== HANDLE FORM SUBMISSION FIRST =====
include("../../includes/config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $status = 'enquiry';

    $insert = "INSERT INTO enquiries (name, email, phone, course, message, status) 
               VALUES ('$name', '$email', '$phone', '$course', '$message', '$status')";
    mysqli_query($conn, $insert);

    header("Location: cao.php?contact=success");
    exit();
}

// ===== NOW INCLUDE HEADER AND NAVBAR =====
include("../../includes/header.php");
include("../../includes/navbar.php");
?>

<?php include("../../includes/enquiry_form.php"); ?>
<link rel="stylesheet" href="../../assets/css/global.css">
<style>
/* ===== CAO PAGE - DARK FOREST GREEN + AMBER THEME ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f4f0ec;
    color: #2d3436;
}

/* ===== FIXED BACKGROUND ===== */
.page-wrapper {
    background: url('../../images/contact-bg.jpg') center/cover no-repeat fixed;
    position: relative;
    min-height: 100vh;
}

.page-wrapper::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(15, 35, 25, 0.88);
    z-index: 0;
}

.page-wrapper > * {
    position: relative;
    z-index: 1;
}

/* ===== BANNER ===== */
.page-banner {
    padding: 80px 20px 60px;
    text-align: center;
    color: #fff;
    border-bottom: 4px solid #f5b041;
}

.page-banner h1 {
    font-size: 48px;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 4px;
    text-shadow: 0 4px 20px rgba(0,0,0,0.3);
    margin-bottom: 10px;
}

.page-banner h1::after {
    content: "";
    display: block;
    width: 100px;
    height: 5px;
    background: linear-gradient(90deg, #f5b041, #f1c40f);
    margin: 15px auto 0;
    border-radius: 10px;
}

.page-banner p {
    font-size: 20px;
    color: #dfe6e9;
    font-weight: 300;
    letter-spacing: 1px;
    max-width: 700px;
    margin: 12px auto 0;
}

/* ===== TICKER ===== */
.contact-ticker {
    background: rgba(245, 176, 65, 0.10);
    backdrop-filter: blur(8px);
    border-top: 2px solid rgba(245, 176, 65, 0.25);
    border-bottom: 2px solid rgba(245, 176, 65, 0.25);
    padding: 14px 0;
    overflow: hidden;
    position: relative;
}

.contact-ticker::before,
.contact-ticker::after {
    content: "";
    position: absolute;
    top: 0;
    width: 80px;
    height: 100%;
    z-index: 2;
    pointer-events: none;
}

.contact-ticker::before {
    left: 0;
    background: linear-gradient(90deg, rgba(15,35,25,0.95), transparent);
}

.contact-ticker::after {
    right: 0;
    background: linear-gradient(270deg, rgba(15,35,25,0.95), transparent);
}

.ticker-track {
    display: flex;
    gap: 50px;
    animation: tickerScroll 20s linear infinite;
    width: max-content;
}

.ticker-item {
    display: flex;
    align-items: center;
    gap: 12px;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    white-space: nowrap;
    padding: 0 10px;
}

.ticker-item .icon {
    font-size: 28px;
}

.ticker-item .highlight {
    color: #f5b041;
}

@keyframes tickerScroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

/* ===== CONTAINER ===== */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 25px 60px;
}

/* ===== SECTION HEADINGS ===== */
.section-heading {
    font-size: 34px;
    font-weight: 800;
    color: #f5b041;
    text-align: center;
    margin-bottom: 12px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.section-heading::after {
    content: "";
    display: block;
    width: 70px;
    height: 4px;
    background: linear-gradient(90deg, #f5b041, #f1c40f);
    margin: 10px auto 0;
    border-radius: 10px;
}

.section-subtitle {
    text-align: center;
    color: #dfe6e9;
    font-size: 17px;
    font-weight: 300;
    margin-bottom: 35px;
}

/* ===== CONTACT GRID ===== */
.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    margin-bottom: 50px;
}

.contact-card {
    background: rgba(255,255,255,0.06);
    backdrop-filter: blur(12px);
    border-radius: 20px;
    padding: 30px 25px;
    border-left: 5px solid #f5b041;
    box-shadow: 0 8px 30px rgba(0,0,0,0.15);
    transition: transform 0.3s;
}

.contact-card:hover {
    transform: translateY(-4px);
}

.contact-card h3 {
    font-size: 22px;
    font-weight: 700;
    color: #f5b041;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.contact-card h3 .icon {
    font-size: 30px;
}

.contact-card p {
    color: #dfe6e9;
    font-size: 15px;
    line-height: 1.9;
    margin-bottom: 8px;
}

.contact-card p strong {
    color: #fff;
}

.contact-card .label {
    color: #f1c40f;
    font-weight: 600;
}

/* ===== MAP ===== */
.map-container {
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 8px 30px rgba(0,0,0,0.2);
    border: 2px solid rgba(245, 176, 65, 0.2);
    margin-top: 10px;
}

.map-container iframe {
    width: 100%;
    height: 300px;
    border: none;
    display: block;
}

/* ===== FORM ===== */
.form-card {
    background: rgba(255,255,255,0.06);
    backdrop-filter: blur(12px);
    border-radius: 20px;
    padding: 35px 30px;
    border-left: 5px solid #f5b041;
    box-shadow: 0 8px 30px rgba(0,0,0,0.15);
    margin-top: 20px;
}

.form-card h3 {
    font-size: 24px;
    font-weight: 700;
    color: #f5b041;
    margin-bottom: 8px;
}

.form-card p {
    color: #dfe6e9;
    font-size: 15px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 18px;
}

.form-group label {
    display: block;
    font-weight: 600;
    color: #dfe6e9;
    margin-bottom: 5px;
    font-size: 14px;
}

.form-group input,
.form-group textarea,
.form-group select {
    width: 100%;
    padding: 12px 16px;
    border: 2px solid rgba(255,255,255,0.1);
    border-radius: 10px;
    background: rgba(255,255,255,0.08);
    color: #fff;
    font-size: 15px;
    transition: border 0.3s;
    font-family: inherit;
}

.form-group input::placeholder,
.form-group textarea::placeholder {
    color: #a0b8c8;
}

.form-group input:focus,
.form-group textarea:focus,
.form-group select:focus {
    border-color: #f5b041;
    outline: none;
    background: rgba(255,255,255,0.12);
}

.form-group textarea {
    resize: vertical;
    min-height: 100px;
}

.submit-btn {
    background: linear-gradient(135deg, #f5b041, #f1c40f);
    color: #1a1a2e;
    border: none;
    padding: 14px 35px;
    border-radius: 50px;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.3s;
    width: 100%;
    letter-spacing: 0.5px;
}

.submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(245, 176, 65, 0.4);
}

.success-message {
    background: rgba(46, 204, 113, 0.15);
    backdrop-filter: blur(8px);
    border-left: 4px solid #2ecc71;
    padding: 15px 20px;
    border-radius: 10px;
    color: #2ecc71;
    font-weight: 600;
    margin-bottom: 20px;
    text-align: center;
}

/* ===== RESPONSIVE ===== */
@media screen and (max-width: 992px) {
    .page-banner h1 { font-size: 36px; letter-spacing: 2px; }
    .contact-grid { grid-template-columns: 1fr; gap: 30px; }
}

@media screen and (max-width: 768px) {
    .page-banner {
        padding: 50px 15px 35px;
    }
    .page-banner h1 { font-size: 28px; }
    .page-banner p { font-size: 17px; }
    .section-heading { font-size: 26px; }
    .contact-card { padding: 22px 20px; }
    .form-card { padding: 25px 20px; }
    .map-container iframe { height: 220px; }
    .ticker-item { font-size: 14px; gap: 8px; }
    .ticker-item .icon { font-size: 22px; }
    .contact-ticker::before,
    .contact-ticker::after {
        width: 40px;
    }
}

@media screen and (max-width: 480px) {
    .page-banner h1 { font-size: 24px; }
    .page-banner p { font-size: 15px; }
    .section-heading { font-size: 22px; }
    .contact-card h3 { font-size: 19px; }
}
</style>

<!-- ===== PAGE WRAPPER WITH FIXED BACKGROUND ===== -->
<div class="page-wrapper">

    <!-- ===== BANNER ===== -->
    <section class="page-banner">
        <h1>Contact Admission Office</h1>
        <p>We're here to help you with your admission journey</p>
    </section>

    <!-- ===== TICKER ===== -->
    <div class="contact-ticker">
        <div class="ticker-track">
            <div class="ticker-item"><span class="icon">📞</span><span class="highlight">Call us</span> +91-9876543210</div>
            <div class="ticker-item"><span class="icon">✉️</span><span class="highlight">Email</span> admission@ewcm.edu.in</div>
            <div class="ticker-item"><span class="icon">🕐</span><span class="highlight">Working Hours</span> Mon–Sat, 9 AM – 5 PM</div>
            <div class="ticker-item"><span class="icon">📍</span><span class="highlight">Visit us</span> Bengaluru, Karnataka</div>
            <div class="ticker-item"><span class="icon">📋</span><span class="highlight">Online Counselling</span> Available</div>
            <div class="ticker-item"><span class="icon">📞</span><span class="highlight">Call us</span> +91-9876543210</div>
            <div class="ticker-item"><span class="icon">✉️</span><span class="highlight">Email</span> admission@ewcm.edu.in</div>
            <div class="ticker-item"><span class="icon">🕐</span><span class="highlight">Working Hours</span> Mon–Sat, 9 AM – 5 PM</div>
            <div class="ticker-item"><span class="icon">📍</span><span class="highlight">Visit us</span> Bengaluru, Karnataka</div>
            <div class="ticker-item"><span class="icon">📋</span><span class="highlight">Online Counselling</span> Available</div>
        </div>
    </div>

    <!-- ===== CONTENT ===== -->
    <div class="container">

        <!-- ===== CONTACT DETAILS & MAP ===== -->
        <h2 class="section-heading">Get in Touch</h2>
        <p class="section-subtitle">Reach out to our admission team for any queries</p>

        <div class="contact-grid">

            <!-- Left: Contact Details -->
            <div class="contact-card">
                <h3><span class="icon">📍</span> Address</h3>
                <p>
                    <strong>East West College of Management</strong><br>
                    East West College Main Rd, BEL Layout, Phase 2,<br>
                    Bedarahalli, Bengaluru, Karnataka - 560091
                </p>

                <h3 style="margin-top:20px;"><span class="icon">📞</span> Phone</h3>
                <p>
                    <span class="label">Admission Office:</span> +91-9876543210<br>
                    <span class="label">Alternate:</span> +91-9876543211
                </p>

                <h3 style="margin-top:20px;"><span class="icon">✉️</span> Email</h3>
                <p>
                    <a href="mailto:admission@ewcm.edu.in" style="color: #f5b041; text-decoration: none; font-weight: 600;">admission@ewcm.edu.in</a>
                </p>

                <h3 style="margin-top:20px;"><span class="icon">🕐</span> Working Hours</h3>
                <p>
                    <span class="label">Monday – Friday:</span> 9:00 AM – 5:00 PM<br>
                    <span class="label">Saturday:</span> 9:00 AM – 1:00 PM<br>
                    <span class="label">Sunday:</span> Closed
                </p>
            </div>

            <!-- Right: Google Map -->
            <div class="contact-card" style="border-left-color: #f1c40f;">
                <h3><span class="icon">🗺️</span> Find Us on Map</h3>
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1852.8293528176825!2d77.48306375401931!3d12.977977843810224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3c11974a3589%3A0xede707b80047b0f5!2sEast%20West%20Institute%20Of%20Technology%20Victory%20Cricket%20Club%2C%20E%20W%20College%20Main%20Rd%2C%20BEL%20Layout%2C%20Phase%202%2C%20Bedarahalli%2C%20Bengaluru%2C%20Karnataka%20560091!5e1!3m2!1sen!2sin!4v1785325901992!5m2!1sen!2sin" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
                <p style="color: #dfe6e9; font-size: 13px; margin-top: 10px;">
                    📍 Click the map to open in Google Maps for directions.
                </p>
            </div>

        </div>

        <!-- ===== ENQUIRY FORM ===== -->
        <h2 class="section-heading">Quick Enquiry</h2>
        <p class="section-subtitle">Send us a message and we'll get back to you shortly</p>

        <?php if (isset($_GET['contact']) && $_GET['contact'] === 'success'): ?>
            <div class="success-message">✅ Your enquiry has been sent! Our admission team will contact you soon.</div>
        <?php endif; ?>

        <div class="form-card">
            <h3>📩 Drop a Message</h3>
            <p>Fill in the details below and we'll respond promptly.</p>
            <form method="POST" action="">
                <div class="form-group">
                    <label>Your Full Name *</label>
                    <input type="text" name="name" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label>Email Address *</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label>Phone Number *</label>
                    <input type="tel" name="phone" placeholder="Enter your phone number" required>
                </div>
                <div class="form-group">
                    <label>Course Interested In *</label>
                    <select name="course" required>
                        <option value="">Select a course</option>
                        <option value="BCA">BCA</option>
                        <option value="BBA (Regular)">BBA (Regular)</option>
                        <option value="BBA (Aviation)">BBA (Aviation)</option>
                        <option value="B.Com">B.Com</option>
                        <option value="MCA">MCA</option>
                        <option value="MBA">MBA</option>
                        <option value="M.Com">M.Com</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Message (optional)</label>
                    <textarea name="message" placeholder="Write your query or message here..." rows="4"></textarea>
                </div>
                <button type="submit" name="contact_submit" class="submit-btn">Send Enquiry</button>
            </form>
        </div>

    </div>

</div>

<?php include("../../includes/footer.php"); ?>