<?php
include("../../includes/config.php");
include("../../includes/header.php");
include("../../includes/navbar.php");

$query = "SELECT * FROM management WHERE role = 'principal'";
$result = mysqli_query($conn, $query);
$principal = mysqli_fetch_assoc($result);

// If no data found, set defaults
if (!$principal) {
    $principal = [
        'name' => 'Dr. Shilpa V',
        'designation' => 'Principal',
        'qualification' => 'MCA, M.Tech., Ph.D.',
        'experience' => '18+ Years',
        'specialization' => 'Computer Science & Management',
        'email' => 'principal@ewcm.edu.in',
        'phone' => '+91 9876543210',
        'profile_image' => '../images/principal.png',
        'description' => 'Dr. Shilpa V is an accomplished academician and an inspiring leader with over 18 years of experience in higher education. As the Principal of East West College of Management, she is dedicated to fostering an environment of academic excellence, innovation, and holistic student development.',
        'quote' => '"Education is the most powerful tool for transforming lives and building a better future. At East West College of Management, we are committed to providing an enriching learning experience that inspires students to dream big, work hard, and make a positive difference in the world."',
        'message' => "Dear Students,\n\nIt is my privilege and honor to welcome you to East West College of Management, a place where dreams are nurtured, talents are cultivated, and futures are built. As the Principal, I am committed to providing you with an exceptional learning experience that will empower you to achieve your full potential.\n\nAt EWCM, we believe that education is not just about acquiring knowledge; it is about developing character, building skills, and cultivating values that will guide you throughout your life. Our dedicated faculty, modern infrastructure, and student-centered approach ensure that you receive the best possible education and support.\n\nI encourage you to make the most of your time at EWCM. Engage actively in academics, participate in extracurricular activities, seek mentorship, and explore new opportunities. Remember, success is a journey, not a destination. Embrace challenges, learn from failures, and never stop striving for excellence.\n\nI wish you all a fulfilling and transformative journey at East West College of Management. May you leave this institution not just as graduates, but as confident, capable, and compassionate leaders ready to make a positive impact on the world."
    ];
}

// Extract variables for easy use
$name = $principal['name'];
$designation = $principal['designation'];
$qualification = $principal['qualification'];
$experience = $principal['experience'];
$specialization = $principal['specialization'];
$email = $principal['email'];
$phone = $principal['phone'];
$profile_image = $principal['profile_image'];
$description = $principal['description'];
$quote = $principal['quote'];
$message = $principal['message'];

// Fix image path: if it starts with '../', prepend another '../' to get to root from pages/aboutu/
if (strpos($profile_image, '../') === 0) {
    $profile_image = '../../' . substr($profile_image, 3);
}
?>

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
    color: #000000;
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

.profile-card {
    background: #ffffff;
    padding: 40px;
    box-shadow: 0 5px 30px rgba(0,0,0,0.06);
    border-left: 6px solid #4a90d9;
    margin-bottom: 40px;
    border-radius: 0 4px 4px 0;
    display: grid;
    grid-template-columns: 1.2fr 2.0fr; /* Increased space for image */
    gap: 50px;
    align-items: start;
}

.profile-right-details h2 {
    font-size: 32px;
    color: #1a2332;
    font-weight: 800;
    margin-bottom: 5px;
}

.profile-right-details h4 {
    font-size: 18px;
    color: #4a90d9;
    font-weight: 600;
    margin-bottom: 20px;
    letter-spacing: 1px;
}

.profile-right-details p {
    font-size: 16px;
    color: #000000;
    line-height: 2;
    text-align: justify;
    margin-bottom: 15px;
}

.profile-right-details p:last-child {
    margin-bottom: 0;
}

.profile-right-details p::first-letter {
    font-size: 28px;
    font-weight: 800;
    color: #4a90d9;
    float: left;
    margin-right: 8px;
    line-height: 1;
}

.profile-table {
    width: 100%;
    border-collapse: collapse;
    background: #f8f9fa;
    margin-top: 15px;
}

.profile-table tr {
    border-bottom: 1px solid #e8ecf0;
}

.profile-table tr:last-child {
    border-bottom: none;
}

.profile-table th {
    text-align: left;
    padding: 12px 18px;
    font-size: 15px;
    font-weight: 700;
    color: #1a2332;
    width: 35%;
    background: #f0f2f5;
}

.profile-table td {
    padding: 12px 18px;
    font-size: 15px;
    color: #000000;
    width: 65%;
}

.profile-left-photo {
    display: flex;
    justify-content: center;
    align-items: center;
}

.profile-left-photo img {
    width: 100%;
    max-width: 400px;  /* Increased from 280px */
    height: auto;
    border-radius: 16px;
    border: 6px solid #4a90d9;
    box-shadow: 0 8px 30px rgba(0,0,0,0.15);
    display: block;
    margin: 0 auto;
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
    color: #000000;
    font-weight: 500;
    line-height: 1.8;
    font-style: italic;
    margin: 0;
}

.vision-quote .author {
    font-size: 16px;
    color: #000000;
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
    color: #000000;
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
    color: #000000;
    line-height: 1.7;
}

.message-section {
    background: #f8f9fa;
    padding: 60px 0;
    margin: 30px 0;
}

