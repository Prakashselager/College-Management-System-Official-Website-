<?php
include("../../includes/header.php");
include("../../includes/navbar.php");
?>

<!-- ===== AOS ANIMATION LIBRARY ===== -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<head>
    <link rel="stylesheet" href="../../assets/css/global.css">
    <style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background:#f4f6f9;
    font-family:Arial, sans-serif;
    overflow-x:hidden;
}

.scholarship-page{
    width:90%;
    max-width:1400px;
    margin:30px auto;
}

.scholarship-banner{
    width:100%;
    margin-bottom:50px;
}

.scholarship-banner img{
    width:100%;
    height:550px;
    object-fit:cover;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,.15);
}

.scholarship-intro{
    width:100%;
    background:linear-gradient(135deg,#003366,#0059b3);
    color:white;
    text-align:center;
    padding:60px 50px;
    border-radius:25px;
    margin-bottom:60px;
    box-shadow:0 10px 30px rgba(0,0,0,.12);
}

.scholarship-intro h1{
    color:#ffd700;
    font-size:48px;
    margin-bottom:30px;
}

.scholarship-intro p{
    max-width:1000px;
    margin:auto;
    font-size:22px;
    line-height:1.9;
}

.scholarship-types{
    margin-bottom:60px;
}

.scholarship-types h2{
    text-align:center;
    font-size:42px;
    color:#003366;
    margin-bottom:40px;
}

.scholarship-container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:30px;
}

.scholarship-box{
    padding:35px;
    border-radius:20px;
    text-align:center;
    color:white;
    transition:.4s;
    box-shadow:0 5px 20px rgba(0,0,0,.12);
}

