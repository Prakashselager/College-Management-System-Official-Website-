<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: ../login.php");
    exit();
}
$conn = mysqli_connect("localhost", "root", "", "ewcm");
if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

$admin_name = $_SESSION['admin_full_name'];
$admin_role = $_SESSION['admin_role'];
o
if (isset($_POST['update_status'])) {
    $id = intval($_POST['student_id']);
    $new_status = mysqli_real_escape_string($conn, $_POST['status']);
    $update_query = "UPDATE admissions SET status='$new_status' WHERE id=$id";
    if (mysqli_query($conn, $update_query)) {
        $success_msg = "Status updated successfully!";
    } else {
        $error_msg = "Error updating status: " . mysqli_error($conn);
    }
}

if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $delete_query = "DELETE FROM admissions WHERE id=$id";
    if (mysqli_query($conn, $delete_query)) {
        $success_msg = "Application deleted successfully!";
    } else {
        $error_msg = "Error deleting: " . mysqli_error($conn);
    }
}

$search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
$course_filter = isset($_GET['course']) ? mysqli_real_escape_string($conn, $_GET['course']) : '';
$status_filter = isset($_GET['status']) ? mysqli_real_escape_string($conn, $_GET['status']) : '';

$sql = "SELECT * FROM admissions WHERE 1=1";
if ($search) {
    $sql .= " AND (full_name LIKE '%$search%' OR email LIKE '%$search%' OR mobile LIKE '%$search%' OR id LIKE '%$search%')";
}
if ($course_filter) {
    $sql .= " AND course = '$course_filter'";
}
if ($status_filter) {
    $sql .= " AND status = '$status_filter'";
}
$sql .= " ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

