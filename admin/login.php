<?php
include('../includes/config.php');

if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: dashboard.php');
    exit();
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username = '$username' OR email = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $admin = mysqli_fetch_assoc($result);
        
        if (password_verify($password, $admin['password'])) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_username'] = $admin['username'];
            $_SESSION['admin_full_name'] = $admin['full_name'];
            $_SESSION['admin_role'] = $admin['role'];

            $update_query = "UPDATE admin SET last_login = NOW() WHERE id = " . $admin['id'];
            mysqli_query($conn, $update_query);

            header('Location: dashboard.php');
            exit();
        } else {
            $error = 'Invalid username or password!';
        }
    } else {
        $error = 'Invalid username or password!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - East West College</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f0f2f5 0%, #d4dbe8 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background: #ffffff;
            padding: 50px 40px;
            border-radius: 12px;
            box-shadow: 0 15px 50px rgba(0,0,0,0.15);
            max-width: 420px;
            width: 100%;
            border-top: 6px solid #4a90d9;
        }
        .login-container .logo {
            text-align: center;
            margin-bottom: 30px;
        }
        .login-container .logo h1 {
            font-size: 24px;
            color: #1a2332;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .login-container .logo span {
            color: #4a90d9;
        }
        .login-container .logo p {
            font-size: 14px;
            color: #777;
            margin-top: 5px;
        }
        .login-container h2 {
            font-size: 28px;
            color: #1a2332;
            text-align: center;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .login-container .subtitle {
            text-align: center;
            color: #777;
            font-size: 15px;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #1a2332;
            margin-bottom: 6px;
        }
        .form-group input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e0e4ea;
            border-radius: 8px;
            font-size: 15px;
            transition: border-color 0.3s ease;
            outline: none;
        }
        .form-group input:focus {
            border-color: #4a90d9;
        }
        .login-btn {
            width: 100%;
            padding: 14px;
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
        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(26, 35, 50, 0.3);
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
        .login-footer {
            text-align: center;
            margin-top: 20px;
        }
        .login-footer a {
            color: #4a90d9;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        .login-footer a:hover {
            color: #1a2332;
            text-decoration: underline;
        }
        .login-footer .divider {
            color: #ccc;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <h1>East West <span>College</span></h1>
            <p>Administrator Panel</p>
        </div>

        <h2>Welcome Back</h2>
        <p class="subtitle">Login to manage your college website</p>

        <?php if ($error): ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label>Username or Email</label>
                <input type="text" name="username" placeholder="Enter username or email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>

        <div class="login-footer">
            <a href="forget-password.php">Forgot Password?</a>
            <span class="divider">|</span>
            <a href="../pages/aboutu/about.php">Back to Website</a>
        </div>
    </div>
</body>
</html>