<?php
include("../../includes/header.php");
include("../../includes/navbar.php");
?>

<!-- ===== AOS ANIMATION LIBRARY ===== -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<?php include("../../includes/enquiry_form.php"); ?>
<link rel="stylesheet" href="../../assets/css/global.css">
<style>
/* ==========================================
        E-LEARNING CENTER - MODERN STYLE
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
.elc-wrapper {
    max-width: 1350px;
    margin: 0 auto;
    padding: 0 20px 40px;
}

/* ==========================================
        BANNER
==========================================*/
.elc-banner {
    background: linear-gradient(135deg, #1a1a2e, #16213e, #0f3460);
    padding: 80px 40px 60px;
    border-radius: 24px;
    text-align: center;
    margin: 30px 0 50px;
    box-shadow: 0 12px 40px rgba(0,0,0,0.15);
    position: relative;
    overflow: hidden;
}

.elc-banner::before {
    content: "💻";
    position: absolute;
    right: 5%;
    bottom: 5%;
    font-size: 150px;
    opacity: 0.06;
    transform: rotate(-10deg);
}

.elc-banner::after {
    content: "📚";
    position: absolute;
    left: 5%;
    top: 5%;
    font-size: 120px;
    opacity: 0.06;
    transform: rotate(10deg);
}

.elc-banner h1 {
    font-size: 48px;
    font-weight: 900;
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-shadow: 0 4px 20px rgba(0,0,0,0.2);
    position: relative;
    display: inline-block;
}

.elc-banner h1::after {
    content: "";
    display: block;
    width: 100px;
    height: 5px;
    background: linear-gradient(90deg, #00d2d3, #00b894);
    margin: 15px auto 0;
    border-radius: 10px;
}

.elc-banner p {
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
    color: #1a1a2e;
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
    background: linear-gradient(90deg, #00d2d3, #00b894);
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
    color: #00b894;
    font-weight: 600;
}

/* ==========================================
        FEATURES GRID
==========================================*/
.features-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin-bottom: 50px;
}

.feature-card {
    background: #ffffff;
    padding: 35px 25px;
    border-radius: 18px;
    text-align: center;
    box-shadow: 0 6px 25px rgba(0,0,0,0.04);
    border: 1px solid #eef2f7;
    transition: all 0.35s ease;
    cursor: default;
}

.feature-card:hover {
    transform: translateY(-12px) scale(1.03);
    box-shadow: 0 16px 50px rgba(0,0,0,0.10);
    border-color: #00b894;
}

.feature-card .icon {
    font-size: 48px;
    display: block;
    margin-bottom: 15px;
}

.feature-card h3 {
    font-size: 22px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 12px;
}

.feature-card p {
    font-size: 15px;
    color: #666;
    line-height: 1.8;
}

/* ==========================================
        RESOURCES GRID
==========================================*/
.resources-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    margin-bottom: 50px;
}

.resource-card {
    background: #ffffff;
    padding: 30px 20px;
    border-radius: 18px;
    text-align: center;
    box-shadow: 0 6px 25px rgba(0,0,0,0.04);
    border-bottom: 5px solid #0f3460;
    transition: all 0.35s ease;
    cursor: default;
}

.resource-card:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 16px 50px rgba(0,0,0,0.10);
    border-bottom-color: #00b894;
}

.resource-card .icon {
    font-size: 40px;
    display: block;
    margin-bottom: 12px;
}

.resource-card h3 {
    font-size: 18px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 8px;
}

.resource-card p {
    font-size: 14px;
    color: #666;
    line-height: 1.7;
}

/* ==========================================
        STATISTICS / COUNTERS
==========================================*/
.stats-section {
    background: linear-gradient(135deg, #1a1a2e, #0f3460);
    padding: 60px 50px;
    border-radius: 20px;
    margin-bottom: 50px;
    box-shadow: 0 10px 35px rgba(0,0,0,0.12);
}

.stats-section h2 {
    color: #ffffff;
    font-size: 34px;
    font-weight: 800;
    text-align: center;
    margin-bottom: 40px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.stats-section h2::after {
    content: "";
    display: block;
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #00d2d3, #00b894);
    margin: 12px auto 0;
    border-radius: 10px;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
}

.stat-item {
    background: rgba(255,255,255,0.08);
    backdrop-filter: blur(6px);
    padding: 30px 20px;
    border-radius: 16px;
    text-align: center;
    transition: all 0.35s ease;
    border: 1px solid rgba(255,255,255,0.06);
}

.stat-item:hover {
    transform: translateY(-8px) scale(1.04);
    background: rgba(255,255,255,0.15);
    border-color: rgba(0, 210, 211, 0.3);
}

.stat-item .number {
    font-size: 42px;
    font-weight: 900;
    color: #00d2d3;
    display: block;
}

.stat-item .label {
    font-size: 16px;
    color: #dfe6e9;
    font-weight: 500;
    margin-top: 6px;
}

/* ==========================================
        ACCESS / HOW TO USE
==========================================*/
.access-section {
    background: #ffffff;
    padding: 50px 45px;
    border-radius: 20px;
    margin-bottom: 50px;
    box-shadow: 0 6px 30px rgba(0,0,0,0.04);
    border: 1px solid #eef2f7;
    transition: transform 0.3s, box-shadow 0.3s;
}

.access-section:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 45px rgba(0,0,0,0.08);
}

.access-section ul {
    list-style: none;
    padding: 0;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px 30px;
}

.access-section ul li {
    padding: 10px 0 10px 35px;
    position: relative;
    font-size: 16px;
    color: #444;
    line-height: 1.7;
    border-bottom: 1px solid #f0f2f5;
}

.access-section ul li::before {
    content: "▹";
    position: absolute;
    left: 0;
    color: #00b894;
    font-size: 20px;
    font-weight: 700;
}

/* ==========================================
        CONTACT SECTION
==========================================*/
.contact-elc {
    background: #ffffff;
    padding: 50px 45px;
    border-radius: 20px;
    box-shadow: 0 6px 30px rgba(0,0,0,0.04);
    border: 1px solid #eef2f7;
    margin-bottom: 30px;
    transition: transform 0.3s, box-shadow 0.3s;
}

.contact-elc:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 45px rgba(0,0,0,0.08);
}

