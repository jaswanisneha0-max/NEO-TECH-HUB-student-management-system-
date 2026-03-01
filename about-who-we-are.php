<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us | Who We Are</title>
  <link rel="stylesheet" href="css/style.css"> <!-- Adjust if your CSS path is different -->
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background: #f9fafb;
      color: #333;
    }

    /* About Section */
    .about-section {
      background: #fff;
      padding: 80px 20px;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      border-radius: 12px;
      max-width: 1100px;
      margin: 30px auto;
    }

    .about-section h2 {
      font-size: 32px;
      color: #2563eb;
      margin-bottom: 10px;
      letter-spacing: 1px;
    }

    .about-section h1 {
      font-size: 24px;
      background: linear-gradient(to right, #2563eb, #38bdf8);
      color: #fff;
      display: inline-block;
      padding: 10px 20px;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .about-section p {
      max-width: 750px;
      margin: 0 auto;
      font-size: 16px;
      line-height: 1.7;
      color: #555;
    }

    .about-image {
      margin-top: 30px;
    }

    .about-image img {
      width: 200px;
      border-radius: 50%;
      border: 5px solid #f3f4f6;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .about-image img:hover {
      transform: scale(1.05);
    }

    /* Contact Box */
    .contact-box {
      margin-top: 40px;
      background: linear-gradient(to right, #f3f4f6, #e0f2fe);
      display: inline-block;
      padding: 15px 30px;
      border-radius: 12px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      font-size: 16px;
      font-weight: 500;
    }

    .contact-box a {
      color: #2563eb;
      font-weight: bold;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .contact-box a:hover {
      color: #1e40af;
    }

    /* Stats Section */
    .stats-section {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 50px;
      flex-wrap: wrap;
    }

    .stat-box {
      background: #fff;
      padding: 25px 35px;
      text-align: center;
      border-radius: 12px;
      min-width: 140px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.08);
      border-top: 4px solid #2563eb;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .stat-box:hover {
      transform: translateY(-6px);
      box-shadow: 0 8px 18px rgba(0,0,0,0.12);
    }

    .stat-box h3 {
      font-size: 28px;
      color: #e67e22;
      margin: 0;
      font-weight: bold;
    }

    .stat-box p {
      margin-top: 8px;
      font-size: 14px;
      text-transform: uppercase;
      color: #555;
      font-weight: 600;
      letter-spacing: 0.5px;
    }
  </style>
</head>
<body>

  <?php include 'nav.php'; ?> <!-- Make sure this is your working navbar -->

  <section class="about-section">
    <h2>About Us</h2>
    <h1>5+ YEARS OF EXPERIENCE</h1>
    <p>The academy is equipped with modern computer labs and offers a conducive learning environment. Students have access to updated software and resources to enhance their learning experience.</p>
    
    <div class="about-image">
      <img src="logo-aroundss.png" alt="About Icon"> <!-- Replace with your actual image -->
    </div>

    <div class="contact-box">
      Need to Know More Details? <a href="contact-us.php">Contact Us</a>
    </div>

    <div class="stats-section">
      <div class="stat-box">
        <h3>7+</h3>
        <p>Achievers</p>
      </div>
      <div class="stat-box">
        <h3>51+</h3>
        <p>Students</p>
      </div>
      <div class="stat-box">
        <h3>8+</h3>
        <p>Courses</p>
      </div>
      <div class="stat-box">
        <h3>3+</h3>
        <p>Reviews</p>
      </div>
    </div>
  </section>

</body>
</html>
