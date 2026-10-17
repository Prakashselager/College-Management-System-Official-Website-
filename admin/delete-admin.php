<?php
include('../includes/config.php');

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    if ($id != $_SESSION['admin_id']) {
        $query = "DELETE FROM admin WHERE id = $id";
        mysqli_query($conn, $query);
    }
}

header('Location: manage-admins.php');
exit();
?>