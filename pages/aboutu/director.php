<?php
include("../../includes/config.php");
include("../../includes/header.php");
include("../../includes/navbar.php");

$query = "SELECT * FROM management WHERE role = 'director'";
$result = mysqli_query($conn, $query);
$director = mysqli_fetch_assoc($result);

// If no data found, set defaults
if (!$director) {
    $director = [
        'name' => 'Dr. Janardhan Shetty',
        'designation' => 'Dean & Director',
        'qualification' => 'MBA, Ph.D.',
        'experience' => '20+ Years',
        'specialization' => 'Business Administration & Computer Application',
        'email' => 'janardhan@ewcm.edu.in',
        'phone' => '+91 9876543210',
        'profile_image' => '../images/dean.png',
        'description' => 'Dr. Janardhan Shetty is a distinguished academician and visionary leader with over 20 years of rich experience in management education. As the Dean and Director of East West College of Management, he has been instrumental in shaping the institution\'s academic direction and fostering a culture of excellence, innovation, and holistic development.',
        'quote' => '"Education is not just about acquiring knowledge; it is about building character, developing skills, and preparing individuals to make a meaningful contribution to society."',
        'message' => "Dear Students,\n\nWelcome to East West College of Management, a place where dreams are nurtured, talents are discovered, and futures are built. As the Dean and Director, I am proud to lead an institution that is committed to academic excellence, innovation, and holistic development.\n\nAt EWCM, we believe that every student has the potential to achieve greatness. Our dedicated faculty, modern infrastructure, and industry-aligned curriculum are designed to provide you with the knowledge, skills, and confidence required to succeed in the competitive global landscape.\n\nI encourage each of you to make the most of your time at EWCM. Engage actively in academics, participate in co-curricular activities, seek mentorship, and never stop learning. Remember, success is not just about reaching your goals; it is about the journey of growth, self-discovery, and making a positive impact on the world around you.\n\nI wish you all a rewarding and transformative experience at East West College of Management."
    ];
}

// Extract variables
$name = $director['name'];
$designation = $director['designation'];
$qualification = $director['qualification'];
$experience = $director['experience'];
$specialization = $director['specialization'];
$email = $director['email'];
$phone = $director['phone'];
$profile_image = $director['profile_image'];
$description = $director['description'];
$quote = $director['quote'];
$message = $director['message'];
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
    grid-template-columns: 1.5fr 1fr;
    gap: 40px;
    align-items: start;
}

.profile-left h2 {
    font-size: 32px;
    color: #1a2332;
    font-weight: 800;
    margin-bottom: 5px;
}

.profile-left h4 {
    font-size: 18px;
    color: #4a90d9;
    font-weight: 600;
    margin-bottom: 20px;
    letter-spacing: 1px;
}

.profile-left p {
    font-size: 16px;
    color: #000000;
    line-height: 2;
    text-align: justify;
    margin-bottom: 15px;
}

.profile-left p:last-child {
    margin-bottom: 0;
}

.profile-left p::first-letter {
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

.profile-right img {
    width: 100%;
    max-width: 350px;
    border-radius: 12px;
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
    .profile-right img {
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
    .profile-left h2 {
        font-size: 26px;
    }
    .profile-left p {
        font-size: 15px;
    }
    .profile-table th, .profile-table td {
        padding: 10px 12px;
        font-size: 14px;
    }
    .profile-right img {
        max-width: 220px;
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
    .profile-left h2 {
        font-size: 22px;
    }
    .profile-left h4 {
        font-size: 16px;
    }
    .profile-left p {
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
    .profile-right img {
        max-width: 180px;
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
    <h1>Director's Desk</h1>
    <p>Leading with Vision, Excellence & Innovation</p>
</section>

<div class="container">

    <div class="profile-card">
        <div class="profile-left">
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

        <div class="profile-right">
            <img src="../../<?php echo $profile_image; ?>" alt="<?php echo $name; ?>">
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
                <span class="icon">📜</span>
                <h3>Curriculum Innovation</h3>
                <p>Introduced industry-integrated curriculum and modern teaching methodologies to enhance student learning outcomes.</p>
            </div>
            <div class="achievement-item">
                <span class="icon">🏆</span>
                <h3>Accreditations & Rankings</h3>
                <p>Successfully led the institution through NAAC and NBA accreditation processes, achieving high ratings.</p>
            </div>
            <div class="achievement-item">
                <span class="icon">🤝</span>
                <h3>Industry Partnerships</h3>
                <p>Established collaborations with leading companies for internships, guest lectures, and placement opportunities.</p>
            </div>
            <div class="achievement-item">
                <span class="icon">📚</span>
                <h3>Research & Publications</h3>
                <p>Published over 25 research papers in reputed international journals and guided numerous Ph.D. scholars.</p>
            </div>
        </div>
    </section>

</div>

<section class="message-section">
    <div class="container">
        <div class="message-content">
            <h2>Message to Students</h2>
            <p><?php echo nl2br($message); ?></p>
            
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

<?php include("../../includes/footer.php") ?>