.scholarship-box:nth-child(1){
    background:linear-gradient(135deg,#ff6a00,#ee0979);
}

.scholarship-box:nth-child(2){
    background:linear-gradient(135deg,#11998e,#38ef7d);
}

.scholarship-box:nth-child(3){
    background:linear-gradient(135deg,#396afc,#2948ff);
}

.scholarship-box:nth-child(4){
    background:linear-gradient(135deg,#8e2de2,#4a00e0);
}

.scholarship-box:hover{
    transform:translateY(-10px);
}

.scholarship-box h3{
    margin-bottom:20px;
    font-size:28px;
}

.scholarship-box p{
    line-height:1.8;
    font-size:17px;
}

.eligibility,
.documents,
.application-process,
.benefits,
.scholarship-contact{
    margin-bottom:50px;
    padding:45px;
    border-radius:25px;
    box-shadow:0 5px 20px rgba(0,0,0,.1);
}

.eligibility h2,
.documents h2,
.application-process h2,
.benefits h2,
.scholarship-contact h2{
    text-align:center;
    margin-bottom:30px;
    font-size:38px;
}

.eligibility{
    background:#e8f5e9;
}

.eligibility h2{
    color:#2e7d32;
}

.eligibility ul{
    max-width:900px;
    margin:auto;
}

.eligibility li{
    margin:18px 0;
    font-size:18px;
    line-height:1.8;
}

.documents{
    background:#fff3e0;
}

.documents h2{
    color:#ef6c00;
}

.documents ul{
    max-width:900px;
    margin:auto;
}

.documents li{
    margin:18px 0;
    font-size:18px;
    line-height:1.8;
}

.application-process{
    background:#e3f2fd;
}

.application-process h2{
    color:#1565c0;
}

.application-process ol{
    max-width:900px;
    margin:auto;
}

.application-process li{
    margin:18px 0;
    font-size:18px;
    line-height:1.8;
}

.benefits{
    background:linear-gradient(135deg,#8e24aa,#5e35b1);
    color:white;
}

.benefits h2{
    color:#ffd700;
}

.benefit-box{
    max-width:800px;
    margin:auto;
    text-align:center;
}

.benefit-box p{
    margin:20px 0;
    font-size:20px;
}

.scholarship-contact{
    background:#003366;
    color:white;
    text-align:center;
}

.scholarship-contact h2{
    color:#ffd700;
}

.scholarship-contact p{
    margin:20px 0;
    font-size:20px;
}

@media(max-width:768px){
    .scholarship-page{
        width:95%;
    }
    .scholarship-banner img{
        height:250px;
    }
    .scholarship-intro{
        padding:40px 20px;
    }
    .scholarship-intro h1{
        font-size:32px;
    }
    .scholarship-intro p{
        font-size:18px;
    }
    .scholarship-types h2,
    .eligibility h2,
    .documents h2,
    .application-process h2,
    .benefits h2,
    .scholarship-contact h2{
        font-size:30px;
    }
}
</style>
</head>

<div class="scholarship-page">

    <!-- ===== BANNER ===== -->
    <section class="scholarship-banner" data-aos="fade-down" data-aos-duration="900">
        <img src="../../images/scholarship.png" alt="Scholarship Banner">
    </section>

    <!-- ===== INTRO ===== -->
    <section class="scholarship-intro" data-aos="fade-right" data-aos-duration="800">
        <h1>Scholarships at East West College of Management</h1>
        <p>
            East West College of Management is committed to supporting
            deserving and talented students through various scholarship
            schemes. The institution encourages academic excellence and
            provides financial assistance to meritorious and economically
            weaker students.
        </p>
    </section>

    <!-- ===== TYPES ===== -->
    <section class="scholarship-types" data-aos="fade-up" data-aos-duration="800">
        <h2>Types of Scholarships</h2>
        <div class="scholarship-container">
            <div class="scholarship-box" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="50">
                <h3>Merit Scholarship</h3>
                <p>
                    Awarded to students who secure excellent marks in
                    qualifying examinations and maintain outstanding
                    academic performance.
                </p>
            </div>
            <div class="scholarship-box" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100">
                <h3>Government Scholarship</h3>
                <p>
                    Scholarships provided by the State and Central
                    Government for eligible students belonging to
                    different categories.
                </p>
            </div>
            <div class="scholarship-box" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
                <h3>Sports Scholarship</h3>
                <p>
                    Financial assistance for students who have excelled
                    in sports at district, state or national levels.
                </p>
            </div>
            <div class="scholarship-box" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200">
                <h3>Minority Scholarship</h3>
                <p>
                    Scholarships available for minority students as per
                    Government norms and eligibility criteria.
                </p>
            </div>
        </div>
    </section>

    <!-- ===== ELIGIBILITY ===== -->
    <section class="eligibility" data-aos="fade-right" data-aos-duration="800" data-aos-delay="100">
        <h2>Eligibility Criteria</h2>
        <ul>
            <li>Students must satisfy the academic requirements.</li>
            <li>Attendance should be as per college regulations.</li>
            <li>Students should submit all required documents.</li>
            <li>Government scholarship applicants must meet official eligibility conditions.</li>
        </ul>
    </section>

    <!-- ===== DOCUMENTS ===== -->
    <section class="documents" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
        <h2>Required Documents</h2>
        <ul>
            <li>SSLC and PUC/Graduation Marks Cards</li>
            <li>Aadhar Card Copy</li>
            <li>Income Certificate</li>
            <li>Caste Certificate (if applicable)</li>
            <li>Bank Account Details</li>
            <li>Passport Size Photographs</li>
        </ul>
    </section>

    <!-- ===== APPLICATION PROCESS ===== -->
    <section class="application-process" data-aos="fade-right" data-aos-duration="800" data-aos-delay="150">
        <h2>Application Process</h2>
        <ol>
            <li>Collect scholarship application form.</li>
            <li>Fill in all required details carefully.</li>
            <li>Attach necessary documents.</li>
            <li>Submit the application to the scholarship section.</li>
            <li>Verification and approval by authorities.</li>
        </ol>
    </section>

    <!-- ===== BENEFITS ===== -->
    <section class="benefits" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
        <h2>Benefits of Scholarships</h2>
        <div class="benefit-box">
            <p>✔ Financial assistance for education.</p>
            <p>✔ Encouragement for academic excellence.</p>
            <p>✔ Support for economically weaker students.</p>
            <p>✔ Motivation for extracurricular achievements.</p>
        </div>
    </section>

    <!-- ===== CONTACT ===== -->
    <section class="scholarship-contact" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <h2>Scholarship Cell Contact</h2>
        <p><strong>Email:</strong> scholarship@ewcm.edu.in</p>
        <p><strong>Phone:</strong> +91 9876543210</p>
        <p><strong>Office Hours:</strong> Monday - Saturday (9:00 AM - 5:00 PM)</p>
    </section>

</div>

<!-- ===== ENQUIRY FORM ===== -->
<?php include("../../includes/enquiry_form.php"); ?>

<?php include("../../includes/footer.php"); ?>

<!-- ===== AOS INIT ===== -->
<script>
    AOS.init({
        once: true,
        offset: 120,
        easing: 'ease-out-quad',
    });
</script>