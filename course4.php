<?php include 'nav.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Accounting Miracle Course</title>
  <style>
    /* Reset & Base */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: #f4f7fa;
      color: #333;
      line-height: 1.6;
      padding: 20px;
    }

    /* Course Details Section */
    .course-details {
      max-width: 900px;
      margin: 40px auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
      transition: transform 0.2s ease;
    }

    .course-details:hover {
      transform: translateY(-3px);
    }

    .course-details h2 {
      font-size: 28px;
      margin-bottom: 15px;
      color: #1a73e8;
      font-weight: 700;
      text-transform: uppercase;
    }

    .course-details img {
      max-width: 100%;
      border-radius: 10px;
      margin: 20px 0;
      box-shadow: 0 4px 10px rgba(0,0,0,0.08);
    }

    .course-details p {
      font-size: 16px;
      margin-bottom: 10px;
    }

    .course-details strong {
      color: #222;
    }

    /* Inquiry Form Section */
    .inquiry-form {
      max-width: 800px;
      margin: 40px auto;
      padding: 30px;
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
    }

    .inquiry-form h3 {
      margin-bottom: 20px;
      font-size: 22px;
      font-weight: 600;
      color: #444;
      border-left: 5px solid #1a73e8;
      padding-left: 12px;
    }

    .inquiry-form form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .inquiry-form input {
      padding: 12px 14px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 15px;
      transition: border 0.2s ease, box-shadow 0.2s ease;
    }

    .inquiry-form input:focus {
      outline: none;
      border-color: #1a73e8;
      box-shadow: 0 0 6px rgba(26, 115, 232, 0.2);
    }

    .btn {
      background: #1a73e8;
      color: #fff;
      padding: 14px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .btn:hover {
      background: #155ab6;
    }

    /* Responsive */
    @media (max-width: 768px) {
      body {
        padding: 10px;
      }
      .course-details, .inquiry-form {
        padding: 20px;
      }
      .course-details h2 {
        font-size: 24px;
      }
    }
  </style>
</head>
<body>

<div class="course-details">
  <h2>MIRACLE</h2>
  <img src="miracle.jpg" alt="Miracle" />
  <p><strong>Duration:</strong> 2 months</p>
  <p><strong>Fees:</strong> ₹5400</p>
  <p><strong>Description:</strong> The Miracle course is designed to equip students with fundamental computer knowledge...</p>
</div>

<!-- Inquiry Form -->
<div class="inquiry-form">
  <h3>Drop Message for your Query</h3>
  <form action="inquiry-save.php" method="post">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Email Address" required>
    <input type="text" name="phone" placeholder="Phone Number" required>
 
    <input type="text" name="preferred_course" value="Miracle" readonly>
    <button type="submit" class="btn">Send Message →</button>
  </form>
</div>
   
</body>
</html>
