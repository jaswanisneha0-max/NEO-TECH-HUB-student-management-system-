<?php
include("db.php");
$date = date('Y-m-d');

foreach($_POST['attendance'] as $student_id => $status){
    // Check if already exists
    $check = mysqli_query($conn, "SELECT * FROM attendance WHERE student_id='$student_id' AND date='$date'");
    if(mysqli_num_rows($check) > 0){
        mysqli_query($conn, "UPDATE attendance SET status='$status' WHERE student_id='$student_id' AND date='$date'");
    } else {
        mysqli_query($conn, "INSERT INTO attendance (student_id, date, status) VALUES ('$student_id','$date','$status')");
    }
}
header("Location: attendance.php");
exit;
?>
