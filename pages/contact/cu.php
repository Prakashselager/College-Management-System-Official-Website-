<?php
include("../../includes/config.php");
include("../../includes/header.php");
include("../../includes/navbar.php");
?>

<!-- ===== AOS ANIMATION ===== -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<?php include("../../includes/enquiry_form.php"); ?>
<link rel="stylesheet" href="../../assets/css/global.css">
<style>
/* ==========================================
    CONTACT US – TEAL + CORAL + NAVY THEME
==========================================*/
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f5faff;
    color: #2d3436;
}

.contact-wrapper {
    max-width: 1350px;
    margin: 0 auto;
    padding: 0 20px 40px;
}

/* ===== BANNER ===== */
.contact-banner {
    background: linear-gradient(135deg, #0a3d3d 0%, #1a5c5c 50%, #e17055 100%);
    padding: 90px 40px 70px;
    border-radius: 28px;
    text-align: center;
    margin: 30px 0 50px;
    box-shadow: 0 12px 40px rgba(0,0,0,0.12);
    position: relative;
    overflow: hidden;
}
.contact-banner::after {
    content: "📞";
    position: absolute;
    right: 5%;
    bottom: 5%;
    font-size: 160px;
    opacity: 0.06;
}
.contact-banner h1 {
    font-size: 50px;
    color: #fff;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-shadow: 0 4px 20px rgba(0,0,0,0.15);
    position: relative;
}
.contact-banner h1::after {
    content: "";
    display: block;
    width: 100px;
    height: 5px;
    background: #f7dc6f;
    margin: 15px auto 0;
    border-radius: 10px;
}
.contact-banner p {
    font-size: 22px;
    color: #dfe6e9;
    font-weight: 300;
    margin-top: 12px;
}

/* ===== SECTION HEADING ===== */
.section-heading {
    font-size: 34px;
    font-weight: 800;
    color: #0a3d3d;
    text-align: center;
    margin-bottom: 40px;
    text-transform: uppercase;
    letter-spacing: 2px;
}
.section-heading::after {
    content: "";
    display: block;
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #e17055, #f7dc6f);
    margin: 12px auto 0;
    border-radius: 10px;
}

/* ==========================================
    CONTACT GRID
==========================================*/
.contact-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    margin-bottom: 50px;
}

.contact-card {
    background: #ffffff;
    padding: 35px 25px;
    border-radius: 18px;
    text-align: center;
    box-shadow: 0 6px 25px rgba(0,0,0,0.04);
    border-bottom: 5px solid #e17055;
    transition: all 0.3s ease;
    cursor: default;
}
.contact-card:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 16px 45px rgba(225, 112, 85, 0.12);
    border-bottom-color: #0a3d3d;
}
.contact-card .icon {
    font-size: 40px;
    display: block;
    margin-bottom: 12px;
}
.contact-card h3 {
    font-size: 20px;
    color: #0a3d3d;
    margin-bottom: 8px;
    font-weight: 700;
}
.contact-card p {
    font-size: 16px;
    color: #555;
    line-height: 1.8;
}
.contact-card a {
    color: #0a3d3d;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s;
}
.contact-card a:hover {
    color: #e17055;
}

/* ==========================================
    WORKING HOURS
==========================================*/
.hours-section {
    background: #ffffff;
    padding: 45px 40px;
    border-radius: 20px;
    margin-bottom: 50px;
    box-shadow: 0 6px 25px rgba(0,0,0,0.04);
    border: 1px solid #e8ecf0;
    transition: all 0.3s;
}
.hours-section:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 35px rgba(0,0,0,0.06);
}

.hours-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin-top: 20px;
}
.hours-item {
    background: #f8faff;
    padding: 20px 25px;
    border-radius: 14px;
    border-left: 5px solid #e17055;
    transition: all 0.3s ease;
}
.hours-item:hover {
    transform: translateX(6px);
    border-left-color: #0a3d3d;
    background: #ffffff;
    box-shadow: 0 6px 20px rgba(0,0,0,0.04);
}
.hours-item .day {
    font-weight: 700;
    color: #0a3d3d;
    font-size: 18px;
}
.hours-item .time {
    color: #555;
    font-size: 16px;
    margin-top: 4px;
}

