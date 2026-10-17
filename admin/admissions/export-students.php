<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: ../login.php");
    exit();
}
$conn = mysqli_connect("localhost", "root", "", "ewcm");
if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

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

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=students_export_' . date('Y-m-d') . '.csv');

$output = fopen('php://output', 'w');
fputcsv($output, ['ID', 'Name', 'Email', 'Mobile', 'Course', 'Status', 'Submitted']);

while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($output, [
        $row['id'],
        $row['full_name'],
        $row['email'],
        $row['mobile'],
        $row['course'],
        $row['status'],
        $row['submitted_at']
    ]);
}

fclose($output);
mysqli_close($conn);
exit();