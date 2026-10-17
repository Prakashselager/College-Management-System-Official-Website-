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
    PLACEMENT CELL – CORAL + TEAL + NAVY
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

.cell-wrapper {
    max-width: 1350px;
    margin: 0 auto;
    padding: 0 20px 40px;
}

/* ===== BANNER ===== */
.cell-banner {
    background: linear-gradient(135deg, #0a2a4a 0%, #1a5276 50%, #e17055 100%);
    padding: 90px 40px 70px;
    border-radius: 28px;
    text-align: center;
    margin: 30px 0 50px;
    box-shadow: 0 12px 40px rgba(0,0,0,0.12);
    position: relative;
    overflow: hidden;
}
.cell-banner::after {
    content: "📋";
    position: absolute;
    right: 5%;
    bottom: 5%;
    font-size: 160px;
    opacity: 0.06;
}
.cell-banner h1 {
    font-size: 50px;
    color: #fff;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-shadow: 0 4px 20px rgba(0,0,0,0.15);
    position: relative;
}
.cell-banner h1::after {
    content: "";
    display: block;
    width: 100px;
    height: 5px;
    background: #f9e76b;
    margin: 15px auto 0;
    border-radius: 10px;
}
.cell-banner p {
    font-size: 22px;
    color: #dfe6e9;
    font-weight: 300;
    margin-top: 12px;
}

/* ===== SECTION HEADING ===== */
.section-heading {
    font-size: 34px;
    font-weight: 800;
    color: #0a2a4a;
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
    background: linear-gradient(90deg, #e17055, #f9e76b);
    margin: 12px auto 0;
    border-radius: 10px;
}

/* ===== ABOUT SECTION ===== */
.about-cell {
    background: #ffffff;
    padding: 50px 45px;
    border-radius: 20px;
    margin-bottom: 50px;
    box-shadow: 0 6px 25px rgba(0,0,0,0.04);
    border: 1px solid #e8ecf0;
    transition: all 0.3s;
}
.about-cell:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 35px rgba(0,0,0,0.06);
}
.about-cell p {
    font-size: 17px;
    line-height: 2;
    color: #444;
    text-align: justify;
}
.about-cell strong {
    color: #0a2a4a;
}

/* ===== TEAM GRID ===== */
.team-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin-bottom: 50px;
}
.team-card {
    background: #ffffff;
    padding: 30px 25px;
    border-radius: 18px;
    text-align: center;
    box-shadow: 0 6px 25px rgba(0,0,0,0.04);
    border-bottom: 5px solid #e17055;
    transition: all 0.3s ease;
    cursor: default;
}
.team-card:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 16px 45px rgba(225, 112, 85, 0.12);
    border-bottom-color: #0a2a4a;
}
.team-card .icon {
    font-size: 40px;
    display: block;
    margin-bottom: 10px;
}
.team-card h3 {
    font-size: 20px;
    color: #0a2a4a;
    margin-bottom: 4px;
    font-weight: 700;
}
.team-card .designation {
    font-size: 14px;
    color: #e17055;
    font-weight: 600;
}
.team-card .contact-info {
    font-size: 14px;
    color: #555;
    margin-top: 8px;
}
.team-card .contact-info span {
    display: block;
    margin: 3px 0;
}

/* ===== SERVICES / FUNCTIONS ===== */
.services-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    margin-bottom: 50px;
}
.service-card {
    background: #ffffff;
    padding: 30px 20px;
    border-radius: 18px;
    text-align: center;
    box-shadow: 0 6px 25px rgba(0,0,0,0.04);
    border-left: 6px solid #1a5276;
    transition: all 0.3s ease;
    cursor: default;
}
.service-card:hover {
    transform: translateX(8px) scale(1.02);
    box-shadow: 0 12px 35px rgba(0,0,0,0.06);
    border-left-color: #e17055;
}
.service-card .icon {
    font-size: 32px;
    display: block;
    margin-bottom: 10px;
}
.service-card h3 {
    font-size: 18px;
    color: #0a2a4a;
    margin-bottom: 6px;
    font-weight: 700;
}
.service-card p {
    font-size: 14px;
    color: #555;
    line-height: 1.7;
}

