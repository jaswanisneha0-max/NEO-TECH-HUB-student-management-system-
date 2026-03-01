<?php
session_start();
include 'db.php'; // ensure db connection is correct

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize inputs (important for security)
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Validate credentials
    $sql = "SELECT * FROM center WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $_SESSION['center_user'] = $username;

        // ✅ Redirect to center dashboard
        header("Location: center-dashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid login credentials!'); window.location.href='center-login.php';</script>";
    }
} else {
    header("Location: center-login.php");
    exit();
}
?>
