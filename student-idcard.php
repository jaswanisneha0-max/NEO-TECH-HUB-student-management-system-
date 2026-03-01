<?php
session_start();
include("db.php");

if (!isset($_SESSION['student_username'])) {
    header("Location: student-login.php");
    exit();
}

$username = $_SESSION['student_username'];
$query = "SELECT * FROM admission WHERE username='$username'";
$result = mysqli_query($conn, $query);
$student = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>ID Card</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: lightblue; /* Dark Blue */
            padding: 40px;
            text-align: center;
        }
        .id-card {
            width: 420px;
            margin: auto;
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.25);
            border: 5px solid #004aad; /* Royal blue border */
            position: relative;
        }
        .id-header {
            background: #004aad;
            color: white;
            padding: 15px;
            font-size: 22px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .id-photo img {
            width: 130px;
            height: 160px;
            object-fit: cover;
            border: 3px solid #004aad;
            border-radius: 12px;
            margin: 20px auto 10px;
            display: block;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.3);
        }
        .id-details {
            text-align: left;
            padding: 15px 30px;
            font-size: 16px;
            line-height: 1.8;
            color: #222;
        }
        .id-details span {
            font-weight: bold;
            color: #004aad;
        }
        .qr-code {
            margin: 20px auto 25px;
        }
        .qr-code img {
            width: 90px;
            border: 2px solid #004aad;
            border-radius: 10px;
            padding: 5px;
            background: #f9f9f9;
        }
        /* Bottom bar */
        .id-footer {
            background: #004aad;
            color: white;
            padding: 8px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>

<div class="id-card">
    <!-- Header -->
    <div class="id-header">
       Student ID Card
    </div>

   <!-- Student Photo -->
    <div class="id-photo">
        <img src="<?= $student['photo'] ?>" alt="Student Photo">
    </div>


     <!-- Student Details -->
    <h1><div class="id-details">
        Student Name : <span><?= $student['student_name'] ?></span><br>
        Course Name : <span><?= $student['course'] ?></span><br>
        Mobile No.  : <span><?= $student['mobile'] ?></span><br>
        Date of Joining : <span><?= date("d M Y", strtotime($student['admission_date'])) ?></span>
    </div></h1>

    <!-- QR Code (Static or Generated Later) -->
    <div class="qr-code">
        <img src="qrcode.png" width="80">
    </div>
</div>


    <!-- Footer -->
    <div class="id-footer">
        Institute of Computer Studies
    </div>
</div>

</body>
</html>
