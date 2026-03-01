<?php
include 'db.php';
session_start();

$center_name = $_SESSION['center_name'] ?? 'Center';

// Get counts
$student_count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM course_inquiry WHERE center_name = '$center_name'"));
$course_count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM courses"));
?>
<!DOCTYPE html>
<html>
<head>
  <title>Center Dashboard</title>
  <link rel="stylesheet" href="css/style.css">
  <?php include 'nav.php'; ?>
  <style>
    .dashboard-wrapper {
      display: flex;
    }
    .sidebar {
      width: 220px;
      background-color: #1a1a1a;
      color: white;
      height: 100vh;
      position: fixed;
      padding-top: 20px;
      transition: left 0.3s ease;
    }
    .sidebar a {
      color: white;
      display: block;
      padding: 12px 20px;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #333;
    }
    .main-content {
      margin-left: 220px;
      padding: 30px;
      width: calc(100% - 220px);
    }
    .dashboard-cards {
      display: flex;
      justify-content: space-between;
      margin-bottom: 30px;
      flex-wrap: wrap;
    }
    .card {
      flex: 1;
      margin: 10px;
      padding: 25px;
      text-align: center;
      border-radius: 12px;
      color: white;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }
    .card h3 {
      margin: 0;
      font-size: 28px;
    }
    .card p {
      margin-top: 10px;
      font-size: 16px;
    }
    .welcome {
      font-size: 24px;
      margin-bottom: 20px;
      font-weight: bold;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
    }
    table th, table td {
      padding: 12px;
      border: 1px solid #ccc;
      text-align: left;
    }
    table th {
      background-color: #efefef;
    }

    /* Different colors for each card */
    .students-card { background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); }
    .courses-card { background: linear-gradient(135deg, #ff512f 0%, #dd2476 100%); }
    .attendance-card { background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%); }

    /* Responsive Sidebar */
    @media (max-width: 768px) {
      .sidebar {
        width: 200px;
        left: -200px;
        position: fixed;
      }
      .sidebar.active {
        left: 0;
      }
      .main-content {
        margin-left: 0;
        width: 100%;
      }
      .toggle-btn {
        display: block;
        margin: 10px;
        font-size: 20px;
        cursor: pointer;
      }
    }
    .toggle-btn {
      display: none;
    }
  </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
  <h3 style="text-align: center;">Dashboard</h3>
  <a href="center-dashboard.php">🏠 Dashboard</a>
  <div style="padding: 0 20px;">
    <a href="admission.php">🎓 Students ▾</a>
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

<!-- Main content -->
<div class="main-content">
  <span class="toggle-btn" onclick="document.getElementById('sidebar').classList.toggle('active')">☰ Menu</span>

  <div class="welcome">Welcome, <?= htmlspecialchars($center_name) ?></div>
  
  <!-- Cards -->
  <div class="dashboard-cards">
    <div class="card students-card"><h3>50+</h3><p>Students</p></div>
    <div class="card courses-card"><h3>7+</h3><p>Courses</p></div>
    <div class="card attendance-card"><h3>✓</h3><p>Attendance</p></div>
  </div>

  <!-- Search box -->
  <input type="text" id="searchBox" placeholder="Search student / month..." style="margin-bottom:15px; padding:8px; width:100%; max-width:300px;">

  <!-- Table -->
  <h3>Recent Enquiries of Students</h3>
  <table id="enquiryTable">
    <tr>
      <th>Sr No.</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Subject</th>
      <th>Submitted At</th>
    </tr>
    <?php
    $enquiry_query = mysqli_query($conn, "SELECT * FROM contact_inquiries ORDER BY submitted_at DESC LIMIT 5");
    $j = 1;
    while($row = mysqli_fetch_assoc($enquiry_query)) {
        echo "<tr>
                <td>{$j}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['subject']}</td>
                <td>{$row['submitted_at']}</td>
              </tr>";
        $j++;
    }
    ?>
  </table>

</div>

<!-- ✅ Search filter script -->
<script>
  document.getElementById("searchBox").addEventListener("keyup", function() {
      let filter = this.value.toLowerCase();
      let rows = document.querySelectorAll("#enquiryTable tr");

      rows.forEach((row, index) => {
          if (index === 0) return; // skip header
          let text = row.innerText.toLowerCase();
          row.style.display = text.includes(filter) ? "" : "none";
      });
  });
</script>

</body>
</html>
