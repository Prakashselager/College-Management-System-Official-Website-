<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: ../login.php");
    exit();
}

$conn = mysqli_connect("localhost", "root", "", "ewcm");
if (!$conn) die("Connection failed: " . mysqli_connect_error());

$id = intval($_GET['id'] ?? 0);
$row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM admissions WHERE id=$id"));
if (!$row) { header("Location: manage-students.php"); exit(); }

$admin_name = $_SESSION['admin_full_name'];
$admin_role = $_SESSION['admin_role'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student - Admin</title>
    <!-- Absolute path to CSS -->
    <link rel="stylesheet" href="/EWCM%20WEB/assets/css/style.css">
    <style>
        /* Copy the same admin styles from dashboard.php */
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
        .badge-primary { background: #4a90d9; color: #fff; }
        .badge-info { background: #17a2b8; color: #fff; }
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
            .col-md-6 { flex: 0 0 100%; }
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

    <!-- Include the sidebar -->
    <?php include '../sidebar.php'; ?>

    <main class="admin-content">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title">Student Application Details</h1>
            <a href="manage-students.php" class="btn btn-secondary">← Back to List</a>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Personal Details</div>
                    <div class="card-body">
                        <table class="table">
                            <tr><th>ID</th><td>#<?php echo $row['id']; ?></td></tr>
                            <tr><th>Full Name</th><td><?php echo htmlspecialchars($row['full_name']); ?></td></tr>
                            <tr><th>DOB</th><td><?php echo date('d-m-Y', strtotime($row['dob'])); ?></td></tr>
                            <tr><th>Gender</th><td><?php echo $row['gender']; ?></td></tr>
                            <tr><th>Nationality</th><td><?php echo htmlspecialchars($row['nationality']); ?></td></tr>
                            <tr><th>Father</th><td><?php echo htmlspecialchars($row['father_name']); ?></td></tr>
                            <tr><th>Mother</th><td><?php echo htmlspecialchars($row['mother_name']); ?></td></tr>
                            <tr><th>Email</th><td><?php echo $row['email']; ?></td></tr>
                            <tr><th>Mobile</th><td><?php echo $row['mobile']; ?></td></tr>
                            <tr><th>Address</th><td><?php echo nl2br(htmlspecialchars($row['address'])); ?></td></tr>
                            <tr><th>Submitted</th><td><?php echo date('d-M-Y h:i A', strtotime($row['submitted_at'])); ?></td></tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Academic Details</div>
                    <div class="card-body">
                        <table class="table">
                            <tr><th>Course</th><td><strong><?php echo htmlspecialchars($row['course']); ?></strong></td></tr>
                            <tr><th>Academic Year</th><td><?php echo $row['academic_year']; ?></td></tr>
                            <tr><th>Qualifying Exam</th><td><?php echo $row['qualifying_exam']; ?></td></tr>
                            <tr><th>Board</th><td><?php echo htmlspecialchars($row['board']); ?></td></tr>
                            <tr><th>Passing Year</th><td><?php echo $row['passing_year']; ?></td></tr>
                            <tr><th>Percentage</th><td><strong><?php echo $row['percentage']; ?>%</strong></td></tr>
                            <tr><th>Status</th><td><span class="badge <?php echo ($row['status']=='Pending')?'badge-warning':(($row['status']=='Approved')?'badge-success':'badge-danger'); ?>"><?php echo $row['status']; ?></span></td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

</div>

</body>
</html>
<?php mysqli_close($conn); ?>