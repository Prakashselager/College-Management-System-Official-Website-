<?php
include("../../includes/header.php");
include("../../includes/navbar.php");
?>

<!-- ===== AOS ANIMATION LIBRARY ===== -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<link rel="stylesheet" href="../../assets/css/global.css">
<style>
/* ==========================================
        SPORTS & ATHLETICS - MODERN STYLE
==========================================*/
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f5f7fc;
    color: #2d3436;
}

/* ===== PAGE WRAPPER ===== */
.sports-wrapper {
    max-width: 1350px;
    margin: 0 auto;
    padding: 0 20px 40px;
}

/* ==========================================
        BANNER
==========================================*/
.sports-banner {
    background: linear-gradient(135deg, #0a3d62, #1a6a8a, #e17055);
    padding: 80px 40px 60px;
    border-radius: 24px;
    text-align: center;
    margin: 30px 0 50px;
    box-shadow: 0 12px 40px rgba(0,0,0,0.12);
    position: relative;
    overflow: hidden;
}

.sports-banner::before {
    content: "🏃";
    position: absolute;
    right: 5%;
    bottom: 5%;
    font-size: 150px;
    opacity: 0.06;
    transform: rotate(-10deg);
}

.sports-banner::after {
    content: "⚽";
    position: absolute;
    left: 5%;
    top: 5%;
    font-size: 120px;
    opacity: 0.06;
    transform: rotate(10deg);
}

.sports-banner h1 {
    font-size: 48px;
    font-weight: 900;
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-shadow: 0 4px 20px rgba(0,0,0,0.2);
    position: relative;
    display: inline-block;
}

.sports-banner h1::after {
    content: "";
    display: block;
    width: 100px;
    height: 5px;
    background: linear-gradient(90deg, #fdcb6e, #f39c12);
    margin: 15px auto 0;
    border-radius: 10px;
}

.sports-banner p {
    font-size: 22px;
    color: #dfe6e9;
    font-weight: 300;
    letter-spacing: 1px;
    margin-top: 12px;
    position: relative;
}

/* ==========================================
        SECTION HEADINGS
==========================================*/
.section-heading {
    font-size: 34px;
    font-weight: 800;
    color: #0a3d62;
    text-align: center;
    margin-bottom: 40px;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: relative;
}

.section-heading::after {
    content: "";
    display: block;
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #e17055, #fdcb6e);
    margin: 12px auto 0;
    border-radius: 10px;
}

/* ==========================================
        ABOUT SECTION
==========================================*/
.about-section {
    background: #ffffff;
    padding: 50px 45px;
    border-radius: 20px;
    margin-bottom: 50px;
    box-shadow: 0 6px 30px rgba(0,0,0,0.04);
    border: 1px solid #eef2f7;
    transition: transform 0.3s, box-shadow 0.3s;
}

.about-section:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 45px rgba(0,0,0,0.08);
}

.about-section p {
    font-size: 17px;
    line-height: 2;
    color: #444;
    text-align: justify;
}

.about-section .highlight-text {
    color: #e17055;
    font-weight: 600;
}

/* ==========================================
        SPORTS GRID
==========================================*/
.sports-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    margin-bottom: 50px;
}

.sport-card {
    background: #ffffff;
    padding: 30px 20px;
    border-radius: 18px;
    text-align: center;
    box-shadow: 0 6px 25px rgba(0,0,0,0.04);
    border: 1px solid #eef2f7;
    transition: all 0.35s ease;
    cursor: default;
}

.sport-card:hover {
    transform: translateY(-12px) scale(1.03);
    box-shadow: 0 16px 50px rgba(0,0,0,0.10);
    border-color: #e17055;
}

.sport-card .icon {
    font-size: 48px;
    display: block;
    margin-bottom: 12px;
}

.sport-card h3 {
    font-size: 20px;
    font-weight: 700;
    color: #0a3d62;
    margin-bottom: 8px;
}

.sport-card p {
    font-size: 14px;
    color: #666;
    line-height: 1.7;
}

/* ==========================================
        FACILITIES GRID
==========================================*/
.facilities-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin-bottom: 50px;
}