.message-content {
    max-width: 900px;
    margin: 0 auto;
    text-align: center;
}

.message-content h2 {
    font-size: 32px;
    color: #1a2332;
    margin-bottom: 20px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.message-content h2::after {
    content: "";
    display: block;
    width: 70px;
    height: 4px;
    background: #4a90d9;
    margin: 12px auto 0;
    border-radius: 10px;
}

.message-content p {
    font-size: 17px;
    color: #000000;
    line-height: 2;
    text-align: justify;
    margin-bottom: 15px;
}

.message-content .signature {
    font-size: 18px;
    font-weight: 700;
    color: #4a90d9;
    margin-top: 20px;
    text-align: right;
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
    .profile-card {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    .profile-left-photo img {
        max-width: 280px;
    }
    .timeline-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .achievements-grid {
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
    .profile-card {
        padding: 25px 20px;
    }
    .profile-right-details h2 {
        font-size: 26px;
    }
    .profile-right-details p {
        font-size: 15px;
    }
    .profile-table th, .profile-table td {
        padding: 10px 12px;
        font-size: 14px;
    }
    .profile-left-photo img {
        max-width: 200px;
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
    .message-content h2 {
        font-size: 26px;
    }
    .message-content p {
        font-size: 16px;
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
    .profile-right-details h2 {
        font-size: 22px;
    }
    .profile-right-details h4 {
        font-size: 16px;
    }
    .profile-right-details p {
        font-size: 14px;
    }
    .profile-table th, .profile-table td {
        font-size: 13px;
        padding: 8px 10px;
        display: block;
        width: 100%;
    }
    .profile-table th {
        background: #1a2332;
        color: #ffffff;
        padding-bottom: 5px;
    }
    .profile-table td {
        padding-top: 5px;
        padding-bottom: 12px;
        color: #000000;
    }
    .profile-table tr {
        display: block;
        margin-bottom: 10px;
        border-bottom: 2px solid #4a90d9;
    }
    .profile-left-photo img {
        max-width: 160px;
    }
    .message-content h2 {
        font-size: 22px;
    }
    .message-content p {
        font-size: 14px;
    }
}
</style>

<section class="page-banner">
    <h1>Principal's Desk</h1>
    <p>Shaping Minds, Building Futures, Inspiring Excellence</p>
</section>

<div class="container">

    <div class="profile-card">
        <div class="profile-left-photo">
            <img src="../../<?php echo $profile_image; ?>" alt="<?php echo $name; ?>">
        </div>

        <div class="profile-right-details">
            <h2><?php echo $name; ?></h2>
            <h4><?php echo $designation; ?></h4>

            <p><?php echo nl2br($description); ?></p>

            <table class="profile-table">
                <tr><th>Name</th><td><?php echo $name; ?></td></tr>
                <tr><th>Designation</th><td><?php echo $designation; ?></td></tr>
                <tr><th>Qualification</th><td><?php echo $qualification; ?></td></tr>
                <tr><th>Experience</th><td><?php echo $experience; ?></td></tr>
                <tr><th>Specialization</th><td><?php echo $specialization; ?></td></tr>
                <tr><th>Email</th><td><?php echo $email; ?></td></tr>
                <tr><th>Phone</th><td><?php echo $phone; ?></td></tr>
            </table>
        </div>
    </div>

    <div class="vision-quote">
        <span class="quote-icon">❝</span>
        <blockquote><?php echo $quote; ?></blockquote>
        <p class="author">— <?php echo $name; ?>, <?php echo $designation; ?></p>
    </div>

</div>

<div class="container">

    <section class="achievements-section">
        <h2 class="section-heading">Key Achievements</h2>
        <div class="achievements-grid">
            <div class="achievement-item">
                <span class="icon">🏫</span>
                <h3>Academic Excellence</h3>
                <p>Successfully implemented outcome-based education and innovative teaching methodologies that improved student learning outcomes.</p>
            </div>
            <div class="achievement-item">
                <span class="icon">📱</span>
                <h3>Digital Learning Initiatives</h3>
                <p>Introduced digital classrooms, e-learning platforms, and technology-enabled teaching to enhance student engagement.</p>
            </div>
            <div class="achievement-item">
                <span class="icon">📊</span>
                <h3>Research & Publications</h3>
                <p>Published over 20 research papers in reputed international journals and presented at various conferences worldwide.</p>
            </div>
            <div class="achievement-item">
                <span class="icon">🌟</span>
                <h3>Student Development Programs</h3>
                <p>Launched student-centric programs focusing on skill development, personality enhancement, and career readiness.</p>
            </div>
        </div>
    </section>

</div>

<section class="message-section">
    <div class="container">
        <div class="message-content">
            <h2>Message to Students</h2>
            <p><?php echo nl2br($message); ?></p>
            <p class="signature">— <?php echo $name; ?></p>
        </div>
    </div>
</section>

<section class="quick-links">
    <h2>Other Institution Pillars</h2>
    <div class="quick-links-grid">
        <a href="founder.php">👤 Founder</a>
        <a href="chairman.php">📋 Former Chairman</a>
        <a href="chairperson.php">👩‍💼 Chairperson</a>
        <a href="secretary.php">👔 Secretary & Director</a>
    </div>
</section>

<?php include("../../includes/footer.php"); ?>