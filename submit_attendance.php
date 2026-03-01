<?php
$conn = new mysqli("localhost", "root", "", "user_system");

$present_ids = $_POST['present_ids'] ?? [];
$student_ids = $_POST['student_ids'] ?? [];
$date = $_POST['date'];

foreach ($student_ids as $sid) {
    $status = in_array($sid, $present_ids) ? 'Present' : 'Absent';

    // Prevent duplicate entry
    $check = $conn->query("SELECT * FROM attendance WHERE student_id=$sid AND date='$date'");
    if ($check->num_rows === 0) {
        $stmt = $conn->prepare("INSERT INTO attendance (student_id, batch, date, status) VALUES (?, (SELECT batch FROM student WHERE id = ?), ?, ?)");
        $stmt->bind_param("iiss", $sid, $sid, $date, $status);
        $stmt->execute();
    }
}
header("Location: attendance.php?batch=" . $_GET['batch']);
 <a href="index.php" class="btn">Return to Home</a>

?>
