<?php
if (isset($_GET['enquiry']) && $_GET['enquiry'] === 'success') {
    $msg = "✅ Your enquiry has been submitted! Our admission team will contact you soon.";
    echo '<div id="enquirySuccessMsg" style="position:fixed; top:20px; left:50%; transform:translateX(-50%); background:#fff; border:4px solid #e74c3c; color:#e74c3c; padding:20px 40px; border-radius:12px; z-index:99999; box-shadow:0 8px 30px rgba(0,0,0,0.2); font-weight:700; font-size:20px; text-align:center; max-width:90%;">' . $msg . '</div>';
    echo '<script>
        setTimeout(function() {
            var el = document.getElementById("enquirySuccessMsg");
            if (el) el.style.display = "none";
        }, 6000);
    </script>';
}
?>

<div id="enquiryFloatingBtn" class="enquiry-float-btn" onclick="openEnquiryForm()">
    <span>📩 Enquiry</span>
</div>

<div id="enquiryModal" class="enquiry-modal-overlay" style="display:none;">
    <div class="enquiry-modal-content">
        <div class="enquiry-modal-header">
            <h2>Quick Enquiry</h2>
            <span class="enquiry-close-btn" onclick="closeEnquiryForm()">&times;</span>
        </div>
        <form id="enquiryForm" action="/EWCM%20WEB/submit_enquiry.php" method="POST" onsubmit="return validateEnquiryForm()">
            <div class="enquiry-form-group">
                <label>Your Name *</label>
                <input type="text" name="name" id="enq_name" placeholder="Enter your full name" required>
            </div>
            <div class="enquiry-form-group">
                <label>Email Address *</label>
                <input type="email" name="email" id="enq_email" placeholder="Enter your email" required>
            </div>
            <div class="enquiry-form-group">
                <label>Phone Number *</label>
                <input type="tel" name="phone" id="enq_phone" placeholder="Enter your phone number" required>
            </div>
            <div class="enquiry-form-group">
                <label>Course Interested In *</label>
                <input type="text" name="course" id="enq_course" placeholder="e.g., BCA, MBA" required>
            </div>
            <div class="enquiry-form-group">
                <label>Message (optional)</label>
                <textarea name="message" id="enq_message" rows="4" placeholder="Any specific questions?"></textarea>
            </div>
            <button type="submit" class="enquiry-submit-btn">Submit Enquiry</button>
            <button type="button" class="enquiry-cancel-btn" onclick="closeEnquiryForm()">Cancel</button>
        </form>
        <div id="enquiryResponse" style="display:none; margin-top:15px; padding:12px; border-radius:8px;"></div>
    </div>
</div>

<style>
    .enquiry-float-btn {
        position: fixed;
        right: 20px;
        bottom: 80px;
        background: linear-gradient(135deg, #e84393, #fd79a8);
        color: #fff;
        padding: 14px 22px;
        border-radius: 50px;
        box-shadow: 0 8px 25px rgba(232, 67, 147, 0.4);
        font-weight: 700;
        font-size: 16px;
        cursor: pointer;
        z-index: 999;
        transition: all 0.3s ease;
        border: none;
        letter-spacing: 0.5px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .enquiry-float-btn:hover {
        transform: scale(1.05);
        box-shadow: 0 12px 35px rgba(232, 67, 147, 0.5);
    }
    .enquiry-modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.6);
        backdrop-filter: blur(5px);
        z-index: 10000;
        display: none;
        justify-content: center;
        align-items: center;
        animation: fadeIn 0.3s ease;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.9); }
        to { opacity: 1; transform: scale(1); }
    }
    .enquiry-modal-content {
        background: #fff;
        max-width: 500px;
        width: 90%;
        max-height: 90vh;
        overflow-y: auto;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        padding: 30px 25px;
        position: relative;
        animation: slideUp 0.3s ease;
    }
    @keyframes slideUp {
        from { transform: translateY(30px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    .enquiry-modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 2px solid #e84393;
        padding-bottom: 12px;
        margin-bottom: 20px;
    }
    .enquiry-modal-header h2 {
        margin: 0;
        color: #2d1b69;
        font-weight: 800;
        font-size: 24px;
    }
    .enquiry-close-btn {
        font-size: 32px;
        font-weight: 300;
        cursor: pointer;
        color: #999;
        transition: color 0.3s;
        line-height: 1;
    }
    .enquiry-close-btn:hover {
        color: #e84393;
    }
    .enquiry-form-group {
        margin-bottom: 18px;
    }
    .enquiry-form-group label {
        display: block;
        font-weight: 600;
        color: #2d1b69;
        margin-bottom: 5px;
        font-size: 14px;
    }
    .enquiry-form-group input,
    .enquiry-form-group textarea {
        width: 100%;
        padding: 12px 16px;
        border: 2px solid #e0e4ea;
        border-radius: 10px;
        font-size: 15px;
        transition: border 0.3s;
        font-family: inherit;
        box-sizing: border-box;
    }
    .enquiry-form-group input:focus,
    .enquiry-form-group textarea:focus {
        border-color: #e84393;
        outline: none;
    }
    .enquiry-form-group textarea {
        resize: vertical;
        min-height: 80px;
    }
    .enquiry-submit-btn {
        background: linear-gradient(135deg, #e84393, #fd79a8);
        color: #fff;
        border: none;
        padding: 14px 30px;
        border-radius: 50px;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s;
        width: 100%;
        margin-top: 5px;
        letter-spacing: 0.5px;
    }
    .enquiry-submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(232, 67, 147, 0.3);
    }
    .enquiry-cancel-btn {
        background: #f1f2f6;
        color: #555;
        border: none;
        padding: 12px 20px;
        border-radius: 50px;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        width: 100%;
        margin-top: 10px;
    }
    .enquiry-cancel-btn:hover {
        background: #ddd;
    }
    @media (max-width: 600px) {
        .enquiry-float-btn {
            bottom: 20px;
            right: 15px;
            padding: 12px 18px;
            font-size: 14px;
        }
        .enquiry-modal-content {
            padding: 20px;
            max-width: 95%;
        }
    }
</style>

<script>
    function openEnquiryForm() {
        document.getElementById('enquiryModal').style.display = 'flex';
        document.getElementById('enquiryResponse').style.display = 'none';
        document.getElementById('enquiryForm').style.display = 'block';
    }
    function closeEnquiryForm() {
        document.getElementById('enquiryModal').style.display = 'none';
    }
    function validateEnquiryForm() {
        var name = document.getElementById('enq_name').value.trim();
        var email = document.getElementById('enq_email').value.trim();
        var phone = document.getElementById('enq_phone').value.trim();
        var course = document.getElementById('enq_course').value.trim();
        if (!name || !email || !phone || !course) {
            alert('Please fill in all required fields.');
            return false;
        }
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert('Please enter a valid email address.');
            return false;
        }
        return true;
    }
</script>