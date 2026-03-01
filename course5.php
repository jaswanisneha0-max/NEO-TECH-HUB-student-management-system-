<?php include 'nav.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Desk Top Publishing</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    /* Reset and base styling */
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: #f9f9fb;
      margin: 0;
      padding: 20px;
      color: #333;
    }

    .course-details {
      max-width: 900px;
      margin: 20px auto;
      padding: 30px;
      background: #ffffff;
      border-radius: 15px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.08);
      text-align: center;
      transition: transform 0.2s ease-in-out;
    }

    .course-details:hover {
      transform: translateY(-5px);
    }

    .course-details h2 {
      font-size: 28px;
      font-weight: 600;
      color: #2c3e50;
      margin-bottom: 15px;
    }

    .course-details img {
      width: 280px;
      height: auto;
      margin: 20px 0;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .course-details p {
      font-size: 16px;
      margin: 10px 0;
      line-height: 1.6;
    }

    .inquiry-form {
      max-width: 700px;
      margin: 40px auto;
      padding: 30px;
      background: #ffffff;
      border-radius: 15px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    }

    .inquiry-form h3 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 22px;
      font-weight: 600;
      color: #34495e;
    }

    .inquiry-form form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .inquiry-form input {
      padding: 14px;
      font-size: 15px;
      border: 1px solid #ddd;
      border-radius: 10px;
      outline: none;
      transition: all 0.3s ease;
    }

    .inquiry-form input:focus {
      border-color: #3498db;
      box-shadow: 0 0 8px rgba(52,152,219,0.2);
    }

    .inquiry-form .btn {
      padding: 14px;
      font-size: 16px;
      font-weight: 600;
      color: #fff;
      background: linear-gradient(135deg, #3498db, #2ecc71);
      border: none;
      border-radius: 12px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .inquiry-form .btn:hover {
      background: linear-gradient(135deg, #2ecc71, #3498db);
      transform: scale(1.05);
      box-shadow: 0 4px 15px rgba(0,0,0,0.15);
    }
  </style>
</head>
<body>

<div class="course-details">
  <h2>DTP</h2>
  <img src="dtp.jpg" alt="Miracle" />
  <p><strong>Duration:</strong> 2 months</p>
  <p><strong>Fees:</strong> ₹5400</p>
  <p><strong>Description:</strong> The DTP course is designed to equip students with fundamental computer knowledge...</p>
</div>

<!-- Inquiry Form -->
<div class="inquiry-form">
  <h3>Drop Message for your Query</h3>
  <form action="inquiry-save.php" method="post">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Email Address" required>
    <input type="text" name="phone" placeholder="Phone Number" required>
   
    <input type="text" name="preferred_course" value="DTP" readonly>
    <button type="submit" class="btn">Send Message →</button>
  </form>
</div>
   
</body>
</html>
