<?php include("../../includes/header.php") ?>
<?php include("../../includes/navbar.php") ?>

<?php include("../../includes/enquiry_form.php"); ?>
<link rel="stylesheet" href="../../assets/css/global.css">
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f0f2f5;
    color: #1a2332;
}

.page-banner {
    background: linear-gradient(135deg, #1a2332 0%, #2c3e7a 100%);
    padding: 70px 20px 50px;
    text-align: center;
    border-bottom: 6px solid #4a90d9;
    margin-bottom: 40px;
}

.page-banner h1 {
    color: #ffffff;
    font-size: 44px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 4px;
    margin-bottom: 15px;
}

.page-banner h1::after {
    content: "";
    display: block;
    width: 80px;
    height: 4px;
    background: #4a90d9;
    margin: 15px auto 0;
    border-radius: 10px;
}

.page-banner p {
    color: #d4e2f0;
    font-size: 20px;
    font-weight: 300;
    letter-spacing: 1px;
    max-width: 700px;
    margin: 15px auto 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.section-heading {
    font-size: 34px;
    color: #1a2332;
    text-align: center;
    margin-bottom: 45px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: relative;
    display: inline-block;
    width: 100%;
}

.section-heading::after {
    content: "";
    display: block;
    width: 70px;
    height: 4px;
    background: #4a90d9;
    margin: 15px auto 0;
    border-radius: 10px;
}

.leader-card {
    background: #ffffff;
    padding: 40px;
    box-shadow: 0 5px 30px rgba(0,0,0,0.06);
    border-left: 6px solid #4a90d9;
    margin-bottom: 40px;
    border-radius: 0 4px 4px 0;
}

.leader-card img {
    width: 250px;
    height: 250px;
    border-radius: 5%;
    object-fit: cover;
    border: 6px solid #4a90d9;
    display: block;
    margin: 0 auto 20px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.15);
}

.leader-card h2 {
    font-size: 32px;
    color: #1a2332;
    text-align: center;
    font-weight: 800;
    margin-bottom: 5px;
}

.leader-card h4 {
    font-size: 20px;
    color: #4a90d9;
    text-align: center;
    font-weight: 600;
    margin-bottom: 20px;
    letter-spacing: 1px;
}

.leader-card p {
    font-size: 16px;
    color: #444;
    line-height: 2;
    text-align: justify;
}

.leader-card p::first-letter {
    font-size: 28px;
    font-weight: 800;
    color: #4a90d9;
    float: left;
    margin-right: 8px;
    line-height: 1;
}

.vision-quote {
    background: #f8f9fa;
    padding: 40px 35px;
    border-left: 6px solid #4a90d9;
    margin: 30px 0 40px;
    border-radius: 0 4px 4px 0;
}

.vision-quote .quote-icon {
    font-size: 36px;
    color: #4a90d9;
    display: block;
    margin-bottom: 10px;
}

.vision-quote blockquote {
    font-size: 20px;
    color: #1a2332;
    font-weight: 500;
    line-height: 1.8;
    font-style: italic;
    margin: 0;
}

.vision-quote .author {
    font-size: 16px;
    color: #555;
    font-weight: 600;
    margin-top: 10px;
}

.pillars-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin: 30px 0 50px;
}

.pillar-card {
    background: #ffffff;
    padding: 30px 20px;
    text-align: center;
    box-shadow: 0 5px 25px rgba(0,0,0,0.06);
    border-bottom: 4px solid #4a90d9;
    transition: all 0.3s ease;
}

.pillar-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 35px rgba(0,0,0,0.12);
}

.pillar-card .icon {
    font-size: 40px;
    display: block;
    margin-bottom: 10px;
}

.pillar-card h3 {
    font-size: 18px;
    color: #1a2332;
    font-weight: 700;
    margin-bottom: 5px;
}

.pillar-card p {
    font-size: 14px;
    color: #555;
    line-height: 1.6;
}

.commitment-section {
    background: #ffffff;
    padding: 60px 0;
    margin: 40px 0;
    border-top: 6px solid #4a90d9;
    border-bottom: 6px solid #4a90d9;
}

.commitment-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.commitment-item {
    text-align: center;
    padding: 25px 20px;
    border-left: 4px solid #4a90d9;
    background: #f8f9fa;
}

