<?php
include("../../includes/config.php");
include("../../includes/header.php");
include("../../includes/navbar.php");
?>

<link rel="stylesheet" href="../../assets/css/global.css">
<style>
.placement-page{
    width:90%;
    margin:30px auto;
}

.placement-page section{
    width:100%;
    margin:40px auto;
}

.place{
    width:100%;
}

.place img{
    width:100%;
    height:500px;
    object-fit:cover;
    border-radius:20px;
    box-shadow:0 5px 20px rgba(0,0,0,0.15);
    transition:0.4s;
}

.place img:hover{
    transform:scale(1.02);
}

.placement-director{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:30px;
}

.plce-video{
    flex:1;
}

.plce-video video{
    width:100%;
    border-radius:20px;
    box-shadow:0 5px 20px rgba(0,0,0,0.15);
}

.dir-mess{
    flex:1;
    background:linear-gradient(135deg,#003366,#0059b3);
    color:white;
    padding:35px;
    border-radius:20px;
    box-shadow:0 5px 20px rgba(0,0,0,0.15);
}

.show-mess{
    color:#ffd700;
    text-align:center;
    margin-bottom:20px;
    font-size:32px;
}

.dir-mess p{
    line-height:1.8;
    text-align:justify;
}

.topic{
    background:#fff8e7;
    padding:35px;
    border-radius:20px;
    box-shadow:0 5px 20px rgba(0,0,0,0.1);
}

.topic-1{
    text-align:center;
    color:#ff6600;
    font-size:40px;
    margin-bottom:20px;
}

.topic-2{
    text-align:justify;
    line-height:1.9;
}

.fly-card{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:25px;
    margin-top:35px;
}

.inner-card-1,
.inner-card-2,
.inner-card-3,
.inner-card-4{
    color:white;
    border-radius:20px;
    padding:25px;
    min-height:260px;
    box-shadow:0 5px 20px rgba(0,0,0,0.15);
    transition:0.4s;
}

.inner-card-1{
    background:linear-gradient(135deg,#ff512f,#dd2476);
}

.inner-card-2{
    background:linear-gradient(135deg,#396afc,#2948ff);
}

.inner-card-3{
    background:linear-gradient(135deg,#00b09b,#96c93d);
}

.inner-card-4{
    background:linear-gradient(135deg,#8e2de2,#4a00e0);
}

.inner-card-1:hover,
.inner-card-2:hover,
.inner-card-3:hover,
.inner-card-4:hover{
    transform:translateY(-10px);
}

.head-1,
.head-2,
.head-3,
.head-4{
    text-align:center;
    margin-bottom:15px;
}

.info-1,
.info-2,
.info-3,
.info-4{
    text-align:center;
    line-height:1.8;
}

.vmg-section{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:25px;
}

.vmg-box{
    background:white;
    padding:30px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 5px 20px rgba(0,0,0,0.1);
    transition:0.4s;
}

.vmg-box:hover{
    transform:translateY(-10px);
}

.vision{
    border-top:8px solid #00c853;
}

.mission{
    border-top:8px solid #ff6d00;
}

.goal{
    border-top:8px solid #2962ff;
}

.vmg-box h2{
    color:#003366;
    margin-bottom:15px;
}

.vmg-box p{
    line-height:1.8;
}

.package-section{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:25px;
}

.package-box{
    background:white;
    padding:30px;
    border-radius:20px;
    box-shadow:0 5px 20px rgba(0,0,0,0.1);
    transition:0.4s;
}

.package-box:hover{
    transform:scale(1.03);
}

.package-box:first-child{
    border-left:8px solid #28a745;
}

.package-box:last-child{
    border-left:8px solid #ff9800;
}

.package-box h2{
    text-align:center;
    color:#003366;
    margin-bottom:20px;
}

.package-details{
    background:#f8f9fa;
    padding:20px;
    border-radius:15px;
}

.package-details p{
    padding:12px;
    border-bottom:1px solid #ddd;
}

.package-details p:last-child{
    border-bottom:none;
}

.place-image{
    width:100%;
}

.place-image img{
    width:100%;
    border-radius:20px;
    box-shadow:0 5px 20px rgba(0,0,0,0.15);
    transition:0.4s;
}

.place-image img:hover{
    transform:scale(1.02);
}

@media(max-width:768px){
    .placement-page{
        width:95%;
    }
    .placement-director{
        flex-direction:column;
    }
    .plce-video,
    .dir-mess{
        width:100%;
    }
    .fly-card{
        grid-template-columns:1fr;
    }
    .vmg-section{
        grid-template-columns:1fr;
    }
    .package-section{
        grid-template-columns:1fr;
    }
    .place img{
        height:250px;
    }
    .topic-1{
        font-size:30px;
    }
    .show-mess{
        font-size:26px;
    }
}
</style>

<div class="placement-page">

    <section>
        <div class="place">
            <img src="../../images/placement.png" alt="Placement Banner">
        </div>
    </section>

    <br><br>

    <section class="placement-director">
        <div class="plce-video">
            <video controls>
                <source src="../../videos/EWCM.mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="dir-mess">
            <h2 class="show-mess">Message from the Dean</h2>
            <p>
                Welcome to East West College of Management. Our Placement Cell works continuously to bridge the gap between industry and students. We focus on enhancing employability skills through training programs, internships, mock interviews, aptitude sessions, group discussions and industry interactions. Our objective is to ensure students are industry-ready and achieve successful careers.
            </p>
        </div>
    </section>

    <br><br>

    <section class="main">
        <div class="topic">
            <h2 class="topic-1">Systematic Approaches</h2>
            <p class="topic-2">
                The mission at East West College of Management is to provide able Software Engineers and Business Managers who are equipped with life skills, such as providing solutions to complex problems, re-engineering processes, and adding value to businesses. 
                Research indicates that students who complete their graduation/post-graduation courses at EWCM seek their careers in the corporate world or wish to pursue higher education or join the family business. 
                Four different structured interventions are implemented for all students studying at East West College of Management and they are stated below.
            </p>
        </div>

        <div class="fly-card">
            <div class="inner-card-1">
                <h2 class="head-1">Student Empowerment</h2>
                <p class="info-1">Our priority is to equip students with vital employment skills and foster an entrepreneurial mindset to prepare them for success in dynamic job scenarios.</p>
            </div>
            <div class="inner-card-2">
                <h2 class="head-2">Continuous Learning</h2>
                <p class="info-2">We cultivate an attitude of continuous learning in students. We encourage personal development and organizational growth through self-motivated initiatives.</p>
            </div>
            <div class="inner-card-3">
                <h2 class="head-3">Effective Communication</h2>
                <p class="info-3">Facilitate communication and collaboration among different skilling and upskilling aspects. Foster innovation and efficiency through a collaborative approach in a professional setup.</p>
            </div>
            <div class="inner-card-4">
                <h2 class="head-4">Values and Identity</h2>
                <p class="info-4">Reinforce and promote values and culture that will help students develop their own identity in careers. Foster a sense of belonging and being a team player.</p>
            </div>
        </div>
    </section>

    <br><br>

    <section class="vmg-section">
        <div class="vmg-box vision">
            <h2>VISION</h2>
            <p>Enable Engineering and Management Studies students to launch careers in their dream organizations.</p>
        </div>
        <div class="vmg-box mission">
            <h2>MISSION</h2>
            <p>Provide opportunities for the students, to interact with Corporate Executives. Prepare students on industry required skills from time to time.</p>
        </div>
        <div class="vmg-box goal">
            <h2>GOAL</h2>
            <p>To provide training on life skills, career guidance, and placement opportunities to students studying in the college.</p>
        </div>
    </section>

    <br><br>

    <section class="package-section">
        <div class="package-box">
            <h2>Highest Package</h2>
            <div class="package-details">
                <p>▶ Highest Package for Domestic Placement: Rs. 12.5 LPA</p>
                <p>▶ Highest Package for International Placement: Rs. 15 LPA</p>
            </div>
        </div>
        <div class="package-box">
            <h2>Average Package</h2>
            <div class="package-details">
                <p>▶ Average Package for Domestic Placement: Rs. 3.5 LPA</p>
                <p>▶ Average Package for International Placement: Rs. 5 LPA</p>
            </div>
        </div>
    </section>

    <br><br>

    <section class="placement-partners">
        <div class="place-image">
            <img src="../../images/logo.jpg" alt="Placement Partners">
        </div>
    </section>

    <br><br>

</div>

<!-- ===== ENQUIRY FORM ===== -->
<?php include("../../includes/enquiry_form.php"); ?>

<?php include("../../includes/footer.php"); ?>