<?php
// Footer file - Complete footer with all page links
?>

<style>
    footer {
        background: linear-gradient(135deg, #073775 0%, #03356a 100%);
        border-top: 4px solid #f5b400;
        padding: 50px 20px 0;
        margin-top: 50px;
        color: #ffffff;
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 40px;
        padding: 0 15px 40px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    .footer-col h3 {
        color: #ffd700;
        font-size: 18px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 18px;
        position: relative;
    }

    .footer-col h3::after {
        content: "";
        display: block;
        width: 40px;
        height: 3px;
        background: #ffd700;
        margin-top: 8px;
        border-radius: 10px;
    }

    .footer-col ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-col ul li {
        margin-bottom: 10px;
    }

    .footer-col ul li a {
        color: #ffffff;
        text-decoration: none;
        font-size: 14px;
        transition: all 0.3s ease;
        display: inline-block;
        border-left: 2px solid transparent;
        padding-left: 0;
    }

    .footer-col ul li a:hover {
        color: #ffd700;
        padding-left: 8px;
        border-left-color: #ffd700;
    }

    .footer-col p {
        color: #ffffff;
        font-size: 14px;
        line-height: 1.8;
        margin-bottom: 12px;
    }

    .footer-col .contact-info {
        margin-top: 10px;
    }

    .footer-col .contact-info span {
        display: block;
        font-size: 14px;
        color: #ffffff;
        margin-bottom: 6px;
    }

    .footer-col .contact-info span strong {
        color: #ffd700;
    }

    .footer-bottom {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px 15px 30px;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
    }

    .footer-bottom p {
        color: #ffffff;
        font-size: 14px;
        font-weight: 300;
        letter-spacing: 0.5px;
        margin: 0;
    }

    .footer-bottom .social-icons {
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;
    }

    .footer-bottom .social-icons a {
        color: #ffffff;
        font-size: 20px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.06);
        text-decoration: none;
    }

    .footer-bottom .social-icons a:hover {
        color: #ffd700;
        background: rgba(255, 215, 0, 0.15);
        transform: translateY(-3px);
    }

    .admin-btn {
        display: inline-block;
        color: #ffd700;
        font-weight: 700;
        font-size: 14px;
        text-decoration: none;
        padding: 6px 20px;
        border: 2px solid #ffd700;
        border-radius: 50px;
        transition: all 0.3s ease;
        background: transparent;
    }

    .admin-btn:hover {
        background: #ffd700;
        color: #1a2332;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);
    }

    @media screen and (max-width: 992px) {
        .footer-container {
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }
    }

    @media screen and (max-width: 768px) {
        .footer-container {
            grid-template-columns: 1fr;
            gap: 25px;
            padding: 0 15px 30px;
        }

        .footer-col h3 {
            font-size: 16px;
        }

        .footer-col ul li a {
            font-size: 13px;
        }

        .footer-bottom p {
            font-size: 12px;
        }
    }
</style>

<footer>
    <div class="footer-container">

        <div class="footer-col">
            <h3>About Us</h3>
            <ul>
                <li><a href="../../pages/aboutu/about.php">About College</a></li>
                <li><a href="../../pages/aboutu/vision.php">Vision & Mission</a></li>
                <li><a href="../../pages/aboutu/founder.php">Founder</a></li>
                <li><a href="../../pages/aboutu/chairman.php">Former Chairman</a></li>
                <li><a href="../../pages/aboutu/chairperson.php">Chairperson</a></li>
                <li><a href="../../pages/aboutu/secretary.php">Secretary & Director</a></li>
                <li><a href="../../pages/aboutu/director.php">Director's Desk</a></li>
                <li><a href="../../pages/aboutu/principal.php">Principal's Desk</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h3>Academics</h3>
            <ul>
                <li><a href="../../pages/academics/ca.php">Computer Application</a></li>
                <li><a href="../../pages/academics/ba.php">Business Administration</a></li>
                <li><a href="../../pages/academics/c.php">Commerce</a></li>
                <li><a href="../../pages/academics/bca.php">BCA</a></li>
                <li><a href="../../pages/academics/bbar.php">BBA (Regular)</a></li>
                <li><a href="../../pages/academics/bbaa.php">BBA (Aviation)</a></li>
                <li><a href="../../pages/academics/bcom.php">B.Com</a></li>
                <li><a href="../../pages/academics/mca.php">MCA</a></li>
                <li><a href="../../pages/academics/mba.php">MBA</a></li>
                <li><a href="../../pages/academics/cs.php">Computer Science Faculty</a></li>
                <li><a href="../../pages/academics/bd.php">Business Faculty</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h3>Admission</h3>
            <ul>
                <li><a href="../../pages/admission/of.php">Online Form</a></li>
                <li><a href="../../pages/admission/ec.php">Eligibility Criteria</a></li>
                <li><a href="../../pages/admission/fs.php">Fee Structure</a></li>
                <li><a href="../../pages/admission/cao.php">Contact Admission Office</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h3>Facilities</h3>
            <ul>
                <li><a href="../../pages/facilities/lic.php">Library & Information Center</a></li>
                <li><a href="../../pages/facilities/sa.php">Sports & Athletics</a></li>
                <li><a href="../../pages/facilities/hostel.php">Hostel</a></li>
                <li><a href="../../pages/facilities/elc.php">E-learning Center</a></li>
                <li><a href="../../pages/facilities/gallery.php">Gallery</a></li>
                <li><a href="../../pages/facilities/scholarship.php">Scholarship</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h3>Placements</h3>
            <ul>
                <li><a href="../../pages/placements/overview.php">Overview</a></li>
                <li><a href="../../pages/placements/recruite.php">Top Recruiters</a></li>
                <li><a href="../../pages/placements/cell.php">Placement Cell</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h3>Contact</h3>
            <ul>
                <li><a href="../../pages/contact/cu.php">Contact Us</a></li>
            </ul>

            <div class="contact-info">
                <span><strong>📍 Address:</strong> East West College Main Rd, BEL Layout, Phase 2, Bengaluru - 560091</span>
                <span><strong>📞 Phone:</strong> +91-9876543210</span>
                <span><strong>✉️ Email:</strong> info@ewcm.edu.in</span>
            </div>
        </div>

    </div>

    <div class="footer-bottom">

        <div class="social-icons">
            <a href="#" aria-label="Facebook">📘</a>
            <a href="#" aria-label="Twitter">🐦</a>
            <a href="#" aria-label="Instagram">📸</a>
            <a href="#" aria-label="YouTube">▶️</a>
            <a href="#" aria-label="LinkedIn">🔗</a>
        </div>

        <p>© 2026 East West College of Management. All Rights Reserved.</p>

        <a href="../../admin/login.php" class="admin-btn">🔐 Admin Login</a>

    </div>
</footer>