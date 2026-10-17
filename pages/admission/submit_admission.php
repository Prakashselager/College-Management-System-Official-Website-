<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysqli_connect("localhost", "root", "", "ewcm");
if (!$conn) die("DB connect failed: " . mysqli_connect_error());

// Sanitize inputs
$full_name = mysqli_real_escape_string($conn, $_POST['full_name'] ?? '');
$dob = $_POST['dob'] ?? '';
$gender = $_POST['gender'] ?? '';
$nationality = mysqli_real_escape_string($conn, $_POST['nationality'] ?? '');
$father_name = mysqli_real_escape_string($conn, $_POST['father_name'] ?? '');
$mother_name = mysqli_real_escape_string($conn, $_POST['mother_name'] ?? '');
$email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
$mobile = mysqli_real_escape_string($conn, $_POST['mobile'] ?? '');
$address = mysqli_real_escape_string($conn, $_POST['address'] ?? '');
$course = mysqli_real_escape_string($conn, $_POST['course'] ?? '');
$academic_year = $_POST['academic_year'] ?? '';
$qualifying_exam = $_POST['qualifying_exam'] ?? '';
$board = mysqli_real_escape_string($conn, $_POST['board'] ?? '');
$passing_year = (int)($_POST['passing_year'] ?? 0);
$percentage = (float)($_POST['percentage'] ?? 0);
$declaration = isset($_POST['declaration']) ? 1 : 0;

// Upload folder
$upload_dir = "../../uploads/admissions/";
if (!is_dir($upload_dir)) {
    if (!mkdir($upload_dir, 0777, true)) {
        die("Failed to create upload folder. Check parent folder permissions.");
    }
}
if (!is_writable($upload_dir)) {
    die("Upload folder is not writable. Please set permissions for: " . $upload_dir);
}

$prefix = time() . "_" . rand(1000, 9999) . "_";

function uploadFile($file, $upload_dir, $prefix, $allowed = ['jpg','jpeg','png','pdf']) {
    if ($file['error'] !== UPLOAD_ERR_OK) {
        return ['error' => true, 'message' => "Upload error code: " . $file['error']];
    }
    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    if (!in_array($ext, $allowed)) {
        return ['error' => true, 'message' => "Invalid file type: $ext"];
    }
    $max_size = 5 * 1024 * 1024;
    if ($file['size'] > $max_size) {
        return ['error' => true, 'message' => "File too large: " . $file['size'] . " bytes"];
    }
    $filename = $prefix . $file['name'];
    $destination = $upload_dir . $filename;
    if (move_uploaded_file($file['tmp_name'], $destination)) {
        return ['error' => false, 'path' => $filename];
    } else {
        return ['error' => true, 'message' => "Failed to move uploaded file."];
    }
}

// Upload files
$photo = uploadFile($_FILES['photo'], $upload_dir, $prefix);
if ($photo['error']) die("Photo upload failed: " . $photo['message']);

$signature = uploadFile($_FILES['signature'], $upload_dir, $prefix);
if ($signature['error']) die("Signature upload failed: " . $signature['message']);

$marksheet = uploadFile($_FILES['marksheet'], $upload_dir, $prefix);
if ($marksheet['error']) die("Marksheet upload failed: " . $marksheet['message']);

$caste_path = NULL;
if ($_FILES['caste_cert']['error'] === UPLOAD_ERR_OK) {
    $caste = uploadFile($_FILES['caste_cert'], $upload_dir, $prefix);
    if (!$caste['error']) $caste_path = $caste['path'];
}

// Insert query
$sql = "INSERT INTO admissions (
    full_name, dob, gender, nationality, father_name, mother_name,
    email, mobile, address, course, academic_year, qualifying_exam, board,
    passing_year, percentage, photo_path, signature_path, marksheet_path,
    caste_path, declaration, status, submitted_at
) VALUES (
    '$full_name', '$dob', '$gender', '$nationality', '$father_name', '$mother_name',
    '$email', '$mobile', '$address', '$course', '$academic_year', '$qualifying_exam', '$board',
    '$passing_year', '$percentage', '{$photo['path']}', '{$signature['path']}',
    '{$marksheet['path']}', '$caste_path', '$declaration', 'Pending', NOW()
)";

if (mysqli_query($conn, $sql)) {
    header("Location: of.php?success=1");
    exit();
} else {
    die("Database insert error: " . mysqli_error($conn));
}
mysqli_close($conn);
?>