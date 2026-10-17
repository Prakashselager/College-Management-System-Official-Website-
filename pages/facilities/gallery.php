<?php
include("../../includes/header.php");
include("../../includes/navbar.php");
?>

<!-- ===== AOS ANIMATION LIBRARY ===== -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<?php include("../../includes/enquiry_form.php"); ?>
<link rel="stylesheet" href="../../assets/css/global.css">
<style>

/*==================================
GALLERY PAGE
==================================*/

body{
    background:#f4f7fb;
    font-family:Arial, Helvetica, sans-serif;
}

.gallery-page{
    width:90%;
    max-width:1400px;
    margin:50px auto;
}

/*==================================
SECTION
==================================*/

.gallery-section{
    background:#fff;
    margin-bottom:60px;
    padding:35px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
    border-top:6px solid #003366;
}

.gallery-section h2{
    text-align:center;
    font-size:38px;
    color:#003366;
    margin-bottom:35px;
    text-transform:uppercase;
    letter-spacing:2px;
    position:relative;
}

.gallery-section h2::after{
    content:"";
    width:120px;
    height:4px;
    background:#ffd700;
    display:block;
    margin:10px auto;
    border-radius:20px;
}

/* Different colors */

.student-gallery{
    border-top:6px solid #003366;
}

.faculty-gallery{
    border-top:6px solid #d35400;
}

.campus-gallery{
    border-top:6px solid #198754;
}

.video-gallery{
    border-top:6px solid #6f42c1;
}

/*==================================
PHOTO GRID
==================================*/

.photo-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:30px;
}

.photo-grid img{

    width:100%;
    height:270px;

    object-fit:cover;

    border-radius:18px;

    cursor:pointer;

    transition:0.45s;

    box-shadow:0 8px 20px rgba(0,0,0,.18);

    position:relative;

}

/* Hover Effect */

.photo-grid img:hover{

    transform:scale(1.50);

    z-index:100;

    box-shadow:0 25px 45px rgba(0,0,0,.45);

}

/*==================================
VIDEO GRID
==================================*/

.video-grid{

    display:grid;

    grid-template-columns:repeat(3,1fr);

    gap:30px;

}

.video-grid video{

    width:100%;

    height:270px;

    border-radius:18px;

    box-shadow:0 8px 20px rgba(0,0,0,.18);

    transition:.4s;

}

.video-grid video:hover{

    transform:translateY(-8px);

    box-shadow:0 20px 40px rgba(0,0,0,.30);

}

/*==================================
RESPONSIVE
==================================*/

@media(max-width:992px){

.photo-grid,
.video-grid{

    grid-template-columns:repeat(2,1fr);

}

}

@media(max-width:768px){

.gallery-page{

    width:95%;

}

.gallery-section{

    padding:20px;

}

.gallery-section h2{

    font-size:30px;

}

.photo-grid,
.video-grid{

    grid-template-columns:1fr;

}

.photo-grid img,
.video-grid video{

    height:240px;

}

.photo-grid img:hover{

    transform:scale(1.08);

}

}

</style>

<div class="gallery-page">

    <section class="gallery-section student-gallery" data-aos="fade-right" data-aos-duration="800">
        <h2>Student Photos</h2>
        <div class="photo-grid">
            <img src="../../images/gradu/2.JPG" alt="Student photo 1">
            <img src="../../images/gradu/1.JPG" alt="Student photo 2">
            <img src="../../images/gradu/fac5.jpg" alt="Student photo 3">
            <img src="../../images/students/4.png" alt="Student photo 4">
            <img src="../../images/students/5.png" alt="Student photo 5">
            <img src="../../images/students/6.png" alt="Student photo 6">
            <img src="../../images/students/7.png" alt="Student photo 7">
            <img src="../../images/students/2.png" alt="Student photo 8">
            <img src="../../images/students/9.png" alt="Student photo 9">
        </div>
    </section>

    <section class="gallery-section faculty-gallery" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
        <h2>Faculty Photos</h2>
        <div class="photo-grid">
            <img src="../../images/gradu/fac4a.JPG" alt="Faculty photo 1">
            <img src="../../images/faculty/2.png" alt="Faculty photo 2">
            <img src="../../images/faculty/3.png" alt="Faculty photo 3">
            <img src="../../images/faculty/4.png" alt="Faculty photo 4">
            <img src="../../images/gradu/fac2.JPG" alt="Faculty photo 5">
            <img src="../../images/gradu/fac3.JPG" alt="Faculty photo 6">
            <img src="../../images/gradu/fac1.JPG" alt="Faculty photo 7">
            <img src="../../images/faculty/8.png" alt="Faculty photo 8">
            <img src="../../images/faculty/9.png" alt="Faculty photo 9">
        </div>
    </section>

    <section class="gallery-section campus-gallery" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">
        <h2>Campus Photos</h2>
        <div class="photo-grid">
            <img src="../../images/facilities/1.png" alt="Campus photo 1">
            <img src="../../images/facilities/2.png" alt="Campus photo 2">
            <img src="../../images/facilities/3.png" alt="Campus photo 3">
            <img src="../../images/facilities/4.png" alt="Campus photo 4">
            <img src="../../images/facilities/5.png" alt="Campus photo 5">
            <img src="../../images/facilities/6.png" alt="Campus photo 6">
            <img src="../../images/facilities/1.png" alt="Campus photo 7">
            <img src="../../images/facilities/1.png" alt="Campus photo 8">
            <img src="../../images/facilities/1.png" alt="Campus photo 9">
        </div>
    </section>

    <section class="gallery-section video-gallery" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
        <h2>College Videos</h2>
        <div class="video-grid">
            <video controls>
                <source src="../../videos/farewell.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <video controls>
                <source src="../../videos/campus.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <video controls>
                <source src="../../videos/EWCM.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
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