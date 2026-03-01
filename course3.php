<?php include 'nav.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ms-Word Course</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f4f7fb;
      margin: 0;
      padding: 40px 20px;
    }

    .course-details {
      max-width: 800px;
      margin: auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.08);
      text-align: center;
      margin-bottom: 40px;
    }

    .course-details h2 {
      color: #2c3e50;
      margin-bottom: 20px;
      font-size: 28px;
      font-weight: 600;
    }

    .course-details img {
      max-width: 200px;
      height: auto;
      margin: 20px 0;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .course-details p {
      font-size: 16px;
      color: #555;
      margin: 8px 0;
    }

    /* Inquiry Form */
    .inquiry-form {
      max-width: 600px;
      margin: auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    }

    .inquiry-form h3 {
      margin-bottom: 20px;
      color: #2c3e50;
      font-size: 22px;
      text-align: center;
    }

    .inquiry-form input {
      width: 100%;
      padding: 12px 15px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
      transition: border 0.3s;
    }

    .inquiry-form input:focus {
      border-color: #3498db;
      outline: none;
    }

    .inquiry-form .btn {
      background: #3498db;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      transition: background 0.3s, transform 0.2s;
      width: 100%;
      margin-top: 10px;
    }

    .inquiry-form .btn:hover {
      background: #2980b9;
      transform: translateY(-2px);
    }
  </style>
</head>
<body>

<div class="course-details">
  <h2>Ms-Word Course</h2>
  <img src="ms-office.jpg" alt="Ms-office" />
  <p><strong>Duration:</strong> 2 months</p>
  <p><strong>Fees:</strong> ₹5400</p>
  <p><strong>Description:</strong> The Ms-Word course is designed to equip students with fundamental computer knowledge...</p>
</div>

<!-- Inquiry Form -->
<div class="inquiry-form">
  <h3>Drop Message for your Query</h3>
  <form action="inquiry-save.php" method="post">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Email Address" required>
    <input type="text" name="phone" placeholder="Phone Number" required>
    
    <input type="text" name="preferred_course" value="Ms-Office" readonly>
    <button type="submit" class="btn">Send Message →</button>
  </form>
</div>
   
</body>
</html>
