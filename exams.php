<?php
// Connect to database
$conn = new mysqli("localhost", "root", "", "user_system");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all students from admission table
$result = $conn->query("SELECT * FROM admission");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Exam</title>
    <link rel="stylesheet" href="css/style.css"> <!-- External CSS -->
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        background-color: #f4f6f9;
    }

    /* Layout */
    .dashboard-wrapper {
        display: flex;
    }

    .sidebar {
        width: 220px;
        background: linear-gradient(180deg, #1f2937, #111827);
        color: white;
        height: 100vh;
        position: fixed;
        padding-top: 20px;
        box-shadow: 2px 0 6px rgba(0,0,0,0.2);
    }

    .sidebar h3 {
        margin-bottom: 20px;
        font-size: 20px;
    }

    .sidebar a {
        color: #d1d5db;
        display: block;
        padding: 12px 20px;
        text-decoration: none;
        transition: 0.3s;
        border-radius: 6px;
        margin: 4px 8px;
    }

    .sidebar a:hover {
        background-color: #2563eb;
        color: white;
    }

    .main-content {
        margin-left: 220px;
        padding: 30px;
        width: calc(100% - 220px);
    }

    h2 {
        margin: 20px 0;
        text-align: center;
        color: #1f2937;
        font-size: 26px;
    }

    /* Table Styling */
    table {
        width: 85%;
        border-collapse: collapse;
        margin: 20px auto;
        background-color: white;
        box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        border-radius: 10px;
        overflow: hidden;
    }

    table thead {
        background: #2563eb;
        color: white;
    }

    table th, table td {
        padding: 14px 12px;
        text-align: center;
        font-size: 15px;
    }

    table tr:nth-child(even) {
        background-color: #f9fafb;
    }

    table tr:hover {
        background-color: #eef2ff;
        transition: 0.2s;
    }

    /* Button Styling */
    a.btn-certificate,
    table td a {
        display: inline-block;
        padding: 8px 14px;
        background-color: #10B981;
        color: white;
        font-size: 14px;
        border-radius: 6px;
        text-decoration: none;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s;
    }

    a.btn-certificate:hover,
    table td a:hover {
        background-color: #059669;
        transform: translateY(-2px);
    }

    /* Total Students (optional small section) */
    .total {
        margin: 20px auto;
        font-weight: bold;
        text-align: right;
        width: 85%;
        color: #374151;
    }
    </style>
</head>

<body>
<?php include("nav.php"); ?>

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

<div class="main-content">
    <h2>Student Exam Page</h2>

    <?php if ($result->num_rows > 0): ?>
    <table>
        <thead>
            <tr>
                <th>Sr No.</th>
                <th>Student Name</th>
                <th>Reg No</th>
                <th>Batch</th>
                <th>Exams PDF</th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 1; while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $count++; ?></td>
                <td><?= htmlspecialchars($row['student_name']); ?></td>
                <td><?= htmlspecialchars($row['exam_code']); ?></td>
                <td><?= htmlspecialchars($row['batch']); ?></td>
                <td>
                   <a href="exam-pdfs.php">PDF of Exams</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <?php else: ?>
        <p style="text-align:center;color:#6b7280;">No students found.</p>
    <?php endif; ?>
</div>

</body>
</html>
