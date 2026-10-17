<?php include("../../includes/header.php") ?>
<?php include("../../includes/navbar.php") ?>

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
    background: linear-gradient(135deg, #1f1cd7 0%, #512cce 100%);
    padding: 70px 20px 50px;
    text-align: center;
    border-bottom: 6px solid #f1c40f;
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
    background: #f1c40f;
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
    background: #f1c40f;
    margin: 15px auto 0;
    border-radius: 10px;
}

.vm-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    margin-bottom: 50px;
}

.vm-card {
    background: #ffffff;
    padding: 40px 35px;
    border-radius: 0;
    box-shadow: 0 5px 30px rgba(0,0,0,0.06);
    border-left: 6px solid #f1c40f;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.vm-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 40px rgba(0,0,0,0.12);
}

.vm-card .icon {
    font-size: 48px;
    margin-bottom: 15px;
    display: block;
}

.vm-card h2 {
    font-size: 28px;
    color: #1a2332;
    margin-bottom: 15px;
    font-weight: 700;
}

.vm-card h2::after {
    content: "";
    display: block;
    width: 50px;
    height: 3px;
    background: #f1c40f;
    margin: 10px 0 0;
    border-radius: 10px;
}

.vm-card p {
    font-size: 16px;
    color: #555;
    line-height: 1.9;
    text-align: justify;
}

.vm-card ul {
    list-style: none;
    padding: 0;
    margin-top: 15px;
}

.vm-card ul li {
    font-size: 15px;
    color: #444;
    line-height: 1.8;
    padding: 8px 0 8px 30px;
    position: relative;
    border-bottom: 1px solid #f0f2f5;
}

.vm-card ul li:last-child {
    border-bottom: none;
}

.vm-card ul li::before {
    content: "▸";
    position: absolute;
    left: 0;
    color: #f1c40f;
    font-weight: 700;
    font-size: 18px;
}

.values-section {
    background: #ffffff;
    padding: 60px 0;
    margin: 40px 0;
    border-top: 6px solid #f1c40f;
    border-bottom: 6px solid #f1c40f;
}

.values-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.value-card {
    background: #f8f9fa;
    padding: 30px 25px;
    text-align: center;
    border-radius: 0;
    border-bottom: 4px solid #f1c40f;
    transition: all 0.3s ease;
}

.value-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 35px rgba(0,0,0,0.08);
    background: #ffffff;
}

.value-card .icon {
    font-size: 40px;
    display: block;
    margin-bottom: 12px;
}

.value-card h3 {
    font-size: 20px;
    color: #1a2332;
    margin-bottom: 10px;
    font-weight: 700;
}

.value-card p {
    font-size: 14px;
    color: #555;
    line-height: 1.7;
}

.goals-section {
    padding: 50px 0 30px;
}

.goals-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.goal-card {
    background: #ffffff;
    padding: 30px 25px;
    border-radius: 0;
    box-shadow: 0 5px 25px rgba(0,0,0,0.06);
    border-left: 4px solid #f1c40f;
    transition: all 0.3s ease;
}

.goal-card:hover {
    transform: translateX(5px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.1);
}

.goal-card .number {
    font-size: 32px;
    font-weight: 800;
    color: #f1c40f;
    display: block;
    margin-bottom: 8px;
}

.goal-card h3 {
    font-size: 18px;
    color: #1a2332;
    margin-bottom: 8px;
    font-weight: 700;
}

.goal-card p {
    font-size: 14px;
    color: #555;
    line-height: 1.7;
}

.outcomes-section {
    background: #f8f9fa;
    padding: 60px 0;
    margin: 30px 0;
}

.outcomes-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
}

.outcome-item {
    background: #ffffff;
    padding: 20px 25px;
    border-radius: 0;
    border-left: 4px solid #f1c40f;
    display: flex;
    align-items: center;
    gap: 15px;
    transition: all 0.3s ease;
}

.outcome-item:hover {
    transform: translateX(5px);
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
}

.outcome-item .icon {
    font-size: 28px;
    flex-shrink: 0;
}

.outcome-item p {
    font-size: 15px;
    color: #333;
    font-weight: 500;
    margin: 0;
}

