<!-- about-mission-vision.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mission & Vision - CCC Computer Academy</title>
  <link rel="stylesheet" href="style.css"> <!-- Link to your main CSS -->
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0; 
      padding: 0;
      background: #f4f6f9;
      color: #333;
    }

    /* Header */
    .header-section {
      background: linear-gradient(135deg, #ef4d27, #d93d1a);
      color: white;
      padding: 60px 20px;
      text-align: center;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }
    .header-section h1 {
      margin: 0;
      font-size: 36px;
      font-weight: bold;
      letter-spacing: 1px;
    }
    .header-section p {
      font-size: 18px;
      margin-top: 10px;
      font-style: italic;
      opacity: 0.9;
    }

    /* Content */
    .content-section {
      max-width: 1100px;
      margin: 50px auto;
      padding: 40px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.08);
      transition: transform 0.3s ease;
    }
    .content-section:hover {
      transform: translateY(-4px);
    }
    .content-section h2 {
      text-align: center;
      color: #222;
      font-size: 28px;
      margin-bottom: 30px;
    }

    /* Mission & Vision */
    .mission-vision {
      display: flex;
      justify-content: space-between;
      gap: 40px;
      flex-wrap: wrap;
    }
    .mission-vision div {
      flex: 1;
      min-width: 300px;
      padding: 20px;
      border-radius: 10px;
      background: #fafafa;
      box-shadow: inset 0 0 8px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
    }
    .mission-vision div:hover {
      background: #fff;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      transform: translateY(-3px);
    }
    .mission-vision h3 {
      color: #ef4d27;
      font-size: 22px;
      margin-bottom: 15px;
      border-left: 4px solid #ef4d27;
      padding-left: 10px;
    }
    .mission-vision ul {
      margin-top: 10px;
      padding-left: 20px;
      color: #555;
      line-height: 1.7;
    }
    .mission-vision ul li {
      margin-bottom: 10px;
      position: relative;
      padding-left: 15px;
    }
    .mission-vision ul li::before {
      content: "✔";
      position: absolute;
      left: -5px;
      color: #ef4d27;
      font-size: 14px;
    }

    /* Spacer */
    .footer-spacer {
      height: 60px;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .mission-vision {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

  <?php include 'nav.php'; ?>

  <div class="header-section">
    <h1>Mission & Vision</h1>
    <p>Ethics Behind Success</p>
  </div>

  <div class="content-section">
    <div class="mission-vision">
      <div class="mission">
        <h3>Our Mission</h3>
        <ul>
          <li>Increase the value of our courses, services, relationships, and trust to create a trusted customer experience.</li>
          <li>Explore new areas of business holistically.</li>
          <li>Meet expectations of students, partners, employees & stakeholders.</li>
          <li>Impart practical training for national & international careers.</li>
          <li>Achieve sustainable growth and goodwill.</li>
        </ul>
      </div>
      <div class="vision">
        <h3>Our Vision</h3>
        <ul>
          <li>To become a prominent and trusted brand in the IT training field.</li>
          <li>Deliver long-term, globally scalable solutions.</li>
          <li>Promote innovation, efficiency, and ethical values.</li>
          <li>Establish CCC across India, especially in Gujarat.</li>
          <li>Create customer-centric and professional environments.</li>
        </ul>
      </div>
    </div>
  </div>

</body>
</html>
