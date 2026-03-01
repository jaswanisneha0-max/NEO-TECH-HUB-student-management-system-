<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>NEO TECH HUB</title>
<h1 class="title">WELCOME TO NEO TECH HUB</h1>


  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-image: url('bg-main.png');
      background-size: 2100px;
      background-position: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: white;
      overflow-x: hidden;
    }

    header {
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      height: 100px;
      width: 100px;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 25px;
      align-items: center;
    }

    nav ul li {
      position: relative;
    }

    nav ul li a {
      color: white;
      text-decoration: none;
      font-weight: 600;
      transition: 0.3s;
    }

    nav ul li:hover a {
      color: orange;
    }

    nav ul li ul {
      display: none;
      position: absolute;
      background: rgba(0, 0, 0, 0.7);
      top: 30px;
      border-radius: 4px;
      padding: 10px;
      z-index: 99;
    }

    nav ul li:hover ul {
      display: block;
    }

    nav ul li ul li {
      padding: 5px 15px;
    }

    h1.title {
      text-align: center;
      margin-top: 15px;
      font-size: 28px;
      font-weight: bold;
      text-shadow: 0 0 10px #ff6600;
    }

    .main-section {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 60px;
      position: relative;
    }

    .left-text h2 {
      font-size: 50px;
      line-height: 1.3;
      font-weight: 800;
      text-shadow: 0 0 8px #fff;
    }

    .buttons {
      margin-top: 25px;
    }

    .buttons a {
      text-decoration: none;
      padding: 14px 28px;
      margin-right: 15px;
      border-radius: 6px;
      font-weight: bold;
      font-size: 16px;
      transition: all 0.3s ease;
    }
