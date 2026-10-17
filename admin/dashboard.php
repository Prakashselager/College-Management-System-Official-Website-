<?php
include('../includes/config.php');

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}

$admin_name = $_SESSION['admin_full_name'];
$admin_role = $_SESSION['admin_role'];

$counts = [
    'total_pages' => 0,
    'total_admins' => 0,
    'total_faculty' => 0,
    'total_students' => 0
];

$table_check = mysqli_query($conn, "SHOW TABLES LIKE 'nav_items'");
if (mysqli_num_rows($table_check) > 0) {
    $count_query = "SELECT COUNT(*) as total FROM nav_items";
    $count_result = mysqli_query($conn, $count_query);
    if ($count_result && mysqli_num_rows($count_result) > 0) {
        $row = mysqli_fetch_assoc($count_result);
        $counts['total_pages'] = $row['total'];
    }
}

$admin_count_query = "SELECT COUNT(*) as total FROM admin";
$admin_count_result = mysqli_query($conn, $admin_count_query);
if ($admin_count_result && mysqli_num_rows($admin_count_result) > 0) {
    $row = mysqli_fetch_assoc($admin_count_result);
    $counts['total_admins'] = $row['total'];
}

$faculty_check = mysqli_query($conn, "SHOW TABLES LIKE 'faculty'");
if (mysqli_num_rows($faculty_check) > 0) {
    $faculty_query = "SELECT COUNT(*) as total FROM faculty";
    $faculty_result = mysqli_query($conn, $faculty_query);
    if ($faculty_result && mysqli_num_rows($faculty_result) > 0) {
        $row = mysqli_fetch_assoc($faculty_result);
        $counts['total_faculty'] = $row['total'];
    }
}

$admissions_check = mysqli_query($conn, "SHOW TABLES LIKE 'admissions'");
if (mysqli_num_rows($admissions_check) > 0) {
    $students_query = "SELECT COUNT(*) as total FROM admissions";
    $students_result = mysqli_query($conn, $students_query);
    if ($students_result && mysqli_num_rows($students_result) > 0) {
        $row = mysqli_fetch_assoc($students_result);
        $counts['total_students'] = $row['total'];
    }
}

