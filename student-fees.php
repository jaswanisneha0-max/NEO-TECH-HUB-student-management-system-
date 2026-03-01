<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fees Payment</title>
  <link rel="stylesheet" href="css/style.css"> <!-- Your external CSS if needed -->
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #e0f7fa, #e3f2fd);
      margin: 0;
      padding: 0;
    }


    .fees-container {
      max-width: 900px;
      margin: 50px auto;
      background: #fff;
      padding: 40px;
      border-radius: 18px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
      animation: fadeIn 0.6s ease-in-out;
    }

    .fees-container h2 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 28px;
      color: #2c3e50;
      font-weight: 600;
    }

    .qr-section {
      text-align: center;
      margin-top: 20px;
    }

    .qr-section h1 {
      font-size: 22px;
      color: #34495e;
      margin-bottom: 18px;
    }

    .qr-section img {
      max-width: 240px;
      border-radius: 15px;
      padding: 10px;
      background: #fff;
      border: 2px solid #e0e0e0;
      box-shadow: 0 6px 15px rgba(0,0,0,0.15);
      transition: transform 0.3s ease;
    }

    .qr-section img:hover {
      transform: scale(1.05);
    }
 /* Sidebar */
        .sidebar {
            width: 240px;
            height: 100vh;
            background: linear-gradient(180deg, #1f2937, #374151);
            float: left;
            padding-top: 40px;
            position: fixed;
            top: 0;
            left: 0;
            box-shadow: 3px 0 20px rgba(0,0,0,0.1);
        }

        .sidebar a {
            display: block;
            padding: 14px 22px;
            margin: 10px 18px;
            color: #e5e7eb;
            text-decoration: none;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 500;
            transition: all 0.3s ease;
            letter-spacing: 0.5px;
        }

        .sidebar a:hover {
            background: linear-gradient(135deg, #06b6d4, #3b82f6);
            color: #fff;
            transform: translateX(6px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

    /* Buttons */
    .btn {
      display: inline-block;
      padding: 12px 25px;
      margin: 20px 10px 0;
      font-size: 16px;
      font-weight: 500;
      color: #fff;
      background: #3498db;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s ease;
      text-decoration: none;
    }

    .btn:hover {
      background: #217dbb;
      transform: translateY(-2px);
    }

    .btn.green {
      background: #27ae60;
    }

    .btn.green:hover {
      background: #1f8a4c;
    }

    /* Animation */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
<div class="sidebar">
    <a href="student-dashboard.php">Dashboard</a>
    <a href="take_student_admission.php">New Admission</a>
    <a href="student-fees.php">Fees</a>
    <a href="exam.php">Exam</a>
    <a href="student-profile.php">Profile</a>
    <a href="student_studies.php">Online Courses</a>
    <a href="student-logout.php">Logout</a>
</div>


<div class="fees-container">
  <h2>Student Fees Payment</h2>

  <div class="qr-section">
    <h1>Scan to Pay Online</h1>
    <img src="scanner.jpeg" alt="QR Code for Payment">
  </div>

  <div style="text-align:center;">
    <a href="student-dashboard.php" class="btn">⬅ Back</a>
  
  </div>
</div>

</body>
</html>
