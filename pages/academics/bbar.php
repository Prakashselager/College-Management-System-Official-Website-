<?php
include("../../includes/header.php");
include("../../includes/navbar.php");
?>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<?php include("../../includes/enquiry_form.php"); ?>
<link rel="stylesheet" href="../../assets/css/global.css">
<style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
        font-family: 'Poppins', sans-serif;
        background: #fefaf0;
        color: #2d3436;
    }

    .page-banner {
        background: linear-gradient(135deg, #2d1b69 0%, #6c3483 40%, #f39c12 100%);
        padding: 120px 20px 80px;
        text-align: center;
        border-bottom: 8px solid #f1c40f;
        margin-bottom: 50px;
        position: relative;
        overflow: hidden;
    }

    .page-banner::after {
        content: "📊";
        position: absolute;
        right: 5%;
        bottom: 5%;
        font-size: 180px;
        opacity: 0.08;
        transform: rotate(-5deg);
        pointer-events: none;
    }

    .page-banner h1 {
        color: #fff;
        font-size: 52px;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 4px;
        text-shadow: 0 10px 30px rgba(0,0,0,0.3);
        margin-bottom: 15px;
    }

    .page-banner h1::after {
        content: "";
        display: block;
        width: 120px;
        height: 6px;
        background: linear-gradient(90deg, #f1c40f, #f39c12);
        margin: 15px auto 0;
        border-radius: 10px;
    }

    .page-banner p {
        color: #dfe6e9;
        font-size: 22px;
        font-weight: 300;
        letter-spacing: 1px;
        max-width: 750px;
        margin: 15px auto 0;
    }

    .container { max-width: 1200px; margin: 0 auto; padding: 0 25px; }
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
        background: linear-gradient(90deg, #f1c40f, #f39c12);
        margin-top: 10px;
        border-radius: 10px;
    }

    .course-card {
        background: #ffffff;
        padding: 40px 35px;
        border-radius: 25px;
        box-shadow: 0 15px 50px rgba(0,0,0,0.06);
        border-left: 8px solid #f1c40f;
        margin-bottom: 40px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .course-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 70px rgba(0,0,0,0.1);
    }

    .course-card h2 {
        font-size: 28px;
        color: #2d1b69;
        font-weight: 800;
        margin-bottom: 5px;
    }

    .course-card .badge {
        display: inline-block;
        background: linear-gradient(90deg, #f1c40f, #f39c12);
        color: #fff;
        padding: 5px 20px;
        border-radius: 50px;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .course-card p {
        font-size: 16px;
        line-height: 1.9;
        color: #2d3436;
        margin-bottom: 12px;
    }

    .info-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
        margin: 20px 0;
    }

    .info-item {
        background: #faf6f0;
        padding: 12px 18px;
        border-radius: 12px;
        border-left: 4px solid #f39c12;
    }

    .info-item strong {
        color: #2d1b69;
        display: block;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .info-item span {
        font-size: 16px;
        font-weight: 600;
        color: #2d3436;
    }

    .subject-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
        margin-top: 15px;
    }

    .subject-item {
        background: #faf6f0;
        padding: 12px 15px;
        border-radius: 12px;
        text-align: center;
        font-size: 14px;
        font-weight: 500;
        color: #2d1b69;
        border-bottom: 3px solid #f39c12;
        transition: all 0.3s ease;
    }

    .subject-item:hover {
        transform: translateY(-3px);
        border-bottom-color: #f1c40f;
        background: #fff;
    }

    .career-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-top: 15px;
    }

    .career-item {
        background: #ffffff;
        padding: 20px;
        border-radius: 16px;
        box-shadow: 0 6px 25px rgba(0,0,0,0.04);
        text-align: center;
        border-bottom: 4px solid #f39c12;
        transition: all 0.3s ease;
    }

    .career-item:hover {
        transform: translateY(-5px);
        border-bottom-color: #f1c40f;
        box-shadow: 0 12px 40px rgba(0,0,0,0.08);
    }

    .career-item .icon {
        font-size: 32px;
        display: block;
        margin-bottom: 8px;
    }

    .career-item h4 {
        font-size: 16px;
        color: #2d1b69;
        font-weight: 600;
        margin-bottom: 4px;
    }

    .career-item p {
        font-size: 13px;
        color: #636e72;
        margin: 0;
    }

    .highlight-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        margin-top: 10px;
    }

    .highlight-card {
        background: #ffffff;
        padding: 25px 20px;
        border-radius: 18px;
        box-shadow: 0 6px 25px rgba(0,0,0,0.04);
        text-align: center;
        border-bottom: 5px solid #f39c12;
        transition: all 0.3s ease;
    }

    .highlight-card:hover {
        transform: translateY(-8px);
        border-bottom-color: #f1c40f;
        box-shadow: 0 15px 45px rgba(0,0,0,0.08);
    }

    .highlight-card h3 {
        font-size: 20px;
        font-weight: 700;
        color: #2d1b69;
        margin-bottom: 10px;
    }

    .highlight-card p {
        font-size: 14px;
        line-height: 1.7;
        color: #636e72;
        margin: 0;
    }

    @media screen and (max-width: 992px) {
        .page-banner h1 { font-size: 38px; }
        .highlight-grid { grid-template-columns: repeat(2, 1fr); }
        .subject-grid { grid-template-columns: repeat(2, 1fr); }
        .career-grid { grid-template-columns: repeat(2, 1fr); }
        .info-grid { grid-template-columns: 1fr; }
    }

    @media screen and (max-width: 768px) {
        .page-banner { padding: 70px 15px 40px; }
        .page-banner h1 { font-size: 28px; letter-spacing: 2px; }
        .page-banner p { font-size: 18px; }
        .section-title { font-size: 26px; }
        .highlight-grid { grid-template-columns: 1fr; }
        .subject-grid { grid-template-columns: 1fr; }
        .career-grid { grid-template-columns: 1fr; }
        .course-card { padding: 25px 20px; }
    }

    @media screen and (max-width: 480px) {
        .page-banner h1 { font-size: 22px; }
        .page-banner p { font-size: 15px; }
        .course-card h2 { font-size: 22px; }
    }
</style>

<section class="page-banner" data-aos="fade-down" data-aos-duration="1000">
    <h1>BBA (Regular)</h1>
    <p>Shaping Future Business Leaders with Excellence & Innovation</p>
</section>

<div class="container">

    <div class="course-card" data-aos="fade-right" data-aos-duration="800">
        <span class="badge">UG Programme</span>
        <h2>BBA - Bachelor of Business Administration</h2>
        <p>
            The Bachelor of Business Administration (BBA) is a 3-year undergraduate program designed to develop competent managers, entrepreneurs, and business leaders. The course provides a strong foundation in management principles, marketing, finance, human resources, and business operations.
        </p>
        <div class="info-grid">
            <div class="info-item"><strong>📅 Duration</strong><span>3 Years (6 Semesters)</span></div>
            <div class="info-item"><strong>🎯 Eligibility</strong><span>10+2 in any stream</span></div>
            <div class="info-item"><strong>📜 Degree</strong><span>Bachelor of Business Administration</span></div>
            <div class="info-item"><strong>🏛️ Affiliation</strong><span>Bangalore University</span></div>
        </div>
    </div>

    <div class="course-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
        <h2>📚 Semester-wise Subjects</h2>
        <div class="subject-grid">
            <div class="subject-item">Sem 1: Principles of Management</div>
            <div class="subject-item">Sem 2: Marketing Management</div>
            <div class="subject-item">Sem 3: Financial Accounting</div>
            <div class="subject-item">Sem 4: Human Resource Management</div>
            <div class="subject-item">Sem 5: Business Law & Ethics</div>
            <div class="subject-item">Sem 6: Strategic Management & Project</div>
        </div>
        <p style="margin-top:15px; font-size:14px; color:#636e72;">
            <strong>Other Subjects:</strong> Organizational Behavior, Business Economics, Business Communication, Entrepreneurship Development, Supply Chain Management, Business Analytics, International Business, and Leadership Development.
        </p>
    </div>

    <div class="course-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
        <h2>💼 Career Opportunities</h2>
        <div class="career-grid">
            <div class="career-item"><span class="icon">📋</span><h4>Business Development Executive</h4><p>Drive business growth and client acquisition</p></div>
            <div class="career-item"><span class="icon">📊</span><h4>Marketing Manager</h4><p>Lead marketing strategies and campaigns</p></div>
            <div class="career-item"><span class="icon">💰</span><h4>Financial Analyst</h4><p>Analyze financial data and investment opportunities</p></div>
            <div class="career-item"><span class="icon">👥</span><h4>HR Manager</h4><p>Manage talent acquisition and employee relations</p></div>
            <div class="career-item"><span class="icon">📈</span><h4>Operations Manager</h4><p>Oversee business operations and supply chain</p></div>
            <div class="career-item"><span class="icon">🚀</span><h4>Entrepreneur</h4><p>Start and manage your own business venture</p></div>
        </div>
    </div>

    <div class="course-card" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">
        <h2>🏢 Top Recruiters</h2>
        <div style="display:flex; flex-wrap:wrap; gap:15px; margin-top:10px;">
            <span style="background:#faf6f0; padding:8px 20px; border-radius:50px; font-weight:600; color:#2d1b69; border:2px solid #f39c12;">Deloitte</span>
            <span style="background:#faf6f0; padding:8px 20px; border-radius:50px; font-weight:600; color:#2d1b69; border:2px solid #f39c12;">KPMG</span>
            <span style="background:#faf6f0; padding:8px 20px; border-radius:50px; font-weight:600; color:#2d1b69; border:2px solid #f39c12;">Amazon</span>
            <span style="background:#faf6f0; padding:8px 20px; border-radius:50px; font-weight:600; color:#2d1b69; border:2px solid #f39c12;">Flipkart</span>
            <span style="background:#faf6f0; padding:8px 20px; border-radius:50px; font-weight:600; color:#2d1b69; border:2px solid #f39c12;">ICICI Bank</span>
            <span style="background:#faf6f0; padding:8px 20px; border-radius:50px; font-weight:600; color:#2d1b69; border:2px solid #f39c12;">HDFC Bank</span>
            <span style="background:#faf6f0; padding:8px 20px; border-radius:50px; font-weight:600; color:#2d1b69; border:2px solid #f39c12;">Accenture</span>
            <span style="background:#faf6f0; padding:8px 20px; border-radius:50px; font-weight:600; color:#2d1b69; border:2px solid #f39c12;">Infosys</span>
        </div>
    </div>

    <div class="course-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="250">
        <h2>🌟 Why Choose BBA at EWCM?</h2>
        <div class="highlight-grid">
            <div class="highlight-card"><h3>🎓 Experienced Faculty</h3><p>Learn from professors with Ph.D. and industry experience.</p></div>
            <div class="highlight-card"><h3>📊 Industry Exposure</h3><p>Industrial visits, guest lectures, and internship opportunities.</p></div>
            <div class="highlight-card"><h3>💼 Placement Support</h3><p>Dedicated placement cell with campus recruitment drives.</p></div>
        </div>
    </div>

</div>

<script>
    AOS.init({ once: true, offset: 120, easing: 'ease-out-quad' });
</script>

<?php include("../../includes/enquiry_form.php"); ?>
<?php include("../../includes/footer.php"); ?>