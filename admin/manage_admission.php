<?php
include('../includes/config.php');

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}

// Handle deletion
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $id = intval($_GET['delete']);
    mysqli_query($conn, "DELETE FROM enquiries WHERE id = $id");
    header('Location: manage_admission.php?msg=deleted');
    exit();
}

// Handle status update
if (isset($_GET['update_status']) && is_numeric($_GET['update_status']) && isset($_GET['status'])) {
    $id = intval($_GET['update_status']);
    $new_status = mysqli_real_escape_string($conn, $_GET['status']);
    $allowed = ['enquiry', 'processing', 'completed'];
    if (in_array($new_status, $allowed)) {
        mysqli_query($conn, "UPDATE enquiries SET status = '$new_status' WHERE id = $id");
    }
    header('Location: manage_admission.php?msg=status_updated');
    exit();
}

$query = "SELECT * FROM enquiries ORDER BY submitted_at DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Admissions - Admin</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
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
        }
        .admin-header .logo h1 {
            color: #fff;
            font-size: 22px;
            font-weight: 800;
            text-transform: uppercase;
        }
        .admin-header .logo span { color: #4a90d9; }
        .admin-header .user-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .admin-header .user-info .name {
            color: #fff;
            font-weight: 600;
        }
        .admin-header .user-info .logout-btn {
            background: #e74c3c;
            color: #fff;
            padding: 8px 20px;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }
        .admin-header .user-info .logout-btn:hover {
            background: #c0392b;
        }
        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
        }
        .page-title {
            font-size: 28px;
            color: #1a2332;
            font-weight: 800;
            margin-bottom: 5px;
        }
        .page-subtitle {
            color: #777;
            font-size: 16px;
            margin-bottom: 30px;
        }
        .card {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }
        .card h3 {
            font-size: 20px;
            color: #1a2332;
            font-weight: 700;
            margin-bottom: 20px;
            border-bottom: 2px solid #4a90d9;
            padding-bottom: 10px;
        }
        .table-responsive {
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }
        th {
            background: #1a2332;
            color: #fff;
            padding: 12px 15px;
            text-align: left;
        }
        td {
            padding: 10px 15px;
            border-bottom: 1px solid #eee;
            vertical-align: middle;
        }
        tr:hover {
            background: #f8f9fa;
        }
        .badge {
            padding: 4px 14px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            display: inline-block;
        }
        .badge-enquiry { background: #f39c12; color: #fff; }
        .badge-processing { background: #3498db; color: #fff; }
        .badge-completed { background: #27ae60; color: #fff; }
        .no-data {
            text-align: center;
            color: #999;
            padding: 40px;
        }
        .action-links a {
            margin-right: 5px;
            padding: 4px 10px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 12px;
            font-weight: 600;
            color: #fff;
            display: inline-block;
        }
        .action-links .status-link {
            background: #4a90d9;
        }
        .action-links .status-link:hover {
            background: #2c3e7a;
        }
        .action-links .delete-link {
            background: #e74c3c;
        }
        .action-links .delete-link:hover {
            background: #c0392b;
        }
        .back-link {
            display: inline-block;
            color: #4a90d9;
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 15px;
        }
        .back-link:hover {
            text-decoration: underline;
        }
        .msg-success {
            background: #e8f8e8;
            color: #27ae60;
            padding: 12px 16px;
            border-radius: 8px;
            border-left: 4px solid #27ae60;
            margin-bottom: 20px;
        }
        @media (max-width: 768px) {
            .admin-header { flex-direction: column; gap: 10px; padding: 12px 15px; }
            .container { padding: 0 15px; }
            .action-links a { margin-bottom: 5px; }
        }
    </style>
</head>
<body>

    <header class="admin-header">
        <div class="logo">
            <h1>East West <span>College</span></h1>
        </div>
        <div class="user-info">
            <span class="name">Welcome, <?php echo $_SESSION['admin_full_name']; ?></span>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </header>

    <div class="container">
        <a href="dashboard.php" class="back-link">← Back to Dashboard</a>
        <h1 class="page-title">Manage Admissions</h1>
        <p class="page-subtitle">View, track, and manage student enquiries</p>

        <?php if (isset($_GET['msg']) && $_GET['msg'] === 'deleted'): ?>
            <div class="msg-success">✅ Enquiry deleted successfully.</div>
        <?php elseif (isset($_GET['msg']) && $_GET['msg'] === 'status_updated'): ?>
            <div class="msg-success">✅ Status updated successfully.</div>
        <?php endif; ?>

        <div class="card">
            <h3>📩 Student Enquiries</h3>
            <div class="table-responsive">
                <?php if (mysqli_num_rows($result) > 0): ?>
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Course</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Submitted</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; while ($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><strong><?php echo htmlspecialchars($row['name']); ?></strong></td>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                <td><span class="badge badge-<?php echo $row['course']; ?>"><?php echo htmlspecialchars($row['course']); ?></span></td>
                                <td><?php echo nl2br(htmlspecialchars($row['message'])); ?></td>
                                <td>
                                    <span class="badge badge-<?php echo $row['status']; ?>">
                                        <?php echo ucfirst($row['status']); ?>
                                    </span>
                                </td>
                                <td><?php echo date('d M Y, h:i A', strtotime($row['submitted_at'])); ?></td>
                                <td>
                                    <div class="action-links">
                                        <?php if ($row['status'] !== 'completed'): ?>
                                            <a href="manage_admission.php?update_status=<?php echo $row['id']; ?>&status=processing" class="status-link">Processing</a>
                                            <a href="manage_admission.php?update_status=<?php echo $row['id']; ?>&status=completed" class="status-link">Completed</a>
                                        <?php endif; ?>
                                        <?php if ($row['status'] !== 'enquiry'): ?>
                                            <a href="manage_admission.php?update_status=<?php echo $row['id']; ?>&status=enquiry" class="status-link">Reset</a>
                                        <?php endif; ?>
                                        <a href="manage_admission.php?delete=<?php echo $row['id']; ?>" 
                                           class="delete-link" 
                                           onclick="return confirm('Delete this enquiry?')">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <div class="no-data">No enquiries submitted yet.</div>
                <?php endif; ?>
            </div>
        </div>
    </div>

</body>
</html>