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
    /* ===== MODERN ACADEMICS PAGE STYLES ===== */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f8fafc;
        color: #2d3436;
    }

    /* ===== BANNER WITH BACKGROUND IMAGE ===== */
    .page-banner {
        background: linear-gradient(135deg, rgba(12, 36, 97, 0.85) 0%, rgba(27, 156, 252, 0.75) 100%),
                    url('../../images/banner-bg.jpg') center/cover no-repeat;
        padding: 100px 20px 70px;
        text-align: center;
        border-bottom: 6px solid #cd1693;
        margin-bottom: 50px;
        position: relative;
        overflow: hidden;
        box-shadow: inset 0 -6px 20px rgba(0,0,0,0.1);
    }

    .page-banner::after {
        content: "🧾";
        position: absolute;
        right: 5%;
        bottom: 10%;
        font-size: 140px;
        opacity: 0.10;
        transform: rotate(-8deg);
        pointer-events: none;
    }

    .page-banner h1 {
        color: #ffffff;
        font-size: 52px;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 4px;
        text-shadow: 0 8px 30px rgba(0,0,0,0.3);
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }

    .page-banner h1::after {
        content: "";
        display: block;
        width: 120px;
        height: 6px;
        background: linear-gradient(90deg, #ebee12, #ebf70f);
        margin: 18px auto 0;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(253, 203, 110, 0.5);
    }

    .page-banner p {
        color: #dfe6e9;
        font-size: 22px;
        font-weight: 300;
        letter-spacing: 1.5px;
        max-width: 750px;
        margin: 18px auto 0;
        text-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 25px;
    }

    .section-title {
        font-size: 32px;
        font-weight: 800;
        color: #0c2461;
        margin-bottom: 30px;
        position: relative;
        display: inline-block;
    }

    .section-title::after {
        content: "";
        display: block;
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, #00b894, #00cec9);
        margin-top: 8px;
        border-radius: 10px;
    }

    .department-section {
        margin-bottom: 60px;
        background: rgba(255,255,255,0.9);
        backdrop-filter: blur(2px);
        padding: 40px 35px;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.04);
        border-left: 6px solid #00b894;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .department-section:hover {
        transform: translateY(-4px);
        box-shadow: 0 18px 50px rgba(0,0,0,0.08);
    }

    .department-section p {
        font-size: 17px;
        line-height: 1.9;
        color: #2d3436;
        margin-bottom: 15px;
    }

    .department-list {
        list-style: none;
        padding: 0;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px 25px;
    }

    .department-list li {
        padding: 10px 0 10px 35px;
        position: relative;
        font-size: 16px;
        color: #2d3436;
        border-bottom: 1px solid #f1f2f6;
    }

    .department-list li::before {
        content: "▹";
        position: absolute;
        left: 0;
        color: #00b894;
        font-size: 20px;
        font-weight: 700;
    }

    .vision-mission-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        margin-bottom: 50px;
    }

    .vision-box, .mission-box {
        background: rgba(255,255,255,0.9);
        backdrop-filter: blur(2px);
        padding: 35px 30px;
        border-radius: 20px;
        box-shadow: 0 8px 30px rgba(0,0,0,0.05);
        border-top: 6px solid #fdcb6e;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .vision-box:hover, .mission-box:hover {
        transform: translateY(-6px);
        box-shadow: 0 14px 40px rgba(0,0,0,0.08);
    }

    .vision-box h2, .mission-box h2 {
        font-size: 26px;
        color: #0c2461;
        margin-bottom: 18px;
        font-weight: 700;
    }

    .vision-box h2::after, .mission-box h2::after {
        content: "";
        display: block;
        width: 50px;
        height: 4px;
        background: linear-gradient(90deg, #fdcb6e, #f39c12);
        margin-top: 6px;
        border-radius: 10px;
    }

    .hod-message {
        background: linear-gradient(135deg, #f0fdfa, #e6f7ff);
        padding: 35px 40px;
        border-radius: 20px;
        border-left: 6px solid #00b894;
        margin-top: 10px;
        box-shadow: inset 0 2px 20px rgba(0,184,148,0.08);
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
        color: #00b894;
        margin-top: 15px;
        letter-spacing: 0.5px;
        text-align: right;
        border-top: 2px dashed #00b894;
        padding-top: 15px;
    }

    .highlight-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        margin-top: 10px;
    }

    .highlight-card {
        background: rgba(255,255,255,0.9);
        backdrop-filter: blur(2px);
        padding: 28px 22px;
        border-radius: 18px;
        box-shadow: 0 6px 25px rgba(0,0,0,0.04);
        border-bottom: 5px solid #00b894;
        transition: all 0.3s ease;
        text-align: center;
    }

    .highlight-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 14px 40px rgba(0,184,148,0.15);
        border-bottom-color: #fdcb6e;
    }

    .highlight-card h3 {
        font-size: 20px;
        font-weight: 700;
        color: #0c2461;
        margin-bottom: 12px;
    }

    .highlight-card p {
        font-size: 15px;
        line-height: 1.7;
        color: #636e72;
        margin: 0;
    }

    .course-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        margin-top: 10px;
    }

    .course-card {
        background: linear-gradient(145deg, #ffffff, #f8fafc);
        padding: 35px 30px;
        border-radius: 20px;
        box-shadow: 0 8px 30px rgba(0,0,0,0.04);
        border: 2px solid #e8f0fe;
        transition: all 0.3s ease;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .course-card::before {
        content: "📒";
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 40px;
        opacity: 0.1;
    }

    .course-card:hover {
        transform: translateY(-6px);
        border-color: #00b894;
        box-shadow: 0 14px 40px rgba(0,184,148,0.15);
    }

    .course-card h3 {
        font-size: 22px;
        font-weight: 700;
        color: #0c2461;
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
        background: linear-gradient(90deg, #00b894, #00cec9);
        color: #ffffff;
        padding: 4px 18px;
        border-radius: 50px;
        font-size: 14px;
        font-weight: 600;
        margin-top: 8px;
        box-shadow: 0 4px 15px rgba(0,184,148,0.25);
    }

    .career-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-top: 10px;
    }

    .career-item {
        background: rgba(255,255,255,0.9);
        padding: 20px 18px;
        border-radius: 14px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.04);
        border-left: 4px solid #fdcb6e;
        text-align: center;
        transition: all 0.3s ease;
    }

    .career-item:hover {
        transform: translateX(5px);
        border-left-color: #00b894;
    }

    .career-item h4 {
        font-size: 16px;
        color: #0c2461;
        font-weight: 600;
        margin-bottom: 4px;
    }

    .career-item p {
        font-size: 14px;
        color: #636e72;
        margin: 0;
    }

    .professional-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-top: 10px;
    }

    .professional-item {
        background: #ffffff;
        padding: 20px 15px;
        border-radius: 14px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.04);
        border-bottom: 4px solid #00b894;
        text-align: center;
        transition: all 0.3s ease;
    }

    .professional-item:hover {
        transform: translateY(-4px);
        border-bottom-color: #fdcb6e;
    }

    .professional-item h4 {
        font-size: 16px;
        color: #0c2461;
        font-weight: 600;
        margin-bottom: 4px;
    }

    .professional-item p {
        font-size: 13px;
        color: #636e72;
        margin: 0;
    }

    @media screen and (max-width: 992px) {
        .page-banner h1 { font-size: 38px; }
        .highlight-grid { grid-template-columns: repeat(2, 1fr); }
        .course-grid { grid-template-columns: 1fr; }
        .career-grid { grid-template-columns: repeat(2, 1fr); }
        .professional-grid { grid-template-columns: repeat(2, 1fr); }
        .vision-mission-grid { grid-template-columns: 1fr; }
        .department-list { grid-template-columns: 1fr; }
        .hod-message { padding: 25px 20px; }
    }

    @media screen and (max-width: 768px) {
        .page-banner {
            padding: 60px 15px 40px;
            background: linear-gradient(135deg, rgba(12,36,97,0.9), rgba(27,156,252,0.8)),
                        url('../../images/banner-bg.jpg') center/cover no-repeat;
        }
        .page-banner h1 { font-size: 28px; letter-spacing: 2px; }
        .page-banner p { font-size: 18px; }
        .section-title { font-size: 26px; }
        .department-section { padding: 25px 20px; }
        .highlight-grid { grid-template-columns: 1fr; }
        .career-grid { grid-template-columns: 1fr; }
        .professional-grid { grid-template-columns: 1fr; }
        .vision-box, .mission-box { padding: 25px 20px; }
    }

    @media screen and (max-width: 480px) {
        .page-banner h1 { font-size: 24px; }
        .page-banner p { font-size: 16px; }
        .course-card h3 { font-size: 18px; }
        .hod-message h4 { text-align: center; }
    }
