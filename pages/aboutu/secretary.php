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

.objectives-section {
    background: #ffffff;
    padding: 60px 0;
    margin: 40px 0;
    border-top: 6px solid #4a90d9;
    border-bottom: 6px solid #4a90d9;
}

.objectives-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.objective-item {
    text-align: center;
    padding: 25px 20px;
    border-left: 4px solid #4a90d9;
    background: #f8f9fa;
}

.objective-item .icon {
    font-size: 36px;
    display: block;
    margin-bottom: 10px;
}

.objective-item h4 {
    font-size: 18px;
    color: #1a2332;
    font-weight: 700;
    margin-bottom: 8px;
}

.objective-item p {
    font-size: 14px;
    color: #555;
    line-height: 1.6;
}

.core-section {
    padding: 30px 0 50px;
}

.core-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.core-item {
    background: #ffffff;
    padding: 30px 25px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.06);
    border-left: 4px solid #4a90d9;
    transition: all 0.3s ease;
}

.core-item:hover {
    transform: translateX(5px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.1);
}

.core-item .icon {
    font-size: 32px;
    display: block;
    margin-bottom: 10px;
}

.core-item h3 {
    font-size: 18px;
    color: #1a2332;
    font-weight: 700;
    margin-bottom: 8px;
}

.core-item p {
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
    .objectives-grid {
        grid-template-columns: 1fr;
    }
    .core-grid {
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
    <h1>Secretary & Director</h1>
    <p>Driving Corporate Relations & Strategic Growth</p>
</section>

<div class="container">

    <div class="leader-card">
        <img src="../../images/pillars/secretary.jpg" alt="Secretary">
        <h2>Mr. Tejas Kiran</h2>
        <h4>Secretary & Director (Corporate Relations)</h4>

        <p>
            EWCM aims at providing optimum environment, which will develop the skills and attitudes required to be an effective lifelong learner. We do have a higher expectation for every student at our college and offer innovative teaching in a stimulating environment.
        </p>

        <p>
            We are all immensely proud of our college and delighted to have the opportunity to show some of what we do here and some of the opportunities we are able to offer each and every student.
        </p>

        <p>
            While academic excellence is our priority, the college is also devoted to nurture and prepare the students for life, to help them to develop confidence in their abilities and to make them responsible citizens of our country.
        </p>

        <p>
            EWCM imparts education with high and advanced standards. We constantly endeavour to always live up to our strong and distinctive ethos that is to prepare the students to face life's challenges and to inculcate this into everything we do.
        </p>
    </div>

    <div class="vision-quote">
        <span class="quote-icon">❝</span>
        <blockquote>
            "EWCM aims at providing an optimum environment that develops the skills and attitudes required to be an effective lifelong learner, preparing students to face life's challenges with confidence."
        </blockquote>
        <p class="author">— Mr. Tejas Kiran, Secretary & Director (Corporate Relations)</p>
    </div>

</div>

<section class="objectives-section">
    <div class="container">
        <h2 class="section-heading">Our Objectives</h2>
        <div class="objectives-grid">
            <div class="objective-item">
                <span class="icon">🎯</span>
                <h4>Lifelong Learning</h4>
                <p>Developing skills and attitudes required to be effective lifelong learners in a dynamic world.</p>
            </div>
            <div class="objective-item">
                <span class="icon">🏫</span>
                <h4>Innovative Teaching</h4>
                <p>Providing innovative teaching methodologies in a stimulating and supportive environment.</p>
            </div>
            <div class="objective-item">
                <span class="icon">💼</span>
                <h4>Career Readiness</h4>
                <p>Preparing students for successful careers through corporate relations and industry partnerships.</p>
            </div>
            <div class="objective-item">
                <span class="icon">🇮🇳</span>
                <h4>Responsible Citizens</h4>
                <p>Nurturing responsible citizens who contribute positively to society and the nation.</p>
            </div>
        </div>
    </div>
</section>

<div class="container">

    <section class="core-section">
        <h2 class="section-heading">Core Values</h2>
        <div class="core-grid">
            <div class="core-item">
                <span class="icon">📚</span>
                <h3>Academic Excellence</h3>
                <p>Prioritizing academic excellence while nurturing and preparing students for life beyond the classroom.</p>
            </div>
            <div class="core-item">
                <span class="icon">💪</span>
                <h3>Confidence Building</h3>
                <p>Helping students develop confidence in their abilities and preparing them for life's challenges.</p>
            </div>
            <div class="core-item">
                <span class="icon">🌟</span>
                <h3>Advanced Standards</h3>
                <p>Imparting education with high and advanced standards that meet global expectations.</p>
            </div>
            <div class="core-item">
                <span class="icon">🌱</span>
                <h3>Holistic Ethos</h3>
                <p>Living up to a strong and distinctive ethos that prepares students for a successful future.</p>
            </div>
        </div>
    </section>

</div>

<section class="quick-links">
    <h2>Other Institution Pillars</h2>
    <div class="quick-links-grid">
        <a href="founder.php">👤 Founder</a>
        <a href="chairman.php">📋 Former Chairman</a>
        <a href="chairperson.php">👩‍💼 Chairperson</a>
        <a href="director.php">👨‍🏫 Director's Desk</a>
    </div>
</section>

<?php include("../../includes/footer.php") ?>