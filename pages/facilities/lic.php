<?php
include("../../includes/header.php");
include("../../includes/navbar.php");
?>

<?php include("../../includes/enquiry_form.php"); ?>
<link rel="stylesheet" href="../../assets/css/global.css">
<style>
/* ===== DARK BACKGROUND WITH LIGHT BLUE CARDS ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #2d3436;
}

/* ===== FIXED BACKGROUND (UNCHANGED) ===== */
.library-wrapper {
    background: url('../../images/lib1.jpg') center/cover no-repeat fixed;
    position: relative;
    min-height: 100vh;
}

.library-wrapper::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(8, 30, 40, 0.82);
    z-index: 0;
}

.library-wrapper > * {
    position: relative;
    z-index: 1;
}

/* ===== BANNER ===== */
.library-banner {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    text-align: center;
    padding: 20px;
}

.banner-content h1 {
    font-size: 60px;
    font-weight: 900;
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 6px;
    text-shadow: 0 4px 30px rgba(0,0,0,0.5);
    margin-bottom: 15px;
}

.banner-content h1::after {
    content: "";
    display: block;
    width: 100px;
    height: 5px;
    background: #f1c40f;
    margin: 15px auto 0;
    border-radius: 10px;
}

.banner-content p {
    font-size: 24px;
    color: #dfe6e9;
    font-weight: 300;
    letter-spacing: 3px;
}

/* ===== CONTENT SECTIONS ===== */
.library-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 25px 60px;
}

/* ===== LIGHT BLUE CARDS WITH WHITE TEXT ===== */
.glass-card {
    background: rgba(29, 154, 180, 0.15);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border-radius: 28px;
    padding: 35px 32px;
    border: 1px solid rgba(8, 95, 123, 0.2);
    box-shadow: 0 12px 45px rgba(19, 113, 157, 0.25);
    margin-bottom: 35px;
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    perspective: 1000px;
    position: relative;
    overflow: hidden;
}

/* ===== REFLECTIVE GLOSS ===== */
.glass-card::before {
    content: "";
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.06), transparent 70%);
    pointer-events: none;
    transition: all 0.6s ease;
}

.glass-card:hover::before {
    top: -40%;
    left: -40%;
}

/* ===== 3D HOVER ===== */
.glass-card:hover {
    transform: rotateX(1.5deg) rotateY(1.5deg) translateY(-6px);
    box-shadow: 0 20px 60px rgba(0,0,0,0.35), 0 0 30px rgba(173, 216, 230, 0.10);
    border-color: rgba(173, 216, 230, 0.35);
}

/* ===== HEADINGS WITH YELLOW UNDERLINE ===== */
.glass-card h2 {
    font-size: 30px;
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 18px;
    letter-spacing: 0.5px;
    position: relative;
    display: inline-block;
}

.glass-card h2::after {
    content: "";
    display: block;
    width: 60px;
    height: 4px;
    background: #f1c40f;
    margin-top: 10px;
    border-radius: 10px;
}

/* ===== WHITE TEXT ===== */
.glass-card p {
    color: #ffffff;
    font-size: 17px;
    line-height: 2.1;
    font-weight: 300;
}

/* ===== LISTS WITH WHITE TEXT ===== */
.glass-card ul {
    list-style: none;
    padding: 0;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 6px 25px;
}

.glass-card ul li {
    color: #ffffff;
    font-size: 16px;
    padding: 10px 0 10px 36px;
    position: relative;
    line-height: 1.7;
    border-bottom: 1px solid rgba(255,255,255,0.06);
    transition: all 0.3s ease;
}

.glass-card ul li::before {
    content: "✦";
    position: absolute;
    left: 0;
    color: #f1c40f;
    font-size: 18px;
    font-weight: 700;
}

.glass-card ul li:hover {
    padding-left: 48px;
    color: #ffffff;
    border-bottom-color: rgba(241, 196, 15, 0.2);
}

/* ===== LIBRARIAN GRID ===== */
.librarian-grid {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 35px;
    align-items: start;
}

.librarian-grid .lib-photo {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    transition: all 0.4s ease;
}

.librarian-grid .lib-photo::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.10), transparent);
    transition: left 0.6s ease;
    z-index: 1;
}

.librarian-grid .lib-photo:hover::before {
    left: 100%;
}

.librarian-grid .lib-photo img {
    width: 100%;
    max-width: 280px;
    border-radius: 20px;
    border: 4px solid rgba(241, 196, 15, 0.3);
    box-shadow: 0 8px 30px rgba(0,0,0,0.25);
    display: block;
    margin: 0 auto;
    transition: transform 0.5s ease, border-color 0.4s ease;
}

