<?php
include('../includes/config.php');
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: manage_faculty.php');
    exit();
}
$id = intval($_GET['id']);
$query = "SELECT * FROM faculty WHERE id=$id";
$result = mysqli_query($conn, $query);
$faculty = mysqli_fetch_assoc($result);
if (!$faculty) {
    header('Location: manage-faculty.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['f_name']);
    $designation = mysqli_real_escape_string($conn, $_POST['f_designation']);
    $qualification = mysqli_real_escape_string($conn, $_POST['f_qualification']);
    $experience = mysqli_real_escape_string($conn, $_POST['f_experience']);
    $specialization = mysqli_real_escape_string($conn, $_POST['f_specialization']);
    $email = mysqli_real_escape_string($conn, $_POST['f_email']);
    $phone = mysqli_real_escape_string($conn, $_POST['f_phone']);
    $department = mysqli_real_escape_string($conn, $_POST['f_department']);
    $description = mysqli_real_escape_string($conn, $_POST['f_description']);
    $status = isset($_POST['f_status']) ? 1 : 0;
    
    $profile_image = $faculty['profile_image'];
    if (isset($_FILES['f_profile_image']) && $_FILES['f_profile_image']['error'] === UPLOAD_ERR_OK) {
        // Upload directory: root/images/ (from admin folder, it's ../images/)
        $upload_dir = '../images/';
        if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);
        $file_name = time() . '_' . basename($_FILES['f_profile_image']['name']);
        $target_path = $upload_dir . $file_name;
        if (move_uploaded_file($_FILES['f_profile_image']['tmp_name'], $target_path)) {
            // Store path relative to root: images/filename.jpg (no leading '../')
            $profile_image = 'images/' . $file_name;
        }
    }
    
    $update = "UPDATE faculty SET 
        name='$name', designation='$designation', qualification='$qualification',
        experience='$experience', specialization='$specialization', email='$email',
        phone='$phone', profile_image='$profile_image', department='$department',
        description='$description', status=$status WHERE id=$id";
    mysqli_query($conn, $update);
    header('Location: manage-faculty.php?msg=updated');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Faculty</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #f0f2f5; }
        .container { max-width: 700px; margin: 40px auto; background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        h1 { color: #1a2332; border-bottom: 3px solid #4a90d9; padding-bottom: 10px; }
        .form-group { margin-bottom: 18px; }
        .form-group label { display: block; font-weight: 600; margin-bottom: 5px; }
        .form-group input, .form-group textarea, .form-group select {
            width: 100%; padding: 10px 14px; border: 2px solid #e0e4ea; border-radius: 8px; font-size: 15px;
        }
        .form-group input:focus, .form-group textarea:focus, .form-group select:focus { border-color: #4a90d9; outline: none; }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        .submit-btn { background: #4a90d9; color: #fff; border: none; padding: 12px 30px; border-radius: 8px; font-weight: 700; cursor: pointer; font-size: 16px; }
        .submit-btn:hover { background: #2c3e7a; }
        .back { display: inline-block; margin-bottom: 15px; color: #4a90d9; text-decoration: none; font-weight: 600; }
        .back:hover { text-decoration: underline; }
        .current-img { max-width: 120px; border-radius: 8px; border: 2px solid #ddd; margin-top: 5px; }
        @media (max-width: 600px) { .form-row { grid-template-columns: 1fr; } }
    </style>
</head>
<body>
<div class="container">
    <a href="manage-faculty.php" class="back">← Back to Manage Faculty</a>
    <h1>Edit Faculty Member</h1>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group"><label>Full Name *</label><input type="text" name="f_name" value="<?php echo htmlspecialchars($faculty['name']); ?>" required></div>
            <div class="form-group"><label>Designation *</label><input type="text" name="f_designation" value="<?php echo htmlspecialchars($faculty['designation']); ?>" required></div>
        </div>
        <div class="form-row">
            <div class="form-group"><label>Qualification *</label><input type="text" name="f_qualification" value="<?php echo htmlspecialchars($faculty['qualification']); ?>" required></div>
            <div class="form-group"><label>Experience</label><input type="text" name="f_experience" value="<?php echo htmlspecialchars($faculty['experience']); ?>"></div>
        </div>
        <div class="form-row">
            <div class="form-group"><label>Specialization</label><input type="text" name="f_specialization" value="<?php echo htmlspecialchars($faculty['specialization']); ?>"></div>
            <div class="form-group"><label>Email *</label><input type="email" name="f_email" value="<?php echo htmlspecialchars($faculty['email']); ?>" required></div>
        </div>
        <div class="form-row">
            <div class="form-group"><label>Phone *</label><input type="text" name="f_phone" value="<?php echo htmlspecialchars($faculty['phone']); ?>" required></div>
            <div class="form-group"><label>Department *</label>
                <select name="f_department" required>
                    <option value="cs" <?php if($faculty['department']=='cs') echo 'selected'; ?>>Computer Science</option>
                    <option value="ba" <?php if($faculty['department']=='ba') echo 'selected'; ?>>Business Administration</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label>Profile Image</label>
            <input type="file" name="f_profile_image" accept="image/*">
            <?php if (!empty($faculty['profile_image'])): ?>
                <p>Current:</p>
                <!-- Display using root-relative path from admin: we need to go up one level -->
                <img src="../<?php echo $faculty['profile_image']; ?>" class="current-img">
            <?php endif; ?>
        </div>
        <div class="form-group"><label>Description</label><textarea name="f_description" rows="3"><?php echo htmlspecialchars($faculty['description']); ?></textarea></div>
        <div class="form-group">
            <label><input type="checkbox" name="f_status" value="1" <?php if($faculty['status']) echo 'checked'; ?>> Active</label>
        </div>
        <button type="submit" class="submit-btn">Update Faculty</button>
    </form>
</div>
</body>
</html>