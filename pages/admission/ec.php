<?php
include("../../includes/config.php");
include("../../includes/header.php");
include("../../includes/navbar.php");
?>

<?php include("../../includes/enquiry_form.php"); ?>
<link rel="stylesheet" href="../../assets/css/global.css">
<style>
/* ===== EC PAGE - DARK INDIGO + GOLD THEME ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f8f4f0;
    color: #2d3436;
}

/* ===== FIXED BACKGROUND ===== */
.page-wrapper {
    background: url('../../images/admission-bg.jpg') center/cover no-repeat fixed;
    position: relative;
    min-height: 100vh;
}

.page-wrapper::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(26, 26, 46, 0.85);
    z-index: 0;
}

.page-wrapper > * {
    position: relative;
    z-index: 1;
}

/* ===== BANNER ===== */
.page-banner {
    padding: 80px 20px 60px;
    text-align: center;
    color: #fff;
    border-bottom: 4px solid #f5b041;
}

.page-banner h1 {
    font-size: 48px;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 4px;
    text-shadow: 0 4px 20px rgba(0,0,0,0.3);
    margin-bottom: 10px;
}

.page-banner h1::after {
    content: "";
    display: block;
    width: 100px;
    height: 5px;
    background: linear-gradient(90deg, #f5b041, #f1c40f);
    margin: 15px auto 0;
    border-radius: 10px;
}

.page-banner p {
    font-size: 20px;
    color: #dfe6e9;
    font-weight: 300;
    letter-spacing: 1px;
    max-width: 700px;
    margin: 12px auto 0;
}

/* ===== CERTIFICATE TICKER ===== */
.certificate-ticker {
    background: rgba(245, 176, 65, 0.12);
    backdrop-filter: blur(8px);
    border-top: 2px solid rgba(245, 176, 65, 0.25);
    border-bottom: 2px solid rgba(245, 176, 65, 0.25);
    padding: 14px 0;
    overflow: hidden;
    position: relative;
}

.certificate-ticker::before,
.certificate-ticker::after {
    content: "";
    position: absolute;
    top: 0;
    width: 80px;
    height: 100%;
    z-index: 2;
    pointer-events: none;
}

.certificate-ticker::before {
    left: 0;
    background: linear-gradient(90deg, rgba(26,26,46,0.95), transparent);
}

.certificate-ticker::after {
    right: 0;
    background: linear-gradient(270deg, rgba(26,26,46,0.95), transparent);
}

.ticker-track {
    display: flex;
    gap: 50px;
    animation: tickerScroll 20s linear infinite;
    width: max-content;
}

.ticker-item {
    display: flex;
    align-items: center;
    gap: 12px;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    white-space: nowrap;
    padding: 0 10px;
}

.ticker-item .icon {
    font-size: 28px;
}

.ticker-item .label {
    color: #dfe6e9;
}

.ticker-item .highlight {
    color: #f5b041;
}

@keyframes tickerScroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

/* ===== CONTAINER ===== */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 25px 60px;
}

/* ===== SECTION HEADINGS ===== */
.section-heading {
    font-size: 34px;
    font-weight: 800;
    color: #f5b041;
    text-align: center;
    margin-bottom: 12px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.section-heading::after {
    content: "";
    display: block;
    width: 70px;
    height: 4px;
    background: linear-gradient(90deg, #f5b041, #f1c40f);
    margin: 10px auto 0;
    border-radius: 10px;
}

.section-subtitle {
    text-align: center;
    color: #dfe6e9;
    font-size: 17px;
    font-weight: 300;
    margin-bottom: 35px;
}

/* ===== CRITERIA GRID ===== */
.criteria-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 30px;
    margin-bottom: 50px;
}

.criteria-card {
    background: rgba(255,255,255,0.07);
    backdrop-filter: blur(12px);
    border-radius: 20px;
    padding: 30px 25px;
    border-left: 5px solid #f5b041;
    box-shadow: 0 8px 30px rgba(0,0,0,0.15);
    transition: all 0.3s ease;
}

.criteria-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 50px rgba(0,0,0,0.25);
    background: rgba(255,255,255,0.12);
}

.criteria-card .card-icon {
    font-size: 36px;
    display: block;
    margin-bottom: 8px;
}

.criteria-card h3 {
    font-size: 22px;
    font-weight: 700;
    color: #f5b041;
    margin-bottom: 4px;
}

.criteria-card .duration {
    color: #f1c40f;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 12px;
    display: inline-block;
    background: rgba(245, 176, 65, 0.15);
    padding: 2px 16px;
    border-radius: 50px;
}

.criteria-card .eligibility {
    color: #dfe6e9;
    font-size: 15px;
    line-height: 1.8;
}

.criteria-card .eligibility strong {
    color: #f5b041;
}