.librarian-grid .lib-photo:hover img {
    transform: scale(1.03);
    border-color: #f1c40f;
}

.librarian-grid .lib-info p {
    color: #ffffff;
    font-size: 16px;
    line-height: 2;
    margin-bottom: 6px;
}

.librarian-grid .lib-info .label {
    color: #f1c40f;
    font-weight: 700;
}

/* ===== CONTACT GRID ===== */
.contact-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.contact-grid .glass-card {
    text-align: center;
    padding: 25px 20px;
    margin-bottom: 0;
    background: rgba(173, 216, 230, 0.12);
}

.contact-grid .glass-card:hover {
    transform: translateY(-8px) scale(1.02);
}

.contact-grid .glass-card h3 {
    color: #f1c40f;
    font-size: 19px;
    font-weight: 700;
    margin-bottom: 8px;
}

.contact-grid .glass-card p {
    color: #ffffff;
    font-size: 15px;
}

.contact-grid .glass-card a {
    color: #f1c40f;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s;
}

.contact-grid .glass-card a:hover {
    color: #ffd700;
}

/* ===== STATISTICS GRID ===== */
.stat-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.stat-grid .glass-card {
    text-align: center;
    padding: 25px 15px;
    margin-bottom: 0;
    border-bottom: 4px solid #f1c40f;
    background: rgba(173, 216, 230, 0.10);
}

.stat-grid .glass-card:hover {
    transform: translateY(-8px) scale(1.04);
    border-bottom-color: #ffd700;
}

.stat-grid .glass-card h3 {
    font-size: 40px;
    font-weight: 900;
    color: #ffffff;
    margin-bottom: 4px;
    transition: all 0.3s ease;
}

.stat-grid .glass-card:hover h3 {
    color: #f1c40f;
    text-shadow: 0 0 30px rgba(241, 196, 15, 0.2);
}

.stat-grid .glass-card p {
    color: #c8d8e0;
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1.5px;
}

/* ===== FACILITIES GRID ===== */
.facility-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.facility-grid .glass-card {
    text-align: center;
    padding: 30px 20px;
    margin-bottom: 0;
    border-bottom: 3px solid rgba(241, 196, 15, 0.2);
    background: rgba(173, 216, 230, 0.10);
}

.facility-grid .glass-card:hover {
    transform: translateY(-10px) scale(1.03);
    border-bottom-color: #f1c40f;
}

.facility-grid .glass-card h3 {
    color: #f1c40f;
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 10px;
}

.facility-grid .glass-card p {
    color: #ffffff;
    font-size: 15px;
    line-height: 1.8;
}

/* ===== JOURNALS GRID ===== */
.journal-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 25px;
}

.journal-grid .glass-card {
    background: rgba(173, 216, 230, 0.10);
}

.journal-grid .glass-card h3 {
    color: #f1c40f;
    font-size: 19px;
    font-weight: 700;
    margin-bottom: 14px;
}

.journal-grid .glass-card ol {
    padding-left: 20px;
    color: #ffffff;
    font-size: 15px;
    line-height: 2.2;
}

.journal-grid .glass-card ol li {
    padding: 4px 0;
    border-bottom: 1px solid rgba(255,255,255,0.04);
}

.journal-grid .glass-card ol li:last-child {
    border-bottom: none;
}

.journal-grid .glass-card a {
    color: #f1c40f;
    text-decoration: none;
    font-weight: 600;
    display: block;
    padding: 6px 0;
    transition: all 0.3s;
}

.journal-grid .glass-card a:hover {
    color: #ffd700;
    padding-left: 10px;
}

/* ===== WORKING HOURS TABLE ===== */
.hours-table .glass-card {
    padding: 0;
    overflow: hidden;
    background: rgba(173, 216, 230, 0.10);
}

.hours-table table {
    width: 100%;
    border-collapse: collapse;
}

.hours-table table th {
    background: rgba(241, 196, 15, 0.12);
    color: #f1c40f;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    padding: 18px 24px;
    text-align: left;
    font-size: 15px;
}

.hours-table table td {
    color: #ffffff;
    padding: 16px 24px;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    font-size: 16px;
}

.hours-table table tr:last-child td {
    border-bottom: none;
}

.hours-table table tr:hover td {
    background: rgba(241, 196, 15, 0.04);
}