.facility-card {
    background: #ffffff;
    padding: 35px 25px;
    border-radius: 18px;
    text-align: center;
    box-shadow: 0 6px 25px rgba(0,0,0,0.04);
    border-bottom: 5px solid #0a3d62;
    transition: all 0.35s ease;
    cursor: default;
}

.facility-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 16px 50px rgba(0,0,0,0.10);
    border-bottom-color: #e17055;
}

.facility-card .icon {
    font-size: 40px;
    display: block;
    margin-bottom: 10px;
}

.facility-card h3 {
    font-size: 20px;
    font-weight: 700;
    color: #0a3d62;
    margin-bottom: 10px;
}

.facility-card p {
    font-size: 15px;
    color: #666;
    line-height: 1.7;
}

/* ==========================================
        ACHIEVEMENTS / STATISTICS
==========================================*/
.achievements-section {
    background: linear-gradient(135deg, #0a3d62, #1a6a8a);
    padding: 60px 50px;
    border-radius: 20px;
    margin-bottom: 50px;
    box-shadow: 0 10px 35px rgba(0,0,0,0.12);
}

.achievements-section h2 {
    color: #ffffff;
    font-size: 34px;
    font-weight: 800;
    text-align: center;
    margin-bottom: 40px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.achievements-section h2::after {
    content: "";
    display: block;
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #fdcb6e, #f39c12);
    margin: 12px auto 0;
    border-radius: 10px;
}

.achievements-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
}

.achievement-item {
    background: rgba(255,255,255,0.08);
    backdrop-filter: blur(6px);
    padding: 30px 20px;
    border-radius: 16px;
    text-align: center;
    transition: all 0.35s ease;
    border: 1px solid rgba(255,255,255,0.06);
}

.achievement-item:hover {
    transform: translateY(-8px) scale(1.04);
    background: rgba(255,255,255,0.15);
    border-color: rgba(255,255,255,0.2);
}

.achievement-item .number {
    font-size: 40px;
    font-weight: 900;
    color: #fdcb6e;
    display: block;
}

.achievement-item .label {
    font-size: 16px;
    color: #dfe6e9;
    font-weight: 500;
    margin-top: 6px;
}

/* ==========================================
        GALLERY SECTION
==========================================*/
.gallery-section {
    margin-bottom: 50px;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.gallery-item {
    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 6px 25px rgba(0,0,0,0.04);
    border: 1px solid #eef2f7;
    transition: all 0.35s ease;
    aspect-ratio: 4/3;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 60px;
    color: #0a3d62;
    background: #f8faff;
}

.gallery-item:hover {
    transform: scale(1.05) rotate(1deg);
    box-shadow: 0 16px 45px rgba(0,0,0,0.08);
    border-color: #e17055;
}

.gallery-item .placeholder-text {
    font-size: 16px;
    color: #aaa;
    font-weight: 300;
}

/* ==========================================
        CONTACT SECTION
==========================================*/
.contact-sports {
    background: #ffffff;
    padding: 50px 45px;
    border-radius: 20px;
    box-shadow: 0 6px 30px rgba(0,0,0,0.04);
    border: 1px solid #eef2f7;
    margin-bottom: 30px;
    transition: transform 0.3s, box-shadow 0.3s;
}

.contact-sports:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 45px rgba(0,0,0,0.08);
}

.contact-sports .section-heading {
    margin-bottom: 30px;
}

.contact-sports-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.contact-sports-card {
    background: #f8faff;
    padding: 25px 20px;
    border-radius: 14px;
    text-align: center;
    border-top: 4px solid #0a3d62;
    transition: all 0.35s ease;
}

.contact-sports-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 35px rgba(0,0,0,0.06);
    border-top-color: #e17055;
}

.contact-sports-card h3 {
    font-size: 20px;
    color: #0a3d62;
    margin-bottom: 8px;
    font-weight: 700;
}

.contact-sports-card p {
    font-size: 16px;
    color: #555;
    line-height: 1.7;
}

.contact-sports-card a {
    color: #0a3d62;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s;
}

.contact-sports-card a:hover {
    color: #e17055;
}

/* ==========================================
        RESPONSIVE
==========================================*/
@media screen and (max-width: 992px) {
    .sports-banner h1 { font-size: 38px; }
    .sports-grid { grid-template-columns: repeat(2, 1fr); }
    .facilities-grid { grid-template-columns: repeat(2, 1fr); }
    .achievements-grid { grid-template-columns: repeat(2, 1fr); }
    .gallery-grid { grid-template-columns: repeat(2, 1fr); }
    .contact-sports-grid { grid-template-columns: 1fr; }
}

