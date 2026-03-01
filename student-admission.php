<?php
session_start();
include 'db.php'; // or 'db.php'

if (!isset($_SESSION['student_username'])) {
    header('Location: student-login.php');
    exit();
}

$username = $_SESSION['student_username'];

// Use correct table name (student or admissions)
$query = "SELECT * FROM admission WHERE username = '$username'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query Failed: " . mysqli_error($conn));
}

$data = mysqli_fetch_assoc($result);
?>
