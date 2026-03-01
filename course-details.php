<?php include 'nav.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Course on Computer Concepts (CCC)</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    /* Reset & Base */
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background: #f4f9ff;
      color: #333;
      line-height: 1.6;
    }

    h2, h3 {
      color: #2b6cb0;
    }

    a {
      text-decoration: none;
    }

    /* Course Section */
    .course-details {
      max-width: 900px;
      margin: 40px auto;
      padding: 30px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
      text-align: center;
    }

    .course-details h2 {
      font-size: 28px;
      margin-bottom: 15px;
      font-weight: 600;
    }

    .course-details img {
      width: 240px;
      height: auto;
      margin: 20px 0;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .course-details p {
      font-size: 16px;
      margin: 10px 0;
    }

    .course-details strong {
      color: #1a202c;
    }

    /* Inquiry Form */
    .inquiry-form {
      max-width: 600px;
      margin: 40px auto;
      padding: 30px;
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.08);
    }

    .inquiry-form h3 {
      font-size: 22px;
      margin-bottom: 20px;
      font-weight: 600;
      text-align: center;
      color: #2b6cb0;
    }

    .inquiry-form form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .inquiry-form input {
      padding: 12px 15px;
      border: 1px solid #cbd5e0;
      border-radius: 8px;
      font-size: 15px;
      transition: 0.3s;
    }

    .inquiry-form input:focus {
      border-color: #2b6cb0;
      box-shadow: 0 0 5px rgba(43,108,176,0.4);
      outline: none;
    }

    .btn {
      background: #2b6cb0;
      color: #fff;
      border: none;
      padding: 14px;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      font-weight: 500;
      transition: background 0.3s, transform 0.2s;
    }

    .btn:hover {
      background: #1a4f8b;
      transform: translateY(-2px);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .course-details, .inquiry-form {
        margin: 20px;
        padding: 20px;
      }

      .course-details img {
        width: 180px;
      }
    }
  </style>
</head>
<body>

<div class="course-details">
  <h2>Course on Computer Concepts (CCC)</h2>
  <img src="CCC.png" alt="CCC" />
  <p><strong>Duration:</strong> 2 months</p>
  <p><strong>Fees:</strong> ₹5400</p>
  <p><strong>Description:</strong> The CCC course is designed to equip students with fundamental computer knowledge...</p>
</div>

<!-- Inquiry Form -->
<div class="inquiry-form">
  <h3>Drop Message for your Query</h3>
  <form action="inquiry-save.php" method="post">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Email Address" required>
    <input type="text" name="phone" placeholder="Phone Number" required>
 
    <input type="text" name="preferred_course" value="CCC" readonly>
    <button type="submit" class="btn">Send Message →</button>
  </form>
</div>
   
</body>
</html>
