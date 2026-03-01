<?php include 'nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Course on Computer Concepts (CCC)</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="course-details">
  <h2>Course on Computer Concepts (CCC)</h2>
  <img src="ccc.png" alt="CCC" style="max-width: 300px;">
  <p><strong>Duration:</strong> 2 months</p>
  <p><strong>Fees:</strong> ₹400</p>
  <p><strong>Description:</strong> The CCC course is designed to equip students with fundamental computer knowledge and digital literacy required for both jobs and education.</p>
</div>

<!-- Inquiry Form -->
<div class="inquiry-form">
  <h3>Drop Message for your Query</h3>
  <form action="inquiry-save.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Email Address" required>
    <input type="text" name="phone" placeholder="Phone Number" required>
    <input type="text" name="subject" placeholder="Subject" required>
    <input type="text" name="preferred_course" value="Course on Computer Concepts (CCC)" readonly>
    <button type="submit" class="btn">Send Message ➜</button>
  </form>
</div>

</body>
</html>
