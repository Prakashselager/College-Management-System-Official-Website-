<?php
include("../../includes/config.php");
include("../../includes/header.php");
include("../../includes/navbar.php");

$query = "SELECT * FROM faculty WHERE department='ba' AND status=1 ORDER BY name";
$result = mysqli_query($conn, $query);

if (!$result) {
    $faculty_data = [];
    $error_message = "Database error: " . mysqli_error($conn);
} else {
    $faculty_data = $result;
}
?>

<?php include("../../includes/enquiry_form.php"); ?>
<link rel="stylesheet" href="../../assets/css/global.css">
<style>
    body { font-family: 'Segoe UI', sans-serif; background: #fdf0f0; }
    .page-banner {
        background: linear-gradient(135deg, #6c3483, #e74c3c);
        padding: 60px 20px;
        text-align: center;
        color: #fff;
        border-bottom: 6px solid #e74c3c;
        margin-bottom: 40px;
    }
    .page-banner h1 { font-size: 42px; font-weight: 800; text-transform: uppercase; letter-spacing: 2px; }
    .page-banner h1::after { content: ""; display: block; width: 80px; height: 4px; background: #e74c3c; margin: 15px auto 0; border-radius: 10px; }
    .page-banner p { font-size: 18px; color: #fce4ec; max-width: 700px; margin: 15px auto 0; }
    .container { max-width: 1200px; margin: auto; padding: 0 20px; }
    .faculty-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 30px;
        margin: 40px 0;
    }
    .faculty-card {
        background: #fff;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(0,0,0,0.08);
        transition: transform 0.3s, box-shadow 0.3s;
        border-left: 6px solid #e74c3c;
    }
    .faculty-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 50px rgba(231,76,60,0.15);
    }

    /* ===== FIXED IMAGE STYLES – SHOW FULL PHOTO ===== */
    .faculty-card .image-wrapper {
        width: 100%;
        height: 300px;
        overflow: hidden;
        background: #fdf0f0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .faculty-card .image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: center;
        transition: transform 0.3s ease;
    }

    .faculty-card:hover .image-wrapper img {
        transform: scale(1.05);
    }

    .faculty-card .info {
        padding: 20px 22px;
    }
    .faculty-card .info h3 {
        font-size: 22px;
        font-weight: 700;
        color: #6c3483;
        margin-bottom: 2px;
    }
    .faculty-card .info .designation {
        color: #e74c3c;
        font-weight: 600;
        font-size: 15px;
    }
    .faculty-card .info .qualification {
        color: #555;
        font-size: 14px;
        margin: 6px 0 10px;
    }
    .faculty-card .info .desc {
        color: #444;
        font-size: 14px;
        line-height: 1.7;
        margin-top: 8px;
    }
    .faculty-card .info .contact {
        margin-top: 12px;
        font-size: 13px;
        color: #777;
        border-top: 1px solid #eee;
        padding-top: 12px;
    }
    .faculty-card .info .contact span { display: block; margin: 3px 0; }
    .no-faculty { text-align: center; padding: 50px; color: #777; font-size: 18px; background: #fff; border-radius: 12px; }
    .error-box { background: #fee8e8; color: #e74c3c; padding: 15px; border-radius: 8px; margin: 20px 0; border-left: 4px solid #e74c3c; }

    @media (max-width: 600px) {
        .page-banner h1 { font-size: 28px; }
        .faculty-card .image-wrapper { height: 220px; }
    }
</style>

<section class="page-banner">
    <h1>Business Departments Faculty</h1>
    <p>Meet our experienced and dedicated Business Administration faculty members.</p>
</section>

<div class="container">
    <?php if (isset($error_message)): ?>
        <div class="error-box"><?php echo $error_message; ?><br><strong>Please create the "faculty" table.</strong></div>
    <?php else: ?>
        <div class="faculty-grid">
            <?php if (mysqli_num_rows($faculty_data) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($faculty_data)): ?>
                    <div class="faculty-card">
                        <div class="image-wrapper">
                            <?php 
                                $img_path = $row['profile_image'];
                                if (!empty($img_path) && !preg_match('/^(\.\.\/|http)/', $img_path)) {
                                    $img_path = '../../' . $img_path;
                                }
                            ?>
                            <?php if (!empty($row['profile_image'])): ?>
                                <img src="<?php echo $img_path; ?>" alt="<?php echo $row['name']; ?>">
                            <?php else: ?>
                                <img src="../../images/default-user.png" alt="No Image">
                            <?php endif; ?>
                        </div>
                        <div class="info">
                            <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                            <div class="designation"><?php echo htmlspecialchars($row['designation']); ?></div>
                            <div class="qualification"><?php echo htmlspecialchars($row['qualification']); ?> <?php if (!empty($row['experience'])) echo '| ' . htmlspecialchars($row['experience']); ?></div>
                            <?php if (!empty($row['specialization'])): ?>
                                <div style="font-size:13px; color:#e74c3c; font-weight:600;">Specialization: <?php echo htmlspecialchars($row['specialization']); ?></div>
                            <?php endif; ?>
                            <?php if (!empty($row['description'])): ?>
                                <div class="desc"><?php echo nl2br(htmlspecialchars($row['description'])); ?></div>
                            <?php endif; ?>
                            <div class="contact">
                                <span>📧 <?php echo htmlspecialchars($row['email']); ?></span>
                                <span>📞 <?php echo htmlspecialchars($row['phone']); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="no-faculty">No faculty members added yet for Business Administration.</div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>

<?php include("../../includes/footer.php"); ?>