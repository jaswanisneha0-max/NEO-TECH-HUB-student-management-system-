<?php
$conn = new mysqli("localhost", "root", "", "user_system");

$id = $_GET['id'] ?? 0;
$id = intval($id);

$result = $conn->query("SELECT * FROM admission WHERE id = $id");
if (!$result || $result->num_rows == 0) {
    echo "Student not found.";
    exit;
}
$student = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Student</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f4f6f9;
      margin: 0;
      padding: 0;
    }
    .container {
      width: 70%;
      margin: 40px auto;
      background: #fff;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #2c3e50;
      font-size: 24px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    table tr {
      border-bottom: 1px solid #e0e0e0;
    }
    table td {
      padding: 12px 10px;
      vertical-align: middle;
    }
    table td:first-child {
      width: 30%;
      font-weight: 600;
      color: #34495e;
    }
    input[type="text"],
    input[type="date"],
    input[type="file"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
      background: #fafafa;
    }
    input[type="text"]:focus,
    input[type="date"]:focus,
    input[type="file"]:focus {
      border-color: #3498db;
      outline: none;
      background: #fff;
    }
    .btn {
      display: inline-block;
      margin-top: 20px;
      padding: 12px 25px;
      background: #3498db;
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: 0.3s;
    }
    .btn:hover {
      background: #2c80b4;
    }
    .btn-container {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Edit Student Information</h2>
    <form action="update_student.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $student['id'] ?>">

      <table>
        <tr>
          <td>Full Name</td>
          <td><input type="text" name="student_name" value="<?= $student['student_name'] ?>" required></td>
        </tr>
        <tr>
          <td>Father's Name</td>
          <td><input type="text" name="father_name" value="<?= $student['father_name'] ?>"></td>
        </tr>
        <tr>
          <td>Batch</td>
          <td><input type="text" name="batch" value="<?= $student['batch'] ?>"></td>
        </tr>
        <tr>
          <td>Course</td>
          <td><input type="text" name="course" value="<?= $student['course'] ?>"></td>
        </tr>
        <tr>
          <td>Exam Mode</td>
          <td><input type="text" name="exam_mode" value="<?= $student['exam_mode'] ?>"></td>
        </tr>
        <tr>
          <td>Exam Code</td>
          <td><input type="text" name="exam_code" value="<?= $student['exam_code'] ?>"></td>
        </tr>
        <tr>
          <td>Username</td>
          <td><input type="text" name="username" value="<?= $student['username'] ?>"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="text" name="password" value="<?= $student['password'] ?>"></td>
        </tr>
        <tr>
          <td>Mobile</td>
          <td><input type="text" name="mobile" value="<?= $student['mobile'] ?>"></td>
        </tr>
        <tr>
          <td>Admission Date</td>
          <td><input type="date" name="admission_date" value="<?= $student['admission_date'] ?>"></td>
        </tr>
        <tr>
          <td>Upload New Photo (optional)</td>
          <td><input type="file" name="photo"></td>
        </tr>
        <tr>
          <td>Upload New Signature (optional)</td>
          <td><input type="file" name="signature"></td>
        </tr>
      </table>

      <div class="btn-container">
        <button type="submit" class="btn">Update Student</button>
      </div>
    </form>
  </div>
</body>
</html>
