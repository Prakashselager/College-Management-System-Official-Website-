<?php
include("../../includes/header.php");
include("../../includes/navbar.php");
?>

<!-- ===== GOOGLE FONTS & AOS ===== -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<?php include("../../includes/enquiry_form.php"); ?>
<link rel="stylesheet" href="../../assets/css/global.css">
<style>
    /* ===== MODERN GLASS + PURPLE-TEAL THEME ===== */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: #f0f2f8;
        color: #2d3436;
        line-height: 1.6;
    }

    /* ===== BANNER ===== */
    .page-banner {
        background: linear-gradient(135deg, #2d1b69 0%, #6c5ce7 50%, #00b894 100%);
        padding: 120px 20px 80px;
        text-align: center;
        border-bottom: 8px solid #00b894;
        margin-bottom: 50px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0,0,0,0.3);
    }

    .page-banner::after {
        content: "⚡";
        position: absolute;
        right: 5%;
        bottom: 5%;
        font-size: 180px;
        opacity: 0.06;
        transform: rotate(-5deg);
        pointer-events: none;
    }

    .page-banner h1 {
        color: #fff;
        font-size: 56px;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 5px;
        text-shadow: 0 10px 30px rgba(0,0,0,0.5);
        margin-bottom: 15px;
        position: relative;
    }

    .page-banner h1::after {
        content: "";
        display: block;
        width: 140px;
        height: 6px;
        background: linear-gradient(90deg, #6c5ce7, #00b894);
        margin: 20px auto 0;
        border-radius: 10px;
        box-shadow: 0 0 30px rgba(108, 92, 231, 0.4);
    }

    .page-banner p {
        color: #dfe6e9;
        font-size: 22px;
        font-weight: 300;
        letter-spacing: 1px;
        max-width: 750px;
        margin: 20px auto 0;
        text-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }

    /* ===== CONTAINER ===== */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 25px;
    }

    /* ===== SECTION TITLE ===== */
    .section-title {
        font-size: 34px;
        font-weight: 800;
        color: #2d1b69;
        margin-bottom: 30px;
        position: relative;
        display: inline-block;
    }

    .section-title::after {
        content: "";
        display: block;
        width: 70px;
        height: 5px;
        background: linear-gradient(90deg, #6c5ce7, #00b894);
        margin-top: 10px;
        border-radius: 10px;
    }

    .section-title.centered {
        display: block;
        text-align: center;
    }
    .section-title.centered::after {
        margin: 10px auto 0;
    }

    /* ===== DEPARTMENT SECTIONS (GLASS CARDS) ===== */
    .department-section {
        margin-bottom: 60px;
        background: rgba(255,255,255,0.75);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        padding: 40px 35px;
        border-radius: 30px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.06), 0 0 0 1px rgba(255,255,255,0.3);
        border-left: 8px solid #6c5ce7;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .department-section:hover {
        transform: translateY(-6px);
        box-shadow: 0 30px 80px rgba(108, 92, 231, 0.12), 0 0 0 1px rgba(108,92,231,0.2);
    }

    .department-section p {
        font-size: 17px;
        line-height: 1.9;
        color: #2d3436;
        margin-bottom: 15px;
    }

    /* ===== LIST STYLES ===== */
    .department-list {
        list-style: none;
        padding: 0;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px 25px;
    }

    .department-list li {
        padding: 10px 0 10px 40px;
        position: relative;
        font-size: 16px;
        color: #2d3436;
        border-bottom: 1px solid rgba(0,0,0,0.04);
    }

    .department-list li::before {
        content: "✦";
        position: absolute;
        left: 0;
        color: #6c5ce7;
        font-size: 22px;
        font-weight: 900;
    }

    /* ===== VISION & MISSION ===== */
    .vision-mission-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        margin-bottom: 50px;
    }

    .vision-box, .mission-box {
        background: rgba(255,255,255,0.7);
        backdrop-filter: blur(10px);
        padding: 35px 30px;
        border-radius: 25px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.04), 0 0 0 1px rgba(255,255,255,0.5);
        border-top: 8px solid #00b894;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .vision-box:hover, .mission-box:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 60px rgba(0, 184, 148, 0.15);
    }

    .vision-box h2, .mission-box h2 {
        font-size: 28px;
        color: #2d1b69;
        margin-bottom: 18px;
        font-weight: 700;
    }

    .vision-box h2::after, .mission-box h2::after {
        content: "";
        display: block;
        width: 50px;
        height: 5px;
        background: linear-gradient(90deg, #6c5ce7, #00b894);
        margin-top: 8px;
        border-radius: 10px;
    }

    /* ===== HOD MESSAGE (glass) ===== */
    .hod-message {
        background: rgba(255,255,255,0.7);
        backdrop-filter: blur(10px);
        padding: 40px 45px;
        border-radius: 25px;
        border-left: 8px solid #6c5ce7;
        margin-top: 10px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.04);
    }

    .hod-message p {
        font-size: 17px;
        line-height: 1.9;
        color: #2d3436;
        margin-bottom: 15px;
    }

    .hod-message h4 {
        font-size: 18px;
        font-weight: 700;
        color: #6c5ce7;
        margin-top: 15px;
        letter-spacing: 0.5px;
        text-align: right;
        border-top: 2px dashed #00b894;
        padding-top: 15px;
    }

    /* ===== HIGHLIGHTS ===== */
    .highlight-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        margin-top: 10px;
    }

    .highlight-card {
        background: rgba(255,255,255,0.7);
        backdrop-filter: blur(8px);
        padding: 30px 25px;
        border-radius: 22px;
        box-shadow: 0 8px 30px rgba(0,0,0,0.04);
        border-bottom: 6px solid #6c5ce7;
        transition: all 0.3s ease;
        text-align: center;
    }

    .highlight-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(108, 92, 231, 0.15);
        border-bottom-color: #00b894;
    }

    .highlight-card h3 {
        font-size: 20px;
        font-weight: 700;
        color: #2d1b69;
        margin-bottom: 12px;
    }

    .highlight-card p {
        font-size: 15px;
        line-height: 1.7;
        color: #636e72;
        margin: 0;
    }

    /* ===== COURSES ===== */
    .course-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        margin-top: 10px;
    }

    .course-card {
        background: rgba(255,255,255,0.8);
        backdrop-filter: blur(10px);
        padding: 35px 30px;
        border-radius: 25px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.04);
        border: 2px solid rgba(255,255,255,0.6);
        transition: all 0.3s ease;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .course-card::before {
        content: "🎓";
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 50px;
        opacity: 0.06;
    }

    .course-card:hover {
        transform: translateY(-8px);
        border-color: #6c5ce7;
        box-shadow: 0 20px 60px rgba(108, 92, 231, 0.15);
    }

    .course-card h3 {
        font-size: 22px;
        font-weight: 700;
        color: #2d1b69;
        margin-bottom: 12px;
    }

    .course-card p {
        font-size: 15px;
        line-height: 1.7;
        color: #636e72;
        margin-bottom: 8px;
    }

    .course-card .duration {
        display: inline-block;
        background: linear-gradient(90deg, #6c5ce7, #00b894);
        color: #fff;
        padding: 6px 22px;
        border-radius: 50px;
        font-size: 14px;
        font-weight: 700;
        margin-top: 8px;
        box-shadow: 0 6px 20px rgba(108, 92, 231, 0.3);
    }

    /* ===== LABS ===== */
    .lab-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
        margin-top: 10px;
    }

    .lab-card {
        background: rgba(255,255,255,0.7);
        backdrop-filter: blur(8px);
        padding: 28px 25px;
        border-radius: 22px;
        box-shadow: 0 8px 30px rgba(0,0,0,0.04);
        border-left: 8px solid #2d1b69;
        transition: all 0.3s ease;
    }

    .lab-card:hover {
        transform: translateX(8px);
        box-shadow: 0 12px 40px rgba(0,0,0,0.06);
        border-left-color: #6c5ce7;
    }

    .lab-card h3 {
        font-size: 20px;
        font-weight: 700;
        color: #2d1b69;
        margin-bottom: 10px;
    }

    .lab-card p {
        font-size: 15px;
        line-height: 1.7;
        color: #636e72;
        margin: 0;
    }

    /* ===== RESPONSIVE ===== */
    @media screen and (max-width: 992px) {
        .page-banner h1 { font-size: 40px; }
        .highlight-grid { grid-template-columns: repeat(2, 1fr); }
        .course-grid { grid-template-columns: 1fr; }
        .lab-grid { grid-template-columns: 1fr; }
        .vision-mission-grid { grid-template-columns: 1fr; }
        .department-list { grid-template-columns: 1fr; }
        .hod-message { padding: 25px 20px; }
    }

    @media screen and (max-width: 768px) {
        .page-banner {
            padding: 70px 15px 40px;
        }
        .page-banner h1 {
            font-size: 30px;
            letter-spacing: 2px;
        }
        .page-banner p { font-size: 18px; }
        .section-title { font-size: 26px; }
        .department-section { padding: 25px 20px; }
        .highlight-grid { grid-template-columns: 1fr; }
        .vision-box, .mission-box { padding: 25px 20px; }
    }

    @media screen and (max-width: 480px) {
        .page-banner h1 { font-size: 24px; }
        .page-banner p { font-size: 16px; }
        .course-card h3 { font-size: 18px; }
        .lab-card h3 { font-size: 17px; }
        .hod-message h4 { text-align: center; }
    }
