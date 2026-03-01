<?php include 'nav.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Courses - NEO TECH HUB</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    /* General Styling */
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f4f7fb;
      margin: 0;
      color: #333;
    }

    .container {
      max-width: 1200px;
      margin: auto;
      padding: 40px 20px;
    }

    h2 {
      text-align: center;
      margin-bottom: 40px;
      font-size: 28px;
      color: #2c3e50;
      font-weight: 600;
    }

    /* Course Grid */
    .course-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));
      gap: 25px;
    }

    /* Course Card */
    .course-card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.08);
      padding: 25px 20px;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .course-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 24px rgba(0,0,0,0.12);
    }

    .course-card img {
      max-width: 100%;
      height: 160px;
      object-fit: contain;
      margin-bottom: 15px;
      transition: transform 0.3s ease;
    }

    .course-card:hover img {
      transform: scale(1.05);
    }

    .course-card h3 {
      font-size: 20px;
      margin: 12px 0;
      color: #34495e;
    }

    .course-card p {
      font-size: 15px;
      color: #666;
      margin: 8px 0;
    }

    .course-card .price {
      font-weight: bold;
      margin-top: 12px;
      color: #27ae60;
      font-size: 16px;
    }

    /* Button */
    .course-card a {
      display: inline-block;
      margin-top: 15px;
      padding: 10px 18px;
      background: linear-gradient(135deg, #e74c3c, #c0392b);
      color: #fff;
      text-decoration: none;
      border-radius: 6px;
      font-size: 14px;
      font-weight: 500;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    .course-card a:hover {
      background: linear-gradient(135deg, #c0392b, #a93226);
      transform: translateY(-2px);
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Explore a wide range of career-focused courses designed to shape your future</h2>
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
