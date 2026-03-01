<?php
$conn = new mysqli("localhost", "root", "", "user_system");

$payment_id = $_GET['payment_id'] ?? null;

if (!$payment_id) die("No payment ID!");

$res = $conn->query("
    SELECT fees.*, admission.student_name, admission.id AS reg_id 
    FROM fees 
    JOIN admission ON fees.student_id = admission.id 
    WHERE fees.id = $payment_id
");

if ($res->num_rows === 0) die("Invalid payment ID.");
$data = $res->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Receipt</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background-color: #f4f4f4; }
        .receipt-box {
            background: #fff;
            border: 1px solid #ccc;
            padding: 30px;
            max-width: 700px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            height: 70px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 12px;
            border: 1px solid #ddd;
            font-size: 16px;
        }
        .label {
            background-color: #f8f8f8;
            font-weight: bold;
            width: 40%;
        }
    </style>
</head>
<body>

<div class="receipt-box">
    <div class="logo">
        <img src="logo.png" alt="Logo" />
    </div>
    <h2>Student Fees Payment Receipt</h2>
    <table>
        <tr>
            <td class="label">Receipt Number</td>
            <td>#<?= $data['id'] ?></td>
        </tr>
        <tr>
            <td class="label">Date</td>
            <td><?= $data['payment_date'] ?></td>
        </tr>
        <tr>
            <td class="label">Student Name</td>
            <td><?= $data['student_name'] ?> (OAEU<?= str_pad($data['reg_id'], 4, '0', STR_PAD_LEFT) ?>)</td>
        </tr>
        <tr>
            <td class="label">Amount Paid</td>
            <td>₹<?= $data['amount_paid'] ?></td>
        </tr>
        <tr>
            <td class="label">Payment Mode</td>
            <td><?= $data['payment_mode'] ?></td>
        </tr>
        <tr>
            <td class="label">Reference</td>
            <td><?= $data['remarks'] ?: 'N/A' ?></td>
        </tr>
    </table>
</div>

</body>
</html>
