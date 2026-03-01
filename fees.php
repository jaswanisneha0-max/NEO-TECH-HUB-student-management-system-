<?php include 'nav.php'; ?>
<?php
include('db.php'); // Your DB connection file

$query = "SELECT * FROM admission";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Fees - NEO TECH HUB</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        .sidebar {
            width: 220px;
            background: linear-gradient(180deg, #1a1a1a, #2d2d2d);
            color: white;
            height: 100vh;
            position: fixed;
            padding-top: 20px;
            box-shadow: 2px 0 8px rgba(0,0,0,0.2);
        }
        .sidebar h3 {
            margin-bottom: 20px;
        }
        .sidebar a {
            color: #ddd;
            display: block;
            padding: 12px 20px;
            text-decoration: none;
            transition: all 0.3s ease;
            border-radius: 4px;
        }
        .sidebar a:hover {
            background: #007bff;
            color: #fff;
            transform: translateX(5px);
        }
        .main-content {
            margin-left: 220px;
            padding: 30px;
            width: calc(100% - 220px);
        }

        h2 {
            color: #333;
            margin-top: 10px;
            font-size: 26px;
            font-weight: 600;
        }

        table {
            width: 85%;
            border-collapse: collapse;
            margin-top: 25px;
            background: white;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 14px;
            border-bottom: 1px solid #eee;
            text-align: center;
            font-size: 15px;
        }
        th {
            background: #007bff;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        tr:hover {
            background: #f9fbff;
        }

        a.button {
            padding: 8px 14px;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            transition: all 0.3s ease;
            display: inline-block;
        }
        a.button:hover {
            background: #218838;
            transform: scale(1.05);
        }
        .btn-blue {
            background: #007bff !important;
        }
        .btn-blue:hover {
            background: #0056b3 !important;
        }
    </style>
</head>
<body>
<div class="sidebar">
  <h3 style="text-align: center;">Dashboard</h3>
  <a href="center-dashboard.php">🏠 Dashboard</a>
  <div style="padding: 0 20px;">
    <a href="students.php">🎓 Students ▾</a>
    <div style="margin-left: 20px;">
      <a href="admission.php" style="font-size: 14px;">• Admissions</a>
    </div>
  </div>
  <a href="attendance.php">🗓️ Attendance</a>
  <a href="fees.php">📄 Fees</a>
  <a href="exams.php">📘 Exams</a>
  <a href="certificate.php">📜 Certificates</a>
  <a href="report.php">📄 Report</a>
  <a href="logout.php">🚪 Back to Website</a>
</div>

<div class="main-content" align="center">
    <h2>Student Fees List - NEO TECH HUB</h2>

    <table>
        <tr>
            <th>Sr no.</th>
            <th>Student Name</th>
            <th>Course</th>
            <th>Mobile</th>
            <th>Fees</th>
            <th>Invoice</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['id'];?></td>

                <td><?= $row['student_name']; ?></td>
                <td><?= $row['course']; ?></td>
                <td><?= $row['mobile']; ?></td>
                <td><a href="submit-student-fees.php?admission_id=<?= $row['id']; ?>" class="button">Add/View</a></td>
                <td><a href="student-invoice.php?admission_id=<?= $row['id']; ?>" class="button btn-blue">Generate</a></td>
            </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
