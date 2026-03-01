<!-- about-our-team.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Our Team - Neo Tech Hub</title>
  <link rel="stylesheet" href="style.css"> <!-- Your main CSS -->
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background: #f4f6f9;
      color: #333;
    }

    /* Header Section */
    .header-section {
      background: linear-gradient(135deg, #ef4d27, #f97316);
      color: white;
      text-align: center;
      padding: 60px 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .header-section h1 {
      margin: 0;
      font-size: 40px;
      font-weight: 700;
      letter-spacing: 1px;
    }

    /* General Section */
    .section {
      max-width: 1200px;
      margin: 50px auto;
      padding: 20px;
    }
    .section h2 {
      text-align: center;
      font-size: 28px;
      color: #222;
      margin-bottom: 40px;
      position: relative;
    }
    .section h2::after {
      content: "";
      display: block;
      width: 60px;
      height: 3px;
      background: #ef4d27;
      margin: 12px auto 0;
      border-radius: 2px;
    }

    /* Team Grid */
    .team-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }
    .team-card {
      background: white;
      border-radius: 12px;
      padding: 25px 20px;
      text-align: center;
      width: 230px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .team-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 6px 16px rgba(0,0,0,0.15);
    }
    .team-card img {
      width: 100px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #ef4d27;
      margin-bottom: 15px;
    }
    .team-card h4 {
      margin: 10px 0 5px;
      font-size: 18px;
      color: #ef4d27;
      font-weight: 600;
    }
    .team-card p {
      font-size: 14px;
      color: #666;
      margin: 0;
    }

    /* Testimonials Section */
    .testimonials {
      background: #fff;
      padding: 60px 20px;
      margin-top: 60px;
      border-top: 1px solid #e5e7eb;
    }
    .testimonial-grid {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 30px;
    }
    .testimonial {
      width: 260px;
      padding: 25px;
      background: #f9fafb;
      border-left: 5px solid #3B82F6;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.05);
      transition: transform 0.3s ease;
    }
    .testimonial:hover {
      transform: translateY(-5px);
    }
    .testimonial .stars {
      color: #fbbf24;
      font-size: 18px;
      margin-bottom: 8px;
    }
    .testimonial h4 {
      margin: 5px 0 8px;
      font-size: 16px;
      font-weight: bold;
      color: #111827;
    }
    .testimonial p {
      font-size: 14px;
      color: #444;
      margin: 0;
      line-height: 1.5;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .team-card, .testimonial {
        width: 100%;
        max-width: 320px;
      }
      .section {
        padding: 15px;
      }
    }
  </style>
</head>
<body>

<?php include 'nav.php'; ?>

<div class="header-section">
  <h1>Meet Our Professional Team</h1>
</div>

<div class="section">
  <h2>Team Members</h2>
  <div class="team-grid">
    <div class="team-card">
      <img src="snehaj.jpeg" alt="Member 1">
      <h4>Sneha Jaswani</h4>
      <p>Head Instructor</p>
    </div>
    <div class="team-card">
      <img src="pic2.jpeg" alt="Member 2">
      <h4>Prapti Pansora</h4>
      <p>Course Coordinator</p>
    </div>
    

<div class="section testimonials">
  <h2>What Students Told About Us</h2>
  <div class="testimonial-grid">
    <div class="testimonial">
      <div class="stars">★★★★★</div>
      <h4>Shriya</h4>
      <p>A best Learning center</p>
    </div>
    <div class="testimonial">
      <div class="stars">★★★★★</div>
      <h4>Priya</h4>
      <p>Best Institute</p>
    </div>
    <div class="testimonial">
      <div class="stars">★★★★★</div>
      <h4>Mansi</h4>
      <p>Best Faculties</p>
    </div>
    <div class="testimonial">
      <div class="stars">★★★★★</div>
      <h4>Neel</h4>
      <p>Flexible timing helped me a lot</p>
    </div>
    <div class="testimonial">
      <div class="stars">★★★★★</div>
      <h4>Leo</h4>
      <p>Friendly teachers and updated syllabus</p>
    </div>
    <div class="testimonial">
      <div class="stars">★★★★★</div>
      <h4>Shivani</h4>
      <p>Highly recommend for quality computer education</p>
    </div>
  </div>
</div>

</body>
</html>
