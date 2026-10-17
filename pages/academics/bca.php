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
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: #f0faff;
        color: #2d3436;
    }

    .page-banner {
        background: linear-gradient(135deg, #0c2461 0%, #1a3a6b 40%, #0abde3 100%);
        padding: 120px 20px 80px;
        text-align: center;
        border-bottom: 8px solid #00d2d3;
        margin-bottom: 50px;
        position: relative;
        overflow: hidden;
    }

    .page-banner::after {
        content: "💻";
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
        background: linear-gradient(90deg, #00d2d3, #0abde3);
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

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 25px;
    }

    .section-title {
        font-size: 34px;
        font-weight: 800;
        color: #0c2461;
        margin-bottom: 30px;
        position: relative;
        display: inline-block;
    }

    .section-title::after {
        content: "";
        display: block;
        width: 70px;
        height: 5px;
        background: linear-gradient(90deg, #00d2d3, #0abde3);
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

    .course-card {
        background: #ffffff;
        padding: 40px 35px;
        border-radius: 25px;
        box-shadow: 0 15px 50px rgba(0,0,0,0.06);
        border-left: 8px solid #00d2d3;
        margin-bottom: 40px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .course-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 70px rgba(0,0,0,0.1);
    }

    .course-card h2 {
        font-size: 28px;
        color: #0c2461;
        font-weight: 800;
        margin-bottom: 5px;
    }

    .course-card .badge {
        display: inline-block;
        background: linear-gradient(90deg, #00d2d3, #0abde3);
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
        background: #f0fbff;
        padding: 12px 18px;
        border-radius: 12px;
        border-left: 4px solid #0abde3;
    }

    .info-item strong {
        color: #0c2461;
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
        background: #f0fbff;
        padding: 12px 15px;
        border-radius: 12px;
        text-align: center;
        font-size: 14px;
        font-weight: 500;
        color: #0c2461;
        border-bottom: 3px solid #0abde3;
        transition: all 0.3s ease;
    }

    .subject-item:hover {
        transform: translateY(-3px);
        border-bottom-color: #00d2d3;
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
        border-bottom: 4px solid #0abde3;
        transition: all 0.3s ease;
    }

    .career-item:hover {
        transform: translateY(-5px);
        border-bottom-color: #00d2d3;
        box-shadow: 0 12px 40px rgba(0,0,0,0.08);
    }

    .career-item .icon {
        font-size: 32px;
        display: block;
        margin-bottom: 8px;
    }

    .career-item h4 {
        font-size: 16px;
        color: #0c2461;
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
        border-bottom: 5px solid #0abde3;
        transition: all 0.3s ease;
    }

    .highlight-card:hover {
        transform: translateY(-8px);
        border-bottom-color: #00d2d3;
        box-shadow: 0 15px 45px rgba(0,0,0,0.08);
    }

    .highlight-card h3 {
        font-size: 20px;
        font-weight: 700;
        color: #0c2461;
        margin-bottom: 10px;
    }

    .highlight-card p {
        font-size: 14px;
        line-height: 1.7;
        color: #636e72;
        margin: 0;
    }

    /* ===== TOP RECRUITERS ===== */
    .recruiter-tag {
        background: #f0fbff;
        padding: 8px 20px;
        border-radius: 50px;
        font-weight: 600;
        color: #0c2461;
        border: 2px solid #0abde3;
        transition: all 0.3s ease;
    }

    .recruiter-tag:hover {
        background: #00d2d3;
        color: #fff;
        border-color: #00d2d3;
        transform: translateY(-2px);
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
    <h1>Bachelor of Computer Applications</h1>
    <p>Your Gateway to a Successful Career in Information Technology</p>
</section>

<div class="container">

    <div class="course-card" data-aos="fade-right" data-aos-duration="800">
        <span class="badge">UG Programme</span>
        <h2>BCA - Bachelor of Computer Applications</h2>
        <p>
            The Bachelor of Computer Applications (BCA) is a 3-year undergraduate program designed to provide students with a strong foundation in computer science, programming, software development, and IT skills. The course prepares students for careers in the rapidly growing IT industry by combining theoretical knowledge with practical training.
        </p>

        <div class="info-grid">
            <div class="info-item"><strong>📅 Duration</strong><span>3 Years (6 Semesters)</span></div>
            <div class="info-item"><strong>🎯 Eligibility</strong><span>10+2 with Mathematics/Computer Science</span></div>
            <div class="info-item"><strong>📜 Degree</strong><span>Bachelor of Computer Applications</span></div>
            <div class="info-item"><strong>🏛️ Affiliation</strong><span>Bangalore University</span></div>
        </div>
    </div>

    <div class="course-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
        <h2>📚 Semester-wise Subjects</h2>
        <div class="subject-grid">
            <div class="subject-item">Sem 1: Programming in C</div>
            <div class="subject-item">Sem 2: Object Oriented Programming (C++)</div>
            <div class="subject-item">Sem 3: Data Structures</div>
            <div class="subject-item">Sem 4: Java Programming</div>
            <div class="subject-item">Sem 5: Web Technologies</div>
            <div class="subject-item">Sem 6: Major Project & Internship</div>
        </div>
        <p style="margin-top:15px; font-size:14px; color:#636e72;">
            <strong>Other Subjects:</strong> Database Management Systems, Computer Networks, Software Engineering, Python Programming, Cloud Computing, Cyber Security, Artificial Intelligence, Mobile App Development, Operating Systems, Digital Electronics, Mathematics, and Communication Skills.
        </p>
    </div>

    <div class="course-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
        <h2>💼 Career Opportunities</h2>
        <div class="career-grid">
            <div class="career-item">
                <span class="icon">👨‍💻</span>
                <h4>Software Developer</h4>
                <p>Design and develop software applications</p>
            </div>
            <div class="career-item">
                <span class="icon">🌐</span>
                <h4>Web Developer</h4>
                <p>Build responsive websites and web applications</p>
            </div>
            <div class="career-item">
                <span class="icon">🗄️</span>
                <h4>Database Administrator</h4>
                <p>Manage and maintain databases</p>
            </div>
            <div class="career-item">
                <span class="icon">🔒</span>
                <h4>Cyber Security Analyst</h4>
                <p>Protect systems and networks from threats</p>
            </div>
            <div class="career-item">
                <span class="icon">📊</span>
                <h4>Data Analyst</h4>
                <p>Analyze and interpret complex data sets</p>
            </div>
            <div class="career-item">
                <span class="icon">☁️</span>
                <h4>Cloud Architect</h4>
                <p>Design and manage cloud infrastructure</p>
            </div>
        </div>
    </div>

    <div class="course-card" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">
        <h2>🎯 Top Recruiters</h2>
        <div style="display:flex; flex-wrap:wrap; gap:15px; margin-top:10px;">
            <span class="recruiter-tag">TCS</span>
            <span class="recruiter-tag">Infosys</span>
            <span class="recruiter-tag">Wipro</span>
            <span class="recruiter-tag">Accenture</span>
            <span class="recruiter-tag">Capgemini</span>
            <span class="recruiter-tag">Amazon</span>
            <span class="recruiter-tag">Google</span>
            <span class="recruiter-tag">Oracle</span>
            <span class="recruiter-tag">Cisco</span>
            <span class="recruiter-tag">Microsoft</span>
        </div>
    </div>

    <div class="course-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="250">
        <h2>🌟 Why Choose BCA at EWCM?</h2>
        <div class="highlight-grid">
            <div class="highlight-card">
                <h3>🎓 Experienced Faculty</h3>
                <p>Learn from highly qualified professors with industry experience.</p>
            </div>
            <div class="highlight-card">
                <h3>🖥️ Modern Labs</h3>
                <p>State-of-the-art computer labs with latest software and hardware.</p>
            </div>
            <div class="highlight-card">
                <h3>📊 Industry Projects</h3>
                <p>Work on real-world projects and internships with leading companies.</p>
            </div>
        </div>
    </div>

</div>

<script>
    AOS.init({ once: true, offset: 120, easing: 'ease-out-quad' });
</script>

<?php include("../../includes/enquiry_form.php"); ?>
<?php include("../../includes/footer.php"); ?>