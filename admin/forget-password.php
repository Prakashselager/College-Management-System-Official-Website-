<?php
include('../includes/config.php');

$message = '';
$error = '';
$show_question = false;
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        
        $query = "SELECT * FROM admin WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        
        if (mysqli_num_rows($result) === 1) {
            $admin = mysqli_fetch_assoc($result);
            $security_question = $admin['security_question'];
            
            $_SESSION['reset_email'] = $email;
            $_SESSION['security_question'] = $security_question;
            $show_question = true;
        } else {
            $error = 'Email not found in our records!';
        }
    } elseif (isset($_POST['security_answer']) && !empty($_POST['security_answer'])) {
        $answer = mysqli_real_escape_string($conn, $_POST['security_answer']);
        $reset_email = isset($_SESSION['reset_email']) ? $_SESSION['reset_email'] : '';
        
        if (!empty($reset_email)) {
            $query = "SELECT * FROM admin WHERE email = '$reset_email'";
            $result = mysqli_query($conn, $query);
            
            if (mysqli_num_rows($result) === 1) {
                $admin = mysqli_fetch_assoc($result);
                
                if (strtolower($answer) === strtolower($admin['security_answer'])) {
                    $new_password = password_hash('admin123', PASSWORD_DEFAULT);
                    $update_query = "UPDATE admin SET password = '$new_password' WHERE email = '$reset_email'";
                    mysqli_query($conn, $update_query);
                    $message = 'Password has been reset to: <strong>admin123</strong>. Please login and change it immediately.';
                    session_destroy();
                    session_start();
                } else {
                    $error = 'Incorrect security answer!';
                    $show_question = true;
                }
            }
        } else {
            $error = 'Session expired. Please try again.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - East West College</title>
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
        .reset-container {
            background: #ffffff;
            padding: 50px 40px;
            border-radius: 12px;
            box-shadow: 0 15px 50px rgba(0,0,0,0.15);
            max-width: 440px;
            width: 100%;
            border-top: 6px solid #4a90d9;
        }
        .reset-container .logo {
            text-align: center;
            margin-bottom: 25px;
        }
        .reset-container .logo h1 {
            font-size: 22px;
            color: #1a2332;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .reset-container .logo span {
            color: #4a90d9;
        }
        .reset-container h2 {
            font-size: 26px;
            color: #1a2332;
            text-align: center;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .reset-container .subtitle {
            text-align: center;
            color: #777;
            font-size: 15px;
            margin-bottom: 25px;
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
        .form-group input[readonly] {
            background: #f5f5f5;
            cursor: not-allowed;
        }
        .reset-btn {
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
        .reset-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(26, 35, 50, 0.3);
        }
        .success-message {
            background: #e8f8e8;
            color: #27ae60;
            padding: 15px 18px;
            border-radius: 8px;
            font-size: 14px;
            margin-bottom: 20px;
            border-left: 4px solid #27ae60;
            line-height: 1.8;
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
        .reset-footer {
            text-align: center;
            margin-top: 20px;
        }
        .reset-footer a {
            color: #4a90d9;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        .reset-footer a:hover {
            color: #1a2332;
            text-decoration: underline;
        }
        .reset-footer .divider {
            color: #ccc;
            margin: 0 10px;
        }
        .security-hint {
            background: #f0f4ff;
            padding: 12px 16px;
            border-radius: 8px;
            border-left: 4px solid #4a90d9;
            margin-bottom: 18px;
            font-size: 14px;
            color: #1a2332;
        }
    </style>
</head>
<body>
    <div class="reset-container">
        <div class="logo">
            <h1>East West <span>College</span></h1>
            <p>Password Recovery</p>
        </div>

        <h2>Reset Password</h2>
        <p class="subtitle">Enter your email to reset your password</p>

        <?php if ($message): ?>
            <div class="success-message"><?php echo $message; ?></div>
        <?php endif; ?>

        <?php if ($error): ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php endif; ?>

        <?php if ($show_question): ?>
            <form method="POST" action="">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" value="<?php echo isset($_SESSION['reset_email']) ? $_SESSION['reset_email'] : ''; ?>" readonly>
                </div>
                <div class="security-hint">
                    <strong>Security Question:</strong> <?php echo isset($_SESSION['security_question']) ? $_SESSION['security_question'] : ''; ?>
                </div>
                <div class="form-group">
                    <label>Your Answer</label>
                    <input type="text" name="security_answer" placeholder="Enter your security answer" required>
                </div>
                <button type="submit" class="reset-btn">Verify & Reset Password</button>
            </form>
        <?php else: ?>
            <form method="POST" action="">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Enter your registered email" required>
                </div>
                <button type="submit" class="reset-btn">Send Reset Link</button>
            </form>
        <?php endif; ?>

        <div class="reset-footer">
            <a href="login.php">Back to Login</a>
            <span class="divider">|</span>
            <a href="../pages/aboutu/about.php">Back to Website</a>
        </div>
    </div>
</body>
</html>