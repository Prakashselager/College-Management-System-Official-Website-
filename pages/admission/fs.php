<?php
include("../../includes/config.php");
include("../../includes/header.php");
include("../../includes/navbar.php");
?>

<?php include("../../includes/enquiry_form.php"); ?>
<link rel="stylesheet" href="../../assets/css/global.css">
<style>
/* ===== FS PAGE - DEEP NAVY + CORAL ORANGE THEME ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f4f0ec;
    color: #2d3436;
}

/* ===== FIXED BACKGROUND ===== */
.page-wrapper {
    background: url('../../images/fee-bg.jpg') center/cover no-repeat fixed;
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
    background: rgba(10, 22, 40, 0.88);
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
    border-bottom: 4px solid #ff6b35;
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
    background: linear-gradient(90deg, #ff6b35, #ff8a5c);
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

/* ===== TICKER ===== */
.fee-ticker {
    background: rgba(255, 107, 53, 0.10);
    backdrop-filter: blur(8px);
    border-top: 2px solid rgba(255, 107, 53, 0.25);
    border-bottom: 2px solid rgba(255, 107, 53, 0.25);
    padding: 14px 0;
    overflow: hidden;
    position: relative;
}

.fee-ticker::before,
.fee-ticker::after {
    content: "";
    position: absolute;
    top: 0;
    width: 80px;
    height: 100%;
    z-index: 2;
    pointer-events: none;
}

.fee-ticker::before {
    left: 0;
    background: linear-gradient(90deg, rgba(10,22,40,0.95), transparent);
}

.fee-ticker::after {
    right: 0;
    background: linear-gradient(270deg, rgba(10,22,40,0.95), transparent);
}

.ticker-track {
    display: flex;
    gap: 50px;
    animation: tickerScroll 18s linear infinite;
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

.ticker-item .highlight {
    color: #ff6b35;
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
    color: #ff6b35;
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
    background: linear-gradient(90deg, #ff6b35, #ff8a5c);
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

/* ===== TABLE WRAPPER ===== */
.table-wrapper {
    background: rgba(255,255,255,0.06);
    backdrop-filter: blur(12px);
    border-radius: 20px;
    padding: 20px;
    overflow-x: auto;
    box-shadow: 0 8px 30px rgba(0,0,0,0.15);
    margin-bottom: 50px;
    border: 1px solid rgba(255, 107, 53, 0.15);
}

.table-wrapper table {
    width: 100%;
    border-collapse: collapse;
    min-width: 600px;
}

.table-wrapper thead th {
    background: rgba(255, 107, 53, 0.15);
    color: #ff6b35;
    font-weight: 700;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 16px 18px;
    text-align: left;
    border-bottom: 2px solid rgba(255, 107, 53, 0.3);
}

.table-wrapper tbody td {
    color: #dfe6e9;
    padding: 14px 18px;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    font-size: 15px;
}

.table-wrapper tbody tr:hover {
    background: rgba(255, 107, 53, 0.06);
}

.table-wrapper tbody tr:last-child td {
    border-bottom: none;
}

.table-wrapper .course-name {
    font-weight: 600;
    color: #fff;
}

.table-wrapper .fee-amount {
    font-weight: 600;
    color: #ff8a5c;
}

.table-wrapper .total-amount {
    font-weight: 700;
    color: #ff6b35;
    font-size: 16px;
}

/* ===== DIVIDER ===== */
.divider-section {
    text-align: center;
    padding: 20px 0 30px;
}

.divider-section .divider-icon {
    font-size: 48px;
    color: #ff6b35;
    background: rgba(10,22,40,0.9);
    padding: 10px 25px;
    border-radius: 60px;
    display: inline-block;
    border: 2px solid rgba(255, 107, 53, 0.3);
}

/* ===== NOTE BOX ===== */
.note-box {
    background: rgba(255,255,255,0.06);
    backdrop-filter: blur(8px);
    border-radius: 16px;
    padding: 30px 25px;
    margin-top: 30px;
    border-left: 4px solid #ff6b35;
}

.note-box p {
    color: #dfe6e9;
    font-size: 15px;
    line-height: 1.8;
}

.note-box strong {
    color: #ff6b35;
}

.note-box ul {
    list-style: none;
    padding: 0;
    color: #dfe6e9;
    font-size: 14px;
    line-height: 2;
}

.note-box ul li {
    padding-left: 25px;
    position: relative;
}

/* ===== RESPONSIVE ===== */
@media screen and (max-width: 992px) {
    .page-banner h1 { font-size: 36px; letter-spacing: 2px; }
}

@media screen and (max-width: 768px) {
    .page-banner {
        padding: 50px 15px 35px;
    }
    .page-banner h1 { font-size: 28px; }
    .page-banner p { font-size: 17px; }
    .section-heading { font-size: 26px; }
    .table-wrapper { padding: 12px; }
    .table-wrapper thead th,
    .table-wrapper tbody td {
        padding: 10px 12px;
        font-size: 14px;
    }
    .ticker-item { font-size: 14px; gap: 8px; }
    .ticker-item .icon { font-size: 22px; }
    .fee-ticker::before,
    .fee-ticker::after {
        width: 40px;
    }
}

@media screen and (max-width: 480px) {
    .page-banner h1 { font-size: 24px; }
    .page-banner p { font-size: 15px; }
    .section-heading { font-size: 22px; }
}
</style>

<!-- ===== PAGE WRAPPER WITH FIXED BACKGROUND ===== -->
<div class="page-wrapper">

    <!-- ===== BANNER ===== -->
    <section class="page-banner">
        <h1>Fee Structure</h1>
        <p>Transparent and affordable fee structure for all programmes</p>
    </section>

    <!-- ===== TICKER ===== -->
    <div class="fee-ticker">
        <div class="ticker-track">
            <div class="ticker-item"><span class="icon">💰</span><span class="highlight">No Hidden Charges</span></div>
            <div class="ticker-item"><span class="icon">📋</span><span class="highlight">Flexible Payment</span> Options</div>
            <div class="ticker-item"><span class="icon">🏷️</span><span class="highlight">Scholarships</span> Available</div>
            <div class="ticker-item"><span class="icon">💳</span><span class="highlight">Instalment</span> Facility</div>
            <div class="ticker-item"><span class="icon">📊</span><span class="highlight">Affordable</span> Fee Structure</div>
            <div class="ticker-item"><span class="icon">🏆</span><span class="highlight">Merit-based</span> Fee Waivers</div>
            <!-- Duplicate for seamless loop -->
            <div class="ticker-item"><span class="icon">💰</span><span class="highlight">No Hidden Charges</span></div>
            <div class="ticker-item"><span class="icon">📋</span><span class="highlight">Flexible Payment</span> Options</div>
            <div class="ticker-item"><span class="icon">🏷️</span><span class="highlight">Scholarships</span> Available</div>
            <div class="ticker-item"><span class="icon">💳</span><span class="highlight">Instalment</span> Facility</div>
            <div class="ticker-item"><span class="icon">📊</span><span class="highlight">Affordable</span> Fee Structure</div>
            <div class="ticker-item"><span class="icon">🏆</span><span class="highlight">Merit-based</span> Fee Waivers</div>
        </div>
    </div>

    <!-- ===== CONTENT ===== -->
    <div class="container">

        <!-- ===== UG SECTION ===== -->
        <h2 class="section-heading">Undergraduate Programmes</h2>
        <p class="section-subtitle">Year-wise fee breakdown for UG courses</p>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Course</th>
                        <th>1st Year (₹)</th>
                        <th>2nd Year (₹)</th>
                        <th>Total (₹)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="course-name">BCA</td>
                        <td class="fee-amount">50,000</td>
                        <td class="fee-amount">48,000</td>
                        <td class="total-amount">98,000</td>
                    </tr>
                    <tr>
                        <td class="course-name">BBA (Regular)</td>
                        <td class="fee-amount">45,000</td>
                        <td class="fee-amount">43,000</td>
                        <td class="total-amount">88,000</td>
                    </tr>
                    <tr>
                        <td class="course-name">BBA (Aviation)</td>
                        <td class="fee-amount">60,000</td>
                        <td class="fee-amount">58,000</td>
                        <td class="total-amount">1,18,000</td>
                    </tr>
                    <tr>
                        <td class="course-name">B.Com</td>
                        <td class="fee-amount">40,000</td>
                        <td class="fee-amount">38,000</td>
                        <td class="total-amount">78,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- ===== DIVIDER ===== -->
        <div class="divider-section">
            <span class="divider-icon">🎓</span>
        </div>

        <!-- ===== PG SECTION ===== -->
        <h2 class="section-heading">Postgraduate Programmes</h2>
        <p class="section-subtitle">Year-wise fee breakdown for PG courses</p>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Course</th>
                        <th>1st Year (₹)</th>
                        <th>2nd Year (₹)</th>
                        <th>Total (₹)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="course-name">MCA</td>
                        <td class="fee-amount">60,000</td>
                        <td class="fee-amount">58,000</td>
                        <td class="total-amount">1,18,000</td>
                    </tr>
                    <tr>
                        <td class="course-name">MBA</td>
                        <td class="fee-amount">70,000</td>
                        <td class="fee-amount">68,000</td>
                        <td class="total-amount">1,38,000</td>
                    </tr>
                    <tr>
                        <td class="course-name">M.Com</td>
                        <td class="fee-amount">50,000</td>
                        <td class="fee-amount">48,000</td>
                        <td class="total-amount">98,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- ===== ADDITIONAL NOTES ===== -->
        <div class="note-box">
            <p><strong>📌 Important Notes:</strong></p>
            <ul>
                <li>✓ The above fee is subject to change as per college norms.</li>
                <li>✓ Fee includes tuition fee, library, laboratory, and other academic charges.</li>
                <li>✓ Hostel, transport, and mess fees are separate and payable as per actuals.</li>
                <li>✓ Scholarships and fee waivers are available for deserving/meritorious students.</li>
                <li>✓ Instalment payment options are available – contact the admission office for details.</li>
            </ul>
        </div>

    </div>

</div>

<?php include("../../includes/footer.php"); ?>