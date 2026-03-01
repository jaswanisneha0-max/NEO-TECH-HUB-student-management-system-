<?php
// DB Connection
$conn = new mysqli("localhost", "root", "", "user_system");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // First delete related rows in student_fees
    $conn->query("DELETE FROM student_fees WHERE admission_id = $id");

    // Then delete the student from admission
    $sql = "DELETE FROM admission WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: admission.php?msg=deleted");
        exit();
    } else {
        echo "Error deleting student: " . $conn->error;
    }
} else {
    echo "Invalid request!";
}
?>