.contact-elc-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.contact-elc-card {
    background: #f8faff;
    padding: 25px 20px;
    border-radius: 14px;
    text-align: center;
    border-top: 4px solid #0f3460;
    transition: all 0.35s ease;
}

.contact-elc-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 35px rgba(0,0,0,0.06);
    border-top-color: #00b894;
}

.contact-elc-card h3 {
    font-size: 20px;
    color: #1a1a2e;
    margin-bottom: 8px;
    font-weight: 700;
}

.contact-elc-card p {
    font-size: 16px;
    color: #555;
    line-height: 1.7;
}

.contact-elc-card a {
    color: #0f3460;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s;
}

.contact-elc-card a:hover {
    color: #00b894;
}

/* ==========================================
        RESPONSIVE
==========================================*/
@media screen and (max-width: 992px) {
    .elc-banner h1 { font-size: 38px; }
    .features-grid { grid-template-columns: repeat(2, 1fr); }
    .resources-grid { grid-template-columns: repeat(2, 1fr); }
    .stats-grid { grid-template-columns: repeat(2, 1fr); }
    .access-section ul { grid-template-columns: 1fr; }
    .contact-elc-grid { grid-template-columns: 1fr; }
}

@media screen and (max-width: 768px) {
    .elc-banner {
        padding: 50px 25px 40px;
        margin: 15px 0 30px;
    }
    .elc-banner h1 { font-size: 28px; letter-spacing: 1px; }
    .elc-banner p { font-size: 18px; }
    .section-heading { font-size: 26px; }
    .features-grid { grid-template-columns: 1fr; }
    .resources-grid { grid-template-columns: 1fr; }
    .stats-grid { grid-template-columns: 1fr; }
    .about-section, .access-section, .contact-elc { padding: 30px 20px; }
    .stats-section { padding: 40px 20px; }
    .stat-item .number { font-size: 32px; }
}

@media screen and (max-width: 480px) {
    .elc-banner h1 { font-size: 24px; }
    .elc-banner p { font-size: 16px; }
    .section-heading { font-size: 22px; }
    .feature-card .icon { font-size: 36px; }
    .resource-card .icon { font-size: 32px; }
}
</style>

<!-- ==========================================
    PAGE CONTENT