.commitment-item .icon {
    font-size: 36px;
    display: block;
    margin-bottom: 10px;
}

.commitment-item h4 {
    font-size: 18px;
    color: #1a2332;
    font-weight: 700;
    margin-bottom: 8px;
}

.commitment-item p {
    font-size: 14px;
    color: #555;
    line-height: 1.6;
}

.vision-section {
    padding: 30px 0 50px;
}

.vision-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.vision-item {
    background: #ffffff;
    padding: 30px 25px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.06);
    border-left: 4px solid #4a90d9;
    transition: all 0.3s ease;
}

.vision-item:hover {
    transform: translateX(5px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.1);
}

.vision-item .icon {
    font-size: 32px;
    display: block;
    margin-bottom: 10px;
}

.vision-item h3 {
    font-size: 18px;
    color: #1a2332;
    font-weight: 700;
    margin-bottom: 8px;
}

.vision-item p {
    font-size: 15px;
    color: #555;
    line-height: 1.7;
}

.quick-links {
    background: #1a2332;
    padding: 40px 0;
    margin: 40px 0 0;
}

.quick-links h2 {
    color: #ffffff;
    font-size: 28px;
    text-align: center;
    margin-bottom: 30px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.quick-links h2::after {
    content: "";
    display: block;
    width: 60px;
    height: 4px;
    background: #4a90d9;
    margin: 12px auto 0;
    border-radius: 10px;
}

.quick-links-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.quick-links-grid a {
    color: #d4e2f0;
    text-decoration: none;
    font-size: 16px;
    padding: 12px 20px;
    text-align: center;
    background: rgba(255,255,255,0.05);
    transition: all 0.3s ease;
    border-bottom: 2px solid transparent;
}

.quick-links-grid a:hover {
    background: rgba(74, 144, 217, 0.15);
    border-bottom-color: #4a90d9;
    color: #4a90d9;
}

@media screen and (max-width: 992px) {
    .pillars-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .commitment-grid {
        grid-template-columns: 1fr;
    }
    .vision-grid {
        grid-template-columns: 1fr;
    }
    .quick-links-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media screen and (max-width: 768px) {
    .page-banner {
        padding: 50px 15px 35px;
    }
    .page-banner h1 {
        font-size: 32px;
    }
    .page-banner p {
        font-size: 17px;
    }
    .section-heading {
        font-size: 26px;
    }
    .leader-card {
        padding: 25px 20px;
    }
    .leader-card img {
        width: 180px;
        height: 180px;
    }
    .leader-card h2 {
        font-size: 26px;
    }
    .leader-card p {
        font-size: 15px;
    }
    .vision-quote {
        padding: 30px 20px;
    }
    .vision-quote blockquote {
        font-size: 17px;
    }
    .pillars-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    .quick-links-grid {
        grid-template-columns: 1fr;
        gap: 10px;
    }
}

@media screen and (max-width: 480px) {
    .page-banner h1 {
        font-size: 26px;
    }
    .page-banner p {
        font-size: 15px;
    }
    .section-heading {
        font-size: 22px;
    }
    .leader-card img {
        width: 150px;
        height: 150px;
    }
    .leader-card h2 {
        font-size: 22px;
    }
    .leader-card h4 {
        font-size: 17px;
    }
    .leader-card p {
        font-size: 14px;
    }
}

</style>

<section class="page-banner">
    <h1>Chairperson</h1>
    <p>Leading with Vision, Commitment & Excellence</p>
</section>

<div class="container">

    <div class="leader-card">
        <img src="../../images/pillars/chairperson.jpg" alt="Chairperson">
        <h2>Smt. Rashmi RaviKiran</h2>
        <h4>Chairperson, East West College of Management</h4>

        <p>
            Education is the most powerful foundation for building a successful society, and at East West College of Management, we are committed to providing an environment where knowledge, innovation, and values grow together. Our institution believes that every student possesses unique potential, and our responsibility is to nurture that potential through quality education, modern teaching methods, and continuous guidance. We strive to prepare students not only for academic excellence but also for leadership and lifelong learning.
        </p>

        <p>
            Our vision is to create confident, skilled, and socially responsible graduates who can contribute effectively to the nation and the global community. The college continuously upgrades its academic programs, infrastructure, and learning resources to meet the changing demands of higher education and industry. We encourage students to think creatively, embrace challenges, and develop the confidence required to excel in their chosen careers.
        </p>

        <p>
            The strength of our institution lies in its dedicated faculty members, advanced facilities, and student-centered learning environment. Through seminars, workshops, industrial visits, research activities, internships, and skill development programs, we ensure that students receive practical exposure alongside theoretical knowledge. Our objective is to develop professionals who possess integrity, competence, discipline, and a strong sense of responsibility toward society.
        </p>

        <p>
            At East West College of Management, we firmly believe that education extends beyond classrooms. Students are encouraged to participate in cultural events, sports, community service, leadership activities, and professional development initiatives that help shape their personalities and build confidence. Such experiences prepare them to become capable individuals who can adapt to the ever-changing global environment with determination and resilience.
        </p>

        <p>
            I warmly welcome every student to become a part of the East West family and make the best use of the opportunities available on our campus. With dedication, hard work, and the guidance of our experienced faculty, I am confident that each student can achieve remarkable success in both personal and professional life. I wish all our students a bright future filled with knowledge, achievement, and meaningful contributions to society.
        </p>
    </div>

    <div class="vision-quote">
        <span class="quote-icon">❝</span>
        <blockquote>
            "Education is the most powerful foundation for building a successful society. At East West College of Management, we are committed to nurturing every student's unique potential through quality education, innovation, and values."
        </blockquote>
        <p class="author">— Smt. Rashmi RaviKiran, Chairperson</p>
    </div>

</div>

<section class="commitment-section">
    <div class="container">
        <h2 class="section-heading">Our Commitments</h2>
        <div class="commitment-grid">
            <div class="commitment-item">
                <span class="icon">🎓</span>
                <h4>Quality Education</h4>
                <p>Providing modern teaching methods, continuous guidance, and academic excellence to every student.</p>
            </div>
            <div class="commitment-item">
                <span class="icon">💡</span>
                <h4>Innovation & Creativity</h4>
                <p>Encouraging students to think creatively, embrace challenges, and develop confidence in their abilities.</p>
            </div>
            <div class="commitment-item">
                <span class="icon">🌍</span>
                <h4>Global Readiness</h4>
                <p>Preparing graduates to contribute effectively to the nation and the global community with confidence.</p>
            </div>
            <div class="commitment-item">
                <span class="icon">🤝</span>
                <h4>Holistic Development</h4>
                <p>Focusing on cultural events, sports, community service, and leadership activities for overall growth.</p>
            </div>
        </div>
    </div>
</section>

<div class="container">

    <section class="vision-section">
        <h2 class="section-heading">Vision for Students</h2>
        <div class="vision-grid">
            <div class="vision-item">
                <span class="icon">📚</span>
                <h3>Knowledge & Excellence</h3>
                <p>Providing practical exposure alongside theoretical knowledge through seminars, workshops, industrial visits, and internships.</p>
            </div>
            <div class="vision-item">
                <span class="icon">🧠</span>
                <h3>Integrity & Competence</h3>
                <p>Developing professionals with integrity, competence, discipline, and a strong sense of responsibility toward society.</p>
            </div>
            <div class="vision-item">
                <span class="icon">🌟</span>
                <h3>Personality Development</h3>
                <p>Shaping personalities through cultural events, sports, leadership activities, and professional development initiatives.</p>
            </div>
            <div class="vision-item">
                <span class="icon">💪</span>
                <h3>Determination & Resilience</h3>
                <p>Preparing students to adapt to the ever-changing global environment with determination, resilience, and confidence.</p>
            </div>
        </div>
    </section>

</div>

<section class="quick-links">
    <h2>Other Institution Pillars</h2>
    <div class="quick-links-grid">
        <a href="founder.php">👤 Founder</a>
        <a href="chairman.php">📋 Former Chairman</a>
        <a href="secretary.php">👔 Secretary & Director</a>
        <a href="director.php">👨‍🏫 Director's Desk</a>
    </div>
</section>

<?php include("../../includes/footer.php") ?>