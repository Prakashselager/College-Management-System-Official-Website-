<?php
include("../../includes/config.php");
include("../../includes/header.php");
include("../../includes/navbar.php");
?>

<!-- ===== AOS ANIMATION ===== -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<link rel="stylesheet" href="../../assets/css/global.css">
<style>
/* ==========================================
    TOP RECRUITERS – SOFT PASTEL BLUE + HONEY YELLOW
==========================================*/
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f5f8fc;
    color: #2d3436;
}

.recruiter-wrapper {
    max-width: 1350px;
    margin: 0 auto;
    padding: 0 20px 40px;
}

/* ===== BANNER ===== */
.recruiter-banner {
    background: linear-gradient(135deg, #d4e6f1 0%, #a9cce3 40%, #85c1e9 100%);
    padding: 90px 40px 70px;
    border-radius: 28px;
    text-align: center;
    margin: 30px 0 50px;
    box-shadow: 0 12px 35px rgba(0,0,0,0.06);
    position: relative;
    overflow: hidden;
}
.recruiter-banner::after {
    content: "🏢";
    position: absolute;
    right: 5%;
    bottom: 5%;
    font-size: 160px;
    opacity: 0.06;
}
.recruiter-banner h1 {
    font-size: 50px;
    color: #1a3a5c;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-shadow: 0 2px 15px rgba(0,0,0,0.04);
    position: relative;
}
.recruiter-banner h1::after {
    content: "";
    display: block;
    width: 100px;
    height: 5px;
    background: #f9e76b;
    margin: 15px auto 0;
    border-radius: 10px;
}
.recruiter-banner p {
    font-size: 22px;
    color: #1a3a5c;
    font-weight: 300;
    margin-top: 12px;
}

/* ===== SECTION HEADING ===== */
.section-heading {
    font-size: 34px;
    font-weight: 800;
    color: #1a3a5c;
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
    background: linear-gradient(90deg, #f9e76b, #fbbf24);
    margin: 12px auto 0;
    border-radius: 10px;
}

/* ==========================================
    SCROLLING LOGO IMAGE (Bottom to Top)
==========================================*/
.logo-scroll-container {
    background: #ffffff;
    padding: 30px 20px;
    border-radius: 20px;
    box-shadow: 0 6px 25px rgba(0,0,0,0.04);
    margin-bottom: 50px;
    border: 1px solid #e8ecf0;
    overflow: hidden;
    height: 450px;
    position: relative;
}

.logo-scroll-container::before,
.logo-scroll-container::after {
    content: "";
    position: absolute;
    left: 0;
    width: 100%;
    height: 60px;
    z-index: 2;
    pointer-events: none;
}
.logo-scroll-container::before {
    top: 0;
    background: linear-gradient(to bottom, #ffffff, transparent);
}
.logo-scroll-container::after {
    bottom: 0;
    background: linear-gradient(to top, #ffffff, transparent);
}

.logo-scroll-wrapper {
    display: flex;
    flex-direction: column;
    animation: scrollUp 35s linear infinite;
}

.logo-scroll-wrapper img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: contain;
}

@keyframes scrollUp {
    0% { transform: translateY(0); }
    100% { transform: translateY(-50%); }
}

/* ==========================================
    STATS – SOFT PASTEL BLUE
==========================================*/
.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    margin-bottom: 50px;
}
.stat-card {
    background: #ffffff;
    padding: 30px 20px;
    border-radius: 18px;
    text-align: center;
    box-shadow: 0 6px 25px rgba(0,0,0,0.04);
    border-bottom: 5px solid #f9e76b;
    transition: all 0.3s ease;
}
.stat-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 16px 45px rgba(249, 231, 107, 0.25);
    border-bottom-color: #85c1e9;
    background: #fafcff;
}
.stat-card .number {
    font-size: 44px;
    font-weight: 900;
    color: #1a3a5c;
}
.stat-card .label {
    font-size: 16px;
    color: #5a7a9a;
    font-weight: 500;
    margin-top: 4px;
}

/* ==========================================
    WHY RECRUITERS – SOFT PASTEL BLUE
==========================================*/
.why-recruiters {
    background: #ffffff;
    padding: 50px 40px;
    border-radius: 20px;
    box-shadow: 0 6px 25px rgba(0,0,0,0.04);
    border: 1px solid #e8ecf0;
    margin-bottom: 40px;
    text-align: center;
}
.why-recruiters h2 {
    color: #1a3a5c;
}
.why-recruiters-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin-top: 25px;
}
.why-recruiters-grid .why-item {
    background: #f5faff;
    padding: 25px 20px;
    border-radius: 14px;
    border-left: 5px solid #85c1e9;
    transition: all 0.3s ease;
    cursor: default;
}
.why-recruiters-grid .why-item:hover {
    transform: translateX(8px) scale(1.02);
    border-left-color: #f9e76b;
    background: #ffffff;
    box-shadow: 0 8px 30px rgba(133, 193, 233, 0.15);
}
.why-recruiters-grid .why-item .icon {
    font-size: 32px;
    display: block;
    margin-bottom: 8px;
}
.why-recruiters-grid .why-item h4 {
    color: #1a3a5c;
    font-weight: 700;
    font-size: 18px;
    margin-bottom: 4px;
}
.why-recruiters-grid .why-item p {
    font-size: 14px;
    color: #5a7a9a;
    line-height: 1.7;
}