/* ===== RESPONSIVE ===== */
@media screen and (max-width: 992px) {
    .banner-content h1 { font-size: 42px; letter-spacing: 4px; }
    .stat-grid { grid-template-columns: repeat(2, 1fr); }
    .contact-grid { grid-template-columns: repeat(2, 1fr); }
    .facility-grid { grid-template-columns: repeat(2, 1fr); }
    .journal-grid { grid-template-columns: 1fr; }
    .librarian-grid { grid-template-columns: 1fr; text-align: center; }
    .librarian-grid .lib-photo img { max-width: 220px; }
    .glass-card ul { grid-template-columns: 1fr; }
}

@media screen and (max-width: 768px) {
    .banner-content h1 { font-size: 32px; letter-spacing: 2px; }
    .banner-content p { font-size: 18px; }
    .glass-card { padding: 25px 20px; }
    .stat-grid { grid-template-columns: 1fr 1fr; }
    .contact-grid { grid-template-columns: 1fr; }
    .facility-grid { grid-template-columns: 1fr; }
    .librarian-grid .lib-photo img { max-width: 180px; }
    .library-content { padding: 20px 15px; }
    .glass-card ul { grid-template-columns: 1fr; }
}

@media screen and (max-width: 480px) {
    .banner-content h1 { font-size: 24px; letter-spacing: 1px; }
    .banner-content p { font-size: 15px; }
    .stat-grid { grid-template-columns: 1fr; }
    .stat-grid .glass-card h3 { font-size: 32px; }
    .glass-card { padding: 18px 14px; }
    .glass-card h2 { font-size: 22px; }
    .hours-table table th,
    .hours-table table td { padding: 10px 14px; font-size: 14px; }
}
</style>

