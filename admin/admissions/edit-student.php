<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: ../login.php");
    exit();
}

$conn = mysqli_connect("localhost", "root", "", "ewcm");
if (!$conn) die("Connection failed: " . mysqli_connect_error());

$id = intval($_GET['id'] ?? 0);
$query = "SELECT * FROM admissions WHERE id=$id";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 0) { header("Location: manage-students.php"); exit(); }
$student = mysqli_fetch_assoc($result);

$admin_name = $_SESSION['admin_full_name'];
$admin_role = $_SESSION['admin_role'];
$success = $error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
    $father_name = mysqli_real_escape_string($conn, $_POST['father_name']);
    $mother_name = mysqli_real_escape_string($conn, $_POST['mother_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $academic_year = $_POST['academic_year'];
    $qualifying_exam = $_POST['qualifying_exam'];
    $board = mysqli_real_escape_string($conn, $_POST['board']);
    $passing_year = $_POST['passing_year'];
    $percentage = $_POST['percentage'];

    $update = "UPDATE admissions SET 
        full_name='$full_name', dob='$dob', gender='$gender', nationality='$nationality',
        father_name='$father_name', mother_name='$mother_name', email='$email', mobile='$mobile',
        address='$address', course='$course', academic_year='$academic_year',
        qualifying_exam='$qualifying_exam', board='$board', passing_year='$passing_year',
        percentage='$percentage'
        WHERE id=$id";

    if (mysqli_query($conn, $update)) {
        $success = "Student details updated successfully!";
        $student = mysqli_fetch_assoc(mysqli_query($conn, $query));
    } else {
        $error = "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student - Admin</title>
    <link rel="stylesheet" href="/EWCM%20WEB/assets/css/style.css">
    <style>
        /* Same admin styles as above – copy from view-student.php or dashboard.php */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f0f2f5; }
        .admin-header {
            background: linear-gradient(135deg, #1a2332, #2c3e7a);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 4px solid #4a90d9;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .admin-header .logo h1 { color: #ffffff; font-size: 22px; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; }
        .admin-header .logo span { color: #4a90d9; }
        .admin-header .logo small { color: #d4e2f0; font-size: 12px; font-weight: 300; display: block; }
        .admin-header .user-info { display: flex; align-items: center; gap: 20px; }
        .admin-header .user-info .name { color: #ffffff; font-size: 16px; font-weight: 600; }
        .admin-header .user-info .role { color: #4a90d9; font-size: 12px; font-weight: 600; text-transform: uppercase; background: rgba(74, 144, 217, 0.2); padding: 2px 12px; border-radius: 20px; }
        .admin-header .user-info .logout-btn { background: #e74c3c; color: #ffffff; padding: 8px 20px; border: none; border-radius: 6px; font-weight: 600; cursor: pointer; transition: all 0.3s ease; text-decoration: none; font-size: 14px; }
        .admin-header .user-info .logout-btn:hover { background: #c0392b; transform: translateY(-1px); }
        .admin-container { display: flex; min-height: calc(100vh - 72px); }
        .admin-sidebar {
            width: 260px;
            background: #ffffff;
            padding: 25px 0;
            box-shadow: 2px 0 15px rgba(0,0,0,0.05);
            flex-shrink: 0;
        }
        .admin-sidebar .menu-item {
            padding: 14px 25px;
            color: #555;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 15px;
            font-weight: 500;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }
        .admin-sidebar .menu-item:hover { background: #f0f4ff; color: #1a2332; border-left-color: #4a90d9; }
        .admin-sidebar .menu-item.active { background: #f0f4ff; color: #1a2332; border-left-color: #4a90d9; font-weight: 700; }
        .admin-sidebar .menu-item .icon { font-size: 20px; width: 30px; text-align: center; }
        .admin-sidebar .menu-divider { height: 1px; background: #e8ecf0; margin: 10px 20px; }
        .admin-sidebar .sidebar-title { padding: 10px 25px 5px; font-size: 12px; text-transform: uppercase; color: #999; font-weight: 700; letter-spacing: 1px; }
        .admin-content { flex: 1; padding: 30px; }
        .admin-content .page-title { font-size: 28px; color: #1a2332; font-weight: 800; margin-bottom: 5px; }
        .admin-content .page-subtitle { color: #777; font-size: 16px; margin-bottom: 30px; }
        .card { background: #ffffff; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); margin-bottom: 25px; }
        .card-body { padding: 20px; }
        .card-header { padding: 15px 20px; border-bottom: 1px solid #e8ecf0; font-weight: 700; font-size: 16px; }
        .table { width: 100%; border-collapse: collapse; }
        .table th { text-align: left; padding: 12px 10px; font-size: 13px; font-weight: 700; color: #777; text-transform: uppercase; letter-spacing: 0.5px; border-bottom: 2px solid #e8ecf0; }
        .table td { padding: 12px 10px; font-size: 14px; color: #333; border-bottom: 1px solid #f0f2f5; }
        .table tr:hover { background: #f8f9fa; }
        .badge { padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 600; }
        .badge-warning { background: #ffd93d; color: #333; }
        .badge-success { background: #6bcb77; color: #fff; }
        .badge-danger { background: #ff6b6b; color: #fff; }
        .badge-secondary { background: #95a5a6; color: #fff; }
        .btn { padding: 6px 14px; border: none; border-radius: 6px; font-weight: 600; cursor: pointer; text-decoration: none; display: inline-block; font-size: 13px; transition: all 0.3s; }
        .btn-sm { padding: 4px 10px; font-size: 12px; }
        .btn-primary { background: #4a90d9; color: #fff; }
        .btn-primary:hover { background: #357abd; }
        .btn-info { background: #17a2b8; color: #fff; }
        .btn-info:hover { background: #138496; }
        .btn-warning { background: #ffc107; color: #333; }
        .btn-warning:hover { background: #e0a800; }
        .btn-danger { background: #e74c3c; color: #fff; }
        .btn-danger:hover { background: #c0392b; }
        .btn-success { background: #28a745; color: #fff; }
        .btn-success:hover { background: #1e7e34; }
        .btn-secondary { background: #6c757d; color: #fff; }
        .btn-secondary:hover { background: #5a6268; }
        .form-control, .form-select { width: 100%; padding: 8px 12px; border: 2px solid #e0e4ea; border-radius: 6px; font-size: 14px; background: #fff; }
        .form-label { font-weight: 600; color: #333; margin-bottom: 4px; display: block; font-size: 14px; }
        .row { display: flex; flex-wrap: wrap; gap: 15px; }
        .col-md-3 { flex: 0 0 calc(25% - 15px); }
        .col-md-4 { flex: 0 0 calc(33.33% - 15px); }
        .col-md-6 { flex: 0 0 calc(50% - 15px); }
        .col-12 { flex: 0 0 100%; }
        .d-flex { display: flex; }
        .justify-content-between { justify-content: space-between; }
        .align-items-center { align-items: center; }
        .w-100 { width: 100%; }
        .text-center { text-align: center; }
        .alert { padding: 15px 20px; border-radius: 8px; margin-bottom: 20px; font-weight: 500; }
        .alert-success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert-danger { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .table-responsive { overflow-x: auto; }
        @media screen and (max-width: 768px) {
            .admin-container { flex-direction: column; }
            .admin-sidebar { width: 100%; padding: 15px; display: flex; flex-wrap: wrap; gap: 5px; }
            .admin-sidebar .menu-item { padding: 10px 15px; font-size: 13px; border-left: none; border-bottom: 3px solid transparent; }
            .admin-sidebar .menu-item:hover, .admin-sidebar .menu-item.active { border-left: none; border-bottom-color: #4a90d9; }
            .admin-sidebar .sidebar-title, .admin-sidebar .menu-divider { display: none; }
            .admin-header { flex-direction: column; gap: 10px; padding: 12px 15px; }
            .admin-header .logo h1 { font-size: 18px; }
            .col-md-3, .col-md-4, .col-md-6 { flex: 0 0 100%; }
            .admin-content { padding: 15px; }
        }
    </style>
</head>
<body>

<header class="admin-header">
    <div class="logo">
        <h1>East West <span>College</span></h1>
        <small>Administrator Panel</small>
    </div>
    <div class="user-info">
        <span class="name">Welcome, <?php echo $admin_name; ?></span>
        <span class="role"><?php echo $admin_role; ?></span>
        <a href="/EWCM%20WEB/admin/logout.php" class="logout-btn">Logout</a>
    </div>
</header>

<div class="admin-container">

    <?php include '../sidebar.php'; ?>

    <main class="admin-content">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title">Edit Student Application</h1>
            <a href="manage-students.php" class="btn btn-secondary">← Back</a>
        </div>

        <?php if ($error): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <?php if ($success): ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
        <?php endif; ?>

        <div class="card">
            <div class="card-body">
                <form method="POST" class="row">
                    <div class="col-md-6">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="full_name" class="form-control" value="<?php echo htmlspecialchars($student['full_name']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" name="dob" class="form-control" value="<?php echo $student['dob']; ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Gender</label>
                        <select name="gender" class="form-select" required>
                            <option value="Male" <?php echo ($student['gender']=='Male')?'selected':''; ?>>Male</option>
                            <option value="Female" <?php echo ($student['gender']=='Female')?'selected':''; ?>>Female</option>
                            <option value="Other" <?php echo ($student['gender']=='Other')?'selected':''; ?>>Other</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Nationality</label>
                        <input type="text" name="nationality" class="form-control" value="<?php echo htmlspecialchars($student['nationality']); ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Mobile</label>
                        <input type="text" name="mobile" class="form-control" value="<?php echo $student['mobile']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $student['email']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Father's Name</label>
                        <input type="text" name="father_name" class="form-control" value="<?php echo htmlspecialchars($student['father_name']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Mother's Name</label>
                        <input type="text" name="mother_name" class="form-control" value="<?php echo htmlspecialchars($student['mother_name']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Address</label>
                        <textarea name="address" class="form-control" rows="2" required><?php echo htmlspecialchars($student['address']); ?></textarea>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Course</label>
                        <input type="text" name="course" class="form-control" value="<?php echo $student['course']; ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Academic Year</label>
                        <select name="academic_year" class="form-select">
                            <option value="2026-27" <?php echo ($student['academic_year']=='2026-27')?'selected':''; ?>>2026-27</option>
                            <option value="2025-26" <?php echo ($student['academic_year']=='2025-26')?'selected':''; ?>>2025-26</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Qualifying Exam</label>
                        <input type="text" name="qualifying_exam" class="form-control" value="<?php echo $student['qualifying_exam']; ?>" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Board</label>
                        <input type="text" name="board" class="form-control" value="<?php echo $student['board']; ?>">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Passing Year</label>
                        <input type="number" name="passing_year" class="form-control" value="<?php echo $student['passing_year']; ?>" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Percentage</label>
                        <input type="number" step="0.01" name="percentage" class="form-control" value="<?php echo $student['percentage']; ?>" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">💾 Update</button>
                        <a href="manage-students.php" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </main>

</div>

</body>
</html>
<?php mysqli_close($conn); ?>