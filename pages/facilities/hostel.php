<?php
include("../../includes/header.php");
include("../../includes/navbar.php");
?>

<!-- ===== AOS ANIMATION LIBRARY ===== -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<link rel="stylesheet" href="../../assets/css/global.css">
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: #f4f7fc;
}

.hostel-page {
    width: 90%;
    max-width: 1400px;
    margin: 30px auto;
}

.hostel-banner {
    width: 100%;
    margin-bottom: 50px;
}

.hostel-banner img {
    width: 100%;
    height: 650px;
    object-fit: cover;
    border-radius: 25px;
    display: block;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    transition: 0.4s;
}

.hostel-banner img:hover {
    transform: scale(1.02);
}

.hostel-list {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin-bottom: 60px;
}

.list-card {
    padding: 35px;
    border-radius: 20px;
    color: white;
    text-align: center;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    transition: 0.4s;
}

.list-card:hover {
    transform: translateY(-10px);
}

.list-card:nth-child(1) {
    background: linear-gradient(135deg, #ff512f, #dd2476);
}

.list-card:nth-child(2) {
    background: linear-gradient(135deg, #11998e, #38ef7d);
}

.list-card:nth-child(3) {
    background: linear-gradient(135deg, #396afc, #2948ff);
}

.list-card h2 {
    margin-bottom: 15px;
}

.hostel-section {
    width: 100%;
    margin: 60px auto;
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.boys1 {
    background: lightblue;
}

.boys2 {
    background: lightgreen;
}

.girls {
    background: lightseagreen;
}

.hostel-title {
    color: white;
    text-align: center;
    padding: 30px;
    font-size: 42px;
    font-weight: bold;
}

.boys1 .hostel-title {
    background: #ff6b35;
}

.boys2 .hostel-title {
    background: #1565c0;
}

.girls .hostel-title {
    background: #8e24aa;
}

.hostel-content {
    padding: 40px;
}

.step-box {
    background: white;
    padding: 35px;
    border-radius: 20px;
    margin-bottom: 30px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    transition: 0.4s;
}

.step-box:hover {
    transform: scale(1.02);
}

.step-box h3 {
    color: #003366;
    margin-bottom: 20px;
    font-size: 28px;
}

.facilities {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.facility {
    background: #f5f5f5;
    padding: 15px;
    text-align: center;
    border-radius: 12px;
    font-weight: bold;
}

.fee-card {
    background: linear-gradient(135deg, #00b09b, #96c93d);
    color: white;
    text-align: center;
    padding: 35px;
    border-radius: 20px;
}

.fee-card h2 {
    font-size: 40px;
    margin-bottom: 15px;
}

.gallery {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.gallery img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 15px;
    transition: 0.4s;
}

.gallery img:hover {
    transform: scale(1.05);
}

.rules li {
    margin: 15px 0;
    line-height: 1.8;
}

.contact-box {
    background: #003366;
    color: white;
    padding: 35px;
    border-radius: 20px;
    text-align: center;
}

.contact-box h3 {
    color: #ffd700;
    margin-bottom: 20px;
    font-size: 30px;
}

.contact-box p {
    margin: 10px 0;
    font-size: 18px;
}

@media (max-width: 768px) {
    .hostel-list,
    .facilities,
    .gallery {
        grid-template-columns: 1fr;
    }
    .hostel-title {
        font-size: 30px;
    }
    .hostel-content {
        padding: 20px;
    }
    .hostel-banner img {
        height: 250px;
    }
}
</style>

<div class="hostel-page">

    <!-- ===== BANNER ===== -->
    <section class="hostel-banner" data-aos="fade-down" data-aos-duration="900">
        <img src="../../images/hostel1.png" alt="Hostel Banner">
    </section>

    <!-- ===== HOSTEL LIST ===== -->
    <section class="hostel-list">
        <div class="list-card" data-aos="flip-left" data-aos-duration="700">
            <h2>Boys Hostel - I</h2>
            <p>Comfortable accommodation with modern facilities.</p>
        </div>
        <div class="list-card" data-aos="flip-up" data-aos-duration="700" data-aos-delay="100">
            <h2>Boys Hostel - II</h2>
            <p>Premium accommodation with attached bathrooms.</p>
        </div>
        <div class="list-card" data-aos="flip-right" data-aos-duration="700" data-aos-delay="200">
            <h2>Girls Hostel</h2>
            <p>Safe and secure residential facilities for girls.</p>
        </div>
    </section>

    <!-- ===== BOYS HOSTEL I ===== -->
    <section class="hostel-section boys1" data-aos="fade-right" data-aos-duration="800">
        <div class="hostel-title">Boys Hostel - I</div>
        <div class="hostel-content">
            <div class="step-box">
                <h3>About Hostel</h3>
                <p>
                    Boys Hostel I provides safe and comfortable accommodation
                    within the campus. The hostel promotes discipline,
                    academic excellence and healthy living.
                </p>
            </div>
            <div class="step-box">
                <h3>Facilities</h3>
                <div class="facilities">
                    <div class="facility">24/7 Wi-Fi</div>
                    <div class="facility">Dining Hall</div>
                    <div class="facility">Laundry</div>
                    <div class="facility">Study Hall</div>
                    <div class="facility">Power Backup</div>
                    <div class="facility">Purified Water</div>
                </div>
            </div>
            <div class="step-box">
                <h3>Fee Structure</h3>
                <div class="fee-card">
                    <h2>₹70,000</h2>
                    <p>Per Person / Year</p>
                    <p>3 Students Per Room</p>
                </div>
            </div>
            <div class="step-box">
                <h3>Hostel Photos</h3>
                <div class="gallery">
                    <img src="../../images/1hostel.png" alt="Hostel Photo 1">
                    <img src="../../images/2hostel.png" alt="Hostel Photo 2">
                    <img src="../../images/3hostel.png" alt="Hostel Photo 3">
                </div>
            </div>
            <div class="step-box">
                <h3>Rules & Regulations</h3>
                <ul class="rules">
                    <li>Students should maintain discipline.</li>
                    <li>Ragging is strictly prohibited.</li>
                    <li>Hostel timings must be followed.</li>
                    <li>Visitors are not allowed without permission.</li>
                </ul>
            </div>
            <div class="contact-box">
                <h3>Contact Information</h3>
                <p><strong>Warden:</strong> Mr. Rajesh Kumar</p>
                <p><strong>Phone:</strong> +91-9876543210</p>
                <p><strong>Email:</strong> boyshostel1@ewcm.edu.in</p>
            </div>
        </div>
    </section>

    <!-- ===== BOYS HOSTEL II ===== -->
    <section class="hostel-section boys2" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
        <div class="hostel-title">Boys Hostel - II</div>
        <div class="hostel-content">
            <div class="step-box">
                <h3>About Hostel</h3>
                <p>
                    Boys Hostel II offers premium accommodation with
                    attached bathrooms and advanced facilities.
                </p>
            </div>
            <div class="step-box">
                <h3>Facilities</h3>
                <div class="facilities">
                    <div class="facility">Attached Bathrooms</div>
                    <div class="facility">24/7 Wi-Fi</div>
                    <div class="facility">Dining Hall</div>
                    <div class="facility">Laundry</div>
                    <div class="facility">Power Backup</div>
                    <div class="facility">Study Hall</div>
                </div>
            </div>
            <div class="step-box">
                <h3>Fee Structure</h3>
                <div class="fee-card">
                    <h2>₹80,000</h2>
                    <p>Per Person / Year</p>
                    <p>3 Students Per Room</p>
                    <p>Attached Bathrooms Available</p>
                </div>
            </div>
            <div class="step-box">
                <h3>Hostel Photos</h3>
                <div class="gallery">
                    <img src="../../images/1hostel.png" alt="Hostel Photo 1">
                    <img src="../../images/2hostel.png" alt="Hostel Photo 2">
                    <img src="../../images/3hostel.png" alt="Hostel Photo 3">
                </div>
            </div>
            <div class="step-box">
                <h3>Rules & Regulations</h3>
                <ul class="rules">
                    <li>Maintain cleanliness inside hostel rooms.</li>
                    <li>Respect hostel property.</li>
                    <li>Follow hostel timings.</li>
                    <li>Maintain silence during study hours.</li>
                </ul>
            </div>
            <div class="contact-box">
                <h3>Contact Information</h3>
                <p><strong>Warden:</strong> Mr. Suresh Babu</p>
                <p><strong>Phone:</strong> +91-9876543211</p>
                <p><strong>Email:</strong> boyshostel2@ewcm.edu.in</p>
            </div>
        </div>
    </section>

    <!-- ===== GIRLS HOSTEL ===== -->
    <section class="hostel-section girls" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">
        <div class="hostel-title">Girls Hostel</div>
        <div class="hostel-content">
            <div class="step-box">
                <h3>About Hostel</h3>
                <p>
                    Girls Hostel provides a safe, secure and comfortable
                    environment with round-the-clock security facilities.
                </p>
            </div>
            <div class="step-box">
                <h3>Facilities</h3>
                <div class="facilities">
                    <div class="facility">24/7 Security</div>
                    <div class="facility">Wi-Fi</div>
                    <div class="facility">Dining Hall</div>
                    <div class="facility">Study Hall</div>
                    <div class="facility">Laundry</div>
                    <div class="facility">Medical Support</div>
                </div>
            </div>
            <div class="step-box">
                <h3>Fee Structure</h3>
                <div class="fee-card">
                    <h2>₹70,000</h2>
                    <p>Per Person / Year</p>
                    <p>3 Students Per Room</p>
                </div>
            </div>
            <div class="step-box">
                <h3>Hostel Photos</h3>
                <div class="gallery">
                    <img src="../../images/1hostel.png" alt="Hostel Photo 1">
                    <img src="../../images/2hostel.png" alt="Hostel Photo 2">
                    <img src="../../images/3hostel.png" alt="Hostel Photo 3">
                </div>
            </div>
            <div class="step-box">
                <h3>Rules & Regulations</h3>
                <ul class="rules">
                    <li>Students should maintain discipline.</li>
                    <li>Hostel timings must be followed strictly.</li>
                    <li>Visitors are restricted.</li>
                    <li>Ragging is strictly prohibited.</li>
                </ul>
            </div>
            <div class="contact-box">
                <h3>Contact Information</h3>
                <p><strong>Warden:</strong> Mrs. Priya Sharma</p>
                <p><strong>Phone:</strong> +91-9876543212</p>
                <p><strong>Email:</strong> girlshostel@ewcm.edu.in</p>
            </div>
        </div>
    </section>

</div>

<!-- ===== ENQUIRY FORM (Global) ===== -->
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