<!-- ===== WRAPPER ===== -->
<div class="library-wrapper">

    <!-- ===== BANNER ===== -->
    <section class="library-banner">
        <div class="banner-content">
            <h1>Central Library</h1>
            <p>Knowledge is the gateway to success.</p>
        </div>
    </section>

    <!-- ===== CONTENT ===== -->
    <div class="library-content">

        <!-- About Library -->
        <div class="glass-card">
            <h2>📖 About Library</h2>
            <p>
                The Library and Information Center at East West College of Management is a valuable academic resource that supports the teaching, learning, and research needs of students and faculty. The library houses a rich collection of textbooks, reference books, journals, magazines, newspapers, and digital resources across various disciplines. It provides a peaceful and well-equipped reading environment to encourage learning and self-study. The library also offers an E-Library facility, enabling users to access e-books, online journals, research databases, and other digital learning materials. Modern computer systems with internet connectivity are available to support academic and research activities. The library is continuously updated with the latest publications to meet the changing educational needs of students. Our objective is to promote reading habits, enhance knowledge, and foster lifelong learning among all members of the institution.
            </p>
        </div>

        <!-- Librarian -->
        <div class="glass-card">
            <h2>👨‍🏫 About Librarian</h2>
            <div class="librarian-grid">
                <div class="lib-photo">
                    <img src="../../images/lib2.png" alt="Librarian Photo">
                </div>
                <div class="lib-info">
                    <p><span class="label">LIBRARIAN</span></p>
                    <p><span class="label">Name:</span> Mr. Somashekar D</p>
                    <p><span class="label">Qualification:</span> B.Lib I.Sc and M.Lib I.Sc</p>
                    <p><span class="label">Experience:</span> 25 years</p>
                    <p style="margin-top:15px;">
                        <span class="label">E-LIBRARY:</span> The library provides an E-Library. Students and faculty can access a wide range of digital resources, including e-books, online journals, research databases, and other electronic learning materials. The E-library is designed to support academic research, self-study, and enhance the overall learning experience. It offers convenient access to information anything, anytime, and anywhere, making it an essential tool for students and faculty members.
                    </p>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="glass-card">
            <h2>📞 Library Contact</h2>
            <div class="contact-grid">
                <div class="glass-card">
                    <h3>📋 Librarian</h3>
                    <p>Mr. Somashekar D</p>
                </div>
                <div class="glass-card">
                    <h3>✉️ Email</h3>
                    <p><a href="mailto:library@ewcm.edu.in">library@ewcm.edu.in</a></p>
                </div>
                <div class="glass-card">
                    <h3>📞 Phone</h3>
                    <p>+91-9741225282</p>
                </div>
                <div class="glass-card">
                    <h3>📍 Location</h3>
                    <p>Library & Info Center, EWCM, Bengaluru</p>
                </div>
            </div>
        </div>

        <!-- Statistics -->
        <div class="glass-card">
            <h2>📊 Library Statistics</h2>
            <div class="stat-grid">
                <div class="glass-card"><h3>2,475</h3><p>TITLES</p></div>
                <div class="glass-card"><h3>13,416</h3><p>VOLUMES</p></div>
                <div class="glass-card"><h3>01</h3><p>INTERNATIONAL JOURNAL</p></div>
                <div class="glass-card"><h3>06</h3><p>NATIONAL JOURNALS</p></div>
                <div class="glass-card"><h3>11</h3><p>E-JOURNALS</p></div>
                <div class="glass-card"><h3>519</h3><p>CD's</p></div>
                <div class="glass-card"><h3>OPEN</h3><p>ACCESS TYPE</p></div>
                <div class="glass-card"><h3>✅</h3><p>LIBRARY SOFTWARE</p></div>
            </div>
        </div>

        <!-- Facilities -->
        <div class="glass-card">
            <h2>🏛️ Library Facilities</h2>
            <div class="facility-grid">
                <div class="glass-card"><h3>📖 Reading Hall</h3><p>Spacious and peaceful reading environment.</p></div>
                <div class="glass-card"><h3>📚 Reference Section</h3><p>Wide collection of dictionaries and encyclopedias.</p></div>
                <div class="glass-card"><h3>💻 Digital Library</h3><p>Computers with internet access for research.</p></div>
                <div class="glass-card"><h3>📕 Book Bank</h3><p>Lending facility for deserving students.</p></div>
                <div class="glass-card"><h3>📰 Magazines</h3><p>Daily newspapers and monthly magazines.</p></div>
                <div class="glass-card"><h3>📶 Wi-Fi</h3><p>High-speed internet throughout the library.</p></div>
            </div>
        </div>

        <!-- Rules -->
        <div class="glass-card">
            <h2>📋 Library Rules & Regulations</h2>
            <ul>
                <li>Sign the Visitors Register before entering.</li>
                <li>Leave bags and files outside the library.</li>
                <li>Mobile phones must be switched off or on silent.</li>
                <li>Inform staff if bringing personal books.</li>
                <li>Non-members need permission to use materials.</li>
                <li>Do not mark, underline, or tear pages.</li>
                <li>Handle all library property with care.</li>
                <li>No materials may be taken outside without permission.</li>
                <li>Silence must be maintained in the library.</li>
                <li>Suggestions and feedback are always welcome.</li>
            </ul>
        </div>

        <!-- Journals -->
        <div class="glass-card">
            <h2>📘 Library Journals</h2>
            <div class="journal-grid">
                <div class="glass-card">
                    <h3>Management E-Journals</h3>
                    <ol>
                        <li>Journal of Commerce and Accounting Research</li>
                        <li>International Journal of Business Analytics and Intelligence</li>
                        <li>Journal of Women Entrepreneurship and Business Management</li>
                        <li>Journal of Integrated Marketing Communications</li>
                        <li>Journal of Accounting</li>
                        <li>Journal of Organisational Behaviour</li>
                    </ol>
                </div>
                <div class="glass-card">
                    <h3>Computer Science E-Journals</h3>
                    <ol>
                        <li>International Journal of Distributed and Cloud Computing</li>
                        <li>International Journal of System and Software Engineering</li>
                        <li>Journal of Network Security & Computer Networks</li>
                        <li>Journal of Data Mining and Management</li>
                        <li>Journal of Web Development and Web Designing</li>
                    </ol>
                </div>
                <div class="glass-card">
                    <h3>Printed Journals</h3>
                    <ol>
                        <li>Harvard Business Review</li>
                        <li>Journal of Commerce and Accounting Research</li>
                        <li>Journal of Data Processing</li>
                        <li>Journal of Computer Science</li>
                        <li>IUP Journal of Computer Science</li>
                        <li>Indian Journal of Advanced Software Engineering</li>
                        <li>SIGART (Artificial Intelligence)</li>
                    </ol>
                </div>
                <div class="glass-card">
                    <h3>🌐 Journal Access Links</h3>
                    <p><a href="http://publishingindia.com/" target="_blank">publishingindia.com</a></p>
                    <p><a href="http://matjournals.co.in/" target="_blank">matjournals.co.in</a></p>
                </div>
            </div>
        </div>

        <!-- Working Hours -->
        <div class="hours-table">
            <div class="glass-card">
                <h2>🕐 Library Working Hours</h2>
                <table>
                    <thead>
                        <tr><th>Days</th><th>Working Hours</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Monday - Friday</td><td>9:00 AM - 6:00 PM</td></tr>
                        <tr><td>Saturday</td><td>9:00 AM - 2:00 PM</td></tr>
                        <tr><td>Sunday</td><td>Holiday</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>

<?php include("../../includes/footer.php"); ?>