/* ===== PROCESS STEPS ===== */
.process-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-bottom: 50px;
}
.process-card {
    background: #ffffff;
    padding: 25px 20px;
    border-radius: 18px;
    text-align: center;
    box-shadow: 0 6px 25px rgba(0,0,0,0.04);
    border-top: 6px solid #f9e76b;
    transition: all 0.3s ease;
    cursor: default;
}
.process-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 12px 35px rgba(0,0,0,0.06);
    border-top-color: #e17055;
}
.process-card .step {
    font-size: 28px;
    font-weight: 900;
    color: #e17055;
    display: block;
    margin-bottom: 8px;
}
.process-card h4 {
    font-size: 17px;
    color: #0a2a4a;
    margin-bottom: 4px;
    font-weight: 700;
}
.process-card p {
    font-size: 14px;
    color: #555;
    line-height: 1.6;
}

/* ===== CONTACT ===== */
.cell-contact {
    background: linear-gradient(135deg, #0a2a4a, #1a5276);
    padding: 50px 40px;
    border-radius: 20px;
    color: #fff;
    text-align: center;
    margin-top: 20px;
    transition: all 0.3s ease;
}
.cell-contact:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 45px rgba(10, 42, 74, 0.2);
}
.cell-contact h2 {
    font-size: 30px;
    font-weight: 700;
    margin-bottom: 15px;
}
.cell-contact h2::after {
    content: "";
    display: block;
    width: 80px;
    height: 4px;
    background: #f9e76b;
    margin: 15px auto 0;
    border-radius: 10px;
}
.cell-contact p {
    font-size: 18px;
    line-height: 1.8;
    max-width: 800px;
    margin: 0 auto 10px;
}
.cell-contact a {
    color: #f9e76b;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s;
}
.cell-contact a:hover {
    color: #ffffff;
    text-decoration: underline;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
    .team-grid { grid-template-columns: repeat(2,1fr); }
    .services-grid { grid-template-columns: repeat(2,1fr); }
    .process-grid { grid-template-columns: repeat(2,1fr); }
}
@media (max-width: 768px) {
    .cell-banner { padding: 50px 25px; }
    .cell-banner h1 { font-size: 32px; }
    .cell-banner p { font-size: 18px; }
    .team-grid { grid-template-columns: 1fr; }
    .services-grid { grid-template-columns: 1fr; }
    .process-grid { grid-template-columns: 1fr; }
    .section-heading { font-size: 26px; }
    .about-cell { padding: 30px 20px; }
    .cell-contact { padding: 30px 20px; }
}
</style>

<!-- ==========================================
    PAGE CONTENT