/* ==========================================
    CONTACT – SOFT PASTEL BLUE
==========================================*/
.recruiter-contact {
    background: linear-gradient(135deg, #d4e6f1, #a9cce3);
    padding: 50px 40px;
    border-radius: 20px;
    color: #1a3a5c;
    text-align: center;
    margin-top: 20px;
    transition: all 0.3s ease;
}
.recruiter-contact:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 45px rgba(133, 193, 233, 0.2);
}
.recruiter-contact h2 {
    font-size: 30px;
    font-weight: 700;
    margin-bottom: 15px;
    color: #1a3a5c;
}
.recruiter-contact h2::after {
    content: "";
    display: block;
    width: 80px;
    height: 4px;
    background: #f9e76b;
    margin: 15px auto 0;
    border-radius: 10px;
}
.recruiter-contact p {
    font-size: 18px;
    line-height: 1.8;
    max-width: 800px;
    margin: 0 auto 10px;
}
.recruiter-contact a {
    color: #1a3a5c;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s;
}
.recruiter-contact a:hover {
    color: #f9a825;
    text-decoration: underline;
}

/* ==========================================
    RESPONSIVE
==========================================*/
@media (max-width: 992px) {
    .stats-grid { grid-template-columns: repeat(2,1fr); }
    .why-recruiters-grid { grid-template-columns: repeat(2,1fr); }
}
@media (max-width: 768px) {
    .recruiter-banner { padding: 50px 25px; }
    .recruiter-banner h1 { font-size: 32px; }
    .recruiter-banner p { font-size: 18px; }
    .stats-grid { grid-template-columns: 1fr; }
    .why-recruiters-grid { grid-template-columns: 1fr; }
    .section-heading { font-size: 26px; }
    .recruiter-contact { padding: 30px 20px; }
    .logo-scroll-container { height: 300px; padding: 15px; }
}
</style>

<!-- ==========================================
    PAGE CONTENT
==========================================-->
<div class="recruiter-wrapper">

    <!-- ===== BANNER ===== -->
    <section class="recruiter-banner" data-aos="fade-down" data-aos-duration="900">
        <h1>Top Recruiters</h1>
        <p>Our Esteemed Corporate Partners</p>
    </section>

    <!-- ===== STATISTICS ===== -->
    <section>
        <h2 class="section-heading" data-aos="fade-up">Recruiter Highlights</h2>
        <div class="stats-grid">
            <div class="stat-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="50">
                <div class="number">50+</div>
                <div class="label">Recruiting Partners</div>
            </div>
            <div class="stat-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100">
                <div class="number">100%</div>
                <div class="label">Placement Record</div>
            </div>
            <div class="stat-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
                <div class="number">27 LPA</div>
                <div class="label">Highest Package</div>
            </div>
            <div class="stat-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200">
                <div class="number">3-4 LPA</div>
                <div class="label">Average Package</div>
            </div>
        </div>
    </section>

    <!-- ===== SCROLLING LOGO IMAGE ===== -->
    <section class="logo-scroll-container" data-aos="fade-up" data-aos-duration="800">
        <div class="logo-scroll-wrapper">
            <img src="../../images/logo.jpg" alt="Our Top Recruiters">
            <img src="../../images/logo.jpg" alt="Our Top Recruiters">
        </div>
    </section>

    <!-- ===== WHY RECRUITERS ===== -->
    <section class="why-recruiters" data-aos="fade-up" data-aos-duration="800">
        <h2 class="section-heading">Why Recruiters Choose EWCM</h2>
        <div class="why-recruiters-grid">
            <div class="why-item" data-aos="flip-left" data-aos-duration="600">
                <span class="icon">🎯</span>
                <h4>Industry-Ready Graduates</h4>
                <p>Our students are trained with technical skills, soft skills, and real-world exposure.</p>
            </div>
            <div class="why-item" data-aos="flip-left" data-aos-duration="600" data-aos-delay="100">
                <span class="icon">📚</span>
                <h4>Strong Academic Foundation</h4>
                <p>Curriculum designed in collaboration with industry experts.</p>
            </div>
            <div class="why-item" data-aos="flip-left" data-aos-duration="600" data-aos-delay="200">
                <span class="icon">🏆</span>
                <h4>Proven Track Record</h4>
                <p>Consistent placement records with leading MNCs and startups.</p>
            </div>
        </div>
    </section>

    <!-- ===== CONTACT ===== -->
    <section class="recruiter-contact" data-aos="fade-up" data-aos-duration="800">
        <h2>For Recruitment Queries</h2>
        <p>
            <strong>Placement Coordinator:</strong> Mr. XYZ<br>
            <strong>Email:</strong> <a href="mailto:placement@ewcm.edu.in">placement@ewcm.edu.in</a><br>
            <strong>Phone:</strong> +91-9876543210
        </p>
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