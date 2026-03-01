<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "user_system");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle file upload
$photo = $_FILES['photo']['name'];
$photo="user_system_admission_9";
$photo_tmp = $_FILES['photo']['tmp_name'];
move_uploaded_file($photo_tmp, "photos/" . $photo);

// Collect form data
$name = $_POST['name'];
$father_name = $_POST['father_name'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$course = $_POST['course'];
$batch = $_POST['batch'];
$exam_mode = $_POST['exam_mode'];
$exam_code = $_POST['exam_code'];
$username = $_POST['username'];
$password = $_POST['password'];
$address = $_POST['address'];
$id_type = $_POST['id_type'];
$id_number = $_POST['id_number'];
$course_fee = $_POST['course_fee'];
$remarks = $_POST['remarks'];
$admission_date = date("Y-m-d");

// Insert data into the student table
$sql = "INSERT INTO admission (photo, student_name, father_name, gender, dob, mobile, email, course, batch, exam_mode, exam_code, username, password, address, id_type, id_number, course_fee, remarks, admission_date)
VALUES ('$photo', '$name', '$father_name', '$gender', '$dob', '$mobile', '$email', '$course', '$batch', '$exam_mode', '$exam_code', '$username', '$password', '$address', '$id_type', '$id_number', '$course_fee', '$remarks', '$admission_date')";

if ($conn->query($sql) === TRUE) {
    header("Location: admission.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