.quote-section {
    background: linear-gradient(135deg, #1a2332, #2c3e7a);
    padding: 60px 30px;
    text-align: center;
    margin: 40px 0;
    border-top: 4px solid #f1c40f;
    border-bottom: 4px solid #f1c40f;
}

.quote-section .quote-icon {
    font-size: 48px;
    color: #f1c40f;
    display: block;
    margin-bottom: 15px;
}

.quote-section blockquote {
    font-size: 26px;
    color: #ffffff;
    font-weight: 300;
    line-height: 1.8;
    max-width: 800px;
    margin: 0 auto 20px;
    font-style: italic;
}

.quote-section .author {
    color: #d4e2f0;
    font-size: 18px;
    font-weight: 600;
    letter-spacing: 1px;
}

.quote-section .author span {
    color: #f1c40f;
}

.download-section {
    text-align: center;
    padding: 30px 0 50px;
}

.download-btn {
    display: inline-block;
    padding: 16px 45px;
    background: #f1c40f;
    color: #1a2332;
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    text-decoration: none;
    border: 2px solid #f1c40f;
    transition: all 0.3s ease;
    border-radius: 0;
}

.download-btn:hover {
    background: transparent;
    color: #f1c40f;
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(241, 196, 15, 0.3);
}

@media screen and (max-width: 992px) {
    .vm-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    .values-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .goals-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media screen and (max-width: 768px) {
    .page-banner {
        padding: 50px 15px 35px;
    }
    .page-banner h1 {
        font-size: 32px;
        letter-spacing: 2px;
    }
    .page-banner p {
        font-size: 17px;
    }
    .section-heading {
        font-size: 26px;
        margin-bottom: 30px;
    }
    .vm-card {
        padding: 30px 25px;
    }
    .vm-card h2 {
        font-size: 24px;
    }
    .vm-card p {
        font-size: 15px;
    }
    .values-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    .goals-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    .outcomes-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    .quote-section {
        padding: 40px 20px;
    }
    .quote-section blockquote {
        font-size: 20px;
    }
    .download-btn {
        padding: 14px 35px;
        font-size: 14px;
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
    .vm-card h2 {
        font-size: 20px;
    }
    .value-card h3 {
        font-size: 17px;
    }
    .goal-card h3 {
        font-size: 16px;
    }
    .quote-section blockquote {
        font-size: 17px;
    }
}
</style>

<section class="page-banner">
    <h1>Vision & Mission</h1>
    <p>Shaping Future Leaders Through Excellence in Management Education</p>
</section>

<div class="container">

    <section class="vm-grid">
        <div class="vm-card">
            <span class="icon">👁️</span>
            <h2>Our Vision</h2>
            <p>
                To be a globally recognized center of excellence in management education, fostering innovative leaders who drive sustainable development, economic growth, and positive social change across the world.
            </p>
            <p style="margin-top:15px;">
                We aspire to become a premier institution that sets benchmarks in academic quality, research, and industry collaboration, producing graduates who are not just professionals but visionaries capable of shaping the future of business and society.
            </p>
            <ul>
                <li>Global recognition and ranking among top management institutions</li>
                <li>Pioneering research and innovation in management practices</li>
                <li>Producing socially responsible and ethical business leaders</li>
                <li>Building a sustainable and inclusive learning ecosystem</li>
            </ul>
        </div>

        <div class="vm-card">
            <span class="icon">🎯</span>
            <h2>Our Mission</h2>
            <p>
                To impart quality management education through an industry-integrated curriculum, state-of-the-art pedagogy, and holistic development, empowering students to excel in the dynamic global business environment.
            </p>
            <p style="margin-top:15px;">
                We are committed to creating an ecosystem where academic excellence meets practical application, preparing our students to become competent, confident, and compassionate leaders who contribute meaningfully to organizations and communities.
            </p>
            <ul>
                <li>Delivering industry-relevant curriculum with global perspectives</li>
                <li>Fostering research, innovation, and entrepreneurial spirit</li>
                <li>Building strong industry-academia partnerships</li>
                <li>Promoting ethical values, social responsibility, and sustainability</li>
                <li>Ensuring holistic development through co-curricular and extracurricular activities</li>
            </ul>
        </div>
    </section>

</div>

<section class="values-section">
    <div class="container">
        <h2 class="section-heading">Our Core Values</h2>
        <div class="values-grid">
            <div class="value-card">
                <span class="icon">⭐</span>
                <h3>Excellence</h3>
                <p>Striving for the highest standards in education, research, and overall institutional performance.</p>
            </div>
            <div class="value-card">
                <span class="icon">🤝</span>
                <h3>Integrity</h3>
                <p>Upholding honesty, transparency, and ethical practices in all our academic and administrative endeavors.</p>
            </div>
            <div class="value-card">
                <span class="icon">💡</span>
                <h3>Innovation</h3>
                <p>Encouraging creativity, critical thinking, and out-of-the-box solutions to contemporary business challenges.</p>
            </div>
            <div class="value-card">
                <span class="icon">🌍</span>
                <h3>Inclusivity</h3>
                <p>Welcoming diversity and providing equal opportunities for all students regardless of background or identity.</p>
            </div>
            <div class="value-card">
                <span class="icon">👑</span>
                <h3>Leadership</h3>
                <p>Developing future leaders with vision, confidence, and the ability to inspire and guide others.</p>
            </div>
            <div class="value-card">
                <span class="icon">🌱</span>
                <h3>Social Responsibility</h3>
                <p>Contributing to community development and creating positive impact through education and outreach.</p>
            </div>
        </div>
    </div>
</section>

<div class="container">

    <section class="goals-section">
        <h2 class="section-heading">Our Strategic Goals</h2>
        <div class="goals-grid">
            <div class="goal-card">
                <span class="number">01</span>
                <h3>Academic Excellence</h3>
                <p>Continuously upgrade curriculum, teaching methodologies, and learning resources to meet global standards.</p>
            </div>
            <div class="goal-card">
                <span class="number">02</span>
                <h3>Industry Collaboration</h3>
                <p>Strengthen partnerships with leading companies for internships, live projects, guest lectures, and placement opportunities.</p>
            </div>
            <div class="goal-card">
                <span class="number">03</span>
                <h3>Research & Innovation</h3>
                <p>Promote a strong research culture among faculty and students through publications, conferences, and collaborative projects.</p>
            </div>
            <div class="goal-card">
                <span class="number">04</span>
                <h3>Student Development</h3>
                <p>Focus on soft skills, leadership training, personality development, and holistic growth of every student.</p>
            </div>
            <div class="goal-card">
                <span class="number">05</span>
                <h3>Global Outreach</h3>
                <p>Establish international collaborations, exchange programs, and global partnerships to broaden learning horizons.</p>
            </div>
            <div class="goal-card">
                <span class="number">06</span>
                <h3>Infrastructure Enhancement</h3>
                <p>Invest in modern facilities, digital learning tools, and campus infrastructure to provide a world-class learning environment.</p>
            </div>
        </div>
    </section>

</div>

<section class="outcomes-section">
    <div class="container">
        <h2 class="section-heading">What We Aim For Our Students</h2>
        <div class="outcomes-grid">
            <div class="outcome-item">
                <span class="icon">🧠</span>
                <p>Critical thinking and problem-solving skills</p>
            </div>
            <div class="outcome-item">
                <span class="icon">🗣️</span>
                <p>Effective communication and interpersonal skills</p>
            </div>
            <div class="outcome-item">
                <span class="icon">⚖️</span>
                <p>Ethical and socially responsible decision-making</p>
            </div>
            <div class="outcome-item">
                <span class="icon">📚</span>
                <p>Lifelong learning and adaptability to change</p>
            </div>
            <div class="outcome-item">
                <span class="icon">🚀</span>
                <p>Entrepreneurial mindset and business acumen</p>
            </div>
            <div class="outcome-item">
                <span class="icon">🌐</span>
                <p>Global perspective and cross-cultural competence</p>
            </div>
            <div class="outcome-item">
                <span class="icon">🤝</span>
                <p>Teamwork and collaborative leadership abilities</p>
            </div>
            <div class="outcome-item">
                <span class="icon">💼</span>
                <p>Industry-ready professional skills and employability</p>
            </div>
        </div>
    </div>
</section>

<section class="quote-section">
    <span class="quote-icon">❝</span>
    <blockquote>
        "Our vision and mission are not just words on paper; they are the guiding principles that shape every decision we make, every course we design, and every student we nurture at East West College of Management."
    </blockquote>
    <p class="author">— <span>Dr. Janardhan Shetty</span>, Director, East West College of Management</p>
</section>

<?php include("../../includes/enquiry_form.php"); ?>

<?php include("../../includes/footer.php") ?>