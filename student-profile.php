<?php
session_start();
include 'db.php'; // your DB connection file

// Check if student is logged in
if (!isset($_SESSION['student_username'])) {
    header("Location: student-login.php");
    exit();
}

$username = $_SESSION['student_username'];

// Fetch student data
$query = "SELECT * FROM admission WHERE username = '$username'";
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) == 0) {
    echo "No data found for this student.";
    exit();
}

$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #eef2f3, #dfe9f3);
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


        .profile-container {
            width: 90%;
            max-width: 900px;
            margin: 40px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease-in-out;
        }

        .profile-container:hover {
            box-shadow: 0 12px 28px rgba(0,0,0,0.15);
        }

        .profile-header {
            background: linear-gradient(135deg, #4CAF50, #2e7d32);
            color: white;
            padding: 18px;
            font-size: 26px;
            font-weight: 600;
            text-align: center;
            border-radius: 12px 12px 0 0;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .profile-photo {
            text-align: center;
            margin: 25px 0;
        }

        .profile-photo img {
            width: 170px;
            height: 210px;
            object-fit: cover;
            border: 5px solid #4CAF50;
            border-radius: 12px;
            transition: transform 0.3s ease;
        }

        .profile-photo img:hover {
            transform: scale(1.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        td {
            padding: 14px 12px;
            font-size: 16px;
            border-bottom: 1px solid #f0f0f0;
        }

        td.label {
            font-weight: 600;
            width: 35%;
            color: #333;
        }

        td:not(.label) {
            color: #555;
        }

        a button {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 25px;
            font-size: 15px;
            font-weight: 600;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            background: linear-gradient(135deg, #1976d2, #0d47a1);
            color: #fff;
            transition: all 0.3s ease;
        }

        a button:hover {
            background: linear-gradient(135deg, #0d47a1, #1976d2);
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0,0,0,0.2);
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .profile-container {
                padding: 20px;
            }
            td {
                display: block;
                width: 100%;
            }
            td.label {
                margin-top: 10px;
            }
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


<div class="profile-container">
    <div class="profile-header">Student Profile</div>

   <div class="profile-photo">
    <img src="photos/<?= htmlspecialchars($data['photo']); ?>" alt="Student Photo">
</div>


    <table>
        <tr><td class="label">Student Name</td><td><?php echo $data['student_name']; ?></td></tr>
        <tr><td class="label">Institute Name</td><td>NEO TECH HUB</td></tr>
        <tr><td class="label">Student Code</td><td><?php echo $data['exam_code']; ?></td></tr>
        <tr><td class="label">Username</td><td><?php echo $data['username']; ?></td></tr>
        <tr><td class="label">Date of Birth</td><td><?php echo $data['dob']; ?></td></tr>
        <tr><td class="label">Mobile</td><td><?php echo $data['mobile']; ?></td></tr>
        <tr><td class="label">Email</td><td><?php echo $data['email']; ?></td></tr>
        <tr><td class="label">Address</td><td><?php echo $data['address']; ?></td></tr>
    </table>

    <a href='student-dashboard.php'><button class='btn small blue'>Back</button></a>
</div>

</body>
</html>
