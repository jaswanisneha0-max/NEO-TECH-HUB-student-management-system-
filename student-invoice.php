<?php
$id=$_GET['admission_id'];
include('db.php'); // Your DB connection file

$query = "SELECT * FROM admission where id=$id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Sample data for demo (replace this with your database logic)
/*$student_name = "Sneha Jaswani";
$course_name = "Web Development";*/
$amount_paid = 3500;
$total_fee = 5000;
//$date = date("d-m-Y");
$invoice_no = "INV" . rand(1000, 9999);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Invoice - NEO TECH HUB</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            background: khakhi;
        }

        .invoice-box {
            max-width: 800px;
            margin: 40px auto;
            padding: 30px;
            border: 1px solid #ccc;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            background:lightblue;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .invoice-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .invoice-header img {
            width: 130px;
            margin-bottom: 10px;
        }

        .invoice-details, .fees-table {
            width: 100%;
            margin-top: 20px;
        }

        .invoice-details td {
            padding: 8px;
            color: #444;
        }

        .fees-table {
            border-collapse: collapse;
        }

        .fees-table th, .fees-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        .fees-table th {
            background: #002b5c;
            color: #fff;
        }

        .total-row {
            font-weight: bold;
        }

        .btn-container {
            text-align: center;
            margin-top: 30px;
        }

        .btn-print {
            padding: 10px 20px;
            background: #002b5c;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-print:hover {
            background: #004080;
        }

        @media print {
            .btn-print {
                display: none;
            }
        }
    </style>
</head>
<body>

<div class="invoice-box">
    <div class="invoice-header">
        <img src="logo-aroundss.png" alt="NEO TECH HUB Logo" height="140px" >
        <h1>NEO TECH HUB - Fee Invoice</h1>
    </div>

    <table class="invoice-details">
        <tr>
            <td><strong>Invoice No:</strong> <?php echo $invoice_no; ?></td>
            <td><strong>Date:</strong> <?php echo $row['admission_date']; ?></td>
        </tr>
        <tr>
            <td><strong>Student Name:</strong> <?php echo $row['student_name']; ?></td>
            <td><strong>Course:</strong> <?php echo $row['course']; ?></td>
        </tr>
    </table>

    <table class="fees-table">
        <tr>
            <th>Description</th>
            <th>Amount</th>
        </tr>
        <tr>
            <td>Total Fee</td>
            <td>₹<?php echo number_format($amount_paid, 2); ?></td>
        </tr>
        <tr>
            <td>Amount Paid</td>
            <td>₹<?php echo number_format($amount_paid, 2); ?></td>
        </tr>
        <tr class="total-row">
            <td>Due Amount</td>
            <td>₹<?php echo number_format($amount_paid, 2); ?></td>
        </tr>
    </table>

    <div class="btn-container">
        <button class="btn-print" onclick="window.print()">🖨️ Print Invoice</button>
    </div>
</div>

</body>
</html>
