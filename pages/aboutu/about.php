<?php include('../../includes/header.php'); ?>
<?php include('../../includes/navbar.php'); ?>

<!-- ===== AOS ANIMATION LIBRARY ===== -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<head>

    <link rel="stylesheet" href="../../assets/css/global.css">
    <style>
/*=========================================
            NEWS BAR
==========================================*/

:root{

    --news-title-width:220px;
    --slider-height:550px;
    --container-width:95%;

    --primary:#0B3C78;
    --secondary:#F4B400;

}

.news{
    width:var(--container-width);
    margin:30px auto;
    display:flex;
    align-items:center;
    background:#ffffff;
    border:2px solid #0b3c78;
    border-radius:8px;
    overflow:hidden;
    box-shadow:0 6px 15px rgba(0,0,0,.10);
    transition:box-shadow 0.3s, transform 0.3s;
}
.news:hover{
    box-shadow:0 12px 30px rgba(0,0,0,0.15);
    transform:translateY(-2px);
}

.news-title{
    width:var(--news-title-width);
    background:#0b3c78;
    border-right:2px solid #f4b400;
    text-align:center;
    padding:18px;
    flex-shrink:0;
}

.news-title p{
    margin:0;
    color:#ffffff;
    font-size:22px;
    font-weight:700;
    text-transform:uppercase;
    letter-spacing:1px;
}

.news-show{
    flex:1;
    overflow:hidden;
    white-space:nowrap;
    background:#f8f9fc;
}

.news-show span{
    display:inline-block;
    padding-left:100%;
    animation:scrollnews 16s linear infinite;
}

.news-show a{
    text-decoration:none;
    color:#0b3c78;
    font-size:18px;
    font-weight:600;
}

.news-show a:hover{
    color:#d62828;
}

@keyframes scrollnews{
    0%{
        transform:translateX(0);
    }
    100%{
        transform:translateX(-100%);
    }
}



/*=========================================
                SLIDER
==========================================*/

.slider{

    width:var(--container-width);

    height:var(--slider-height);

    margin:auto;

    position:relative;

    overflow:hidden;

    border-radius:12px;
    border-width: 10px;
    border-color: red;

    box-shadow:0 12px 25px rgba(0,0,0,.15);

}

/* Change height here */

.slides{

    width:100%;

    height:100%;

    position:relative;

}

.slide{

    position:absolute;

    width:100%;

    height:100%;

    object-fit:cover;

    top:0;

    left:100%;

    transition:left .8s ease-in-out;

}

.slide.active{

    left:0;

    z-index:2;

}

.slide.prev{

    left:-100%;

}



/*=========================================
            BUTTONS
==========================================*/

.prev,
.next{

    position:absolute;

    top:50%;

    transform:translateY(-50%);

    width:55px;

    height:55px;

    border:none;

    cursor:pointer;

    border-radius:50%;

    background:rgba(0,0,0,.45);

    color:#fff;

    font-size:30px;

    transition:.3s;

    z-index:100;

}

.prev{

    left:20px;

}

.next{

    right:20px;

}

.prev:hover,
.next:hover{

    background:#F4B400;

    color:#000;

    transform:translateY(-50%) scale(1.1);
}



/*=========================================
            RESPONSIVE
==========================================*/

@media(max-width:992px){

:root{

--slider-height:420px;

--news-title-width:180px;

}

.news-title p{

font-size:18px;

}

}



@media(max-width:768px){

.news{

flex-direction:column;

}

.news-title{

width:100%;

}

.news-show{

padding:15px 0;

}

:root{

--slider-height:280px;

}

.prev,
.next{

width:45px;

height:45px;

font-size:22px;

}

}