.criteria-card .badge {
    display: inline-block;
    background: #f5b041;
    color: #1a1a2e;
    font-weight: 700;
    font-size: 12px;
    padding: 2px 14px;
    border-radius: 50px;
    margin-top: 8px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* ===== UG/PG DIVIDER ===== */
.divider-section {
    text-align: center;
    padding: 20px 0 30px;
    position: relative;
}

.divider-section .divider-icon {
    font-size: 48px;
    color: #f5b041;
    background: rgba(26,26,46,0.9);
    padding: 10px 25px;
    border-radius: 60px;
    display: inline-block;
    border: 2px solid rgba(245, 176, 65, 0.3);
}

/* ===== RESPONSIVE ===== */
@media screen and (max-width: 992px) {
    .page-banner h1 { font-size: 36px; letter-spacing: 2px; }
    .criteria-grid { grid-template-columns: repeat(2, 1fr); }
}

@media screen and (max-width: 768px) {
    .page-banner {
        padding: 50px 15px 35px;
    }
    .page-banner h1 { font-size: 28px; }
    .page-banner p { font-size: 17px; }
    .section-heading { font-size: 26px; }
    .criteria-grid { grid-template-columns: 1fr; gap: 20px; }
    .criteria-card { padding: 22px 20px; }
    .ticker-item { font-size: 14px; gap: 8px; }
    .ticker-item .icon { font-size: 22px; }
    .certificate-ticker::before,
    .certificate-ticker::after {
        width: 40px;
    }
}

@media screen and (max-width: 480px) {
    .page-banner h1 { font-size: 24px; }
    .page-banner p { font-size: 15px; }
    .section-heading { font-size: 22px; }
    .criteria-card h3 { font-size: 19px; }
    .criteria-card .eligibility { font-size: 14px; }
}
</style>

<!-- ===== PAGE WRAPPER WITH FIXED BACKGROUND ===== -->
<div class="page-wrapper">

    <!-- ===== BANNER ===== -->
    <section class="page-banner">
        <h1>Eligibility Criteria</h1>
        <p>Check your eligibility for undergraduate and postgraduate programmes</p>
    </section>

    <!-- ===== CERTIFICATE TICKER ===== -->
    <div class="certificate-ticker">
        <div class="ticker-track">
            <div class="ticker-item"><span class="icon">🎓</span><span class="label">100% <span class="highlight">Placement</span> Record</span></div>
            <div class="ticker-item"><span class="icon">📜</span><span class="label">NAAC <span class="highlight">Accredited</span></span></div>
            <div class="ticker-item"><span class="icon">🏆</span><span class="label"><span class="highlight">Ranked</span> Among Top Colleges</span></div>
            <div class="ticker-item"><span class="icon">✅</span><span class="label">AICTE <span class="highlight">Approved</span></span></div>
            <div class="ticker-item"><span class="icon">⭐</span><span class="label"><span class="highlight">4.5/5</span> Student Rating</span></div>
            <div class="ticker-item"><span class="icon">🔬</span><span class="label">State-of-the-Art <span class="highlight">Labs</span></span></div>
            <div class="ticker-item"><span class="icon">💼</span><span class="label">Top <span class="highlight">Recruiters</span> from MNCs</span></div>
            <div class="ticker-item"><span class="icon">💻</span><span class="label">Industry <span class="highlight">Aligned</span> Curriculum</span></div>
            <!-- Duplicate items for seamless scroll -->
            <div class="ticker-item"><span class="icon">🎓</span><span class="label">100% <span class="highlight">Placement</span> Record</span></div>
            <div class="ticker-item"><span class="icon">📜</span><span class="label">NAAC <span class="highlight">Accredited</span></span></div>
            <div class="ticker-item"><span class="icon">🏆</span><span class="label"><span class="highlight">Ranked</span> Among Top Colleges</span></div>
            <div class="ticker-item"><span class="icon">✅</span><span class="label">AICTE <span class="highlight">Approved</span></span></div>
            <div class="ticker-item"><span class="icon">⭐</span><span class="label"><span class="highlight">4.5/5</span> Student Rating</span></div>
            <div class="ticker-item"><span class="icon">🔬</span><span class="label">State-of-the-Art <span class="highlight">Labs</span></span></div>
            <div class="ticker-item"><span class="icon">💼</span><span class="label">Top <span class="highlight">Recruiters</span> from MNCs</span></div>
            <div class="ticker-item"><span class="icon">💻</span><span class="label">Industry <span class="highlight">Aligned</span> Curriculum</span></div>
        </div>
    </div>

    <!-- ===== CONTENT ===== -->
    <div class="container">

        <!-- ===== UG SECTION ===== -->
        <h2 class="section-heading">Undergraduate Programmes</h2>
        <p class="section-subtitle">Eligibility criteria for UG courses at East West College of Management</p>

        <div class="criteria-grid">
            <!-- BCA -->
            <div class="criteria-card">
                <span class="card-icon">💻</span>
                <h3>BCA</h3>
                <span class="duration">⏱ 3 Years (6 Semesters)</span>
                <div class="eligibility">
                    <strong>Eligibility:</strong> 10+2 with <strong>Mathematics</strong> or <strong>Computer Science</strong> as one of the subjects.
                </div>
                <span class="badge">UG Programme</span>
            </div>

            <!-- BBA Regular -->
            <div class="criteria-card">
                <span class="card-icon">📊</span>
                <h3>BBA (Regular)</h3>
                <span class="duration">⏱ 3 Years (6 Semesters)</span>
                <div class="eligibility">
                    <strong>Eligibility:</strong> 10+2 in <strong>any stream</strong> (Science, Commerce, or Arts) from a recognized board.
                </div>
                <span class="badge">UG Programme</span>
            </div>

            <!-- BBA Aviation -->
            <div class="criteria-card">
                <span class="card-icon">✈️</span>
                <h3>BBA (Aviation)</h3>
                <span class="duration">⏱ 3 Years (6 Semesters)</span>
                <div class="eligibility">
                    <strong>Eligibility:</strong> 10+2 in <strong>any stream</strong> with a keen interest in the aviation industry.
                </div>
                <span class="badge">UG Programme</span>
            </div>

            <!-- B.Com -->
            <div class="criteria-card">
                <span class="card-icon">📒</span>
                <h3>B.Com</h3>
                <span class="duration">⏱ 3 Years (6 Semesters)</span>
                <div class="eligibility">
                    <strong>Eligibility:</strong> 10+2 in <strong>Commerce</strong> or <strong>any stream</strong> with a strong aptitude for finance and accounting.
                </div>
                <span class="badge">UG Programme</span>
            </div>
        </div>

        <!-- ===== DIVIDER ===== -->
        <div class="divider-section">
            <span class="divider-icon">🎓</span>
        </div>

        <!-- ===== PG SECTION ===== -->
        <h2 class="section-heading">Postgraduate Programmes</h2>
        <p class="section-subtitle">Eligibility criteria for PG courses at East West College of Management</p>

        <div class="criteria-grid">
            <!-- MCA -->
            <div class="criteria-card">
                <span class="card-icon">🖥️</span>
                <h3>MCA</h3>
                <span class="duration">⏱ 2 Years (4 Semesters)</span>
                <div class="eligibility">
                    <strong>Eligibility:</strong> <strong>BCA</strong> or <strong>B.Sc. (Computer Science)</strong> with <strong>Mathematics</strong> at 10+2 level.
                </div>
                <span class="badge">PG Programme</span>
            </div>

            <!-- MBA -->
            <div class="criteria-card">
                <span class="card-icon">📈</span>
                <h3>MBA</h3>
                <span class="duration">⏱ 2 Years (4 Semesters)</span>
                <div class="eligibility">
                    <strong>Eligibility:</strong> <strong>Any Bachelor's Degree</strong> (minimum 3 years) from a recognized university with minimum 50% marks (45% for reserved categories).
                </div>
                <span class="badge">PG Programme</span>
            </div>

            <!-- M.Com -->
            <div class="criteria-card">
                <span class="card-icon">💰</span>
                <h3>M.Com</h3>
                <span class="duration">⏱ 2 Years (4 Semesters)</span>
                <div class="eligibility">
                    <strong>Eligibility:</strong> <strong>B.Com</strong> or <strong>BBA</strong> with a commerce background from a recognized university.
                </div>
                <span class="badge">PG Programme</span>
            </div>
        </div>

        <!-- ===== ADDITIONAL NOTES ===== -->
        <div style="background: rgba(255,255,255,0.06); backdrop-filter: blur(8px); border-radius: 16px; padding: 30px 25px; margin-top: 30px; border-left: 4px solid #f5b041;">
            <p style="color: #dfe6e9; font-size: 15px; line-height: 1.8; margin-bottom: 8px;">
                <strong style="color: #f5b041;">📌 Important Notes:</strong>
            </p>
            <ul style="list-style: none; padding: 0; color: #dfe6e9; font-size: 14px; line-height: 2;">
                <li style="padding-left: 25px; position: relative;">✓ Minimum marks required for all UG courses: <strong style="color: #f5b041;">45%</strong> (General) and <strong style="color: #f5b041;">40%</strong> (Reserved categories).</li>
                <li style="padding-left: 25px; position: relative;">✓ Entrance exam / interview may be conducted for select courses.</li>
                <li style="padding-left: 25px; position: relative;">✓ Final eligibility is subject to Bangalore University norms and guidelines.</li>
                <li style="padding-left: 25px; position: relative;">✓ Contact the admission office for any clarifications regarding eligibility.</li>
            </ul>
        </div>

    </div>

</div>

<?php include("../../includes/footer.php"); ?>