==========================================-->
<div class="cell-wrapper">

    <!-- ===== BANNER ===== -->
    <section class="cell-banner" data-aos="fade-down" data-aos-duration="900">
        <h1>Placement Cell</h1>
        <p>Bridging Dreams & Careers</p>
    </section>

    <!-- ===== ABOUT ===== -->
    <section class="about-cell" data-aos="fade-right" data-aos-duration="800">
        <h2 class="section-heading">About Placement Cell</h2>
        <p>
            The Placement Cell at East West College of Management is a dedicated team committed to providing students with the best career opportunities. The cell works round the clock to bridge the gap between industry expectations and student capabilities. We organize training programs, mock interviews, group discussions, aptitude tests, and personality development sessions to prepare students for the corporate world.
        </p>
        <p style="margin-top:15px;">
            Our strong network of recruiters includes top MNCs, startups, and corporate organizations. The Placement Cell ensures that every student gets the opportunity to showcase their potential and secure a rewarding career.
        </p>
    </section>

    <!-- ===== TEAM ===== -->
    <section>
        <h2 class="section-heading" data-aos="fade-up">Our Team</h2>
        <div class="team-grid">
            <div class="team-card" data-aos="flip-left" data-aos-duration="600" data-aos-delay="50">
                <span class="icon">👨‍💼</span>
                <h3>Mr. Name</h3>
                <div class="designation">Placement Director</div>
                <div class="contact-info">
                    <span>📞 +91-9876543210</span>
                    <span>✉️ director@ewcm.edu.in</span>
                </div>
            </div>
            <div class="team-card" data-aos="flip-left" data-aos-duration="600" data-aos-delay="100">
                <span class="icon">👩‍💼</span>
                <h3>Ms. Name</h3>
                <div class="designation">Training Manager</div>
                <div class="contact-info">
                    <span>📞 +91-9876543211</span>
                    <span>✉️ training@ewcm.edu.in</span>
                </div>
            </div>
            <div class="team-card" data-aos="flip-left" data-aos-duration="600" data-aos-delay="150">
                <span class="icon">👨‍🏫</span>
                <h3>Mr. Name</h3>
                <div class="designation">Corporate Relations</div>
                <div class="contact-info">
                    <span>📞 +91-9876543212</span>
                    <span>✉️ corporate@ewcm.edu.in</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SERVICES ===== -->
    <section>
        <h2 class="section-heading" data-aos="fade-up">What We Offer</h2>
        <div class="services-grid">
            <div class="service-card" data-aos="fade-right" data-aos-duration="600" data-aos-delay="50">
                <span class="icon">🎓</span>
                <h3>Training Programs</h3>
                <p>Soft skills, aptitude, and technical training for career readiness.</p>
            </div>
            <div class="service-card" data-aos="fade-left" data-aos-duration="600" data-aos-delay="100">
                <span class="icon">🤝</span>
                <h3>Industry Connect</h3>
                <p>Guest lectures, industrial visits, and networking opportunities.</p>
            </div>
            <div class="service-card" data-aos="fade-right" data-aos-duration="600" data-aos-delay="150">
                <span class="icon">📝</span>
                <h3>Mock Interviews</h3>
                <p>Realistic interview simulations with expert feedback.</p>
            </div>
            <div class="service-card" data-aos="fade-left" data-aos-duration="600" data-aos-delay="200">
                <span class="icon">💼</span>
                <h3>Placement Drives</h3>
                <p>On-campus recruitment drives with leading companies.</p>
            </div>
        </div>
    </section>

    <!-- ===== PROCESS ===== -->
    <section>
        <h2 class="section-heading" data-aos="fade-up">Placement Process</h2>
        <div class="process-grid">
            <div class="process-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="50">
                <span class="step">01</span>
                <h4>Registration</h4>
                <p>Students register with the placement cell for the placement drive.</p>
            </div>
            <div class="process-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100">
                <span class="step">02</span>
                <h4>Pre-Placement Training</h4>
                <p>Training sessions on aptitude, soft skills, and technical knowledge.</p>
            </div>
            <div class="process-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
                <span class="step">03</span>
                <h4>Company Connect</h4>
                <p>Interaction with recruiters through guest lectures and campus drives.</p>
            </div>
            <div class="process-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200">
                <span class="step">04</span>
                <h4>Placement & Offer</h4>
                <p>Selection and offer letter release for selected students.</p>
            </div>
        </div>
    </section>

    <!-- ===== CONTACT ===== -->
    <section class="cell-contact" data-aos="fade-up" data-aos-duration="800">
        <h2>Contact Placement Cell</h2>
        <p>
            <strong>Placement Director:</strong> Mr. abc<br>
            <strong>Email:</strong> <a href="mailto:placement@ewcm.edu.in">placement@ewcm.edu.in</a><br>
            <strong>Phone:</strong> +91-9876543210<br>
            <strong>Office Hours:</strong> Monday – Saturday (9:00 AM – 5:00 PM)
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