@media screen and (max-width: 768px) {
    .sports-banner {
        padding: 50px 25px 40px;
        margin: 15px 0 30px;
    }
    .sports-banner h1 { font-size: 28px; letter-spacing: 1px; }
    .sports-banner p { font-size: 18px; }
    .section-heading { font-size: 26px; }
    .sports-grid { grid-template-columns: 1fr; }
    .facilities-grid { grid-template-columns: 1fr; }
    .achievements-grid { grid-template-columns: 1fr; }
    .gallery-grid { grid-template-columns: 1fr; }
    .about-section, .contact-sports { padding: 30px 20px; }
    .achievements-section { padding: 40px 20px; }
    .achievement-item .number { font-size: 32px; }
}

@media screen and (max-width: 480px) {
    .sports-banner h1 { font-size: 24px; }
    .sports-banner p { font-size: 16px; }
    .section-heading { font-size: 22px; }
    .sport-card .icon { font-size: 36px; }
    .facility-card .icon { font-size: 32px; }
}
</style>

<!-- ==========================================
    PAGE CONTENT
==========================================-->
<div class="sports-wrapper">

    <!-- ===== BANNER ===== -->
    <section class="sports-banner" data-aos="fade-down" data-aos-duration="900">
        <h1>Sports & Athletics</h1>
        <p>Unleashing Potential, Building Champions</p>
    </section>

    <!-- ===== ABOUT ===== -->
    <section class="about-section" data-aos="fade-right" data-aos-duration="800">
        <h2 class="section-heading">About Sports at EWCM</h2>
        <p>
            At East West College of Management, we believe that sports and athletics are essential for the holistic development of students. Our sports department provides state-of-the-art facilities, professional coaching, and numerous opportunities for students to participate in various indoor and outdoor sports activities.
        </p>
        <p style="margin-top:15px;">
            We encourage students to maintain a healthy lifestyle, develop teamwork skills, and build leadership qualities through sports. Our students have consistently performed well in inter-college tournaments, university-level competitions, and state-level championships.
        </p>
    </section>

    <!-- ===== SPORTS OFFERED ===== -->
    <section class="sports-section">
        <h2 class="section-heading" data-aos="fade-up" data-aos-duration="800">Sports Offered</h2>
        <div class="sports-grid">
            <div class="sport-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="50">
                <span class="icon">🏏</span>
                <h3>Cricket</h3>
                <p>Professional coaching with practice nets and stadium.</p>
            </div>
            <div class="sport-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100">
                <span class="icon">⚽</span>
                <h3>Football</h3>
                <p>Full-size football ground with floodlights.</p>
            </div>
            <div class="sport-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
                <span class="icon">🏀</span>
                <h3>Basketball</h3>
                <p>Indoor and outdoor basketball courts.</p>
            </div>
            <div class="sport-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200">
                <span class="icon">🏸</span>
                <h3>Badminton</h3>
                <p>Indoor badminton courts with professional flooring.</p>
            </div>
            <div class="sport-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="250">
                <span class="icon">🏐</span>
                <h3>Volleyball</h3>
                <p>Outdoor volleyball courts with sand surface.</p>
            </div>
            <div class="sport-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300">
                <span class="icon">🏊</span>
                <h3>Swimming</h3>
                <p>Heated indoor swimming pool with professional coaches.</p>
            </div>
            <div class="sport-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="350">
                <span class="icon">🏃</span>
                <h3>Athletics</h3>
                <p>Track and field events with professional training.</p>
            </div>
            <div class="sport-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="400">
                <span class="icon">🎾</span>
                <h3>Tennis</h3>
                <p>Clay and hard court tennis facilities.</p>
            </div>
        </div>
    </section>

    <!-- ===== FACILITIES ===== -->
    <section class="facilities-section">
        <h2 class="section-heading" data-aos="fade-up" data-aos-duration="800">Sports Facilities</h2>
        <div class="facilities-grid">
            <div class="facility-card" data-aos="flip-left" data-aos-duration="600" data-aos-delay="50">
                <span class="icon">🏟️</span>
                <h3>Stadium</h3>
                <p>Multi-purpose stadium with seating capacity of 5,000.</p>
            </div>
            <div class="facility-card" data-aos="flip-left" data-aos-duration="600" data-aos-delay="100">
                <span class="icon">🏋️</span>
                <h3>Gymnasium</h3>
                <p>Fully equipped modern gym with certified trainers.</p>
            </div>
            <div class="facility-card" data-aos="flip-left" data-aos-duration="600" data-aos-delay="150">
                <span class="icon">🏊</span>
                <h3>Swimming Pool</h3>
                <p>Olympic-size swimming pool with temperature control.</p>
            </div>
            <div class="facility-card" data-aos="flip-left" data-aos-duration="600" data-aos-delay="200">
                <span class="icon">🏸</span>
                <h3>Indoor Courts</h3>
                <p>Badminton, basketball, and table tennis courts.</p>
            </div>
            <div class="facility-card" data-aos="flip-left" data-aos-duration="600" data-aos-delay="250">
                <span class="icon">⚽</span>
                <h3>Football Ground</h3>
                <p>International standard football turf with floodlights.</p>
            </div>
            <div class="facility-card" data-aos="flip-left" data-aos-duration="600" data-aos-delay="300">
                <span class="icon">🏏</span>
                <h3>Cricket Nets</h3>
                <p>Practice nets with bowling machines and professional coaches.</p>
            </div>
        </div>
    </section>

    <!-- ===== ACHIEVEMENTS ===== -->
    <section class="achievements-section" data-aos="fade-up" data-aos-duration="800">
        <h2>Our Achievements</h2>
        <div class="achievements-grid">
            <div class="achievement-item" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="50">
                <span class="number">🏆 25+</span>
                <span class="label">College Championships</span>
            </div>
            <div class="achievement-item" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100">
                <span class="number">🥇 15</span>
                <span class="label">State-Level Medals</span>
            </div>
            <div class="achievement-item" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
                <span class="number">🥉 10</span>
                <span class="label">National-Level Medals</span>
            </div>
            <div class="achievement-item" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200">
                <span class="number">🏅 100+</span>
                <span class="label">Individual Awards</span>
            </div>
        </div>
    </section>

    <!-- ===== GALLERY ===== -->
    <section class="gallery-section">
        <h2 class="section-heading" data-aos="fade-up" data-aos-duration="800">Sports Gallery</h2>
        <div class="gallery-grid">
            <div class="gallery-item" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="50">
                <span>🏏</span>
            </div>
            <div class="gallery-item" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100">
                <span>⚽</span>
            </div>
            <div class="gallery-item" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
                <span>🏀</span>
            </div>
            <div class="gallery-item" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200">
                <span>🏸</span>
            </div>
            <div class="gallery-item" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="250">
                <span>🏊</span>
            </div>
            <div class="gallery-item" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300">
                <span>🏃</span>
            </div>
            <div class="gallery-item" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="350">
                <span>🏋️</span>
            </div>
            <div class="gallery-item" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="400">
                <span>🎾</span>
            </div>
        </div>
    </section>

    <!-- ===== CONTACT ===== -->
    <section class="contact-sports" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
        <h2 class="section-heading">Sports Department Contact</h2>
        <div class="contact-sports-grid">
            <div class="contact-sports-card" data-aos="flip-left" data-aos-duration="600" data-aos-delay="50">
                <h3>👨‍🏫 Sports Director</h3>
                <p>Mr. XYZ</p>
                <p>📞 +91-9876543210</p>
            </div>
            <div class="contact-sports-card" data-aos="flip-up" data-aos-duration="600" data-aos-delay="100">
                <h3>📧 Email</h3>
                <p>
                    <a href="mailto:sports@ewcm.edu.in">sports@ewcm.edu.in</a>
                </p>
            </div>
            <div class="contact-sports-card" data-aos="flip-right" data-aos-duration="600" data-aos-delay="150">
                <h3>📍 Location</h3>
                <p>
                    Ground Floor, Sports Complex,<br>
                    East West College of Management,<br>
                    Bengaluru - 560091
                </p>
            </div>
        </div>
    </section>

</div>

<!-- ===== ENQUIRY FORM (Global – now on every page) ===== -->
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