</style>

<section class="page-banner" data-aos="fade-down" data-aos-duration="1000">
    <h1>Department of Computer Applications</h1>
    <p>Empowering Future IT Professionals through Innovation, Knowledge and Technology</p>
</section>

<div class="container">

    <!-- ABOUT -->
    <section class="department-section" data-aos="fade-right" data-aos-duration="800">
        <h2 class="section-title">About the Department</h2>
        <p>
            The Department of Computer Applications at East West College of Management, Bengaluru, is committed to providing quality education in the field of Computer Science and Information Technology. The department focuses on developing technically skilled, innovative and ethically responsible professionals capable of meeting the challenges of today's IT industry.
        </p>
        <p>
            The department provides modern laboratories, experienced faculty members, industry-oriented curriculum and practical learning through projects, seminars, workshops and internships. Students are encouraged to participate in coding competitions, technical events and research activities to enhance their professional skills.
        </p>
    </section>

    <!-- HISTORY -->
    <section class="department-section" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
        <h2 class="section-title">History</h2>
        <p>
            The Department of Computer Applications was established with the objective of producing competent software professionals and technology leaders. Since its inception, the department has consistently maintained high academic standards and has produced graduates working in leading multinational companies, startups and government organizations.
        </p>
    </section>

    <!-- AFFILIATION -->
    <section class="department-section" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">
        <h2 class="section-title">Affiliation</h2>
        <ul class="department-list">
            <li>Affiliated to Bangalore University</li>
            <li>Approved by AICTE (Applicable Programmes)</li>
            <li>Accredited under NAAC</li>
            <li>Part of East West Group of Institutions</li>
        </ul>
    </section>

    <!-- VISION & MISSION -->
    <div class="vision-mission-grid">
        <div class="vision-box" data-aos="fade-right" data-aos-duration="800">
            <h2>Vision</h2>
            <p>
                To become a centre of excellence in Computer Applications by providing quality education, encouraging innovation, research and professional ethics while developing globally competent IT professionals.
            </p>
        </div>
        <div class="mission-box" data-aos="fade-left" data-aos-duration="800">
            <h2>Mission</h2>
            <ul class="department-list">
                <li>Provide quality technical education.</li>
                <li>Develop analytical and programming skills.</li>
                <li>Encourage innovation and research.</li>
                <li>Strengthen industry interaction.</li>
                <li>Promote leadership and ethical values.</li>
            </ul>
        </div>
    </div>

    <!-- HOD MESSAGE -->
    <section class="department-section" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
        <h2 class="section-title">Head of the Department's Message</h2>
        <div class="hod-message">
            <p>
                Welcome to the Department of Computer Applications. Our department is dedicated to providing students with strong technical knowledge, practical exposure and professional values. Through quality teaching, project-based learning and industry interaction, we prepare students for successful careers in the IT industry.
            </p>
            <p>
                We encourage every student to make the best use of the opportunities available and continuously strive for excellence in academics, innovation and research.
            </p>
            <h4>Head of the Department</h4>
        </div>
    </section>

    <!-- HIGHLIGHTS -->
    <section class="department-section" data-aos="fade-right" data-aos-duration="800" data-aos-delay="150">
        <h2 class="section-title">Department Highlights</h2>
        <div class="highlight-grid">
            <div class="highlight-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="50">
                <h3>👨‍🏫 Experienced Faculty</h3>
                <p>Highly qualified and experienced faculty members dedicated to quality education.</p>
            </div>
            <div class="highlight-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100">
                <h3>🖥️ Modern Computer Labs</h3>
                <p>Fully equipped laboratories with the latest hardware and software.</p>
            </div>
            <div class="highlight-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
                <h3>📶 Wi-Fi Campus</h3>
                <p>High-speed internet connectivity throughout the campus.</p>
            </div>
            <div class="highlight-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200">
                <h3>📊 Industry Projects</h3>
                <p>Real-time projects and internships with industry exposure.</p>
            </div>
            <div class="highlight-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="250">
                <h3>📚 Smart Classrooms</h3>
                <p>Digital classrooms equipped with modern teaching technology.</p>
            </div>
            <div class="highlight-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300">
                <h3>💼 Placement Support</h3>
                <p>Training programs, aptitude sessions and campus recruitment assistance.</p>
            </div>
        </div>
    </section>

    <!-- COURSES -->
    <section class="department-section" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
        <h2 class="section-title">Courses Offered</h2>
        <div class="course-grid">
            <div class="course-card" data-aos="flip-left" data-aos-duration="800">
                <h3>Bachelor of Computer Applications (BCA)</h3>
                <p>Duration: 3 Years (6 Semesters)</p>
                <p>Eligibility: 10+2 with Mathematics/Computer Science</p>
                <span class="duration">UG Programme</span>
            </div>
            <div class="course-card" data-aos="flip-right" data-aos-duration="800">
                <h3>Master of Computer Applications (MCA)</h3>
                <p>Duration: 2 Years (4 Semesters)</p>
                <p>Eligibility: BCA or B.Sc. (CS) with Mathematics</p>
                <span class="duration">PG Programme</span>
            </div>
        </div>
    </section>

    <!-- LABS -->
    <section class="department-section" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
        <h2 class="section-title">Laboratories</h2>
        <div class="lab-grid">
            <div class="lab-card" data-aos="fade-right" data-aos-duration="600" data-aos-delay="50">
                <h3>💻 Programming Laboratory</h3>
                <p>Practical sessions on C, C++, Java, Python and Web Programming.</p>
            </div>
            <div class="lab-card" data-aos="fade-right" data-aos-duration="600" data-aos-delay="100">
                <h3>🗄️ Database Laboratory</h3>
                <p>Hands-on experience in SQL, MySQL, Oracle and Database Design.</p>
            </div>
            <div class="lab-card" data-aos="fade-left" data-aos-duration="600" data-aos-delay="150">
                <h3>🌐 Networking Laboratory</h3>
                <p>Learning network configuration, routing, switching and security concepts.</p>
            </div>
            <div class="lab-card" data-aos="fade-left" data-aos-duration="600" data-aos-delay="200">
                <h3>🧠 AI & Machine Learning Lab</h3>
                <p>Advanced laboratory for AI, Machine Learning and Data Science applications.</p>
            </div>
        </div>
    </section>

</div>

<script>
    AOS.init({
        once: true,
        offset: 120,
        easing: 'ease-out-quad',
    });
</script>

<?php include("../../includes/footer.php"); ?>