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

.achievements-section {
    padding: 30px 0 50px;
}

.achievements-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.achievement-item {
    background: #ffffff;
    padding: 30px 25px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.06);
    border-left: 4px solid #4a90d9;
    transition: all 0.3s ease;
}

.achievement-item:hover {
    transform: translateX(5px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.1);
}

.achievement-item .icon {
    font-size: 32px;
    display: block;
    margin-bottom: 10px;
}

.achievement-item h3 {
    font-size: 18px;
    color: #1a2332;
    font-weight: 700;
    margin-bottom: 8px;
}

.achievement-item p {
    font-size: 15px;
    color: #555;
    line-height: 1.7;
}

.principles-section {
    background: #f8f9fa;
    padding: 60px 0;
    margin: 30px 0;
}

.principles-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
}

.principle-card {
    background: #ffffff;
    padding: 25px 20px;
    text-align: center;
    border-bottom: 4px solid #4a90d9;
    transition: all 0.3s ease;
}

.principle-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
}

.principle-card .number {
    font-size: 28px;
    font-weight: 800;
    color: #4a90d9;
    display: block;
    margin-bottom: 8px;
}

.principle-card h4 {
    font-size: 17px;
    color: #1a2332;
    font-weight: 700;
    margin-bottom: 5px;
}

.principle-card p {
    font-size: 14px;
    color: #555;
    line-height: 1.6;
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
    .timeline-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .achievements-grid {
        grid-template-columns: 1fr;
    }
    .principles-grid {
        grid-template-columns: repeat(2, 1fr);
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
    .timeline-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    .principles-grid {
        grid-template-columns: 1fr;
        gap: 15px;
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
    <h1>Former Chairman</h1>
    <p>Carrying Forward the Legacy of Excellence</p>
</section>

<div class="container">

    <div class="leader-card">
        <img src="../../images/pillars/chairman.jpg" alt="Former Chairman">
        <h2>Late Sri. C.N Ravi Kiran</h2>
        <h4>Former Chairman, East West College of Management</h4>

        <p>
            Keeping the principles laid down by Our Founder Chairman Late Sri. C.M. Nagaraj, a visionary, an acknowledged educationist, a philanthropist and a social worker, who created remarkable educational hub of Schools and Colleges, to impart and extend knowledge to people from all walks of life. He devoted his precious time, effort, and life to transform his ambition into reality.
        </p>

        <p>
            Be it Engineering, Polytechnic, Business Management, Nursing, Pharmacy education and Schooling, East West Group of Institutions offers global standard of education to the aspiring students to achieve higher goals.
        </p>

        <p>
            As the great saying goes "Where there is a Will there is a Win". Preparation can mean the difference between Winning & Losing. It has been our sole motto to help our students to realize their goals & reach their desired destiny in this highly competitive world. We provide an extremely conductive environment to enrich the personality of our students & enhance their skills by providing the best of opportunities.
        </p>

        <p>
            Our vision is to work for the holistic development of our students. We provide our zealous students the right impetus to achieve success in their academic pursuits & quest for knowledge. Our enthusiastic teaching fraternity has been successful in nurturing personalities to transform youth into responsible citizens. Our unique approach to education has rewarded us with rich dividends.
        </p>

        <p>
            My good wishes and welcome to all who choose to study in this great Institution.
        </p>
    </div>

    <div class="vision-quote">
        <span class="quote-icon">❝</span>
        <blockquote>
            "Where there is a Will there is a Win. Preparation can mean the difference between Winning & Losing. Our sole motto is to help students realize their goals and reach their desired destiny in this highly competitive world."
        </blockquote>
        <p class="author">— Late Sri. C.N Ravi Kiran, Former Chairman</p>
    </div>

</div>

<section class="timeline-section">
    <div class="container">
        <h2 class="section-heading">Chairman's Journey</h2>
        <div class="timeline-grid">
            <div class="timeline-item">
                <span class="year">1968</span>
                <h4>Foundation of EWGI</h4>
                <p>Carried forward the vision of Founder Chairman to establish a world-class educational institution</p>
            </div>
            <div class="timeline-item">
                <span class="year">1980</span>
                <h4>Expansion of Programs</h4>
                <p>Introduced Engineering, Polytechnic, Nursing, Pharmacy, and Business Management programs</p>
            </div>
            <div class="timeline-item">
                <span class="year">1990</span>
                <h4>Infrastructure Growth</h4>
                <p>Developed modern campus with state-of-the-art facilities for holistic student development</p>
            </div>
            <div class="timeline-item">
                <span class="year">2000</span>
                <h4>Academic Excellence</h4>
                <p>Focused on achieving global standards in education and preparing students for competitive world</p>
            </div>
            <div class="timeline-item">
                <span class="year">2010</span>
                <h4>Holistic Development</h4>
                <p>Emphasized personality development, skill enhancement, and character building</p>
            </div>
            <div class="timeline-item">
                <span class="year">2020</span>
                <h4>Legacy Continues</h4>
                <p>The institution continues to nurture responsible citizens and future leaders</p>
            </div>
        </div>
    </div>
</section>

<div class="container">

    <section class="achievements-section">
        <h2 class="section-heading">Key Contributions</h2>
        <div class="achievements-grid">
            <div class="achievement-item">
                <span class="icon">🏫</span>
                <h3>Diverse Educational Programs</h3>
                <p>Introduced a wide range of programs including Engineering, Polytechnic, Business Management, Nursing, Pharmacy, and Schooling to cater to diverse career aspirations.</p>
            </div>
            <div class="achievement-item">
                <span class="icon">🌍</span>
                <h3>Global Standard Education</h3>
                <p>Ensured that East West Group of Institutions offers education that meets global standards, preparing students to compete internationally.</p>
            </div>
            <div class="achievement-item">
                <span class="icon">💡</span>
                <h3>Student-Centric Approach</h3>
                <p>Focused on holistic development of students by providing a conductive environment to enrich personality and enhance skills.</p>
            </div>
            <div class="achievement-item">
                <span class="icon">👨‍🏫</span>
                <h3>Empowering Faculty</h3>
                <p>Built an enthusiastic teaching fraternity that nurtures personalities and transforms youth into responsible citizens.</p>
            </div>
        </div>
    </section>

</div>

<section class="principles-section">
    <div class="container">
        <h2 class="section-heading">Guiding Principles</h2>
        <div class="principles-grid">
            <div class="principle-card">
                <span class="number">01</span>
                <h4>Will to Win</h4>
                <p>"Where there is a Will there is a Win" – Encouraging students to develop determination and perseverance</p>
            </div>
            <div class="principle-card">
                <span class="number">02</span>
                <h4>Preparation</h4>
                <p>Preparation can mean the difference between Winning & Losing – Emphasizing the importance of readiness</p>
            </div>
            <div class="principle-card">
                <span class="number">03</span>
                <h4>Holistic Development</h4>
                <p>Working for the overall development of students including academic, personal, and professional growth</p>
            </div>
            <div class="principle-card">
                <span class="number">04</span>
                <h4>Quality Education</h4>
                <p>Providing the best learning opportunities to help students achieve success in academic pursuits</p>
            </div>
        </div>
    </div>
</section>

<section class="quick-links">
    <h2>Other Institution Pillars</h2>
    <div class="quick-links-grid">
        <a href="founder.php">👤 Founder</a>
        <a href="chairperson.php">👩‍💼 Chairperson</a>
        <a href="secretary.php">👔 Secretary & Director</a>
        <a href="director.php">👨‍🏫 Director's Desk</a>
    </div>
</section>

<?php include("../../includes/footer.php") ?>