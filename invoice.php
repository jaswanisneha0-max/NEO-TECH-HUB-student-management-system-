<?php
$conn = new mysqli("localhost", "root", "", "user_system");
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM fees WHERE id = $id");
$data = $result->fetch_assoc();

// Get student details
$student = $conn->query("SELECT * FROM admission WHERE student_name = '{$data['student_name']}'")->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fee Receipt</title>
    <style>
        body { font-family: Arial; padding: 40px; }
        .receipt-box {
            max-width: 700px;
            padding: 20px;
            border: 1px solid #eee;
            margin: auto;
        }
        .header {
            font-size: 24px;
            text-align: center;
            font-weight: bold;
        }
        table { width: 100%; margin-top: 20px; }
        td { padding: 8px; }
    </style>
</head>
<body>
<div class="receipt-box">
    <div class="header">FEE RECEIPT - CCC COMPUTER ACADEMY</div>
    <table>
        <tr><td>Receipt Number:</td><td><?= date("Ymd") . "/SOAEU00-" . $id ?></td></tr>
        <tr><td>Receipt Date:</td><td><?= $data['paid_date'] ?></td></tr>
        <tr><td>Student Name:</td><td><?= $data['student_name'] ?></td></tr>
        <tr><td>Batch Name:</td><td><?= $student['batch'] ?? 'N/A' ?></td></tr>
        <tr><td>Course Name:</td><td><?= $student['course'] ?? 'N/A' ?></td></tr>
        <tr><td>Course Fees:</td><td><?= $student['total_fees'] ?? '0.00' ?></td></tr>
        <tr><td>Fees Received:</td><td><?= $data['amount'] ?></td></tr>
        <tr><td>Due Amount:</td><td><?= ($student['total_fees'] ?? 0) - $data['amount'] ?></td></tr>
    </table>
</div>
</body>
</html>
