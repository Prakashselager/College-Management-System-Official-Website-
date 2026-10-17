<?php 
// Navbar file - Main navigation for East West College
?>

<style>
.Navbar {
    position: sticky;
    top: 0;
    z-index: 999;
    width: 100%;
    background: #0b3c78;
    box-shadow: 0 4px 15px rgba(0,0,0,0.15);
}


.main-menu {
    width: 90%;
    margin: 0 auto;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
}

.main-menu > li {
    position: relative;
}

.main-menu > li > a {
    display: block;
    padding: 18px 28px;
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 600;
    letter-spacing: .5px;
    text-transform: uppercase;
    transition: .3s;
    position: relative; /* needed for absolute positioning of underline */
}

.main-menu > li:hover > a {
    background: #f5b400;
    color: #000;
}

/* ===== UNDERLINE (hover effect) ===== */
.main-menu > li > a::before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 3px;
    background: #ffffff;
    transition: width .3s ease;
}
.main-menu > li:hover > a::before {
    width: 100%;
}

/* ===== CARET SYMBOL ON THE RIGHT SIDE ===== */
.main-menu > li.drop-menu:not(.no-caret) > a::after {
    content: " ▾";
    color: #ffffff;
    font-size: 14px;
    margin-left: 6px;
    float: right;
}

/* ===== DROPDOWN STYLES ===== */
.drop-list {
    position: absolute;
    top: 100%;
    left: 0;
    width: 270px;
    background: #ffffff;
    list-style: none;
    padding: 0;
    margin: 0;
    display: none;
    border-radius: 0 0 8px 8px;
    box-shadow: 0 12px 25px rgba(0,0,0,.18);
}
.drop-menu:hover .drop-list { display: block; }
.drop-list li { position: relative; }
.drop-list li a { display:block; padding:14px 18px; color:#333; text-decoration:none; font-size:15px; transition:.3s; border-bottom:1px solid #eee; }
.drop-list li:last-child a { border-bottom:none; }
.drop-list li:hover > a { background:#0b3c78; color:#fff; padding-left:25px; }

/* ===== SECOND LEVEL ===== */
.pillars-list,
.departments-list,
.ug-list,
.pg-list,
.faculty-list {
    position: absolute;
    left: 100%;
    top: 0;
    width: 240px;
    background: #fff;
    display: none;
    list-style: none;
    padding:0; margin:0;
    box-shadow: 0 10px 20px rgba(0,0,0,.18);
}
.drop-list li:hover .pillars-list,
.drop-list li:hover .departments-list,
.drop-list li:hover .ug-list,
.drop-list li:hover .pg-list,
.drop-list li:hover .faculty-list { display:block; }
.pillars-list li a,
.departments-list li a,
.ug-list li a,
.pg-list li a,
.faculty-list li a {
    color:#333; padding:14px 18px; display:block; text-decoration:none; border-bottom:1px solid #eee;
}
.pillars-list li:hover a,
.departments-list li:hover a,
.ug-list li:hover a,
.pg-list li:hover a,
.faculty-list li:hover a {
    background:#f5b400; color:#000;
}

/* ===== ARROW FOR SECOND-LEVEL SUBMENUS ===== */
.drop-list li:has(ul) > a::after {
    content: "▶";
    float: right;
    font-size: 12px;
    margin-top: 3px;
}

/* ===== RESPONSIVE ===== */
@media (max-width:992px) {
    .main-menu { flex-wrap:wrap; }
    .main-menu > li > a { padding:15px 18px; font-size:14px; }
    .drop-list { width:230px; }
}
</style>

<nav class="Navbar">
    <ul class="main-menu">

        <!-- ===== ABOUT US ===== -->
        <li class="drop-menu">
            <a href="#">ABOUT US</a>
            <ul class="drop-list">
                <li><a href="../aboutu/about.php">About College</a></li>
                <li><a href="../aboutu/vision.php">Vision & Mission</a></li>
                <li>
                    <a href="#">Institution Pillars</a>
                    <ul class="pillars-list">
                        <li><a href="../aboutu/founder.php">Founder</a></li>
                        <li><a href="../aboutu/chairman.php">Former Chairman</a></li>
                        <li><a href="../aboutu/chairperson.php">Chairperson</a></li>
                        <li><a href="../aboutu/secretary.php">Secretary & Director</a></li>
                    </ul>
                </li>
                <li><a href="../aboutu/director.php">Director's Desk</a></li>
                <li><a href="principal.php">Principal's Desk</a></li>
            </ul>
        </li>

        <!-- ===== ACADEMICS ===== -->
        <li class="drop-menu">
            <a href="#">ACADEMICS</a>
            <ul class="drop-list">
                <li>
                    <a>Departments</a>
                    <ul class="departments-list">
                        <li><a href="../academics/ca.php">Computer Application</a></li>
                        <li><a href="../academics/ba.php">Business Administration</a></li>
                        <li><a href="../academics/c.php">Commerce</a></li>
                    </ul>
                </li>
                <li>
                    <a>Undergraduate Programme</a>
                    <ul class="ug-list">
                        <li><a href="../academics/bca.php">BCA</a></li>
                        <li><a href="../academics/bbar.php">BBA (Regular)</a></li>
                        <li><a href="../academics/bbaa.php">BBA (Aviation)</a></li>
                        <li><a href="../academics/bcom.php">B.Com</a></li>
                    </ul>
                </li>
                <li>
                    <a>Postgraduate Programme</a>
                    <ul class="pg-list">
                        <li><a href="../academics/mca.php">MCA</a></li>
                        <li><a href="../academics/mba.php">MBA</a></li>
                    </ul>
                </li>
                <li>
                    <a>Faculty Profile</a>
                    <ul class="faculty-list">
                        <li><a href="../academics/cs.php">Computer Science</a></li>
                        <li><a href="../academics/bd.php">Commerce & Business Departments</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <!-- ===== ADMISSION ===== -->
        <li class="drop-menu">
            <a href="#">ADMISSION</a>
            <ul class="drop-list">
                <li><a href="../admission/of.php">Online Form</a></li>
                <li><a href="../admission/ec.php">Eligibility Criteria</a></li>
                <li><a href="../admission/fs.php">Fee Structure</a></li>
                <li><a href="../admission/cao.php">Contact Admission Office</a></li>
            </ul>
        </li>

        <!-- ===== FACILITIES ===== -->
        <li class="drop-menu">
            <a href="#">FACILITIES</a>
            <ul class="drop-list">
                <li><a href="../facilities/lic.php">Library & Information Center</a></li>
                <li><a href="../facilities/sa.php">Sports & Athletics</a></li>
                <li><a href="../facilities/hostel.php">Hostel</a></li>
                <li><a href="../facilities/elc.php">E-learning Center</a></li>
                <li><a href="../facilities/gallery.php">Gallery</a></li>
                <li><a href="../facilities/scholarship.php">Scholarship</a></li>
            </ul>
        </li>

        <!-- ===== PLACEMENTS ===== -->
        <li class="drop-menu">
            <a href="#">PLACEMENTS</a>
            <ul class="drop-list">
                <li><a href="../placements/overview.php">Overview</a></li>
                <li><a href="../placements/recruite.php">Top Recruiters</a></li>
                <li><a href="../placements/cell.php">Placement Cell</a></li>
            </ul>
        </li>

        <!-- ===== CONTACT US (no caret) ===== -->
        <li class="drop-menu no-caret">
            <a href="../contact/cu.php">CONTACT US</a>
        </li>

    </ul>
</nav>