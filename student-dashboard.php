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
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f8fafc;
            color: #333;
            line-height: 1.6;
        }

        /* Sidebar */
        .sidebar {
            width: 240px;
            height: 100vh;
            background: linear-gradient(180deg, #1f2937, #374151);
            float: left;
            padding-top: 40px;
            position: fixed;
            top: 0;
            left: 0;
            box-shadow: 3px 0 20px rgba(0,0,0,0.1);
        }

        .sidebar a {
            display: block;
            padding: 14px 22px;
            margin: 10px 18px;
            color: #e5e7eb;
            text-decoration: none;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 500;
            transition: all 0.3s ease;
            letter-spacing: 0.5px;
        }

        .sidebar a:hover {
            background: linear-gradient(135deg, #06b6d4, #3b82f6);
            color: #fff;
            transform: translateX(6px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        /* Main Section */
        .main {
            margin-left: 240px;
            padding: 50px;
            min-height: 100vh;
        }

        /* Top Right Date-Time */
        .top-right {
            position: absolute;
            top: 20px;
            right: 40px;
            font-size: 14px;
            color: #555;
            background: #fff;
            padding: 10px 20px;
            border-radius: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        /* Card */
        .card {
            padding: 60px 40px;
            border-radius: 16px;
            margin-bottom: 30px;
            background: #fff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            text-align: center;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 16px 40px rgba(0,0,0,0.12);
        }

        .green {
            background: linear-gradient(135deg, #16a34a, #22c55e);
            color: white;
        }

        .blue {
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            color: white;
        }

        .red {
            background: linear-gradient(135deg, #dc2626, #ef4444);
            color: white;
        }

        /* Headings inside card */
        .card h2 {
            margin-top: 0;
            font-size: 30px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .card h1, .card p {
            margin: 15px 0;
            font-size: 22px;
            font-weight: 500;
        }

        /* Links inside card */
        .card a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 28px;
            background: #fff;
            color: #1f2937;
            font-weight: 600;
            border-radius: 10px;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 1px solid #e5e7eb;
        }

        .card a:hover {
            background: #f9fafb;
            transform: scale(1.08);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

<div class="sidebar">
    <a href="student-dashboard.php">Dashboard</a>
    <a href="take_student_admission.php">New Admission</a>
    <a href="student-fees.php">Fees</a>
    <a href="exam.php">Exam</a>
    <a href="student-profile.php">Profile</a>
    <a href="student_studies.php">Online Courses</a>
    <a href="student-logout.php">Logout</a>
</div>

<div class="main">
   
    <div class="card green">
        <h2>Student Dashboard</h2>
       <h1> <p>Welcome, <strong><?= $student['student_name'] ?></strong></p></h1>
      

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
    <img src="photos/<?= htmlspecialchars($student['photo']); ?>" alt="Student Photo">
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


    </div>
</div>

</body>
</html>
