<?php
include('../includes/config.php');

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}

$message = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $security_question = mysqli_real_escape_string($conn, $_POST['security_question']);
    $security_answer = mysqli_real_escape_string($conn, $_POST['security_answer']);

    $check_query = "SELECT * FROM admin WHERE username = '$username' OR email = '$email'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        $error = 'Username or email already exists!';
    } else {
        $insert_query = "INSERT INTO admin (full_name, username, email, password, role, security_question, security_answer) 
                         VALUES ('$full_name', '$username', '$email', '$password', '$role', '$security_question', '$security_answer')";
        
        if (mysqli_query($conn, $insert_query)) {
            $message = 'Admin account created successfully!';
        } else {
            $error = 'Failed to create admin account: ' . mysqli_error($conn);
        }
    }
}

$admins = mysqli_query($conn, "SELECT * FROM admin ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Admins - Admin Panel</title>
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
            color: #ffffff;
            font-size: 22px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .admin-header .logo span { color: #4a90d9; }
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
            background: #ffffff;
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
        }
        .form-group {
            margin-bottom: 18px;
        }
        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #1a2332;
            margin-bottom: 6px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e0e4ea;
            border-radius: 8px;
            font-size: 15px;
            transition: border-color 0.3s ease;
            outline: none;
        }
        .form-group input:focus, .form-group select:focus {
            border-color: #4a90d9;
        }
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .submit-btn {
            padding: 14px 35px;
            background: linear-gradient(135deg, #1a2332, #2c3e7a);
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(26, 35, 50, 0.3);
        }
        .success-message {
            background: #e8f8e8;
            color: #27ae60;
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 14px;
            margin-bottom: 20px;
            border-left: 4px solid #27ae60;
        }
        .error-message {
            background: #fee8e8;
            color: #e74c3c;
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 14px;
            margin-bottom: 20px;
            border-left: 4px solid #e74c3c;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th {
            text-align: left;
            padding: 12px 15px;
            font-size: 13px;
            font-weight: 700;
            color: #777;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 2px solid #e8ecf0;
        }
        table td {
            padding: 12px 15px;
            font-size: 14px;
            color: #333;
            border-bottom: 1px solid #f0f2f5;
        }
        table tr:hover {
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
        .delete-btn {
            background: #e74c3c;
            color: #ffffff;
            padding: 5px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .delete-btn:hover {
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
        @media screen and (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
            .admin-header {
                flex-direction: column;
                gap: 10px;
                padding: 12px 15px;
            }
            .container {
                padding: 0 15px;
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
            <span class="name">Welcome, <?php echo $_SESSION['admin_full_name']; ?></span>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </header>

    <div class="container">
        <a href="dashboard.php" class="back-link">← Back to Dashboard</a>
        <h1 class="page-title">Manage Admin Accounts</h1>
        <p class="page-subtitle">Add and manage administrator accounts for your college website</p>

        <div class="card">
            <h3>Add New Admin</h3>

            <?php if ($message): ?>
                <div class="success-message"><?php echo $message; ?></div>
            <?php endif; ?>
            <?php if ($error): ?>
                <div class="error-message"><?php echo $error; ?></div>
            <?php endif; ?>

            <form method="POST" action="">
                <div class="form-row">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="full_name" placeholder="Enter full name" required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" placeholder="Enter username" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" placeholder="Enter email address" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter password" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Role</label>
                        <select name="role" required>
                            <option value="admin">Admin</option>
                            <option value="super_admin">Super Admin</option>
                            <option value="editor">Editor</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Security Question</label>
                        <input type="text" name="security_question" placeholder="e.g., What is your pet name?" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Security Answer</label>
                    <input type="text" name="security_answer" placeholder="Enter security answer" required>
                </div>
                <button type="submit" class="submit-btn">Create Admin Account</button>
            </form>
        </div>

        <div class="card">
            <h3>Existing Admins</h3>
            <table>
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Last Login</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (mysqli_num_rows($admins) > 0): ?>
                        <?php while ($row = mysqli_fetch_assoc($admins)): ?>
                            <tr>
                                <td><strong><?php echo $row['full_name']; ?></strong></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><span class="badge"><?php echo $row['role']; ?></span></td>
                                <td><?php echo $row['last_login'] ? date('d M Y, h:i A', strtotime($row['last_login'])) : 'Never'; ?></td>
                                <td>
                                    <?php if ($row['id'] != $_SESSION['admin_id']): ?>
                                        <a href="delete-admin.php?id=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('Are you sure you want to delete this admin?')">Delete</a>
                                    <?php else: ?>
                                        <span style="color:#999;font-size:12px;">Current</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" style="text-align:center;color:#999;padding:30px;">No admin accounts found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>