$recent_logins = mysqli_query($conn, "SELECT * FROM admin ORDER BY last_login DESC LIMIT 5");
if (!$recent_logins) {
    $recent_logins = false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - East West College Admin</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
        }
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
        .admin-header .logo h1 {
            color: #ffffff;
            font-size: 22px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .admin-header .logo span {
            color: #4a90d9;
        }
        .admin-header .logo small {
            color: #d4e2f0;
            font-size: 12px;
            font-weight: 300;
            display: block;
        }
        .admin-header .user-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .admin-header .user-info .name {
            color: #ffffff;
            font-size: 16px;
            font-weight: 600;
        }
        .admin-header .user-info .role {
            color: #4a90d9;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            background: rgba(74, 144, 217, 0.2);
            padding: 2px 12px;
            border-radius: 20px;
        }
        .admin-header .user-info .logout-btn {
            background: #e74c3c;
            color: #ffffff;
            padding: 8px 20px;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            font-size: 14px;
        }
        .admin-header .user-info .logout-btn:hover {
            background: #c0392b;
            transform: translateY(-1px);
        }
        .admin-container {
            display: flex;
            min-height: calc(100vh - 72px);
        }
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
        .admin-sidebar .menu-item:hover {
            background: #f0f4ff;
            color: #1a2332;
            border-left-color: #4a90d9;
        }
        .admin-sidebar .menu-item.active {
            background: #f0f4ff;
            color: #1a2332;
            border-left-color: #4a90d9;
            font-weight: 700;
        }
        .admin-sidebar .menu-item .icon {
            font-size: 20px;
            width: 30px;
            text-align: center;
        }
        .admin-sidebar .menu-divider {
            height: 1px;
            background: #e8ecf0;
            margin: 10px 20px;
        }
        .admin-sidebar .sidebar-title {
            padding: 10px 25px 5px;
            font-size: 12px;
            text-transform: uppercase;
            color: #999;
            font-weight: 700;
            letter-spacing: 1px;
        }
        .admin-content {
            flex: 1;
            padding: 30px;
        }
        .admin-content .page-title {
            font-size: 28px;
            color: #1a2332;
            font-weight: 800;
            margin-bottom: 5px;
        }
        .admin-content .page-subtitle {
            color: #777;
            font-size: 16px;
            margin-bottom: 30px;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            margin-bottom: 35px;
        }
        .stat-card {
            background: #ffffff;
            padding: 25px 20px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            border-bottom: 4px solid #4a90d9;
            transition: all 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        }
        .stat-card .stat-number {
            font-size: 36px;
            font-weight: 800;
            color: #1a2332;
        }
        .stat-card .stat-label {
            font-size: 14px;
            color: #777;
            font-weight: 500;
            margin-top: 3px;
        }
        .stat-card .stat-icon {
            font-size: 32px;
            float: right;
            color: #4a90d9;
            opacity: 0.3;
        }
        .stat-card.blue { border-bottom-color: #4a90d9; }
        .stat-card.green { border-bottom-color: #27ae60; }
        .stat-card.orange { border-bottom-color: #f39c12; }
        .stat-card.red { border-bottom-color: #e74c3c; }
        .recent-section {
            background: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        .recent-section h3 {
            font-size: 18px;
            color: #1a2332;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .recent-section table {
            width: 100%;
            border-collapse: collapse;
        }
        .recent-section table th {
            text-align: left;
            padding: 12px 10px;
            font-size: 13px;
            font-weight: 700;
            color: #777;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 2px solid #e8ecf0;
        }
        .recent-section table td {
            padding: 12px 10px;
            font-size: 14px;
            color: #333;
            border-bottom: 1px solid #f0f2f5;
        }
        .recent-section table tr:hover {
            background: #f8f9fa;
        }
        .badge {
            padding: 3px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            background: #f0f4ff;
            color: #4a90d9;
        }
        .quick-actions {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 35px;
        }
        .quick-action-btn {
            background: #ffffff;
            padding: 25px 20px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            text-decoration: none;
            text-align: center;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        .quick-action-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            border-color: #4a90d9;
        }
        .quick-action-btn .icon {
            font-size: 32px;
            display: block;
            margin-bottom: 8px;
        }
        .quick-action-btn .label {
            font-size: 14px;
            font-weight: 600;
            color: #1a2332;
        }
        .quick-action-btn .desc {
            font-size: 12px;
            color: #777;
            margin-top: 3px;
        }
        @media screen and (max-width: 992px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .quick-actions {
                grid-template-columns: repeat(2, 1fr);
            }
            .admin-sidebar {
                width: 200px;
            }
        }
        @media screen and (max-width: 768px) {
            .admin-container {
                flex-direction: column;
            }
            .admin-sidebar {
                width: 100%;
                padding: 15px;
                display: flex;
                flex-wrap: wrap;
                gap: 5px;
            }
            .admin-sidebar .menu-item {
                padding: 10px 15px;
                font-size: 13px;
                border-left: none;
                border-bottom: 3px solid transparent;
            }
            .admin-sidebar .menu-item:hover,
            .admin-sidebar .menu-item.active {
                border-left: none;
                border-bottom-color: #4a90d9;
            }
            .admin-sidebar .sidebar-title,
            .admin-sidebar .menu-divider {
                display: none;
            }
            .admin-header {
                flex-direction: column;
                gap: 10px;
                padding: 12px 15px;
            }
            .admin-header .logo h1 {
                font-size: 18px;
            }
            .stats-grid {
                grid-template-columns: 1fr;
            }
            .quick-actions {
                grid-template-columns: 1fr;
            }
            .admin-content {
                padding: 15px;
            }
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
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </header>

    <div class="admin-container">

        <aside class="admin-sidebar">
            <div class="sidebar-title">Main Navigation</div>
            <a href="dashboard.php" class="menu-item active">
                <span class="icon">📊</span> Dashboard
            </a>
            <a href="manage-pages.php" class="menu-item">
                <span class="icon">📄</span> Manage Pages
            </a>
            <a href="manage-navbar.php" class="menu-item">
                <span class="icon">📋</span> Navbar Menu
            </a>
            <a href="manage-slides.php" class="menu-item">
                <span class="icon">🖼️</span> Slides & Banners
            </a>
            <a href="manage-news.php" class="menu-item">
                <span class="icon">📰</span> News & Updates
            </a>
            <div class="menu-divider"></div>
            <div class="sidebar-title">Management</div>
            <a href="manage-faculty.php" class="menu-item">
                <span class="icon">👨‍🏫</span> Faculty
            </a>
            <a href="admissions/manage-students.php" class="menu-item">
                <span class="icon">🎓</span> Students Admission
            </a>
           <a href="manage_admission.php" class="menu-item">
            <span class="icon">📩</span> Enquiries
            </a>
            <div class="menu-divider"></div>
            <div class="sidebar-title">Settings</div>
            <a href="manage-admins.php" class="menu-item">
                <span class="icon">👤</span> Admin Accounts
            </a>
            <a href="settings.php" class="menu-item">
                <span class="icon">⚙️</span> Settings
            </a>
            <a href="logout.php" class="menu-item">
                <span class="icon">🚪</span> Logout
            </a>
        </aside>

        <main class="admin-content">
            <h1 class="page-title">Dashboard</h1>
            <p class="page-subtitle">Welcome back, <?php echo $admin_name; ?>! Here's what's happening with your website.</p>

            <div class="stats-grid">
                <div class="stat-card blue">
                    <span class="stat-icon">📄</span>
                    <div class="stat-number"><?php echo $counts['total_pages']; ?></div>
                    <div class="stat-label">Total Pages</div>
                </div>
                <div class="stat-card green">
                    <span class="stat-icon">👨‍🏫</span>
                    <div class="stat-number"><?php echo $counts['total_faculty']; ?></div>
                    <div class="stat-label">Faculty Members</div>
                </div>
                <div class="stat-card orange">
                    <span class="stat-icon">🎓</span>
                    <div class="stat-number"><?php echo $counts['total_students']; ?></div>
                    <div class="stat-label">Students</div>
                </div>
                <div class="stat-card red">
                    <span class="stat-icon">👤</span>
                    <div class="stat-number"><?php echo $counts['total_admins']; ?></div>
                    <div class="stat-label">Admin Accounts</div>
                </div>
            </div>

            <div class="quick-actions">
                <a href="manage-pages.php" class="quick-action-btn">
                    <span class="icon">📝</span>
                    <span class="label">Add New Page</span>
                    <span class="desc">Create a new page for your website</span>
                </a>
                <a href="manage-slides.php" class="quick-action-btn">
                    <span class="icon">🖼️</span>
                    <span class="label">Add Slide</span>
                    <span class="desc">Upload new banner image for slideshow</span>
                </a>
                <a href="manage-news.php" class="quick-action-btn">
                    <span class="icon">📰</span>
                    <span class="label">Add News</span>
                    <span class="desc">Post latest news and updates</span>
                </a>
            </div>

            <div class="recent-section">
                <h3>Recent Admin Logins</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Admin Name</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Last Login</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($recent_logins && mysqli_num_rows($recent_logins) > 0): ?>
                            <?php while ($row = mysqli_fetch_assoc($recent_logins)): ?>
                                <tr>
                                    <td><strong><?php echo $row['full_name']; ?></strong></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><span class="badge"><?php echo $row['role']; ?></span></td>
                                    <td><?php echo $row['last_login'] ? date('d M Y, h:i A', strtotime($row['last_login'])) : 'Never'; ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" style="text-align:center;color:#999;padding:30px;">No admin logins recorded yet.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </main>

    </div>

</body>
</html>