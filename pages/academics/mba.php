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
        background: #f0f8f6;
        color: #2d3436;
    }

    .page-banner {
        background: linear-gradient(135deg, #006064 0%, #00838f 40%, #f39c12 100%);
        padding: 120px 20px 80px;
        text-align: center;
        border-bottom: 8px solid #f39c12;
        margin-bottom: 50px;
        position: relative;
        overflow: hidden;
    }

    .page-banner::after {
        content: "📈";
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
        background: linear-gradient(90deg, #f39c12, #f1c40f);
        margin: 15px auto 0;
        border-radius: 10px;
    }

    .page-banner p {
        color: #e0f7fa;
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
        color: #006064;
        margin-bottom: 30px;
        position: relative;
        display: inline-block;
    }
    .section-title::after {
        content: "";
        display: block;
        width: 70px;
        height: 5px;
        background: linear-gradient(90deg, #f39c12, #f1c40f);
        margin-top: 10px;
        border-radius: 10px;
    }

    .course-card {
        background: #ffffff;
        padding: 40px 35px;
        border-radius: 25px;
        box-shadow: 0 15px 50px rgba(0,0,0,0.06);
        border-left: 8px solid #f39c12;
        margin-bottom: 40px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .course-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 70px rgba(243, 156, 18, 0.15);
    }

    .course-card h2 { font-size: 28px; color: #006064; font-weight: 800; margin-bottom: 5px; }
    .course-card .badge {
        display: inline-block;
        background: linear-gradient(90deg, #f39c12, #f1c40f);
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
        background: #f0f8f6;
        padding: 12px 18px;
        border-radius: 12px;
        border-left: 4px solid #f39c12;
    }
    .info-item strong {
        color: #006064;
        display: block;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .info-item span { font-size: 16px; font-weight: 600; color: #2d3436; }

    .subject-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
        margin-top: 15px;
    }
    .subject-item {
        background: #f0f8f6;
        padding: 12px 15px;
        border-radius: 12px;
        text-align: center;
        font-size: 14px;
        font-weight: 500;
        color: #006064;
        border-bottom: 3px solid #f39c12;
        transition: all 0.3s ease;
    }
    .subject-item:hover {
        transform: translateY(-3px);
        border-bottom-color: #f1c40f;
        background: #fff;
    }

    .specialization-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-top: 15px;
    }
    .specialization-item {
        background: #ffffff;
        padding: 20px;
        border-radius: 14px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.04);
        text-align: center;
        border-bottom: 4px solid #f39c12;
        transition: all 0.3s ease;
    }
    .specialization-item:hover {
        transform: translateY(-4px);
        border-bottom-color: #006064;
    }
    .specialization-item h4 { font-size: 16px; color: #006064; font-weight: 600; margin-bottom: 4px; }

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
        box-shadow: 0 12px 40px rgba(243, 156, 18, 0.12);
    }
    .career-item .icon { font-size: 32px; display: block; margin-bottom: 8px; }
    .career-item h4 { font-size: 16px; color: #006064; font-weight: 600; margin-bottom: 4px; }
    .career-item p { font-size: 13px; color: #636e72; margin: 0; }

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
        box-shadow: 0 15px 45px rgba(243, 156, 18, 0.12);
    }
    .highlight-card h3 { font-size: 20px; font-weight: 700; color: #006064; margin-bottom: 10px; }
    .highlight-card p { font-size: 14px; line-height: 1.7; color: #636e72; margin: 0; }

    .recruiter-tag {
        background: #f0f8f6;
        padding: 8px 20px;
        border-radius: 50px;
        font-weight: 600;
        color: #006064;
        border: 2px solid #f39c12;
        transition: all 0.3s ease;
    }
    .recruiter-tag:hover {
        background: #f39c12;
        color: #fff;
        border-color: #f39c12;
        transform: translateY(-2px);
    }

    @media screen and (max-width: 992px) {
        .page-banner h1 { font-size: 38px; }
        .highlight-grid { grid-template-columns: repeat(2, 1fr); }
        .subject-grid { grid-template-columns: repeat(2, 1fr); }
        .career-grid { grid-template-columns: repeat(2, 1fr); }
        .specialization-grid { grid-template-columns: repeat(2, 1fr); }
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
        .specialization-grid { grid-template-columns: 1fr; }
        .course-card { padding: 25px 20px; }
    }
    @media screen and (max-width: 480px) {
        .page-banner h1 { font-size: 22px; }
        .page-banner p { font-size: 15px; }
        .course-card h2 { font-size: 22px; }
    }
</style>

<section class="page-banner" data-aos="fade-down" data-aos-duration="1000">
    <h1>Master of Business Administration</h1>
    <p>Transform into a Global Business Leader</p>
</section>

<div class="container">

    <div class="course-card" data-aos="fade-right" data-aos-duration="800">
        <span class="badge">PG Programme</span>
        <h2>MBA - Master of Business Administration</h2>
        <p>
            The MBA is a 2-year postgraduate program that builds strategic thinking, leadership, and managerial skills. It equips students with a deep understanding of business functions, preparing them for senior roles in corporate, entrepreneurial, and consulting domains.
        </p>
        <div class="info-grid">
            <div class="info-item"><strong>📅 Duration</strong><span>2 Years (4 Semesters)</span></div>
            <div class="info-item"><strong>🎯 Eligibility</strong><span>Any Bachelor’s Degree</span></div>
            <div class="info-item"><strong>📜 Degree</strong><span>Master of Business Administration</span></div>
            <div class="info-item"><strong>🏛️ Affiliation</strong><span>Bangalore University</span></div>
        </div>
    </div>

    <div class="course-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
        <h2>📚 Core Subjects</h2>
        <div class="subject-grid">
            <div class="subject-item">Strategic Management</div>
            <div class="subject-item">Financial Management</div>
            <div class="subject-item">Marketing Management</div>
            <div class="subject-item">Human Resource Management</div>
            <div class="subject-item">Operations & Supply Chain</div>
            <div class="subject-item">Business Analytics</div>
        </div>
        <p style="margin-top:15px; font-size:14px; color:#636e72;">
            <strong>Also Includes:</strong> Organizational Behavior, Business Ethics, Corporate Finance, Entrepreneurship, International Business, and Leadership Development.
        </p>
    </div>

    <div class="course-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
        <h2>📊 Specializations Offered</h2>
        <div class="specialization-grid">
            <div class="specialization-item"><h4>📈 Marketing</h4></div>
            <div class="specialization-item"><h4>💰 Finance</h4></div>
            <div class="specialization-item"><h4>👥 HR</h4></div>
            <div class="specialization-item"><h4>⚙️ Operations</h4></div>
            <div class="specialization-item"><h4>🌍 International Business</h4></div>
            <div class="specialization-item"><h4>📊 Business Analytics</h4></div>
        </div>
    </div>

    <div class="course-card" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">
        <h2>💼 Career Opportunities</h2>
        <div class="career-grid">
            <div class="career-item"><span class="icon">📋</span><h4>Management Consultant</h4><p>Advise organisations on strategy and growth</p></div>
            <div class="career-item"><span class="icon">📊</span><h4>Product Manager</h4><p>Lead product development and innovation</p></div>
            <div class="career-item"><span class="icon">💰</span><h4>Investment Banker</h4><p>Manage financial portfolios and M&A</p></div>
            <div class="career-item"><span class="icon">👥</span><h4>HR Director</h4><p>Drive talent strategy and culture</p></div>
            <div class="career-item"><span class="icon">📈</span><h4>Marketing Director</h4><p>Oversee brand and marketing strategy</p></div>
            <div class="career-item"><span class="icon">🚀</span><h4>Entrepreneur</h4><p>Launch and scale your own venture</p></div>
        </div>
    </div>

    <div class="course-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="250">
        <h2>🏢 Top Recruiters</h2>
        <div style="display:flex; flex-wrap:wrap; gap:15px; margin-top:10px;">
            <span class="recruiter-tag">Deloitte</span>
            <span class="recruiter-tag">KPMG</span>
            <span class="recruiter-tag">PwC</span>
            <span class="recruiter-tag">EY</span>
            <span class="recruiter-tag">Amazon</span>
            <span class="recruiter-tag">Flipkart</span>
            <span class="recruiter-tag">ICICI Bank</span>
            <span class="recruiter-tag">HDFC Bank</span>
            <span class="recruiter-tag">Accenture</span>
            <span class="recruiter-tag">Infosys</span>
        </div>
    </div>

    <div class="course-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
        <h2>🌟 Why Choose MBA at EWCM?</h2>
        <div class="highlight-grid">
            <div class="highlight-card"><h3>🎓 Industry-Aligned Curriculum</h3><p>Case studies, live projects, and guest lectures from industry leaders.</p></div>
            <div class="highlight-card"><h3>🤝 Corporate Connections</h3><p>Strong network with top companies for internships and placements.</p></div>
            <div class="highlight-card"><h3>🌍 Global Perspective</h3><p>International exposure through exchange programs and seminars.</p></div>
        </div>
    </div>

</div>

<script>
    AOS.init({ once: true, offset: 120, easing: 'ease-out-quad' });
</script>

<?php include("../../includes/enquiry_form.php"); ?>
<?php include("../../includes/footer.php"); ?>