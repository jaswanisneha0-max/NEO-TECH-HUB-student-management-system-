<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "user_system";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$preferred_course = $_POST['preferred_course'];

$sql = "INSERT INTO contact_inquiries (name, email, phone, subject, preferred_course)
        VALUES ('$name', '$email', '$phone', '$subject', '$preferred_course')";

if ($conn->query($sql) === TRUE) {
  header("Location: thank-you.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
