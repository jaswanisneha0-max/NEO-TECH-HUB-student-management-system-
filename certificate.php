<?php include 'nav.php'; ?>
<?php
include('db_conn.php'); // Ensure this file is correct

// Fetch students who have taken admission
$query = "SELECT * FROM admission ORDER BY id DESC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Certificates</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            margin: 0;
            background: #f4f6f9;
        }
        .dashboard-wrapper {
            display: flex;
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
            margin-top: 0;
            color: #333;
        }
        table {
            width: 85%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 3px 8px rgba(0,0,0,0.1);
        }
        thead {
            background: linear-gradient(135deg, #4e73df, #224abe);
            color: white;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        tbody tr:hover {
            background-color: #f1f5ff;
            transition: background 0.3s ease;
        }
        td a {
            display: inline-block;
            padding: 8px 14px;
            background: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: 0.3s;
        }
        td a:hover {
            background: #218838;
        }
        .no-data {
            text-align: center;
            padding: 20px;
            color: #777;
            font-style: italic;
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

<div class="main-content">
    <center>
        <h2>Certificates - NEO TECH HUB</h2>
    </center>
    <center>
        <table>
            <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>Name</th>
                    <th>Reg No</th>
                    <th>Course Interested</th>
                    <th>Admission Date</th>
                    <th>Certificate</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result && $result->num_rows > 0) {
                    $i = 1;
                    while ($row = $result->fetch_assoc()) {
                        $cert_url = 'generate-certificate.php?id=' . urlencode($row['id']) . '&cr=' . urlencode($row['course']);
                        echo "<tr>
                                <td>{$i}</td>
                                <td>" . htmlspecialchars($row['student_name']) . "</td>
                                <td>" . htmlspecialchars($row['exam_code']) . "</td>
                                <td>" . htmlspecialchars($row['course']) . "</td>
                                <td>" . htmlspecialchars($row['admission_date']) . "</td>
                                <td>
                                    <a href=\"{$cert_url}\">Generate</a>
                                </td>
                              </tr>";
                        $i++;
                    }
                } else {
                    echo "<tr><td colspan='6' class='no-data'>No student records found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </center>
</div>

</body>
</html>
