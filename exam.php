<?php
session_start();
include('db.php');

if (!isset($_SESSION['student_username'])) {
    header("Location: student-login.php");
    exit();
}

$username = $_SESSION['student_username'];
$query = mysqli_query($conn, "SELECT * FROM admission WHERE username='$username'");
$data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Final Exams</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
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


        .exam-container {
            width: 95%;
            max-width: 1100px;
            margin: 50px auto;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }

        .exam-header {
            background: linear-gradient(135deg, #1abc9c, #16a085);
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 28px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead th {
            background-color: #3498db;
            color: #fff;
            text-transform: uppercase;
            font-size: 15px;
            letter-spacing: 0.5px;
            padding: 16px;
        }

        tbody td {
            padding: 16px;
            border-bottom: 1px solid #eee;
            font-size: 15px;
            color: #333;
        }

        tbody tr:hover {
            background-color: #f9fcff;
        }

        .btn {
            padding: 10px 18px;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-block;
            text-decoration: none;
        }

        .btn-red {
            background-color: #e74c3c;
            color: #fff;
        }

        .btn-red:hover {
            background-color: #c0392b;
        }

        .btn-green {
            background-color: #2ecc71;
            color: #fff;
        }

        .btn-green:hover {
            background-color: #27ae60;
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


<div class="exam-container">
    <div class="exam-header">Final Exams</div>
    <table>
        <thead>
            <tr>
                <th>Exam</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Final Attempted</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>20-07-2025</td>
                <td><?php echo $data['student_name']; ?></td>
                <td><?php echo $data['course']; ?></td>
                <td>0/100</td>
                <td>
                    <a href="final-exam.php" class="btn btn-green">Appear Final Exam</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