.welcome-section{
width:92%;
max-width:1350px;
margin:60px auto;
background:skyblue;
padding:70px 60px;
border-radius:12px;
box-shadow:0 10px 25px rgba(0,0,0,.12);
transition:box-shadow 0.3s, transform 0.3s;
}
.welcome-section:hover{
    box-shadow:0 18px 40px rgba(0,0,0,0.15);
    transform:translateY(-4px);
}
.welcome-content{
text-align:center;
}
.welcome-content h1{
font-size:42px;
color:#0b3c78;
font-weight:700;
margin-bottom:25px;
text-transform:uppercase;
letter-spacing:1px;
position:relative;
}
.welcome-content h1::after{
content:"";
width:100px;
height:4px;
background:#f4b400;
display:block;
margin:18px auto 0;
border-radius:20px;
}
.welcome-content p{
max-width:950px;
margin:auto;
font-size:18px;
line-height:1.9;
color:black;
text-align:center;
}
/* ==========================================
    WHY EWCM - VERTICAL LAYOUT WITH BLUE BG
==========================================*/
.why-ewcm-vertical {
    background: linear-gradient(135deg, #0a3d62, #1a6a8a);  /* blue gradient */
    padding: 60px 50px;
    border-radius: 20px;
    margin: 40px 0;
    color: #fff;
    box-shadow: 0 8px 30px rgba(10, 61, 98, 0.2);
}

.vertical-intro {
    text-align: center;
    max-width: 900px;
    margin: 0 auto 50px;
}

.vertical-intro h2 {
    font-size: 38px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 15px;
    color: #fff;
}
.vertical-intro h2::after {
    content: "";
    display: block;
    width: 80px;
    height: 4px;
    background: #fdcb6e;
    margin: 15px auto 0;
    border-radius: 10px;
}

.vertical-intro p {
    font-size: 18px;
    line-height: 1.9;
    color: #dfe6e9;
}
.vertical-intro strong {
    color: #fdcb6e;
}

/* ----- Each feature row ----- */
.vertical-feature {
    display: flex;
    align-items: center;
    gap: 25px;
    background: rgba(255,255,255,0.08);
    backdrop-filter: blur(4px);
    padding: 25px 30px;
    border-radius: 16px;
    margin-bottom: 25px;
    border-left: 6px solid #e84393;  /* default, overridden */
    transition: all 0.3s ease;
}

.vertical-feature:hover {
    transform: translateY(-4px) scale(1.01);
    background: rgba(255,255,255,0.14);
    box-shadow: 0 8px 30px rgba(0,0,0,0.15);
}

.feature-icon {
    font-size: 40px;
    flex-shrink: 0;
}

.feature-text h3 {
    font-size: 22px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 6px;
}

.feature-text p {
    font-size: 16px;
    line-height: 1.8;
    color: #dfe6e9;
    margin: 0;
}

/* ----- Different accent colors for each row ----- */
.vertical-feature.color-1 { border-left-color: #e84393; }  /* pink */
.vertical-feature.color-2 { border-left-color: #00b894; }  /* teal */
.vertical-feature.color-3 { border-left-color: #fdcb6e; }  /* gold */
.vertical-feature.color-4 { border-left-color: #6c5ce7; }  /* purple */
.vertical-feature.color-5 { border-left-color: #fd79a8; }  /* soft pink */
.vertical-feature.color-6 { border-left-color: #0984e3; }  /* blue */

/* ----- Responsive ----- */
@media (max-width: 768px) {
    .why-ewcm-vertical {
        padding: 30px 20px;
    }
    .vertical-intro h2 {
        font-size: 28px;
    }
    .vertical-feature {
        flex-direction: column;
        text-align: center;
        padding: 20px;
    }
    .feature-icon {
        font-size: 36px;
    }
    .feature-text h3 {
        font-size: 20px;
    }
}
@media(max-width:992px){
.welcome-section{
padding:45px 30px;
}
.welcome-content h1{
font-size:32px;
}
.why-section{
padding:40px 30px;
}
.why-grid{
grid-template-columns:repeat(2,1fr);
}
}
@media(max-width:768px){
.welcome-section{
padding:35px 20px;
}
.welcome-content h1{
font-size:26px;
}
.welcome-content p{
font-size:16px;
}
.why-section{
padding:30px 20px;
}
.why-section h2{
font-size:30px;
}
.why-grid{
grid-template-columns:1fr;
}
.why-card{
padding:30px 20px;
}
.why-card h3{
font-size:21px;
}
.why-card p{
font-size:16px;
}
}

.admission-section{
width:92%;
max-width:1350px;
margin:70px auto;
padding:70px 50px;
background:linear-gradient(135deg,#0b3c78,#1458a8);
border-radius:12px;
text-align:center;
box-shadow:0 12px 30px rgba(0,0,0,.15);
transition:box-shadow 0.3s, transform 0.3s;
}
.admission-section:hover{
    box-shadow:0 20px 50px rgba(0,0,0,0.25);
    transform:translateY(-4px);
}
.admission-section h2{
font-size:40px;
color:#ffffff;
font-weight:700;
text-transform:uppercase;
margin-bottom:25px;
letter-spacing:1px;
}
.admission-section h2::after{
content:"";
display:block;
width:100px;
height:4px;
background:#f4b400;
margin:18px auto 0;
border-radius:20px;
}
.admission-section p{
max-width:900px;
margin:auto;
font-size:18px;
line-height:1.9;
color:#000;
background:#ffffff;
padding:25px;
border-radius:10px;
box-shadow:0 8px 20px rgba(0,0,0,.12);
transition:transform 0.3s;
}
.admission-section p:hover{
    transform:scale(1.01);
}
.about{
width:92%;
max-width:1350px;
margin:70px auto;
padding:60px;
background:lightcyan;
border-radius:12px;
box-shadow:0 12px 30px rgba(0,0,0,.12);
transition:box-shadow 0.3s, transform 0.3s;
}
.about:hover{
    box-shadow:0 20px 45px rgba(0,0,0,0.15);
    transform:translateY(-4px);
}
.about h2{
text-align:center;
font-size:38px;
color:#0b3c78;
font-weight:700;
margin-bottom:45px;
text-transform:uppercase;
}
.about h2::after{
content:"";
display:block;
width:90px;
height:4px;
background:#f4b400;
margin:15px auto 0;
border-radius:20px;
}
.about-container{
display:flex;
align-items:center;
justify-content:space-between;
gap:50px;
}
.about-text{
flex:1;
}
.about-text p{
font-size:17px;
line-height:2;
color:#000;
text-align:justify;
}
.about-image{
flex:1;
display:flex;
justify-content:center;
align-items:center;
}
.about-image img{
width:100%;
max-width:500px;
border-radius:12px;
box-shadow:0 12px 25px rgba(0,0,0,.18);
transition:transform 0.4s, box-shadow 0.4s;
}
.about-image img:hover{
transform:scale(1.05) rotate(1deg);
box-shadow:0 20px 40px rgba(0,0,0,0.25);
}
@media(max-width:992px){
.admission-section{
padding:50px 30px;
}
.admission-section h2{
font-size:32px;
}
.about{
padding:40px 30px;
}
.about-container{
flex-direction:column-reverse;
}
.about-image img{
max-width:100%;
}
}
@media(max-width:768px){
.admission-section{
padding:40px 20px;
}
.admission-section h2{
font-size:26px;
}
.admission-section p{
font-size:16px;
padding:20px;
}
.about{
padding:30px 20px;
}
.about h2{
font-size:30px;
}
.about-text p{
font-size:16px;
}
}

section h2{
text-align:center;
font-size:38px;
color:#0b3c78;
font-weight:700;
margin-bottom:35px;
text-transform:uppercase;
}
section h2::after{
content:"";
display:block;
width:90px;
height:4px;
background:#f4b400;
margin:15px auto;
border-radius:20px;
}
table{
width:92%;
max-width:1000px;
margin:auto;
border-collapse:collapse;
background:#ffffff;
box-shadow:0 10px 25px rgba(0,0,0,.12);
border-radius:10px;
overflow:hidden;
transition:box-shadow 0.3s;
}
table:hover{
    box-shadow:0 18px 40px rgba(0,0,0,0.15);
}
table th{
background:#0b3c78;
color:#ffffff;
padding:18px;
font-size:18px;
text-align:left;
width:35%;
border:1px solid #d9d9d9;
}
table td{
padding:18px;
font-size:17px;
color:#000;
border:1px solid #d9d9d9;
background:#ffffff;
}
table tr:nth-child(even){
background:#f8fbff;
}
table tr:hover td{
background:#eef5ff;
}

.stats{
    width:92%;
    max-width:1350px;
    margin:80px auto;
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:30px;
}

.stat-box{
    position:relative;
    background:yellow;
    padding:45px 30px;
    border-radius:15px;
    overflow:hidden;
    text-align:left;
    border-left:6px solid #0b3c78;
    box-shadow:0 10px 30px rgba(0,0,0,0.12);
    transition:all 0.4s ease;
    cursor:default;
}

.stat-box:hover{
    transform:translateY(-12px) scale(1.03);
    box-shadow:0 22px 50px rgba(0,0,0,0.20);
    border-left:6px solid #f4b400;
}

.stat-box::before{
    content:"";
    position:absolute;
    top:-40px;
    right:-20px;
    width:130px;
    height:130px;
    background:#eef4fc;
    border-radius:50%;
    transition:transform 0.6s;
}
.stat-box:hover::before{
    transform:scale(1.2);
}

.stat-box h2{
    position:relative;
    font-size:60px;
    color:#0b3c78;
    font-weight:700;
    margin-bottom:12px;
    z-index:1;
}

.stat-box h2::after{
    display:none;
}

.stat-box p{
    position:relative;
    font-size:20px;
    color:#000;
    font-weight:600;
    line-height:1.7;
    z-index:1;
}

@media(max-width:992px){
    .stats{
        grid-template-columns:repeat(2,1fr);
    }
}

@media(max-width:768px){
    .stats{
        grid-template-columns:1fr;
    }

    .stat-box{
        padding:35px 25px;
    }

    .stat-box h2{
        font-size:50px;
    }

    .stat-box p{
        font-size:18px;
    }
}
.section-divider-icon{
width:90px;
height:90px;
margin:70px auto;
background:lightseagreen;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
font-size:40px;
color:#ffffff;
box-shadow:0 10px 25px rgba(0,0,0,.18);
transition:all 0.5s ease;
}
.section-divider-icon:hover{
    transform:rotate(360deg) scale(1.1);
    background:#f4b400;
    color:#0b3c78;
    box-shadow:0 15px 35px rgba(0,0,0,0.2);
}
.video-section{
width:92%;
max-width:1350px;
margin:70px auto;
display:grid;
grid-template-columns:repeat(2,1fr);
gap:35px;
}
.video-box{
background:#ffffff;
padding:25px;
border-radius:12px;
box-shadow:0 10px 25px rgba(0,0,0,.12);
transition:all 0.35s ease;
}
.video-box:hover{
transform:translateY(-10px) scale(1.02);
box-shadow:0 20px 45px rgba(0,0,0,0.18);
}
.video-box h2{
font-size:28px;
color:#0b3c78;
margin-bottom:20px;
text-transform:uppercase;
}
.video-box h2::after{
display:none;
}
.video-box video{
width:100%;
height:350px;
border-radius:10px;
object-fit:cover;
}
.library-contact-section{
    width:92%;
    max-width:1350px;
    margin:80px auto;
    padding:70px 50px;
    background:#f7f9fc;
    border-radius:15px;
    transition:box-shadow 0.3s, transform 0.3s;
}
.library-contact-section:hover{
    box-shadow:0 18px 40px rgba(0,0,0,0.08);
    transform:translateY(-4px);
}

.library-contact-heading{
    text-align:center;
    font-size:40px;
    color:#0b3c78;
    font-weight:700;
    margin-bottom:50px;
    text-transform:uppercase;
}

.library-contact-heading::after{
    content:"";
    width:100px;
    height:4px;
    background:lightskyblue;
    display:block;
    margin:15px auto 0;
    border-radius:20px;
}

.library-contact-container{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:30px;
}

.library-contact-card{
    background:#ffffff;
    padding:40px 30px;
    border-radius:15px;
    text-align:center;
    box-shadow:0 8px 20px rgba(0,0,0,0.10);
    position:relative;
    overflow:hidden;
    transition:all 0.4s ease;
}

.library-contact-card::before{
    content:"";
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:6px;
    background:#0b3c78;
    transition:background 0.4s;
}

.library-contact-card:hover{
    transform:translateY(-12px) scale(1.02);
    box-shadow:0 20px 45px rgba(0,0,0,0.18);
}

.library-contact-card:hover::before{
    background:#f4b400;
}

.library-contact-card h3{
    font-size:26px;
    color:#0b3c78;
    margin-bottom:20px;
}

.library-contact-card p{
    font-size:17px;
    line-height:1.9;
    color:#000;
}

.library-contact-card a{
    color:#0b3c78;
    text-decoration:none;
    font-weight:700;
    transition:color 0.3s;
}

.library-contact-card a:hover{
    color:#f4b400;
    text-decoration:underline;
}

@media(max-width:992px){
    .library-contact-container{
        grid-template-columns:1fr;
    }
}

@media(max-width:768px){
    .library-contact-section{
        padding:40px 20px;
    }

    .library-contact-heading{
        font-size:30px;
    }

    .library-contact-card{
        padding:30px 20px;
    }

    .library-contact-card h3{
        font-size:22px;
    }

    .library-contact-card p{
        font-size:16px;
    }
}
</style>
</head>

<div class="news" data-aos="fade-down" data-aos-duration="800">
    <div class="news-title">
        <p>Latest News</p>
    </div>
    <div class="news-show">
        <span>
            <a href="../admission/of.php">
                Admissions are Now Open for All Undergraduate and Postgraduate Courses for the Current Academic Year.
            </a>
        </span>
    </div>
</div>

<div class="slider" data-aos="fade-up" data-aos-duration="900">
    <div class="slides">
        <img src="../../images/slides/s1.jpg" class="slide active">
        <img src="../../images/slides/4.jpg" class="slide">
        <img src="../../images/slides/s4.jpg" class="slide">
        <img src="../../images/slides/s2.jpg" class="slide">
    </div>
    <button class="prev" onclick="prevSlide()">&#10094;</button>
    <button class="next" onclick="nextSlide()">&#10095;</button>
</div>

<script>
const slides = document.querySelectorAll(".slide");
let current = 0;

function showSlide(index){
    slides.forEach(slide => {
        slide.classList.remove("active");
        slide.classList.remove("prev");
    });
    if(index !== current){
        slides[current].classList.add("prev");
    }
    slides[index].classList.add("active");
    current = index;
}

function nextSlide(){
    let next = current + 1;
    if(next >= slides.length) next = 0;
    showSlide(next);
}

function prevSlide(){
    let previous = current - 1;
    if(previous < 0) previous = slides.length - 1;
    showSlide(previous);
}

showSlide(0);
setInterval(nextSlide, 3000);
</script>

<section class="welcome-section" data-aos="fade-right" data-aos-duration="800">
    <div class="welcome-content">
        <h1>WELCOME TO EAST WEST COLLEGE OF MANAGEMENT</h1>
        <p>
            East West College of Management is one of Bangalore's leading institutions,
            committed to academic excellence, innovation, leadership and holistic
            student development. We provide quality education with experienced faculty,
            modern infrastructure, industry collaborations and excellent placement
            opportunities.
        </p>
    </div>
</section>

<!-- ==========================================
    WHY EAST WEST COLLEGE OF MANAGEMENT
==========================================-->
<!-- ==========================================
    WHY EWCM - VERTICAL LAYOUT WITH BLUE BG
==========================================-->
<section class="why-ewcm-vertical" data-aos="fade-up" data-aos-duration="800">

    <div class="vertical-intro">
        <h2>Why East West College of Management?</h2>
        <p>
            EWGI upholds its unflinching recognition in all respects of academics and is celebrating more than <strong>50 years of academic excellence</strong>, honing the life of every student with a code of conduct.
        </p>
    </div>

    <!-- Each feature in its own row -->
    <div class="vertical-feature color-1" data-aos="fade-right" data-aos-duration="700">
        <div class="feature-icon">📘</div>
        <div class="feature-text">
            <h3>Value Added Programmes</h3>
            <p>
                East West College of Management offers Value Added Programmes associated with Degree Courses. Improving the employability skills of students. Provide students an understanding of the expectations of industry.
            </p>
        </div>
    </div>

    <div class="vertical-feature color-2" data-aos="fade-left" data-aos-duration="700" data-aos-delay="100">
        <div class="feature-icon">📚</div>
        <div class="feature-text">
            <h3>Full Stacked Library</h3>
            <p>
                A home of Information & Resource Center for learning. It is epitomized as a house of knowledge that instantly provides staff and students an extensive multiplicity of resources and services where teaching and learning flourishes.
            </p>
        </div>
    </div>

    <div class="vertical-feature color-3" data-aos="fade-right" data-aos-duration="700" data-aos-delay="150">
        <div class="feature-icon">🏃</div>
        <div class="feature-text">
            <h3>Sports Facilities</h3>
            <p>
                EWCM indoor & outdoor sports facilities includes table tennis, badminton, carrom, chess etc. The vast outdoor field serves perfect for tournaments such as Basketball, Cricket, KhoKho, Kabaddi, Netball and Throw ball.
            </p>
        </div>
    </div>

    <div class="vertical-feature color-4" data-aos="fade-left" data-aos-duration="700" data-aos-delay="200">
        <div class="feature-icon">🎤</div>
        <div class="feature-text">
            <h3>Seminar Hall & Auditorium</h3>
            <p>
                The college is facilitated with a seminar hall and an auditorium for the purpose of organizing events & activities, practice & performances. EWCM encourages and extends support for various Cultural activities.
            </p>
        </div>
    </div>

    <div class="vertical-feature color-5" data-aos="fade-right" data-aos-duration="700" data-aos-delay="250">
        <div class="feature-icon">🏠</div>
        <div class="feature-text">
            <h3>Hostel for Boys & Girls</h3>
            <p>
                EWCM provides in-campus comfortable and well hygienic hostel accommodation separately for boys and girls. We have been trying to make the hostel the next best place to be in after home.
            </p>
        </div>
    </div>

    <div class="vertical-feature color-6" data-aos="fade-left" data-aos-duration="700" data-aos-delay="300">
        <div class="feature-icon">🚌</div>
        <div class="feature-text">
            <h3>Transport Facility</h3>
            <p>
                Safety of our students is our prime concern. Thus, our transport facility is fully equipped to provide the safest & the most convenient transport solution. EWCM provides excellent transportation facilities with a fleet of buses.
            </p>
        </div>
    </div>

</section>

<section class="admission-section" data-aos="fade-up" data-aos-duration="800">
    <h2>Admissions Open for all courses</h2>
    <p>
        Applications are invited for Undergraduate and Postgraduate programmes.
        Join one of Bangalore's leading management institutions and build a successful career.
    </p>
</section>

<section class="about" data-aos="fade-right" data-aos-duration="800" data-aos-delay="100">
    <h2>About College</h2>
    <div class="about-container">
        <div class="about-text">
            <p>
                East West College of Management, located in Bangalore,Karnataka is a Private institution focussed towards providing quality learning in the field of management. The college has a lush green campus of 20 acres which is much spacious in terms of infrastructure and other facilities,also the new campus is proposed near Bangalore International Airport . The college has been accredited by NAAC and NBA and is affiliated to Bangalore University. The college has been approved by AICTE and was established way back in 1968(52 years ago).
                <br>
                The Institute provides various well-established companies that visit the College for recruitment like Google,Amazon,Oracle,Cisco,Samsung etc. The top MNCs of India also visit campus for placement such as TCS,Accenture,Capgemini,SAP lab ,Wipro and many more.
                <br>
                The college provides assistance to students for preparation of placements by organising Group Discussions,Aptitude tests,Mock Tests which helps students to get prepared well for placements.The highest package offered was 27 LPA INR and the median salary ranges in between INR 3-4 LPA .
                <br>
                The college offers numerous UG and PG courses along with PhD in various specializations.The course duration of all courses varies in between 2-3 years.
            </p>
        </div>
        <div class="about-image">
            <img src="../../images/slides/co1.png" alt="College Image">
        </div>
    </div>
</section>

<section data-aos="fade-left" data-aos-duration="800">
    <h2>College Highlights</h2>
    <table>
        <tr><th>Established</th><td>1968</td></tr>
        <tr><th>Type</th><td>Private</td></tr>
        <tr><th>Affiliation</th><td>Bangalore University</td></tr>
        <tr><th>Approved By</th><td>AICTE</td></tr>
        <tr><th>Courses</th><td>BCA, BBA(Regular), BBA(Aviation), B.Com, MBA, MCA</td></tr>
        <tr><th>Application Mode</th><td>Offline</td></tr>
    </table>
</section>

<section class="stats" data-aos="fade-up" data-aos-duration="900">
    <div class="stat-box" data-aos="flip-up" data-aos-duration="700">
        <h2 class="counter" data-target="52">0</h2>
        <p>Years of Excellence</p>
    </div>
    <div class="stat-box" data-aos="flip-up" data-aos-duration="700" data-aos-delay="100">
        <h2 class="counter" data-target="53">0</h2>
        <p>Faculty Members</p>
    </div>
    <div class="stat-box" data-aos="flip-up" data-aos-duration="700" data-aos-delay="200">
        <h2 class="counter" data-target="3000">0</h2>
        <p>Students</p>
    </div>
    <div class="stat-box" data-aos="flip-up" data-aos-duration="700" data-aos-delay="300">
        <h2 class="counter" data-target="20">0</h2>
        <p>Company Hires</p>
    </div>
</section>

<script>
const counters = document.querySelectorAll(".counter");
let started = false;

function startCounter(){
    if(started) return;
    const stats = document.querySelector(".stats");
    const statsTop = stats.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;
    if(statsTop < windowHeight - 100){
        started = true;
        counters.forEach(counter => {
            const target = Number(counter.getAttribute("data-target"));
            let count = 0;
            const increment = target / 100;
            function updateCounter(){
                count += increment;
                if(count < target){
                    counter.textContent = Math.ceil(count) + "+";
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target + "+";
                }
            }
            updateCounter();
        });
    }
}
window.addEventListener("scroll", startCounter);
window.addEventListener("load", startCounter);
</script>

<div class="section-divider-icon" data-aos="zoom-in" data-aos-duration="800">
    <span>🎓</span>
</div>

<section class="video-section" data-aos="fade-up" data-aos-duration="800">
    <div class="video-box" data-aos="fade-right" data-aos-duration="700">
        <h2>College Overview</h2>
        <video controls autoplay muted loop>
            <source src="../../videos/EWCM.mp4" type="video/mp4">
            Your browser does not support video.
        </video>
    </div>
    <div class="video-box" data-aos="fade-left" data-aos-duration="700">
        <h2>Campus Overview</h2>
        <video controls autoplay muted loop>
            <source src="../../videos/campus.mp4" type="video/mp4">
            Your browser does not support video.
        </video>
    </div>
</section>

<section class="library-contact-section" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
    <h2 class="library-contact-heading">Get in Touch</h2>
    <div class="library-contact-container">
        <div class="library-contact-card" data-aos="flip-left" data-aos-duration="600" data-aos-delay="50">
            <h3>📞 Contact</h3>
            <p>+91-1245785422</p>
            <p>+91-5465231544</p>
        </div>
        <div class="library-contact-card" data-aos="flip-up" data-aos-duration="600" data-aos-delay="100">
            <h3>📍 Address</h3>
            <p>
                East West College Main Rd,<br>
                BEL Layout, Phase 2,<br>
                Bedarahalli, Bengaluru,<br>
                Karnataka - 560091
            </p>
        </div>
        <div class="library-contact-card" data-aos="flip-right" data-aos-duration="600" data-aos-delay="150">
            <h3>✉ Email</h3>
            <p>
                <a href="mailto:ewcmbengaluru@gmail.com">
                    ewcmbengaluru@gmail.com
                </a>
            </p>
        </div>
    </div>
</section>

<?php include("../../includes/enquiry_form.php"); ?>
<?php include('../../includes/footer.php'); ?>

<!-- ===== AOS INIT ===== -->
<script>
    AOS.init({
        once: true,
        offset: 120,
        easing: 'ease-out-quad',
    });
</script>