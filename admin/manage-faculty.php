<?php
include('../includes/config.php');

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}

$success = '';
$error = '';

// Ensure management table exists (director/principal)
$table_check = mysqli_query($conn, "SHOW TABLES LIKE 'management'");
if (mysqli_num_rows($table_check) == 0) {
    $create_sql = "
    CREATE TABLE `management` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `role` varchar(50) NOT NULL,
        `name` varchar(100) NOT NULL,
        `designation` varchar(100) NOT NULL,
        `qualification` varchar(255) NOT NULL,
        `experience` varchar(100) NOT NULL,
        `specialization` varchar(255) NOT NULL,
        `email` varchar(100) NOT NULL,
        `phone` varchar(20) NOT NULL,
        `profile_image` varchar(255) DEFAULT NULL,
        `description` text NOT NULL,
        `quote` text DEFAULT NULL,
        `message` text DEFAULT NULL,
        `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
        PRIMARY KEY (`id`),
        UNIQUE KEY `role` (`role`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ";
    mysqli_query($conn, $create_sql);
    
    $insert_sql = "
    INSERT INTO `management` (`role`, `name`, `designation`, `qualification`, `experience`, `specialization`, `email`, `phone`, `profile_image`, `description`, `quote`, `message`) VALUES
    ('director', 'Dr. Janardhan Shetty', 'Dean & Director', 'MBA, Ph.D.', '20+ Years', 'Business Administration & Computer Application', 'janardhan@ewcm.edu.in', '+91 9876543210', 'images/dean.png', 'Dr. Janardhan Shetty is a distinguished academician and visionary leader...', '\"Education is not just about acquiring knowledge...\"', 'Dear Students,\n\nWelcome to East West College of Management...'),
    ('principal', 'Dr. Shilpa V', 'Principal', 'MCA, M.Tech., Ph.D.', '18+ Years', 'Computer Science & Management', 'principal@ewcm.edu.in', '+91 9876543210', 'images/principal.png', 'Dr. Shilpa V is an accomplished academician and an inspiring leader...', '\"Education is the most powerful tool...\"', 'Dear Students,\n\nIt is my privilege and honor to welcome you...');
    ";
    mysqli_query($conn, $insert_sql);
}

// ---- Handle Director/Principal Update ----
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['role']) && in_array($_POST['role'], ['director', 'principal'])) {
    $role = $_POST['role'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $designation = mysqli_real_escape_string($conn, $_POST['designation']);
    $qualification = mysqli_real_escape_string($conn, $_POST['qualification']);
    $experience = mysqli_real_escape_string($conn, $_POST['experience']);
    $specialization = mysqli_real_escape_string($conn, $_POST['specialization']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $quote = mysqli_real_escape_string($conn, $_POST['quote']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    
    $profile_image = '';
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = '../images/';
        if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);
        $file_name = time() . '_' . basename($_FILES['profile_image']['name']);
        $target_path = $upload_dir . $file_name;
        if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $target_path)) {
            // Store path relative to root: images/filename.jpg
            $profile_image = 'images/' . $file_name;
        } else {
            $error = 'Failed to upload image.';
        }
    }
    
    if ($profile_image) {
        $query = "UPDATE management SET 
            name='$name', designation='$designation', qualification='$qualification',
            experience='$experience', specialization='$specialization', email='$email',
            phone='$phone', profile_image='$profile_image', description='$description',
            quote='$quote', message='$message' WHERE role='$role'";
    } else {
        $query = "UPDATE management SET 
            name='$name', designation='$designation', qualification='$qualification',
            experience='$experience', specialization='$specialization', email='$email',
            phone='$phone', description='$description', quote='$quote', message='$message' 
            WHERE role='$role'";
    }
    if (mysqli_query($conn, $query)) {
        $success = ucfirst($role) . ' information updated successfully!';
    } else {
        $error = 'Error: ' . mysqli_error($conn);
    }
}

// ---- Handle Faculty Add/Edit/Delete ----
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    mysqli_query($conn, "DELETE FROM faculty WHERE id=$id");
    header('Location: manage_faculty.php?msg=deleted');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['faculty_action'])) {
    $faculty_action = $_POST['faculty_action'];
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
    
    $profile_image = '';
    if (isset($_FILES['f_profile_image']) && $_FILES['f_profile_image']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = '../images/faculty/';
        if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);
        $file_name = time() . '_' . basename($_FILES['f_profile_image']['name']);
        $target_path = $upload_dir . $file_name;
        if (move_uploaded_file($_FILES['f_profile_image']['tmp_name'], $target_path)) {
            $profile_image = 'images/faculty/' . $file_name;
        }
    }
    
    if ($faculty_action === 'add') {
        $query = "INSERT INTO faculty (name, designation, qualification, experience, specialization, email, phone, profile_image, department, description, status) 
                  VALUES ('$name','$designation','$qualification','$experience','$specialization','$email','$phone','$profile_image','$department','$description',$status)";
        if (mysqli_query($conn, $query)) {
            $success = 'Faculty member added successfully!';
        } else {
            $error = 'Error: ' . mysqli_error($conn);
        }
    } elseif ($faculty_action === 'edit' && isset($_POST['f_id'])) {
        $id = intval($_POST['f_id']);
        if ($profile_image) {
            $query = "UPDATE faculty SET 
                name='$name', designation='$designation', qualification='$qualification',
                experience='$experience', specialization='$specialization', email='$email',
                phone='$phone', profile_image='$profile_image', department='$department',
                description='$description', status=$status WHERE id=$id";
        } else {
            $query = "UPDATE faculty SET 
                name='$name', designation='$designation', qualification='$qualification',
                experience='$experience', specialization='$specialization', email='$email',
                phone='$phone', department='$department', description='$description', status=$status 
                WHERE id=$id";
        }
        if (mysqli_query($conn, $query)) {
            $success = 'Faculty member updated successfully!';
        } else {
            $error = 'Error: ' . mysqli_error($conn);
        }
    }
}

// ---- Fetch Data ----
$director_result = mysqli_query($conn, "SELECT * FROM management WHERE role='director'");
$director = mysqli_fetch_assoc($director_result);
if (!$director) $director = ['name'=>'','designation'=>'','qualification'=>'','experience'=>'','specialization'=>'','email'=>'','phone'=>'','profile_image'=>'','description'=>'','quote'=>'','message'=>''];

$principal_result = mysqli_query($conn, "SELECT * FROM management WHERE role='principal'");
$principal = mysqli_fetch_assoc($principal_result);
if (!$principal) $principal = ['name'=>'','designation'=>'','qualification'=>'','experience'=>'','specialization'=>'','email'=>'','phone'=>'','profile_image'=>'','description'=>'','quote'=>'','message'=>''];

$faculty_query = "SELECT * FROM faculty ORDER BY department, name";
$faculty_result = mysqli_query($conn, $faculty_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Faculty - Admin</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f0f2f5; }
        .admin-header {
            background: linear-gradient(135deg, #1a2332, #2c3e7a);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 4px solid #4a90d9;
        }
        .admin-header .logo h1 { color: #fff; font-size: 22px; font-weight: 800; text-transform: uppercase; }
        .admin-header .logo span { color: #4a90d9; }
        .admin-header .user-info { display: flex; align-items: center; gap: 20px; }
        .admin-header .user-info .name { color: #fff; font-weight: 600; }
        .admin-header .user-info .logout-btn {
            background: #e74c3c; color: #fff; padding: 8px 20px; border: none; border-radius: 6px;
            font-weight: 600; cursor: pointer; text-decoration: none; font-size: 14px;
        }
        .admin-header .user-info .logout-btn:hover { background: #c0392b; }
        .container { max-width: 1200px; margin: 30px auto; padding: 0 20px; }
        .page-title { font-size: 28px; color: #1a2332; font-weight: 800; margin-bottom: 5px; }
        .page-subtitle { color: #777; font-size: 16px; margin-bottom: 30px; }
        .card { background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); margin-bottom: 30px; }
        .card h3 { font-size: 20px; color: #1a2332; font-weight: 700; margin-bottom: 20px; border-bottom: 2px solid #4a90d9; padding-bottom: 10px; }
        .form-group { margin-bottom: 18px; }
        .form-group label { display: block; font-size: 14px; font-weight: 600; color: #1a2332; margin-bottom: 6px; }
        .form-group input, .form-group textarea, .form-group select {
            width: 100%; padding: 12px 16px; border: 2px solid #e0e4ea; border-radius: 8px;
            font-size: 15px; transition: border-color 0.3s ease; outline: none; font-family: inherit;
        }
        .form-group input:focus, .form-group textarea:focus, .form-group select:focus { border-color: #4a90d9; }
        .form-group textarea { min-height: 100px; resize: vertical; }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        .submit-btn {
            padding: 14px 35px; background: linear-gradient(135deg, #1a2332, #2c3e7a); color: #fff;
            border: none; border-radius: 8px; font-size: 16px; font-weight: 700; text-transform: uppercase;
            letter-spacing: 1px; cursor: pointer; transition: all 0.3s ease;
        }
        .submit-btn:hover { transform: translateY(-2px); box-shadow: 0 8px 25px rgba(26,35,50,0.3); }
        .success-message { background: #e8f8e8; color: #27ae60; padding: 12px 16px; border-radius: 8px; margin-bottom: 20px; border-left: 4px solid #27ae60; }
        .error-message { background: #fee8e8; color: #e74c3c; padding: 12px 16px; border-radius: 8px; margin-bottom: 20px; border-left: 4px solid #e74c3c; }
        .tabs { display: flex; gap: 10px; margin-bottom: 25px; border-bottom: 2px solid #e0e4ea; flex-wrap: wrap; }
        .tab-btn {
            padding: 12px 25px; background: transparent; border: none; font-size: 16px; font-weight: 600;
            color: #777; cursor: pointer; border-bottom: 3px solid transparent; transition: all 0.3s ease;
        }
        .tab-btn.active { color: #1a2332; border-bottom-color: #4a90d9; }
        .tab-btn:hover { color: #1a2332; }
        .tab-content { display: none; }
        .tab-content.active { display: block; }
        .current-image { max-width: 150px; margin: 10px 0; border-radius: 8px; border: 2px solid #e0e4ea; }
        table { width: 100%; border-collapse: collapse; font-size: 14px; }
        th { background: #1a2332; color: #fff; padding: 10px 12px; text-align: left; }
        td { padding: 10px 12px; border-bottom: 1px solid #eee; vertical-align: middle; }
        tr:hover { background: #f8f9fa; }
        .badge { padding: 3px 12px; border-radius: 20px; font-size: 12px; font-weight: 600; }
        .badge-cs { background: #3498db; color: #fff; }
        .badge-ba { background: #f39c12; color: #fff; }
        .btn-small { padding: 4px 12px; border-radius: 4px; text-decoration: none; font-size: 12px; font-weight: 600; display: inline-block; margin: 2px; }
        .btn-edit { background: #4a90d9; color: #fff; }
        .btn-edit:hover { background: #2c3e7a; }
        .btn-delete { background: #e74c3c; color: #fff; }
        .btn-delete:hover { background: #c0392b; }
        .back-link { display: inline-block; color: #4a90d9; text-decoration: none; font-weight: 600; margin-bottom: 15px; }
        .back-link:hover { text-decoration: underline; }
        @media screen and (max-width: 768px) {
            .form-row { grid-template-columns: 1fr; }
            .admin-header { flex-direction: column; gap: 10px; padding: 12px 15px; }
            .container { padding: 0 15px; }
            table, th, td { font-size: 12px; }
            .tab-btn { font-size: 14px; padding: 10px 15px; }
        }
    </style>
</head>
<body>

<header class="admin-header">
    <div class="logo"><h1>East West <span>College</span></h1></div>
    <div class="user-info">
        <span class="name">Welcome, <?php echo $_SESSION['admin_full_name']; ?></span>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</header>

<div class="container">
    <a href="dashboard.php" class="back-link">← Back to Dashboard</a>
    <h1 class="page-title">Manage Faculty</h1>
    <p class="page-subtitle">Update Director, Principal, and Faculty Members</p>

    <?php if ($success): ?>
        <div class="success-message"><?php echo $success; ?></div>
    <?php endif; ?>
    <?php if ($error): ?>
        <div class="error-message"><?php echo $error; ?></div>
    <?php endif; ?>

    <div class="tabs">
        <button class="tab-btn active" onclick="openTab('director-tab')">Director</button>
        <button class="tab-btn" onclick="openTab('principal-tab')">Principal</button>
        <button class="tab-btn" onclick="openTab('faculty-tab')">Faculty Members</button>
    </div>

    <!-- ========== DIRECTOR TAB ========== -->
    <div id="director-tab" class="tab-content active">
        <div class="card">
            <h3>Edit Director Information</h3>
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="role" value="director">
                <div class="form-row">
                    <div class="form-group"><label>Full Name</label><input type="text" name="name" value="<?php echo htmlspecialchars($director['name']); ?>" required></div>
                    <div class="form-group"><label>Designation</label><input type="text" name="designation" value="<?php echo htmlspecialchars($director['designation']); ?>" required></div>
                </div>
                <div class="form-row">
                    <div class="form-group"><label>Qualification</label><input type="text" name="qualification" value="<?php echo htmlspecialchars($director['qualification']); ?>" required></div>
                    <div class="form-group"><label>Experience</label><input type="text" name="experience" value="<?php echo htmlspecialchars($director['experience']); ?>" required></div>
                </div>
                <div class="form-row">
                    <div class="form-group"><label>Specialization</label><input type="text" name="specialization" value="<?php echo htmlspecialchars($director['specialization']); ?>" required></div>
                    <div class="form-group"><label>Email</label><input type="email" name="email" value="<?php echo htmlspecialchars($director['email']); ?>" required></div>
                </div>
                <div class="form-group"><label>Phone</label><input type="text" name="phone" value="<?php echo htmlspecialchars($director['phone']); ?>" required></div>
                <div class="form-group">
                    <label>Profile Image</label>
                    <input type="file" name="profile_image" accept="image/*">
                    <?php if (!empty($director['profile_image'])): ?>
                        <p>Current:</p>
                        <img src="../<?php echo $director['profile_image']; ?>" class="current-image">
                    <?php endif; ?>
                </div>
                <div class="form-group"><label>Description</label><textarea name="description" rows="5"><?php echo htmlspecialchars($director['description']); ?></textarea></div>
                <div class="form-group"><label>Quote</label><textarea name="quote" rows="3"><?php echo htmlspecialchars($director['quote']); ?></textarea></div>
                <div class="form-group"><label>Message to Students</label><textarea name="message" rows="5"><?php echo htmlspecialchars($director['message']); ?></textarea></div>
                <button type="submit" class="submit-btn">Update Director</button>
            </form>
        </div>
    </div>

    <!-- ========== PRINCIPAL TAB ========== -->
    <div id="principal-tab" class="tab-content">
        <div class="card">
            <h3>Edit Principal Information</h3>
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="role" value="principal">
                <div class="form-row">
                    <div class="form-group"><label>Full Name</label><input type="text" name="name" value="<?php echo htmlspecialchars($principal['name']); ?>" required></div>
                    <div class="form-group"><label>Designation</label><input type="text" name="designation" value="<?php echo htmlspecialchars($principal['designation']); ?>" required></div>
                </div>
                <div class="form-row">
                    <div class="form-group"><label>Qualification</label><input type="text" name="qualification" value="<?php echo htmlspecialchars($principal['qualification']); ?>" required></div>
                    <div class="form-group"><label>Experience</label><input type="text" name="experience" value="<?php echo htmlspecialchars($principal['experience']); ?>" required></div>
                </div>
                <div class="form-row">
                    <div class="form-group"><label>Specialization</label><input type="text" name="specialization" value="<?php echo htmlspecialchars($principal['specialization']); ?>" required></div>
                    <div class="form-group"><label>Email</label><input type="email" name="email" value="<?php echo htmlspecialchars($principal['email']); ?>" required></div>
                </div>
                <div class="form-group"><label>Phone</label><input type="text" name="phone" value="<?php echo htmlspecialchars($principal['phone']); ?>" required></div>
                <div class="form-group">
                    <label>Profile Image</label>
                    <input type="file" name="profile_image" accept="image/*">
                    <?php if (!empty($principal['profile_image'])): ?>
                        <p>Current:</p>
                        <img src="../<?php echo $principal['profile_image']; ?>" class="current-image">
                    <?php endif; ?>
                </div>
                <div class="form-group"><label>Description</label><textarea name="description" rows="5"><?php echo htmlspecialchars($principal['description']); ?></textarea></div>
                <div class="form-group"><label>Quote</label><textarea name="quote" rows="3"><?php echo htmlspecialchars($principal['quote']); ?></textarea></div>
                <div class="form-group"><label>Message to Students</label><textarea name="message" rows="5"><?php echo htmlspecialchars($principal['message']); ?></textarea></div>
                <button type="submit" class="submit-btn">Update Principal</button>
            </form>
        </div>
    </div>

    <!-- ========== FACULTY TAB ========== -->
    <div id="faculty-tab" class="tab-content">
        <div class="card">
            <h3>Add New Faculty Member</h3>
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="faculty_action" value="add">
                <div class="form-row">
                    <div class="form-group"><label>Full Name *</label><input type="text" name="f_name" required></div>
                    <div class="form-group"><label>Designation *</label><input type="text" name="f_designation" required></div>
                </div>
                <div class="form-row">
                    <div class="form-group"><label>Qualification *</label><input type="text" name="f_qualification" required></div>
                    <div class="form-group"><label>Experience</label><input type="text" name="f_experience"></div>
                </div>
                <div class="form-row">
                    <div class="form-group"><label>Specialization</label><input type="text" name="f_specialization"></div>
                    <div class="form-group"><label>Email *</label><input type="email" name="f_email" required></div>
                </div>
                <div class="form-row">
                    <div class="form-group"><label>Phone *</label><input type="text" name="f_phone" required></div>
                    <div class="form-group"><label>Department *</label>
                        <select name="f_department" required>
                            <option value="cs">Computer Science</option>
                            <option value="ba">Commerce & Business Department</option>
                        </select>
                    </div>
                </div>
                <div class="form-group"><label>Profile Image</label><input type="file" name="f_profile_image" accept="image/*"></div>
                <div class="form-group"><label>Description (Bio)</label><textarea name="f_description" rows="3"></textarea></div>
                <div class="form-group">
                    <label><input type="checkbox" name="f_status" value="1" checked> Active</label>
                </div>
                <button type="submit" class="submit-btn">Add Faculty</button>
            </form>
        </div>

        <div class="card">
            <h3>Existing Faculty Members</h3>
            <?php if (mysqli_num_rows($faculty_result) > 0): ?>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Department</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; while ($row = mysqli_fetch_assoc($faculty_result)): ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><strong><?php echo htmlspecialchars($row['name']); ?></strong></td>
                            <td><?php echo htmlspecialchars($row['designation']); ?></td>
                            <td><span class="badge badge-<?php echo $row['department']; ?>"><?php echo $row['department'] == 'cs' ? 'CS' : 'Business'; ?></span></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo $row['status'] ? '✅ Active' : '❌ Inactive'; ?></td>
                            <td>
                                <a href="edit_faculty.php?id=<?php echo $row['id']; ?>" class="btn-small btn-edit">Edit</a>
                                <a href="manage_faculty.php?action=delete&id=<?php echo $row['id']; ?>" class="btn-small btn-delete" onclick="return confirm('Delete this faculty member?')">Delete</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No faculty members added yet.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>
    function openTab(tabId) {
        document.querySelectorAll('.tab-content').forEach(tab => tab.classList.remove('active'));
        document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
        document.getElementById(tabId).classList.add('active');
        document.querySelector(`[onclick="openTab('${tabId}')"]`).classList.add('active');
    }
</script>

</body>
</html>