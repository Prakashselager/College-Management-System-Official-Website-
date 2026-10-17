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
        background: #f0f9ff;
        color: #2d3436;
    }

    .page-banner {
        background: linear-gradient(135deg, #0c4a6e 0%, #0ea5e9 50%, #38bdf8 100%);
        padding: 120px 20px 80px;
        text-align: center;
        border-bottom: 8px solid #f59e0b;
        margin-bottom: 50px;
        position: relative;
        overflow: hidden;
    }

    .page-banner::after {
        content: "✈️";
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
        background: linear-gradient(90deg, #f59e0b, #fbbf24);
        margin: 15px auto 0;
        border-radius: 10px;
    }

    .page-banner p {
        color: #e0f2fe;
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
        color: #0c4a6e;
        margin-bottom: 30px;
        position: relative;
        display: inline-block;
    }

    .section-title::after {
        content: "";
        display: block;
        width: 70px;
        height: 5px;
        background: linear-gradient(90deg, #f59e0b, #fbbf24);
        margin-top: 10px;
        border-radius: 10px;
    }

    .course-card {
        background: #ffffff;
        padding: 40px 35px;
        border-radius: 25px;
        box-shadow: 0 15px 50px rgba(0,0,0,0.06);
        border-left: 8px solid #f59e0b;
        margin-bottom: 40px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .course-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 70px rgba(0,0,0,0.1);
    }

    .course-card h2 {
        font-size: 28px;
        color: #0c4a6e;
        font-weight: 800;
        margin-bottom: 5px;
    }

    .course-card .badge {
        display: inline-block;
        background: linear-gradient(90deg, #f59e0b, #fbbf24);
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
        background: #f0f9ff;
        padding: 12px 18px;
        border-radius: 12px;
        border-left: 4px solid #0ea5e9;
    }

    .info-item strong {
        color: #0c4a6e;
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
        background: #f0f9ff;
        padding: 12px 15px;
        border-radius: 12px;
        text-align: center;
        font-size: 14px;
        font-weight: 500;
        color: #0c4a6e;
        border-bottom: 3px solid #0ea5e9;
        transition: all 0.3s ease;
    }

    .subject-item:hover {
        transform: translateY(-3px);
        border-bottom-color: #f59e0b;
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
        border-bottom: 4px solid #0ea5e9;
        transition: all 0.3s ease;
    }

    .career-item:hover {
        transform: translateY(-5px);
        border-bottom-color: #f59e0b;
        box-shadow: 0 12px 40px rgba(0,0,0,0.08);
    }

    .career-item .icon {
        font-size: 32px;
        display: block;
        margin-bottom: 8px;
    }

    .career-item h4 {
        font-size: 16px;
        color: #0c4a6e;
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
        border-bottom: 5px solid #0ea5e9;
        transition: all 0.3s ease;
    }

    .highlight-card:hover {
        transform: translateY(-8px);
        border-bottom-color: #f59e0b;
        box-shadow: 0 15px 45px rgba(0,0,0,0.08);
    }

    .highlight-card h3 {
        font-size: 20px;
        font-weight: 700;
        color: #0c4a6e;
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
    <h1>BBA (Aviation)</h1>
    <p>Take Your Career to New Heights in the Aviation Industry</p>
</section>

<div class="container">

    <div class="course-card" data-aos="fade-right" data-aos-duration="800">
        <span class="badge">UG Programme</span>
        <h2>BBA Aviation - Bachelor of Business Administration in Aviation</h2>
        <p>
            The BBA Aviation is a 3-year undergraduate program designed to prepare students for managerial and operational roles in the aviation industry. The course covers airline management, airport operations, aviation safety, customer service, and business administration.
        </p>
        <div class="info-grid">
            <div class="info-item"><strong>📅 Duration</strong><span>3 Years (6 Semesters)</span></div>
            <div class="info-item"><strong>🎯 Eligibility</strong><span>10+2 in any stream</span></div>
            <div class="info-item"><strong>📜 Degree</strong><span>BBA in Aviation</span></div>
            <div class="info-item"><strong>🏛️ Affiliation</strong><span>Bangalore University</span></div>
        </div>
    </div>

    <div class="course-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
        <h2>📚 Semester-wise Subjects</h2>
        <div class="subject-grid">
            <div class="subject-item">Sem 1: Principles of Management</div>
            <div class="subject-item">Sem 2: Aviation Operations</div>
            <div class="subject-item">Sem 3: Airport Management</div>
            <div class="subject-item">Sem 4: Aviation Safety & Security</div>
            <div class="subject-item">Sem 5: Airline Marketing</div>
            <div class="subject-item">Sem 6: Strategic Management & Project</div>
        </div>
        <p style="margin-top:15px; font-size:14px; color:#636e72;">
            <strong>Other Subjects:</strong> Airline Finance, Aviation Law, Customer Service Management, Ground Handling, Air Traffic Management, Aviation Logistics, and Leadership Development.
        </p>
    </div>

    <div class="course-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
        <h2>💼 Career Opportunities</h2>
        <div class="career-grid">
            <div class="career-item"><span class="icon">✈️</span><h4>Airline Manager</h4><p>Manage airline operations and services</p></div>
            <div class="career-item"><span class="icon">🏢</span><h4>Airport Manager</h4><p>Oversee airport operations and facilities</p></div>
            <div class="career-item"><span class="icon">🛡️</span><h4>Aviation Safety Officer</h4><p>Ensure safety and security compliance</p></div>
            <div class="career-item"><span class="icon">📋</span><h4>Ground Handling Manager</h4><p>Manage ground operations and services</p></div>
            <div class="career-item"><span class="icon">📊</span><h4>Aviation Marketing Manager</h4><p>Lead marketing strategies for airlines</p></div>
            <div class="career-item"><span class="icon">🌍</span><h4>Travel & Tourism Manager</h4><p>Manage travel and tourism operations</p></div>
        </div>
    </div>

    <div class="course-card" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">
        <h2>🏢 Top Recruiters</h2>
        <div style="display:flex; flex-wrap:wrap; gap:15px; margin-top:10px;">
            <span style="background:#f0f9ff; padding:8px 20px; border-radius:50px; font-weight:600; color:#0c4a6e; border:2px solid #0ea5e9;">IndiGo</span>
            <span style="background:#f0f9ff; padding:8px 20px; border-radius:50px; font-weight:600; color:#0c4a6e; border:2px solid #0ea5e9;">Air India</span>
            <span style="background:#f0f9ff; padding:8px 20px; border-radius:50px; font-weight:600; color:#0c4a6e; border:2px solid #0ea5e9;">SpiceJet</span>
            <span style="background:#f0f9ff; padding:8px 20px; border-radius:50px; font-weight:600; color:#0c4a6e; border:2px solid #0ea5e9;">Vistara</span>
            <span style="background:#f0f9ff; padding:8px 20px; border-radius:50px; font-weight:600; color:#0c4a6e; border:2px solid #0ea5e9;">Bangalore International Airport</span>
            <span style="background:#f0f9ff; padding:8px 20px; border-radius:50px; font-weight:600; color:#0c4a6e; border:2px solid #0ea5e9;">Delta Airlines</span>
            <span style="background:#f0f9ff; padding:8px 20px; border-radius:50px; font-weight:600; color:#0c4a6e; border:2px solid #0ea5e9;">Emirates</span>
            <span style="background:#f0f9ff; padding:8px 20px; border-radius:50px; font-weight:600; color:#0c4a6e; border:2px solid #0ea5e9;">Qatar Airways</span>
        </div>
    </div>

    <div class="course-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="250">
        <h2>🌟 Why Choose BBA Aviation at EWCM?</h2>
        <div class="highlight-grid">
            <div class="highlight-card"><h3>✈️ Aviation Industry Focus</h3><p>Specialized curriculum for aviation management.</p></div>
            <div class="highlight-card"><h3>🏢 Industry Collaboration</h3><p>Partnerships with airlines and airports for training.</p></div>
            <div class="highlight-card"><h3>💼 Placement Support</h3><p>Dedicated placement cell with aviation recruiters.</p></div>
        </div>
    </div>

</div>

<script>
    AOS.init({ once: true, offset: 120, easing: 'ease-out-quad' });
</script>

<?php include("../../includes/enquiry_form.php"); ?>
<?php include("../../includes/footer.php"); ?>