<?php
// Connect to DB
$conn = new mysqli("localhost", "root", "", "user_system");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle search
$where = "";
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $search = $conn->real_escape_string($_GET['search']);
    $where .= " WHERE student_name LIKE '%$search%' OR course LIKE '%$search%'";
}

if (isset($_GET['course']) && !empty($_GET['course'])) {
    $course = $conn->real_escape_string($_GET['course']);
    if ($where == "") {
        $where .= " WHERE course = '$course'";
    } else {
        $where .= " AND course = '$course'";
    }
}

// Fetch student data
$sql = "SELECT * FROM admission $where";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Students</title>
  <link rel="stylesheet" href="assets.css">
  <style>
    body {
      margin: 0;
      font-family: "Segoe UI", Arial, sans-serif;
      background: #f4f6f9;
    }

    .container {
      display: flex;
    }

    /* Sidebar */
    .sidebar {
      width: 220px;
      background: linear-gradient(180deg, #1a1a1a, #2d2d2d);
      color: white;
      height: 100vh;
      position: fixed;
      padding-top: 20px;
      box-shadow: 2px 0 8px rgba(0,0,0,0.2);
    }
    .sidebar h3 {
      margin-bottom: 20px;
      text-align: center;
    }
    .sidebar a {
      color: #ddd;
      display: block;
      padding: 12px 20px;
      text-decoration: none;
      transition: all 0.3s ease;
      border-radius: 4px;
    }
    .sidebar a:hover {
      background: #007bff;
      color: #fff;
      transform: translateX(5px);
    }

    /* Main content */
    .content {
      margin-left: 220px;
      width: calc(100% - 220px);
      background: #f4f6f9;
      min-height: 100vh;
    }

    /* Top Red Header */
    .top-header {
      background: #dc3545;
      color: #fff;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 3px 6px rgba(0,0,0,0.15);
    }

    .top-header h2 {
      margin: 0;
      font-size: 24px;
      font-weight: 700;
      letter-spacing: 0.5px;
    }

    .top-header .actions {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .top-header input[type="text"], 
    .top-header select {
      padding: 8px 12px;
      border: none;
      border-radius: 6px;
      font-size: 14px;
      outline: none;
    }

    .btn {
      padding: 8px 14px;
      border: none;
      cursor: pointer;
      border-radius: 6px;
      font-size: 14px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn.blue {
      background: #2563eb;
      color: white;
    }

    .btn.red {
      background: #ff4d4d;
      color: white;
    }

    .btn:hover {
      opacity: 0.9;
      transform: translateY(-2px);
    }

    .btn.small {
      font-size: 13px;
      padding: 6px 10px;
    }

    /* Table */
    table {
      width: 95%;
      border-collapse: collapse;
      margin: 30px auto;
      background: white;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      border-radius: 8px;
      overflow: hidden;
    }

    th, td {
      padding: 12px;
      border: 1px solid #eee;
      text-align: center;
      font-size: 14px;
    }

    th {
      background: #2563eb;
      color: #fff;
      font-weight: 600;
    }

    tr:nth-child(even) {
      background: #f9f9f9;
    }

    tr:hover {
      background: #eef5ff;
    }

    img {
      border-radius: 6px;
    }
  </style>
</head>
<body>

<div class="container">
  <!-- Sidebar -->
  <div class="sidebar">
    <h3>Dashboard</h3>
    <a href="center-dashboard.php">🏠 Dashboard</a>
    <div style="padding: 0 20px;">
      <a href="#">🎓 Students ▾</a>
      <div style="margin-left: 20px;">
        <a href="admission.php" style="font-size: 14px;">• Admissions</a>
      </div>
    </div>
    <a href="attendance.php">🗓️ Attendance</a>
    <a href="fees.php">📄 Fees</a>
    <a href="exams.php">📘 Exams</a>
    <a href="certificate.php">📜 Certificates</a>
    <a href="report.php">📄 Report</a>
    <a href="logout.php">🚪 Back to Website</a>
  </div>

  <!-- Main Content -->
  <main class="content">

    <!-- Red Header -->
    <div class="top-header">
      <h2>Students</h2>
      <div class="actions">
        <!-- Search Form -->
        <form method="GET" style="display:flex; gap:8px;">
          <input type="text" name="search" placeholder="Search Students..."
                 value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
          <button type="submit" class="btn blue">Search</button>
        </form>

        <!-- Course Filter -->
        <form method="GET" style="display:flex; gap:8px;">
          <select name="course">
            <option value="">Select Course</option>
            <option value="CCC" <?php if(isset($_GET['course']) && $_GET['course']=="CCC") echo "selected"; ?>>CCC</option>
            <option value="Miracle" <?php if(isset($_GET['course']) && $_GET['course']=="Miracle") echo "selected"; ?>>Miracle</option>
            <option value="Ms Office" <?php if(isset($_GET['course']) && $_GET['course']=="Ms Office") echo "selected"; ?>>Ms Office</option>
            <option value="Tally" <?php if(isset($_GET['course']) && $_GET['course']=="Tally") echo "selected"; ?>>Tally</option>
            <option value="Web designing" <?php if(isset($_GET['course']) && $_GET['course']=="Web designing") echo "selected"; ?>>Web designing</option>
            <option value="DTP" <?php if(isset($_GET['course']) && $_GET['course']=="DTP") echo "selected"; ?>>DTP</option>
          </select>
          <button type="submit" class="btn blue">Apply</button>
        </form>

        <!-- New Admission Button -->
        <a href="student.php"><button type="button" class="btn blue">+ New Admission</button></a>
      </div>
    </div>

    <!-- Table -->
    <table>
      <thead>
        <tr>
          <th>S/N</th>
          <th>Photo</th>
          <th>Batch</th>
          <th>Student Name</th>
          <th>Course Interested</th>
          <th>Exam Mode</th>
          <th>Exam Code</th>
          <th>Username</th>
          <th>Password</th>
          <th>Mobile</th>
          <th>Admission Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sn = 1;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                  <td>{$sn}</td>
                  <td><img src='photos/{$row['photo']}' alt='Photo' width='80'></td>
                  <td>{$row['batch']}</td>
                  <td>{$row['student_name']}</td>
                  <td>{$row['course']}</td>
                  <td>{$row['exam_mode']}</td>
                  <td>{$row['exam_code']}</td>
                  <td>{$row['username']}</td>
                  <td>{$row['password']}</td>
                  <td>{$row['mobile']}</td>
                  <td>{$row['admission_date']}</td>
                  <td>
                    <a href='edit.php?id={$row['id']}'><button class='btn small blue'>Edit</button></a>
                    <a href='delete.php?id={$row['id']}'><button class='btn small red'>Delete</button></a>
                  </td>
                </tr>";
                $sn++;
            }
        } else {
            echo "<tr><td colspan='12'>No students found</td></tr>";
        }
        ?>
      </tbody>
    </table>

  </main>
</div>
</body>
</html>