</style>

<section class="page-banner" data-aos="fade-down" data-aos-duration="1000">
    <h1>Department of Commerce</h1>
    <p>Building Future Accountants, Finance Professionals and Business Leaders</p>
</section>

<div class="container">

    <!-- ABOUT THE DEPARTMENT -->
    <section class="department-section" data-aos="fade-right" data-aos-duration="800">
        <h2 class="section-title">About the Department</h2>
        <p>
            The Department of Commerce at East West College of Management, Bengaluru, is dedicated to providing quality education in the fields of accounting, taxation, finance, and business law. The department focuses on developing competent professionals who can meet the demands of the corporate world, financial institutions, and public sector organizations.
        </p>
        <p>
            With a strong emphasis on practical learning, the department offers hands-on training in accounting software, financial analysis, tax planning, and auditing. Students are prepared for professional courses like CA, CMA, CS, and CFA through integrated curriculum and expert guidance.
        </p>
    </section>

    <!-- HISTORY -->
    <section class="department-section" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
        <h2 class="section-title">History</h2>
        <p>
            The Department of Commerce was established with the vision of producing skilled commerce professionals who can contribute to the economic growth of the nation. Over the years, the department has maintained high academic standards and produced graduates who are now working in leading accounting firms, banks, financial institutions, and corporate organizations.
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
            <li>Recognized by UGC</li>
        </ul>
    </section>

    <!-- VISION & MISSION -->
    <div class="vision-mission-grid">
        <div class="vision-box" data-aos="fade-right" data-aos-duration="800">
            <h2>Vision</h2>
            <p>
                To become a centre of excellence in commerce education by producing skilled, ethical, and socially responsible professionals who contribute to the economic development and financial well-being of society.
            </p>
        </div>
        <div class="mission-box" data-aos="fade-left" data-aos-duration="800">
            <h2>Mission</h2>
            <ul class="department-list">
                <li>Provide quality commerce education.</li>
                <li>Develop practical accounting and financial skills.</li>
                <li>Prepare students for professional certifications.</li>
                <li>Promote research in commerce and finance.</li>
                <li>Foster ethical values and social responsibility.</li>
            </ul>
        </div>
    </div>

    <!-- HOD MESSAGE -->
    <section class="department-section" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
        <h2 class="section-title">Head of the Department's Message</h2>
        <div class="hod-message">
            <p>
                Welcome to the Department of Commerce. Our department is dedicated to providing students with a strong foundation in accounting, finance, taxation, and business law. Through practical training, expert faculty guidance, and industry exposure, we prepare our students for successful careers in the commerce and finance sectors.
            </p>
            <p>
                We encourage every student to pursue excellence in academics and professional certifications. The department provides a supportive learning environment where students can develop the skills and knowledge required to excel in the competitive world of commerce and finance.
            </p>
            <h4>Head of the Department</h4>
        </div>
    </section>

    <!-- DEPARTMENT HIGHLIGHTS -->
    <section class="department-section" data-aos="fade-right" data-aos-duration="800" data-aos-delay="150">
        <h2 class="section-title">Department Highlights</h2>
        <div class="highlight-grid">
            <div class="highlight-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="50">
                <h3>👨‍🏫 Experienced Faculty</h3>
                <p>Highly qualified faculty with expertise in accounting, finance, and taxation.</p>
            </div>
            <div class="highlight-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100">
                <h3>📊 Accounting Software Training</h3>
                <p>Hands-on training in Tally, QuickBooks, and other accounting software.</p>
            </div>
            <div class="highlight-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
                <h3>📈 Professional Certification Support</h3>
                <p>Guidance for CA, CMA, CS, and CFA examinations.</p>
            </div>
            <div class="highlight-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200">
                <h3>💼 Placement Support</h3>
                <p>Training programs and campus recruitment in top finance and accounting firms.</p>
            </div>
            <div class="highlight-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="250">
                <h3>📚 Smart Classrooms</h3>
                <p>Digital classrooms with modern teaching aids and case study discussions.</p>
            </div>
            <div class="highlight-card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300">
                <h3>📋 Industry Internships</h3>
                <p>Internship opportunities in banks, financial institutions, and corporate firms.</p>
            </div>
        </div>
    </section>

    <!-- COURSES OFFERED -->
    <section class="department-section" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
        <h2 class="section-title">Courses Offered</h2>
        <div class="course-grid">
            <div class="course-card" data-aos="flip-left" data-aos-duration="800">
                <h3>Bachelor of Commerce (B.Com)</h3>
                <p>Duration: 3 Years (6 Semesters)</p>
                <p>Eligibility: 10+2 in Commerce or any stream</p>
                <span class="duration">UG Programme</span>
            </div>
            <div class="course-card" data-aos="flip-right" data-aos-duration="800">
                <h3>Master of Commerce (M.Com)</h3>
                <p>Duration: 2 Years (4 Semesters)</p>
                <p>Eligibility: B.Com or any Bachelor's Degree</p>
                <span class="duration">PG Programme</span>
            </div>
        </div>
    </section>

    <!-- PROFESSIONAL CERTIFICATIONS -->
    <section class="department-section" data-aos="fade-right" data-aos-duration="800" data-aos-delay="100">
        <h2 class="section-title">Professional Certification Support</h2>
        <div class="professional-grid">
            <div class="professional-item">
                <h4>📋 CA</h4>
                <p>Chartered Accountancy</p>
            </div>
            <div class="professional-item">
                <h4>📊 CMA</h4>
                <p>Cost & Management Accountancy</p>
            </div>
            <div class="professional-item">
                <h4>📜 CS</h4>
                <p>Company Secretary</p>
            </div>
            <div class="professional-item">
                <h4>💹 CFA</h4>
                <p>Chartered Financial Analyst</p>
            </div>
        </div>
    </section>

    <!-- CAREER OPPORTUNITIES -->
    <section class="department-section" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
        <h2 class="section-title">Career Opportunities</h2>
        <div class="career-grid">
            <div class="career-item">
                <h4>📋 Chartered Accountant (CA)</h4>
                <p>Auditing, taxation, and financial management</p>
            </div>
            <div class="career-item">
                <h4>📊 Finance Manager</h4>
                <p>Manage financial planning and analysis</p>
            </div>
            <div class="career-item">
                <h4>📈 Tax Consultant</h4>
                <p>Tax planning, compliance, and advisory</p>
            </div>
            <div class="career-item">
                <h4>📒 Auditor</h4>
                <p>Internal and external auditing services</p>
            </div>
            <div class="career-item">
                <h4>🏦 Banking Professional</h4>
                <p>Work in commercial and investment banks</p>
            </div>
            <div class="career-item">
                <h4>📊 Investment Analyst</h4>
                <p>Analyze investment opportunities and portfolio management</p>
            </div>
        </div>
    </section>

</div>

<!-- ===== INITIALIZE AOS ===== -->
<script>
    AOS.init({
        once: true,
        offset: 100,
        easing: 'ease-out-quad',
    });
</script>

<?php include("../../includes/footer.php"); ?>