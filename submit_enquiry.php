<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('includes/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $status = 'enquiry';

    $insert = "INSERT INTO enquiries (name, email, phone, course, message, status) 
               VALUES ('$name', '$email', '$phone', '$course', '$message', '$status')";
    $result = mysqli_query($conn, $insert);

    // (Optional) Send email later – we'll skip for now

    // Get the referring page
    $referer = $_SERVER['HTTP_REFERER'] ?? '/EWCM%20WEB/index.php';

    // Append the success parameter
    if (strpos($referer, '?') === false) {
        $referer .= '?enquiry=success';
    } else {
        $referer .= '&enquiry=success';
    }

    header("Location: $referer");
    exit();
} else {
    header('Location: /EWCM%20WEB/index.php');
    exit();
}
?>