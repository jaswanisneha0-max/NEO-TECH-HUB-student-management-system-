<?php
include('db.php');
$admission_id = $_GET['admission_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $amount = $_POST['amount'];
    $payment_mode = $_POST['payment_mode'];
    $transaction_id = $_POST['transaction_id'];
    $remarks = $_POST['remarks'];

    $insert = "INSERT INTO student_fees (admission_id, amount_paid, payment_date, payment_mode, transaction_id, remarks)
               VALUES ('$admission_id', '$amount', CURDATE(), '$payment_mode', '$transaction_id', '$remarks')";
    mysqli_query($conn, $insert);
}

$student = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM admission WHERE id = '$admission_id'"));
$fees = mysqli_query($conn, "SELECT * FROM student_fees WHERE admission_id = '$admission_id'");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Fees</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        input, select, textarea { width: 100%; padding: 10px; margin-top: 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 8px; border: 1px solid #ddd; }
        button { padding: 10px 15px; background: green; color: white; border: none; margin-top: 10px; }
    </style>
</head>
<body>
    <h3>Fees for: <?= $student['student_name']; ?> (<?= $student['course']; ?>)</h3>

    <form method="POST">
        <label>Amount Paid:</label>
        <input type="number" name="amount" required>

        <label>Payment Mode:</label>
        <select name="payment_mode" required>
            <option value="Cash">Cash</option>
            <option value="Online">Online</option>
            <option value="Cheque">Cheque</option>
        </select>

        <label>Transaction ID:</label>
        <input type="text" name="transaction_id" required>

        <label>Remarks:</label>
        <textarea name="remarks"></textarea>

        <button type="submit">Submit Fees</button>
    </form>

    <h4>Previous Payments:</h4>
    <table>
        <tr>
            <th>Date</th>
            <th>Amount</th>
            <th>Mode</th>
            <th>Txn ID</th>
            <th>Remarks</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($fees)) { ?>
            <tr>
                <td><?= $row['payment_date']; ?></td>
                <td><?= $row['amount_paid']; ?></td>
                <td><?= $row['payment_mode']; ?></td>
                <td><?= $row['transaction_id']; ?></td>
                <td><?= $row['remarks']; ?></td>
            </tr>
        <?php } ?>

    </table>
             <a href='fees.php'><button class='btn small red'>Back</button>

</body>
</html>
