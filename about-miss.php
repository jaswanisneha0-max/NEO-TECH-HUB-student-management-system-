<?php include 'nav.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Courses - NEO TECH HUB</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
    
      margin: 0;
    }
    .container {
      max-width: 1200px;
      margin: auto;
      padding: 20px;
    }
    h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    .course-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 20px;
    }
    .course-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
    }
    .course-card img {
      max-width: 100%;
      height: 150px;
      object-fit: contain;
    }
    .course-card h3 {
      font-size: 18px;
      margin: 15px 0 10px;
    }
    .course-card p {
      color: #555;
      font-size: 14px;
    }
    .course-card .price {
      font-weight: bold;
      margin-top: 10px;
    }
    .course-card a {
      display: inline-block;
      margin-top: 10px;
      padding: 8px 16px;
      background-color: #e74c3c;
      color: white;
      text-decoration: none;
      border-radius: 4px;
    }
    .course-card a:hover {
      background-color: #c0392b;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Featured Course On This Month</h2>
  <div class="course-grid">
    <div class="course-card">
      <img src="tally.png" alt="Tally">
      <h3>Financial Account (Tally)</h3>
      <p>Course Fees: ₹5400/-</p>
      <a href="course2.php?course=tally">Details →</a>
    </div>
    <div class="course-card">
      <img src="ms-office.jpg" alt="MS Office">
      <h3>MS Office</h3>
      <p>Course Fees: ₹6000/-</p>
      <a href="course3.php?course=ms-office">Details →</a>
    </div>
    <div class="course-card">
      <img src="CCC.png" alt="CCC">
      <h3>Course on Computer Concepts (CCC)</h3>
      <p>Course Fees: ₹5400/-</p>
      <a href="course-details.php?course=ccc">Details →</a>
    </div>
    <div class="course-card">
      <img src="miracle.jpg" alt="Miracle">
      <h3>Financial Account (Miracle)</h3>
      <p>Course Fees: ₹5400/-</p>
      <a href="course4.php?course=miracle">Details →</a>
    </div>
    <div class="course-card">
      <img src="dtp.jpg" alt="DTP">
      <h3>Desk Top Publishing (DTP)</h3>
      <p>Course Fees: ₹5400/-</p>
      <a href="course5.php?course=dtp">Details →</a>
    </div>
    <div class="course-card">
      <img src="web-design.jpg" alt="Web Design">
      <h3>Web Designing</h3>
      <p>Course Fees: ₹5400/-</p>
      <a href="course6.php?course=web">Details →</a>
    </div>
  </div>
</div>

</body>
</html>