/* ==========================================
    MAP
==========================================*/
.map-section {
    background: #ffffff;
    padding: 30px 25px;
    border-radius: 20px;
    margin-bottom: 50px;
    box-shadow: 0 6px 25px rgba(0,0,0,0.04);
    border: 1px solid #e8ecf0;
    transition: all 0.3s;
}
.map-section:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 35px rgba(0,0,0,0.06);
}
.map-container {
    border-radius: 16px;
    overflow: hidden;
    border: 2px solid rgba(225, 112, 85, 0.2);
}
.map-container iframe {
    width: 100%;
    height: 400px;
    border: none;
    display: block;
}

/* ==========================================
    ENQUIRY FORM (Dedicated)
==========================================*/
.form-section {
    background: #ffffff;
    padding: 50px 45px;
    border-radius: 20px;
    margin-bottom: 30px;
    box-shadow: 0 6px 25px rgba(0,0,0,0.04);
    border: 1px solid #e8ecf0;
    transition: all 0.3s;
}
.form-section:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 35px rgba(0,0,0,0.06);
}

.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 25px;
}

.form-group {
    margin-bottom: 18px;
}
.form-group label {
    display: block;
    font-weight: 600;
    color: #0a3d3d;
    margin-bottom: 5px;
    font-size: 14px;
}
.form-group input,
.form-group textarea,
.form-group select {
    width: 100%;
    padding: 12px 16px;
    border: 2px solid #e0e4ea;
    border-radius: 10px;
    font-size: 15px;
    transition: border 0.3s;
    font-family: inherit;
}
.form-group input:focus,
.form-group textarea:focus,
.form-group select:focus {
    border-color: #e17055;
    outline: none;
}
.form-group textarea {
    resize: vertical;
    min-height: 120px;
}
.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.submit-btn {
    background: linear-gradient(135deg, #e17055, #0a3d3d);
    color: #fff;
    border: none;
    padding: 14px 40px;
    border-radius: 50px;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.3s;
    width: 100%;
    letter-spacing: 0.5px;
}
.submit-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 30px rgba(225, 112, 85, 0.3);
}

.success-message {
    background: rgba(46, 204, 113, 0.12);
    border-left: 4px solid #2ecc71;
    padding: 15px 20px;
    border-radius: 10px;
    color: #27ae60;
    font-weight: 600;
    margin-bottom: 20px;
    text-align: center;
}