$courses_query = mysqli_query($conn, "SELECT DISTINCT course FROM admissions ORDER BY course");
$courses_list = [];
while ($row = mysqli_fetch_assoc($courses_query)) {
    $courses_list[] = $row['course'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Students - East West College Admin</title>
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
        .form-control { width: 100%; padding: 8px 12px; border: 2px solid #e0e4ea; border-radius: 6px; font-size: 14px; }
        .form-select { width: 100%; padding: 8px 12px; border: 2px solid #e0e4ea; border-radius: 6px; font-size: 14px; background: #fff; }
        .form-label { font-weight: 600; color: #333; margin-bottom: 4px; display: block; font-size: 14px; }
        .row { display: flex; flex-wrap: wrap; gap: 15px; }
        .col-md-3 { flex: 0 0 calc(25% - 15px); }
        .col-md-4 { flex: 0 0 calc(33.33% - 15px); }
        .col-md-2 { flex: 0 0 calc(16.66% - 15px); }
        .d-flex { display: flex; }
        .justify-content-between { justify-content: space-between; }
        .align-items-center { align-items: center; }
        .gap-2 { gap: 8px; }
        .mt-3 { margin-top: 15px; }
        .mb-3 { margin-bottom: 15px; }
        .w-100 { width: 100%; }
        .text-center { text-align: center; }
        .alert { padding: 15px 20px; border-radius: 8px; margin-bottom: 20px; font-weight: 500; }
        .alert-success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert-danger { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .table-responsive { overflow-x: auto; }
        @media screen and (max-width: 992px) {
            .col-md-3, .col-md-4, .col-md-2 { flex: 0 0 calc(50% - 15px); }
            .admin-sidebar { width: 200px; }
        }
        @media screen and (max-width: 768px) {
            .admin-container { flex-direction: column; }
            .admin-sidebar { width: 100%; padding: 15px; display: flex; flex-wrap: wrap; gap: 5px; }
            .admin-sidebar .menu-item { padding: 10px 15px; font-size: 13px; border-left: none; border-bottom: 3px solid transparent; }
            .admin-sidebar .menu-item:hover, .admin-sidebar .menu-item.active { border-left: none; border-bottom-color: #4a90d9; }
            .admin-sidebar .sidebar-title, .admin-sidebar .menu-divider { display: none; }
            .admin-header { flex-direction: column; gap: 10px; padding: 12px 15px; }
            .admin-header .logo h1 { font-size: 18px; }
            .col-md-3, .col-md-4, .col-md-2 { flex: 0 0 100%; }
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
        <a href="../logout.php" class="logout-btn">Logout</a>
    </div>
</header>

<div class="admin-container">

    <aside class="admin-sidebar">
        <div class="sidebar-title">Main Navigation</div>
        <a href="../dashboard.php" class="menu-item">
            <span class="icon">📊</span> Dashboard
        </a>
        <a href="../manage-pages.php" class="menu-item">
            <span class="icon">📄</span> Manage Pages
        </a>
        <a href="../manage-navbar.php" class="menu-item">
            <span class="icon">📋</span> Navbar Menu
        </a>
        <a href="../manage-slides.php" class="menu-item">
            <span class="icon">🖼️</span> Slides & Banners
        </a>
        <a href="../manage-news.php" class="menu-item">
            <span class="icon">📰</span> News & Updates
        </a>
        <div class="menu-divider"></div>
        <div class="sidebar-title">Management</div>
        <a href="../manage-faculty.php" class="menu-item">
            <span class="icon">👨‍🏫</span> Faculty
        </a>
        <a href="manage-students.php" class="menu-item active">
            <span class="icon">🎓</span> Students Admission
        </a>
        <a href="../manage_admission.php" class="menu-item">
            <span class="icon">📩</span> Enquiries
        </a>
        <div class="menu-divider"></div>
        <div class="sidebar-title">Settings</div>
        <a href="../manage-admins.php" class="menu-item">
            <span class="icon">👤</span> Admin Accounts
        </a>
        <a href="../settings.php" class="menu-item">
            <span class="icon">⚙️</span> Settings
        </a>
        <a href="../logout.php" class="menu-item">
            <span class="icon">🚪</span> Logout
        </a>
    </aside>

    <main class="admin-content">
        <h1 class="page-title">Manage Students (Admissions)</h1>
        <p class="page-subtitle">View, search, filter, and manage all student applications.</p>

        <?php if (isset($success_msg)): ?>
            <div class="alert alert-success"><?php echo $success_msg; ?></div>
        <?php endif; ?>
        <?php if (isset($error_msg)): ?>
            <div class="alert alert-danger"><?php echo $error_msg; ?></div>
        <?php endif; ?>

        <div class="card">
            <div class="card-body">
                <form method="GET" class="row">
                    <div class="col-md-3">
                        <label class="form-label">Search</label>
                        <input type="text" name="search" class="form-control" placeholder="Name, Email, ID, Mobile" value="<?php echo htmlspecialchars($search); ?>">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Course</label>
                        <select name="course" class="form-select">
                            <option value="">All Courses</option>
                            <?php foreach ($courses_list as $c): ?>
                                <option value="<?php echo $c; ?>" <?php echo ($course_filter == $c) ? 'selected' : ''; ?>><?php echo $c; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="">All Status</option>
                            <option value="Pending" <?php echo ($status_filter == 'Pending') ? 'selected' : ''; ?>>Pending</option>
                            <option value="Approved" <?php echo ($status_filter == 'Approved') ? 'selected' : ''; ?>>Approved</option>
                            <option value="Rejected" <?php echo ($status_filter == 'Rejected') ? 'selected' : ''; ?>>Rejected</option>
                            <option value="On Hold" <?php echo ($status_filter == 'On Hold') ? 'selected' : ''; ?>>On Hold</option>
                        </select>
                    </div>
                    <div class="col-md-3" style="display:flex; gap:8px; align-items:flex-end;">
                        <button type="submit" class="btn btn-primary w-100">Filter</button>
                        <a href="manage-students.php" class="btn btn-secondary w-100">Reset</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header" style="display:flex; justify-content:space-between; align-items:center;">
                <span>All Applications (<?php echo mysqli_num_rows($result); ?>)</span>
                <div>
                    <a href="export-students.php?<?php echo $_SERVER['QUERY_STRING']; ?>" class="btn btn-success btn-sm">
                        <span>📥</span> Export CSV
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Name</th>
                                <th>Course</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Status</th>
                                <th>Submitted</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (mysqli_num_rows($result) > 0): ?>
                                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo htmlspecialchars($row['full_name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['course']); ?></td>
                                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                                        <td><?php echo htmlspecialchars($row['mobile']); ?></td>
                                        <td>
                                            <span class="badge 
                                                <?php 
                                                    if ($row['status'] == 'Pending') echo 'badge-warning';
                                                    elseif ($row['status'] == 'Approved') echo 'badge-success';
                                                    elseif ($row['status'] == 'Rejected') echo 'badge-danger';
                                                    else echo 'badge-secondary';
                                                ?>
                                            ">
                                                <?php echo $row['status']; ?>
                                            </span>
                                        </td>
                                        <td><?php echo date('d-M-Y', strtotime($row['submitted_at'])); ?></td>
                                        <td style="display:flex; gap:4px; flex-wrap:wrap;">
                                            <a href="view-student.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-sm" title="View">
                                                <span>👁️</span>
                                            </a>
                                            <a href="edit-student.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm" title="Edit">
                                                <span>✏️</span>
                                            </a>
                                            <form method="POST" style="display:inline-block;">
                                                <input type="hidden" name="student_id" value="<?php echo $row['id']; ?>">
                                                <select name="status" class="form-select" style="width:auto; display:inline-block; padding:4px 8px; font-size:12px;">
                                                    <option value="Pending" <?php echo ($row['status'] == 'Pending') ? 'selected' : ''; ?>>Pending</option>
                                                    <option value="Approved" <?php echo ($row['status'] == 'Approved') ? 'selected' : ''; ?>>Approved</option>
                                                    <option value="Rejected" <?php echo ($row['status'] == 'Rejected') ? 'selected' : ''; ?>>Rejected</option>
                                                    <option value="On Hold" <?php echo ($row['status'] == 'On Hold') ? 'selected' : ''; ?>>On Hold</option>
                                                </select>
                                                <button type="submit" name="update_status" class="btn btn-primary btn-sm">
                                                    <span>💾</span>
                                                </button>
                                            </form>
                                            <a href="?delete=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this application?')">
                                                <span>🗑️</span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="8" class="text-center" style="padding:40px; color:#999;">No applications found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

</div>

<?php mysqli_close($conn); ?>
</body>
</html>