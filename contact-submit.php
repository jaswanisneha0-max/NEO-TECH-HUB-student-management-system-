<?php
include 'db.php'; // database connection

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $query = "INSERT INTO contact_messages (name, email, phone, subject, message)
              VALUES ('$name', '$email', '$phone', '$subject', '$message')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Message sent successfully!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Error sending message.'); window.history.back();</script>";
    }
}
?>
