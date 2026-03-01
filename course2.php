<?php include 'nav.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Accounting Tally Course</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background: #f4f6f9;
      color: #333;
    }

    .course-details {
      max-width: 900px;
      margin: 40px auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.08);
      text-align: center;
    }

    .course-details h2 {
      font-size: 28px;
      margin-bottom: 20px;
      color: #2c3e50;
    }

    .course-details img {
      max-width: 250px;
      height: auto;
      margin-bottom: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .course-details p {
      font-size: 16px;
      margin: 10px 0;
      color: #555;
    }

    .course-details strong {
      color: #000;
    }

    /* Inquiry Form */
    .inquiry-form {
      max-width: 700px;
      margin: 40px auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    }

    .inquiry-form h3 {
      margin-bottom: 20px;
      font-size: 22px;
      color: #2c3e50;
      text-align: center;
    }

    .inquiry-form form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .inquiry-form input {
      padding: 12px;
      font-size: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      outline: none;
      transition: 0.3s ease;
    }

    .inquiry-form input:focus {
      border-color: #3498db;
      box-shadow: 0 0 6px rgba(52,152,219,0.4);
    }

    .btn {
      padding: 14px;
      font-size: 16px;
      background: linear-gradient(135deg, #3498db, #2980b9);
      color: #fff;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .btn:hover {
      background: linear-gradient(135deg, #2980b9, #1f6691);
      transform: translateY(-2px);
      box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }
  </style>
</head>
<body>

<div class="course-details">
  <h2>Accounting Tally Course</h2>
  <img src="tally.png" alt="Tally" />
  <p><strong>Duration:</strong> 2 months</p>
  <p><strong>Fees:</strong> ₹5400</p>
  <p><strong>Description:</strong> The Tally course is designed to equip students with fundamental computer knowledge...</p>
</div>

<!-- Inquiry Form -->
<div class="inquiry-form">
  <h3>Drop Message for your Query</h3>
  <form action="inquiry-save.php" method="post">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Email Address" required>
    <input type="text" name="phone" placeholder="Phone Number" required>

    <input type="text" name="preferred_course" value="Tally Course" readonly>
    <button type="submit" class="btn">Send Message →</button>
  </form>
</div>
   
</body>
</html>