.btn {
  background-color: orange;
  color: white;
  padding: 12px 24px;
  border-radius: 6px;
  text-decoration: none;
  font-weight: bold;
  display: inline-block;
}
.btn:hover {
  background-color: darkorange;
}


    .take-now {
      background-color: #ff6600;
      color: white;
      box-shadow: 0 0 15px #ff6600;
    }

    .find-course {
      border: 2px solid white;
      color: white;
      background: transparent;
      box-shadow: 0 0 10px white;
    }

    .right-image img {
      width: 780px;
      height: 350px
      filter: drop-shadow(0 0 15px #000000aa);
    }

    /* Floating Elements */
    .floating-item {
      position: absolute;
      z-index: 1;
      animation: floatItem 4s ease-in-out infinite;
      pointer-events: none;
      filter: drop-shadow(0 0 10px #ffffff88);
    }

    .cap {
      top: 200px;
      left: 100px;
      width: 150px;
      animation-delay: 0s;
    }
   .star {
      bottom: 200px;
      right: 750px;
      width: 100px;
      animation-delay: 0s;
    }
  .earth {
    bottom: 50px;
    right: 100px;
  width: 100px;
  animation: rotateEarth 10s linear infinite;
}

@keyframes rotateEarth {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

    .book {
      bottom: 50px;
      right: 80px;
      width: 150px;
      animation-delay: 1s;
    }

 .stars  {
      top: 200px;
      right: 200px;
      width: 120px;
      animation-delay: 2s;
    }
 .node  {
      bottom: 200px;
      left: 450px;
      width: 90px;
      animation-delay: 4s;
    }
 .caps  {
      top: 200px;
      right: 650px;
      width: 150px;
      animation-delay: 2s;
    }

    @keyframes floatItem {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-20px);
      }
    }

    @media (max-width: 778px) {
      .main-section {
        flex-direction: column;
        text-align: center;
      }

      .right-image img {
        margin-top: 40px;
        width: 300px;
        
       }

      .floating-item {
        display: none;
      }
    }
  </style>
</head>
<body>
  <header>
    <img src="logo-left.png" alt="NEO TECH HUB Logo" class="logo"  />
    <nav>
      <ul>	
        <li><h3><a href="index.php">Home</a></h3></li>
        <li><h3>
          <a href="about_ect.php">About Us</a></h3>
          <ul>
            <li><a href="about-who-we-are.php">Who We Are</a></li>
            <li><a href="about-mission-vision.php">Mission and Vision</a></li>
            <li><a href="about-our-team.php">Our Teams</a></li>
            <li><a href="achievements.php">Our Achievers</a></li>
          </ul>
        </li>
        <li><h3><a href="courses.php">Our Courses</a></h3></li>
        
                  </li>
        <li><h3><a href="gallery.php">Gallery</a></h3></li>
        <li><h3><a href="contact-us.php">Contact Us</a></h3></li>
<li><h3><a href="franchise-registration.php ">Franchise Registration</a></h3></li>
        <li class="dropdown"><h3>
  <a href="#">Login</a></h3>
  <ul >
    <li><a href="student-login.php">Student Login</a></li>
    <li><a href="center-login.php">Center Login</a></li>
  </ul>
</li>

          
      </ul>
    </nav>
  </header>

  

  <div class="main-section">
    <div class="left-text" bottom: 20px; >
      <h2>
        A Better<br />
        Learning Journey<br />
        Future Start Here
      </h2>
      <div class="buttons">
        <a href="contact-us.php" class="btn">Take Now →</a>
        <a href="courses.php" class="find-course">Find The Course →</a>
      </div>
    </div>
    <div class="right-image">
      <img src="logo-aroundss.png" alt="Main Logo" width="900px" height="600px" />
    </div>
  </div>
<div>



  <!-- Floating Items -->
  <img src="cap.png" class="floating-item cap" alt="Floating Cap" />
  <img src="book.png" class="floating-item book" alt="Floating Book" />
  <img src="node.png" class="floating-item node" alt="Floating Node" />
  <img src="star.png" class="floating-item star" alt="Floating star" />
  <img src="earth.png" alt="Rotating Earth" class="earth">
<img src="stars.png" class="floating-item stars" alt="Floating stars" />
<img src="caps.png" class="floating-item caps" alt="Floating Caps" />
</body>
</html>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>About - NEO TECH HUB</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #fff;
    }

    .about-section {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 50px;
      flex-wrap: wrap;
      background-color: #fdfdfd;
    }

    .about-image {
      width: 780px;
      height: 300px
      filter: drop-shadow(0 0 15px #000000aa);

      flex: 1 1 300px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .about-image img {
      max-width: 600px;
      border-radius: 30px;
    }

    .about-text {
      flex: 1 1 300px;
      padding: 20px;
    }

    .about-text h2 {
      color: #ff6600;
      font-size: 24px;
    }

    .about-text h1 {
      font-size: 28px;
      margin: 10px 0;
      color: #222;
    }

    .about-text p {
      color: #555;
      line-height: 1.6;
    }

    .discover-btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #0066ff;
      color: #fff;
      border-radius: 5px;
      text-decoration: none;
      margin-top: 15px;
    }

    .contact-box {
      position: absolute;
      top: 20px;
      left: 20px;
      background: #fff;
      border-radius: 8px;
      padding: 10px 15px;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
      font-size: 14px;
    }

    .contact-box span {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    .contact-box a {
      text-decoration: none;
      color: #0066ff;
    }
  </style>
</head>
<body>


  

  <section class="about-section">
    <div class="about-image">
      <!-- Replace 'logo.png' with your logo image -->
      <img src="logo-aroundss.png" alt="Neo tech hub Logo">
    </div>
    <div class="about-text">
      <h2>About Us</h2>
      <h1>About - NEO TECH HUB</h1>
      <p>
        The NEO TECH HUB is equipped with modern computer labs and offers 
        constructive learning environments. Students have access to updated software 
        and resources to enhance their learning experience.
      </p>
      <a href="about_ect.php" class="discover-btn">Discover More →</a>
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


  </section>



</body>
</html>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


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
<center>  <h1>Explore a wide range of career-focused courses
<br> designed to shape your future</h1> </center>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!-- about-our-team.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Our Team - CCC Computer Academy</title>
  <link rel="stylesheet" href="style.css"> <!-- Your main CSS -->
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    
    }
    .header-section {
      background-color: #ef4d27;
      color: white;
      text-align: center;
      padding: 50px 0;
    }
    .header-section h1 {
      margin: 0;
      font-size: 36px;
    }
    .section {
      max-width: 1100px;
      margin: 40px auto;
      padding: 20px;
    }
    .section h2 {
      text-align: center;
      color: #333;
      margin-bottom: 30px;
    }
    .team-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }
    .team-card {
      background: white;
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      width: 220px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .team-card img {
      width: 90px;
      height: 120px;
      border-radius: 80%;
      object-fit: cover;
      margin-bottom: 10px;
    }
    .team-card h4 {
      margin: 20px 0 10px;
      color: #ef4d27;
    }
    .team-card p {
      font-size: 14px;
      color: #666;
    }

    .testimonials {
      background: white;
      padding: 40px 0;
      margin-top: 40px;
    }
 .testimonial  p {
      font-size: 14px;
      color: white;
    }


    .testimonial-grid {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 30px;
    }

    .testimonial {
      width: 260px;
      padding: 20px;
      background: black;
      border-left: 5px solid #3B82F6;
      border-radius: 8px;
    }

    .testimonial .stars {
      color: #fbbf24;
      font-size: 16px;
    }

    .testimonial h4 {
      margin-top: 10px;
      font-size: 16px;
      font-weight: bold;
    }

    .testimonial p {
      margin: 5px 0 0;
      font-size: 13px;
      color: white;
    }
  </style>
</head>
<body>



<div class="header-section">
  <h1>Meet Our Professional Team</h1>
</div>

<div class="section">
  <center><h1>Team Members</h1></center>
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
    
  </div>
</div>

<div class="section testimonials">
  <h2>What students told about us</h2>
  <div class="testimonial-grid">
    <div class="testimonial">
      <div class="stars">★★★★★</div>
      <h4 text="black">Shriya </h4>
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
      <p>Best Faculities</p>
    </div>
<div class="testimonial">
      <div class="stars">★★★★★</div>
      <h4>Neel</h4>
      <p>Flexible timing helped me a lot</p>
    </div>
<div class="testimonial">
      <div class="stars">★★★★★</div>
      <h4>Leo</h4>
      <p>Friendly teachers and updated Syllabus</p>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>Gallery | CCC Computer Academy</title>
  <link rel="stylesheet" href="css/style.css"> <!-- Optional: link your existing CSS -->
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
     
    }
    .header {
      background: #d9534f;
      color: white;
      padding: 15px 30px;
      text-align: center;
    }
    .section-title {
      text-align: center;
      margin: 30px 0 10px;
      font-size: 28px;
      color: #d9534f;
    }
    .subtitle {
      text-align: center;
      font-size: 20px;
      margin-bottom: 40px;
      color: white;
    }
    .gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      padding: 20px;
    }
    .gallery img {
      width: 200px;
      height: auto;
      border: 2px solid #ccc;
      border-radius: 10px;
      background: white;
      padding: 10px;
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NEO TECH HUB - Footer</title>
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    font-size: 20px; /* ✅ Increased base size */
  }

  footer {
    background: #0b1a3c url('wave.jpg');
    color: #fff;
    padding: 70px 40px; /* ✅ More padding for side space */
    font-size: 20px; /* ✅ Footer text bigger */
  }

  .footer-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    max-width: 1400px; /* ✅ Wider container */
    margin: auto;
    gap: 60px;
    flex-wrap: wrap;
  }

  .footer-section {
    flex: 1;
    min-width: 280px; /* ✅ Gives breathing space */
    font-size: 20px;
    line-height: 1.8;
  }

  .footer-logo img {
    max-width: 280px; /* ✅ Bigger logo */
    margin-bottom: 25px;
  }

  .footer-section h3 {
    color: #ff6600;
    margin-bottom: 20px;
    border-bottom: 3px solid #ff6600;
    display: inline-block;
    padding-bottom: 8px;
    font-size: 26px; /* ✅ Section titles larger */
  }

  .footer-section ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .footer-section ul li {
    margin-bottom: 15px;
    font-size: 20px;
  }

  .footer-section ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 20px;
  }

  .footer-section ul li a:hover {
    text-decoration: underline;
  }

  .social-icons a {
    color: #fff;
    margin-right: 18px;
    font-size: 28px; /* ✅ Social icons bigger */
    text-decoration: none;
    transition: color 0.3s;
  }

  .social-icons a:hover {
    color: #ff6600;
  }

  .map iframe {
    border-radius: 10px;
    width: 100%;
    max-width: 320px; /* ✅ Bigger map */
    height: 220px;
  }

  .contact-info p {
    margin: 12px 0;
    font-size: 20px; /* ✅ Contact text larger */
  }

  /* Responsive fix */
  @media (max-width: 768px) {
    .footer-container {
      flex-direction: column;
      text-align: center;
    }
    .footer-logo img {
      margin: auto;
    }
    .map iframe {
      margin: auto;
    }
  }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<!-- Footer -->
