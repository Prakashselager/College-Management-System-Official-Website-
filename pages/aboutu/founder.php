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
    grid-template-columns: repeat(4, 1fr);
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

.timeline-section {
    background: #ffffff;
    padding: 60px 0;
    margin: 40px 0;
    border-top: 6px solid #4a90d9;
    border-bottom: 6px solid #4a90d9;
}

.timeline-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.timeline-item {
    text-align: center;
    padding: 25px 20px;
    border-left: 4px solid #4a90d9;
    background: #f8f9fa;
}

.timeline-item .year {
    font-size: 32px;
    font-weight: 800;
    color: #4a90d9;
    display: block;
    margin-bottom: 8px;
}

.timeline-item h4 {
    font-size: 18px;
    color: #1a2332;
    font-weight: 700;
    margin-bottom: 5px;
}

.timeline-item p {
    font-size: 14px;
    color: #555;
    line-height: 1.6;
}

.legacy-section {
    padding: 30px 0 50px;
}

.legacy-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.legacy-item {
    background: #ffffff;
    padding: 30px 25px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.06);
    border-left: 4px solid #4a90d9;
    transition: all 0.3s ease;
}

.legacy-item:hover {
    transform: translateX(5px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.1);
}

.legacy-item .icon {
    font-size: 32px;
    display: block;
    margin-bottom: 10px;
}

.legacy-item h3 {
    font-size: 18px;
    color: #1a2332;
    font-weight: 700;
    margin-bottom: 8px;
}

.legacy-item p {
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
    .timeline-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .legacy-grid {
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
    .timeline-grid {
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
    <h1>Founder</h1>
    <p>The Visionary Behind East West Group of Institutions</p>
</section>

<div class="container">

    <div class="leader-card">
        <img src="../../images/pillars/founder.jpg" alt="Founder">
        <h2>Late Sri. C.M Nagaraj</h2>
        <h4>Founder, East West College of Management</h4>

        <p>
            "4D Principles – Discipline, Dedication, Determination & Diversity is a must for successful life…"
        </p>

        <p>
            EAST WEST GROUP OF INSTITUTIONS established in 1968. A well-known and a prestigious educational institution, crowns a supreme place among the top colleges in Bangalore. The institution was founded by Late Sri. C.M. Nagaraj, a visionary, an acknowledged educationist, a philanthropist and a social worker. Our founder chairman also served as BBMP Mayor. His prime motto, was to provide state of the art educational assistance to students from all walks of life. He devoted his precious time, effort, and life to transform his ambition into reality.
        </p>

        <p>
            The institution with its modern and spacious infrastructure built on 20 acres of land in the heart of the city yet away from the noise and air pollution. Located on a higher terrain of the city with lawns and outdoor sports facilities creating an enabling environment congenial to learning and pursuing academic goals. The EAST WEST Group believes in 'Achieving Academic Excellence' meeting global standards. The Chief motto of EWGI, is to impart versatile industry oriented qualitative knowledge to excel both intellectually and academically.
        </p>

        <p>
            Keeping the principles laid down by his father Shri. C.N. Ravi Kiran, Chairman EWGI, continuing the tradition with his able leadership to make the institution a treasure house of knowledge to the student community across the world.
        </p>
    </div>

    <div class="vision-quote">
        <span class="quote-icon">❝</span>
        <blockquote>
            "Education is the most powerful weapon which you can use to change the world. My vision was to create an institution that provides quality education to every deserving student, regardless of their background."
        </blockquote>
        <p class="author">— Late Sri. C.M Nagaraj, Founder</p>
    </div>

</div>

<section class="timeline-section">
    <div class="container">
        <h2 class="section-heading">Founder's Journey</h2>
        <div class="timeline-grid">
            <div class="timeline-item">
                <span class="year">1968</span>
                <h4>Foundation</h4>
                <p>Established East West Group of Institutions with a vision to provide quality education</p>
            </div>
            <div class="timeline-item">
                <span class="year">1975</span>
                <h4>Growth & Expansion</h4>
                <p>Expanded the institution to include multiple disciplines and courses</p>
            </div>
            <div class="timeline-item">
                <span class="year">1985</span>
                <h4>BBMP Mayor</h4>
                <p>Served as BBMP Mayor and contributed significantly to civic development</p>
            </div>
            <div class="timeline-item">
                <span class="year">1990</span>
                <h4>Philanthropy</h4>
                <p>Established scholarships and financial aid programs for deserving students</p>
            </div>
            <div class="timeline-item">
                <span class="year">2000</span>
                <h4>Infrastructure Development</h4>
                <p>Built the 20-acre modern campus with state-of-the-art facilities</p>
            </div>
            <div class="timeline-item">
                <span class="year">2010</span>
                <h4>Legacy Continues</h4>
                <p>His vision and principles continue to guide the institution under able leadership</p>
            </div>
        </div>
    </div>
</section>

<div class="container">

    <section class="legacy-section">
        <h2 class="section-heading">Founder's Legacy</h2>
        <div class="legacy-grid">
            <div class="legacy-item">
                <span class="icon">🎓</span>
                <h3>Quality Education for All</h3>
                <p>Believed in providing state-of-the-art educational assistance to students from all walks of life, ensuring equal opportunities for everyone.</p>
            </div>
            <div class="legacy-item">
                <span class="icon">🏛️</span>
                <h3>Modern Infrastructure</h3>
                <p>Built a 20-acre campus with modern facilities, creating an enabling environment conducive to learning and academic excellence.</p>
            </div>
            <div class="legacy-item">
                <span class="icon">🤝</span>
                <h3>Social Service</h3>
                <p>Dedicated his life to philanthropy and social work, serving as BBMP Mayor and contributing to community development.</p>
            </div>
            <div class="legacy-item">
                <span class="icon">💡</span>
                <h3>Visionary Leadership</h3>
                <p>His 4D Principles – Discipline, Dedication, Determination & Diversity continue to inspire students and faculty members.</p>
            </div>
            <div class="legacy-item">
                <span class="icon">🌍</span>
                <h3>Global Standards</h3>
                <p>Believed in 'Achieving Academic Excellence' meeting global standards and imparting versatile industry-oriented knowledge.</p>
            </div>
            <div class="legacy-item">
                <span class="icon">📚</span>
                <h3>Treasure House of Knowledge</h3>
                <p>Established a legacy of knowledge that continues to benefit the student community across the world under the leadership of Shri. C.N. Ravi Kiran.</p>
            </div>
        </div>
    </section>

</div>

<section class="quick-links">
    <h2>Other Institution Pillars</h2>
    <div class="quick-links-grid">
        <a href="chairman.php">📋 Former Chairman</a>
        <a href="chairperson.php">👩‍💼 Chairperson</a>
        <a href="secretary.php">👔 Secretary & Director</a>
        <a href="director.php">👨‍🏫 Director's Desk</a>
    </div>
</section>

<?php include("../../includes/footer.php") ?>