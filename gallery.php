<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'nav.php'; ?>
  <meta charset="UTF-8">
  <title>Gallery | CCC Computer Academy</title>
  <link rel="stylesheet" href="css/style.css"> <!-- Optional: link your existing CSS -->
  <style>
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      background: #f4f6f9;
      color: #333;
      line-height: 1.6;
    }

    /* Header */
    .header {
      background: linear-gradient(135deg, #d9534f, #c9302c);
      color: #fff;
      padding: 40px 20px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .header h1 {
      margin: 0;
      font-size: 34px;
      font-weight: bold;
      letter-spacing: 1px;
    }

    /* Section Title */
    .section-title {
      text-align: center;
      margin: 40px 0 10px;
      font-size: 28px;
      color: #c9302c;
      font-weight: 600;
    }
    .subtitle {
      text-align: center;
      font-size: 16px;
      margin-bottom: 30px;
      color: #666;
    }

    /* Gallery */
    .gallery {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 15px; /* reduced gap */
      justify-items: center;
      padding: 20px 40px 50px;
      max-width: 1100px;
      margin: 0 auto;
    }
    .gallery img {
      width: 220px;
      height: auto;
      border-radius: 12px;
      background: #fff;
      padding: 10px;
      border: 1px solid #e0e0e0;
      box-shadow: 0 4px 8px rgba(0,0,0,0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }
    .gallery img:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 14px rgba(0,0,0,0.15);
    }

    /* Make the last row fit 4 items */
    .gallery img:nth-child(n+4) {
      grid-column: span 1;
    }
    .gallery {
      grid-auto-rows: auto;
    }

    /* Responsive */
    @media (max-width: 992px) {
      .gallery {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    @media (max-width: 600px) {
      .gallery {
        grid-template-columns: 1fr;
      }
      .gallery img {
        width: 180px;
      }
    }
  </style>
</head>
<body>

  <div class="header">
    <h1>Our Gallery</h1>
  </div>

  <h2 class="section-title">Gallery covering our Impression and Events</h2>
  <p class="subtitle">Our affiliations, certifications and collaborations</p>

  <div class="gallery">
    <img src="certi1.png" alt="Certificate of Registration">
    <img src="certi2.png" alt="Skill India">
    <img src="certi3.png" alt="NULM Logo">
    <img src="certi4.png" alt="PMKVY">
    <img src="certi5.png" alt="NSDC">
    <img src="certi6.png" alt="Digital India">
    <img src="certi7.png" alt="NIELIT">
  </div>

</body>
</html>
