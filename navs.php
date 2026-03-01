<!-- nav.php -->
<header class="navbar">
  <img src="logo-left.png" alt="Logo" class="logo">
  <nav>
    <ul class="menu">
      <li><a href="index.php">Home</a></li>

      <!-- About Us -->
      <li>
        <a href="#">About Us</a>
        <ul class="submenu">
          <li><a href="about-who-we-are.php">Who We Are</a></li>
          <li><a href="about-mission-vision.php">Mission and Visions</a></li>
          <li><a href="about-our-team.php">Our Team</a></li>
          <li><a href="achievements.php">Achievements</a></li>
        </ul>
      </li>

      <li><a href="courses.php">Our Courses</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="contact-us.php">Contact Us</a></li>
      <li><a href="franchise-registration.php">Franchise Registration</a></li>

     
    </ul>
  </nav>
</header>

<style>
/* Navbar Container */
.navbar {
  background: linear-gradient(90deg, #e74c3c, #c0392b);
  padding: 12px 50px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  box-shadow: 0 4px 20px rgba(0,0,0,0.15);
  position: sticky;
  top: 0;
  z-index: 1000;
  transition: background 0.3s ease;
}

/* Subtle hover effect on whole navbar */
.navbar:hover {
  background: linear-gradient(90deg, #d35400, #c0392b);
}

/* Logo */
.logo {
  height: 70px;
  width: 70px;
  border-radius: 50%;   /* round logo */
  object-fit: cover;
  border: 2px solid #fff;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.logo:hover {
  transform: scale(1.05);
  box-shadow: 0 6px 15px rgba(0,0,0,0.3);
}

/* Menu Styles */
.menu {
  list-style: none;
  display: flex;
  gap: 30px;
  margin: 0;
  padding: 0;
}

.menu > li {
  position: relative;
}

.menu > li > a {
  text-decoration: none;
  color: white;
  font-weight: 600;
  padding: 10px 18px;
  transition: all 0.3s ease;
  border-radius: 6px;
  font-size: 15px;
  letter-spacing: 0.5px;
  position: relative;
}

/* Underline animation effect */
.menu > li > a::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: 5px;
  height: 2px;
  width: 0;
  background: white;
  transition: width 0.3s ease;
}

.menu > li > a:hover::after {
  width: 100%;
}

/* Hover Effect */
.menu > li > a:hover {
  background: rgba(255,255,255,0.15);
  color: #fff;
}

/* Submenu */
.submenu {
  display: none;
  position: absolute;
  top: 120%;
  left: 0;
  background: #2c3e50;
  min-width: 200px;
  padding: 10px 0;
  border-radius: 8px;
  box-shadow: 0 6px 15px rgba(0,0,0,0.15);
  animation: fadeIn 0.3s ease-in-out;
}

.submenu li {
  padding: 0;
}

.submenu li a {
  display: block;
  padding: 10px 20px;
  text-decoration: none;
  color: white;
  font-size: 14px;
  transition: background 0.3s ease, padding-left 0.3s ease;
}

.submenu li a:hover {
  background: #34495e;
  padding-left: 25px; /* slight slide effect */
}

/* Show submenu on hover */
.menu li:hover > .submenu {
  display: block;
}

/* Animation */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(10px); }
  to { opacity: 1; transform: translateY(0); }
}
</style>
