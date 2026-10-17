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
        background: #f8f0f0;
        color: #2d3436;
    }

    .page-banner {
        background: linear-gradient(135deg, #0c2461 0%, #2c3e7a 40%, #ff6b6b 100%);
        padding: 120px 20px 80px;
        text-align: center;
        border-bottom: 8px solid #ff6b6b;
        margin-bottom: 50px;
        position: relative;
        overflow: hidden;
    }

    .page-banner::after {
        content: "🎓";
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
        background: linear-gradient(90deg, #ff6b6b, #ee5a24);
        margin: 15px auto 0;
        border-radius: 10px;
    }

    .page-banner p {
        color: #ffeaa7;
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
        background: linear-gradient(90deg, #ff6b6b, #ee5a24);
        margin-top: 10px;
        border-radius: 10px;
    }

    .course-card {
        background: #ffffff;
        padding: 40px 35px;
        border-radius: 25px;
        box-shadow: 0 15px 50px rgba(0,0,0,0.06);
        border-left: 8px solid #ff6b6b;
        margin-bottom: 40px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .course-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 70px rgba(255, 107, 107, 0.15);
    }

    .course-card h2 { font-size: 28px; color: #0c2461; font-weight: 800; margin-bottom: 5px; }
    .course-card .badge {
        display: inline-block;
        background: linear-gradient(90deg, #ff6b6b, #ee5a24);
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
        background: #fef0f0;
        padding: 12px 18px;
        border-radius: 12px;
        border-left: 4px solid #ff6b6b;
    }
    .info-item strong {
        color: #0c2461;
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
        background: #fef0f0;
        padding: 12px 15px;
        border-radius: 12px;
        text-align: center;
        font-size: 14px;
        font-weight: 500;
        color: #0c2461;
        border-bottom: 3px solid #ff6b6b;
        transition: all 0.3s ease;
    }
    .subject-item:hover {
        transform: translateY(-3px);
        border-bottom-color: #ee5a24;
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
        border-bottom: 4px solid #ff6b6b;
        transition: all 0.3s ease;
    }
    .career-item:hover {
        transform: translateY(-5px);
        border-bottom-color: #ee5a24;
        box-shadow: 0 12px 40px rgba(255, 107, 107, 0.12);
    }
    .career-item .icon { font-size: 32px; display: block; margin-bottom: 8px; }
    .career-item h4 { font-size: 16px; color: #0c2461; font-weight: 600; margin-bottom: 4px; }
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
        border-bottom: 5px solid #ff6b6b;
        transition: all 0.3s ease;
    }
    .highlight-card:hover {
        transform: translateY(-8px);
        border-bottom-color: #ee5a24;
        box-shadow: 0 15px 45px rgba(255, 107, 107, 0.12);
    }
    .highlight-card h3 { font-size: 20px; font-weight: 700; color: #0c2461; margin-bottom: 10px; }
    .highlight-card p { font-size: 14px; line-height: 1.7; color: #636e72; margin: 0; }

    .recruiter-tag {
        background: #fef0f0;
        padding: 8px 20px;
        border-radius: 50px;
        font-weight: 600;
        color: #0c2461;
        border: 2px solid #ff6b6b;
        transition: all 0.3s ease;
    }
    .recruiter-tag:hover {
        background: #ff6b6b;
        color: #fff;
        border-color: #ff6b6b;
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
    <h1>Master of Computer Applications</h1>
    <p>Elevate Your IT Career with Advanced Computing Skills</p>
</section>

<div class="container">

    <div class="course-card" data-aos="fade-right" data-aos-duration="800">
        <span class="badge">PG Programme</span>
        <h2>MCA - Master of Computer Applications</h2>
        <p>
            The Master of Computer Applications (MCA) is a 2-year postgraduate program designed to develop skilled IT professionals with advanced knowledge in software development, system design, data analytics, and emerging technologies. The course bridges the gap between industry requirements and academic learning.
        </p>
        <div class="info-grid">
            <div class="info-item"><strong>📅 Duration</strong><span>2 Years (4 Semesters)</span></div>
            <div class="info-item"><strong>🎯 Eligibility</strong><span>BCA or B.Sc. (CS) with Mathematics</span></div>
            <div class="info-item"><strong>📜 Degree</strong><span>Master of Computer Applications</span></div>
            <div class="info-item"><strong>🏛️ Affiliation</strong><span>Bangalore University</span></div>
        </div>
    </div>

    <div class="course-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
        <h2>📚 Semester-wise Subjects</h2>
        <div class="subject-grid">
            <div class="subject-item">Sem 1: Advanced Programming</div>
            <div class="subject-item">Sem 2: Database & Cloud</div>
            <div class="subject-item">Sem 3: Machine Learning</div>
            <div class="subject-item">Sem 4: Major Project</div>
        </div>
        <p style="margin-top:15px; font-size:14px; color:#636e72;">
            <strong>Core Subjects:</strong> Data Structures & Algorithms, Web Frameworks, Big Data Analytics, Cyber Security, IoT, AI & Deep Learning, Software Architecture, DevOps, Cloud Computing, and Research Methodology.
        </p>
    </div>

    <div class="course-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
        <h2>💼 Career Opportunities</h2>
        <div class="career-grid">
            <div class="career-item"><span class="icon">🧠</span><h4>AI/ML Engineer</h4><p>Build intelligent systems and models</p></div>
            <div class="career-item"><span class="icon">☁️</span><h4>Cloud Architect</h4><p>Design scalable cloud solutions</p></div>
            <div class="career-item"><span class="icon">📊</span><h4>Data Scientist</h4><p>Extract insights from big data</p></div>
            <div class="career-item"><span class="icon">🔒</span><h4>Cyber Security Expert</h4><p>Protect digital assets and networks</p></div>
            <div class="career-item"><span class="icon">📱</span><h4>Mobile App Developer</h4><p>Develop cutting‑edge mobile applications</p></div>
            <div class="career-item"><span class="icon">🛠️</span><h4>DevOps Engineer</h4><p>Automate and streamline development pipelines</p></div>
        </div>
    </div>

    <div class="course-card" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">
        <h2>🎯 Top Recruiters</h2>
        <div style="display:flex; flex-wrap:wrap; gap:15px; margin-top:10px;">
            <span class="recruiter-tag">TCS</span>
            <span class="recruiter-tag">Infosys</span>
            <span class="recruiter-tag">Wipro</span>
            <span class="recruiter-tag">Accenture</span>
            <span class="recruiter-tag">Amazon</span>
            <span class="recruiter-tag">Google</span>
            <span class="recruiter-tag">Microsoft</span>
            <span class="recruiter-tag">Oracle</span>
            <span class="recruiter-tag">IBM</span>
            <span class="recruiter-tag">Cisco</span>
        </div>
    </div>

    <div class="course-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="250">
        <h2>🌟 Why Choose MCA at EWCM?</h2>
        <div class="highlight-grid">
            <div class="highlight-card"><h3>🎓 Advanced Curriculum</h3><p>Industry‑oriented subjects with focus on emerging tech.</p></div>
            <div class="highlight-card"><h3>🖥️ Research Labs</h3><p>Access to AI, Data Science, and Cloud labs.</p></div>
            <div class="highlight-card"><h3>📊 Industry Projects</h3><p>Live projects and internships with top MNCs.</p></div>
        </div>
    </div>

</div>

<script>
    AOS.init({ once: true, offset: 120, easing: 'ease-out-quad' });
</script>

<?php include("../../includes/enquiry_form.php"); ?>
<?php include("../../includes/footer.php"); ?>