/* ==========================================
    RESPONSIVE
==========================================*/
@media (max-width: 992px) {
    .contact-grid { grid-template-columns: repeat(2,1fr); }
    .hours-grid { grid-template-columns: repeat(2,1fr); }
    .form-grid { grid-template-columns: 1fr; }
    .form-row { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
    .contact-banner { padding: 50px 25px; }
    .contact-banner h1 { font-size: 32px; }
    .contact-banner p { font-size: 18px; }
    .contact-grid { grid-template-columns: 1fr; }
    .hours-grid { grid-template-columns: 1fr; }
    .section-heading { font-size: 26px; }
    .map-container iframe { height: 250px; }
    .form-section { padding: 30px 20px; }
}
</style>

<!-- ==========================================
    PAGE CONTENT
==========================================-->
<div class="contact-wrapper">

    <!-- ===== BANNER ===== -->
    <section class="contact-banner" data-aos="fade-down" data-aos-duration="900">
        <h1>Contact Us</h1>
        <p>We're Here to Help You</p>
    </section>

    <!-- ===== CONTACT DETAILS ===== -->
    <section>
        <h2 class="section-heading" data-aos="fade-up">Get in Touch</h2>
        <div class="contact-grid">
            <div class="contact-card" data-aos="flip-left" data-aos-duration="600" data-aos-delay="50">
                <span class="icon">📍</span>
                <h3>Address</h3>
                <p>
                    East West College of Management<br>
                    East West College Main Rd, BEL Layout, Phase 2,<br>
                    Bedarahalli, Bengaluru,<br>
                    Karnataka - 560091
                </p>
            </div>
            <div class="contact-card" data-aos="flip-left" data-aos-duration="600" data-aos-delay="100">
                <span class="icon">📞</span>
                <h3>Phone</h3>
                <p>
                    <strong>Admission Office:</strong><br>
                    <a href="tel:+919876543210">+91-9876543210</a><br>
                    <a href="tel:+919876543211">+91-9876543211</a>
                </p>
            </div>
            <div class="contact-card" data-aos="flip-left" data-aos-duration="600" data-aos-delay="150">
                <span class="icon">✉️</span>
                <h3>Email</h3>
                <p>
                    <a href="mailto:info@ewcm.edu.in">info@ewcm.edu.in</a><br>
                    <a href="mailto:admission@ewcm.edu.in">admission@ewcm.edu.in</a>
                </p>
            </div>
            <div class="contact-card" data-aos="flip-left" data-aos-duration="600" data-aos-delay="200">
                <span class="icon">🌐</span>
                <h3>Website</h3>
                <p>
                    <a href="http://www.ewcm.com" target="_blank">www.ewcm.edu.in</a>
                </p>
            </div>
        </div>
    </section>

    <!-- ===== WORKING HOURS ===== -->
    <section class="hours-section" data-aos="fade-up" data-aos-duration="800">
        <h2 class="section-heading">Working Hours</h2>
        <div class="hours-grid">
            <div class="hours-item" data-aos="fade-right" data-aos-duration="600" data-aos-delay="50">
                <div class="day">Monday – Friday</div>
                <div class="time">9:00 AM – 5:00 PM</div>
            </div>
            <div class="hours-item" data-aos="fade-left" data-aos-duration="600" data-aos-delay="100">
                <div class="day">Saturday</div>
                <div class="time">9:00 AM – 1:00 PM</div>
            </div>
            <div class="hours-item" data-aos="fade-right" data-aos-duration="600" data-aos-delay="150">
                <div class="day">Sunday</div>
                <div class="time">Closed</div>
            </div>
        </div>
    </section>

    <!-- ===== MAP ===== -->
    <section class="map-section" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
        <h2 class="section-heading">Find Us on Map</h2>
        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1852.8293528176825!2d77.48306375401931!3d12.977977843810224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3c11974a3589%3A0xede707b80047b0f5!2sEast%20West%20Institute%20Of%20Technology%20Victory%20Cricket%20Club%2C%20E%20W%20College%20Main%20Rd%2C%20BEL%20Layout%2C%20Phase%202%2C%20Bedarahalli%2C%20Bengaluru%2C%20Karnataka%20560091!5e1!3m2!1sen!2sin!4v1785325901992!5m2!1sen!2sin"                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </section>

    <!-- ===== QUICK ENQUIRY FORM ===== -->
    <section class="form-section" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
        <h2 class="section-heading">Quick Enquiry</h2>
        <p style="text-align:center; color:#555; margin-bottom:25px; font-size:16px;">
            Fill in the details below and we'll respond promptly.
        </p>

        <?php if (isset($_GET['contact']) && $_GET['contact'] === 'success'): ?>
            <div class="success-message">✅ Your enquiry has been sent! Our team will contact you soon.</div>
        <?php endif; ?>

        <form method="POST" action="../../submit_enquiry.php">
            <div class="form-grid">
                <div>
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
                </div>
                <div>
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
                        <textarea name="message" placeholder="Write your query or message here..."></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" name="contact_submit" class="submit-btn">Send Enquiry</button>
        </form>
    </section>

</div>

<?php include("../../includes/enquiry_form.php"); ?>
<?php include("../../includes/footer.php"); ?>

<!-- ===== AOS INIT ===== -->
<script>
    AOS.init({
        once: true,
        offset: 120,
        easing: 'ease-out-quad',
    });
</script>