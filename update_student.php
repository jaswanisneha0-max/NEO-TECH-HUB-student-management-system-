<?php
$conn = new mysqli("localhost", "root", "", "user_system");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = intval($_POST['id']);

$student_name = $_POST['student_name'];
$father_name = $_POST['father_name'];
$batch = $_POST['batch'];
$course = $_POST['course'];
$exam_mode = $_POST['exam_mode'];
$exam_code = $_POST['exam_code'];
$username = $_POST['username'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];
$admission_date = $_POST['admission_date'];

// File handling
$photo = $_FILES['photo']['name'];
$signature = $_FILES['signature']['name'];

if ($photo) {
    // Make sure photos folder exists
    if (!is_dir("photos")) {
        mkdir("photos", 0777, true);
    }
    move_uploaded_file($_FILES['photo']['tmp_name'], "photos/$photo");
    $photo_sql = ", photo='$photo'";
} else {
    $photo_sql = "";
}

if ($signature) {
    // Make sure signature folder exists
    if (!is_dir("signature")) {
        mkdir("signature", 0777, true);
    }
    move_uploaded_file($_FILES['signature']['tmp_name'], "signature/$signature");
    $signature_sql = ", signature='$signature'";
} else {
    $signature_sql = "";
}

// ✅ FIXED: update the same table (admission)
$sql = "UPDATE admission SET
        student_name='$student_name',
        father_name='$father_name',
        batch='$batch',
        course='$course',
        exam_mode='$exam_mode',
        exam_code='$exam_code',
        username='$username',
        password='$password',
        mobile='$mobile',
        admission_date='$admission_date'
        $photo_sql
        $signature_sql
        WHERE id = $id";

if ($conn->query($sql)) {
    echo "<script>alert('Student updated successfully'); window.location.href='admission.php';</script>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
