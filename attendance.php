<?php include 'nav.php'; ?>
<?php
include("db.php"); // your database connection
$date = date('Y-m-d');

// ✅ Handle form submit
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['attendance'])) {
    foreach ($_POST['attendance'] as $student_id => $status) {
        // Check if already marked for today
        $check = mysqli_query($conn, "SELECT * FROM attendance WHERE student_id='$student_id' AND date='$date'");
        if (mysqli_num_rows($check) > 0) {
            // Update record
            mysqli_query($conn, "UPDATE attendance SET status='$status' WHERE student_id='$student_id' AND date='$date'");
        } else {
            // Insert new record
            mysqli_query($conn, "INSERT INTO attendance (student_id, status, date) VALUES ('$student_id', '$status', '$date')");
        }
    }
    echo "<script>alert('Attendance saved successfully!'); window.location='attendance.php';</script>";
}

// ✅ Load students
$students = mysqli_query($conn, "SELECT * FROM admission");

// ✅ Load today’s attendance
$today_attendance = [];
$result = mysqli_query($conn, "SELECT * FROM attendance WHERE date='$date'");
while ($row = mysqli_fetch_assoc($result)) {
    $today_attendance[$row['student_id']] = $row['status'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Attendance</title>
    <style>
        /* === Sidebar === */
        body {
            margin: 0;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f7fa;
        }
        .sidebar {
            width: 230px;
            background: linear-gradient(180deg, #1a1a1a, #333);
            color: white;
            height: 100vh;
            position: fixed;
            padding-top: 20px;
            box-shadow: 2px 0px 8px rgba(0,0,0,0.2);
        }
        .sidebar h3 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 20px;
            letter-spacing: 1px;
        }
        .sidebar a {
            color: #ddd;
            display: block;
            padding: 12px 20px;
            text-decoration: none;
            font-size: 15px;
            transition: all 0.3s ease;
        }
        .sidebar a:hover {
            background-color: #444;
            color: #fff;
            padding-left: 25px;
        }

        /* === Main Content === */
        .main-content {
            margin-left: 230px;
            padding: 30px;
        }
        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #222;
            border-left: 5px solid #1a73e8;
            padding-left: 10px;
        }

        /* === Table Styling === */
        table {
            width: 90%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.05);
        }
        table th, table td {
            padding: 14px;
            border-bottom: 1px solid #eee;
            text-align: center;
        }
        table th {
            background: #1a73e8;
            color: white;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        table tr:hover {
            background: #f1f5ff;
        }

        /* === Select Dropdown === */
        select {
            padding: 8px 12px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
            background: #fff;
        }

        /* === Button === */
        button {
            padding: 12px 25px;
            background: #1a73e8;
            border: none;
            color: white;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            transition: background 0.3s ease;
        }
        button:hover {
            background: #1558b0;
        }

        /* === Responsive === */
        @media(max-width: 900px) {
            .sidebar {
                width: 180px;
            }
            .main-content {
                margin-left: 180px;
                padding: 20px;
            }
            table {
                width: 100%;
            }
        }
        @media(max-width: 600px) {
            .sidebar {
                display: none;
            }
            .main-content {
                margin: 0;
                width: 100%;
            }
            table th, table td {
                font-size: 13px;
                padding: 10px;
            }
            button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<div class="sidebar">
  <h3>📊 Dashboard</h3>
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
  <a href="report.php">📑 Report</a>
  <a href="logout.php">🚪 Logout</a>
</div>

<div class="main-content">
    <h2>Attendance - <?php echo $date; ?></h2>
    <form method="POST">
    <center>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Student Name</th>
                    <th>Course</th>
                    <th>Batch</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sn = 1;
            while ($row = mysqli_fetch_assoc($students)) {
                $current_status = $today_attendance[$row['id']] ?? '';
                echo "<tr>
                    <td>{$sn}</td>
                    <td>{$row['student_name']}</td>
                    <td>{$row['course']}</td>
                    <td>{$row['batch']}</td>
                    <td>
                        <select name='attendance[{$row['id']}]'>
                            <option value='Present' ".($current_status=='Present'?'selected':'').">Present</option>
                            <option value='Absent' ".($current_status=='Absent'?'selected':'').">Absent</option>
                        </select>
                    </td>
                </tr>";
                $sn++;
            }
            ?>
            </tbody>
        </table>
    </center>
        <br>
        <center><button type="submit">💾 Save Attendance</button></center>
    </form>
</div>
</body>
</html>