==========================================-->
<div class="elc-wrapper">

    <!-- ===== BANNER ===== -->
    <section class="elc-banner" data-aos="fade-down" data-aos-duration="900">
        <h1>E-Learning Center</h1>
        <p>Learn Anytime, Anywhere – Digital Education at Your Fingertips</p>
    </section>

    <!-- ===== ABOUT ===== -->
    <section class="about-section" data-aos="fade-right" data-aos-duration="800">
        <h2 class="section-heading">About the E-Learning Center</h2>
        <p>
            The E-Learning Center at East West College of Management is a state-of-the-art digital learning platform designed to provide students and faculty with seamless access to a wide range of online educational resources. Our center is dedicated to enhancing the teaching and learning experience through technology, offering interactive tools, digital content, and virtual classrooms.
        </p>
        <p style="margin-top:15px;">
            Whether you are on campus or studying remotely, our E-Learning Center ensures that you have access to high-quality educational materials, recorded lectures, online assignments, discussion forums, and collaborative tools that support your academic journey.
        </p>
    </section>

    <!-- ===== FEATURES ===== -->
    <section class="features-section">
        <h2 class="section-heading" data-aos="fade-up" data-aos-duration="800">Key Features</h2>
        <div class="features-grid">
            <div class="feature-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="50">
                <span class="icon">📹</span>
                <h3>Video Lectures</h3>
                <p>Recorded lectures by experienced faculty available 24/7 for revision and self-study.</p>
            </div>
            <div class="feature-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100">
                <span class="icon">📚</span>
                <h3>Digital Library</h3>
                <p>Access thousands of e-books, research papers, journals, and reference materials online.</p>
            </div>
            <div class="feature-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
                <span class="icon">🧪</span>
                <h3>Virtual Labs</h3>
                <p>Interactive virtual labs for practical learning in science, technology, and management.</p>
            </div>
            <div class="feature-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200">
                <span class="icon">📝</span>
                <h3>Online Assessments</h3>
                <p>Quizzes, assignments, and mock tests to track your progress and performance.</p>
            </div>
            <div class="feature-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="250">
                <span class="icon">💬</span>
                <h3>Discussion Forums</h3>
                <p>Collaborate with peers and faculty through interactive discussion boards.</p>
            </div>
            <div class="feature-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300">
                <span class="icon">📱</span>
                <h3>Mobile Access</h3>
                <p>Access learning materials anytime, anywhere through mobile-friendly platforms.</p>
            </div>
        </div>
    </section>

    <!-- ===== RESOURCES ===== -->
    <section class="resources-section">
        <h2 class="section-heading" data-aos="fade-up" data-aos-duration="800">Digital Resources</h2>
        <div class="resources-grid">
            <div class="resource-card" data-aos="flip-left" data-aos-duration="600" data-aos-delay="50">
                <span class="icon">📖</span>
                <h3>E-Books</h3>
                <p>Over 10,000+ e-books covering all subjects and disciplines.</p>
            </div>
            <div class="resource-card" data-aos="flip-left" data-aos-duration="600" data-aos-delay="100">
                <span class="icon">📄</span>
                <h3>Research Papers</h3>
                <p>Access to international journals and research databases.</p>
            </div>
            <div class="resource-card" data-aos="flip-left" data-aos-duration="600" data-aos-delay="150">
                <span class="icon">🎧</span>
                <h3>Audio Lectures</h3>
                <p>Podcast-style lectures for learning on the go.</p>
            </div>
            <div class="resource-card" data-aos="flip-left" data-aos-duration="600" data-aos-delay="200">
                <span class="icon">📊</span>
                <h3>Case Studies</h3>
                <p>Real-world case studies for management and business courses.</p>
            </div>
        </div>
    </section>

    <!-- ===== STATISTICS ===== -->
    <section class="stats-section" data-aos="fade-up" data-aos-duration="800">
        <h2>E-Learning Impact</h2>
        <div class="stats-grid">
            <div class="stat-item" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="50">
                <span class="number">10,000+</span>
                <span class="label">E-Books Available</span>
            </div>
            <div class="stat-item" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100">
                <span class="number">500+</span>
                <span class="label">Video Lectures</span>
            </div>
            <div class="stat-item" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
                <span class="number">24/7</span>
                <span class="label">Access & Support</span>
            </div>
            <div class="stat-item" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200">
                <span class="number">2,500+</span>
                <span class="label">Active Users</span>
            </div>
        </div>
    </section>

    <!-- ===== ACCESS ===== -->
    <section class="access-section" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
        <h2 class="section-heading">How to Access</h2>
        <ul>
            <li>Log in using your college provided credentials.</li>
            <li>Access the portal through the college website or mobile app.</li>
            <li>Browse courses and resources by department or subject.</li>
            <li>Watch recorded lectures and participate in live sessions.</li>
            <li>Submit assignments and take online assessments.</li>
            <li>Join discussion forums and interact with faculty and peers.</li>
            <li>Track your progress and performance through the dashboard.</li>
            <li>Get technical support for any issues or queries.</li>
        </ul>
    </section>

    <!-- ===== CONTACT ===== -->
    <section class="contact-elc" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
        <h2 class="section-heading">E-Learning Support</h2>
        <div class="contact-elc-grid">
            <div class="contact-elc-card" data-aos="flip-left" data-aos-duration="600" data-aos-delay="50">
                <h3>👨‍🏫 E-Learning Coordinator</h3>
                <p>Mr. [Coordinator Name]</p>
                <p>📞 +91-9876543210</p>
            </div>
            <div class="contact-elc-card" data-aos="flip-up" data-aos-duration="600" data-aos-delay="100">
                <h3>📧 Email Support</h3>
                <p>
                    <a href="mailto:elearning@ewcm.edu.in">elearning@ewcm.edu.in</a>
                </p>
            </div>
            <div class="contact-elc-card" data-aos="flip-right" data-aos-duration="600" data-aos-delay="150">
                <h3>🕐 Support Hours</h3>
                <p>
                    Monday – Friday: 9:00 AM – 6:00 PM<br>
                    Saturday: 10:00 AM – 2:00 PM
                </p>
            </div>
        </div>
    </section>

</div>

<!-- ===== ENQUIRY FORM ===== -->
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