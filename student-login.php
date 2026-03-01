<?php include 'navs.php'; ?>
<?php
session_start();
include("db_conn.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admission WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $_SESSION['student_username'] = $username;
        header("Location: student-dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Secure Login</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background: #f7f7f7;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #e74c3c;
            padding: 10px 0;
            text-align: center;
            color: #fff;
            font-size: 20px;
        }
        .login-container {
            max-width: 400px;
            margin: 40px auto;
            background: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            padding: 30px;
            border-radius: 8px;
        }
        .login-container h2 {
            text-align: center;
            color: #e74c3c;
        }
        .login-container label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-container button {
            margin-top: 20px;
            width: 100%;
            background: #e74c3c;
            color: white;
            border: none;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .login-container button:hover {
            background: #c0392b;
        }
        .error-msg {
            color: red;
            margin-top: 15px;
            text-align: center;
        }
        .forgot-password {
            text-align: center;
            margin-top: 15px;
        }
        .forgot-password a {
            color: #e74c3c;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        .forgot-password a:hover {
            color: #c0392b;
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login to Continue</h2>

    <?php if (!empty($error)) echo "<div class='error-msg'>$error</div>"; ?>

    <form method="POST" action="">
        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <button type="submit" name="login">Login Now</button>
    </form>

    <div class="forgot-password">
        <a href="forgot-password.php">Forgot Password?</a>
    </div>
</div>

</body>
</html>