<footer>
  <div class="footer-container">

    <!-- Left Section -->
    <div class="footer-section footer-logo">
      <img src="logo-aroundss.png" alt="NEO Tech Hub Logo">
      <p>
        Welcome to <strong>NEO TECH HUB</strong>, popularly known as Gondal’s first leading IT institute.<br> 
        Strengthening technology knowledge & providing training to students, entrepreneurs, and professionals.
      </p>
      <div class="social-icons">
        <a href="https://facebook.com/YourPage" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://instagram.com/YourProfile" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://wa.me/916354636133" target="_blank"><i class="fab fa-whatsapp"></i></a>
      </div>
    </div>

    <!-- Middle Section -->
    <div class="footer-section">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about_ect.php">About Us</a></li>
        <li><a href="courses.php">Our Courses</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact-us.php">Contact Us</a></li>
      </ul>
    </div>

    <!-- Map Section -->
    <div class="footer-section map">
      <h3>Find Us Here</h3>
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.1223818182035!2d72.8310983!3d21.1702401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e593fd4b4b1%3A0x2b1d2e0a2a6971f8!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1691670000000!5m2!1sen!2sin" 
        allowfullscreen="" 
        loading="lazy">
      </iframe>
    </div>

    <!-- Right Section -->
    <div class="footer-section">
      <h3>Contact Us</h3>
      <div class="contact-info">
        <p>📍 <a href="https://www.google.com/maps?q=Vip+View,+Jell+Chock+Kelashbagh+Gondal" target="_blank" style="color:white; text-decoration:none;">Jell Chock, near Mamadev Mandir, Gondal</a></p>
        <p>📞 <a href="tel:+916354636133" style="color:white; text-decoration:none;">+91 6354636133</a></p>
        <p>📞 <a href="tel:+918866940040" style="color:white; text-decoration:none;">+91 8866940040</a></p>
        <p>✉ <a href="mailto:neo_tech_hub@proton.com" style="color:white; text-decoration:none;">neo_tech_hub@proton.com</a></p>
      </div>
    </div>

  </div>
</footer>

</body>
</html>
