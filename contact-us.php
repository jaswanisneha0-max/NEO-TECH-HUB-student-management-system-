<!-- contact-us.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - NEO TECH HUB</title>
  <link rel="stylesheet" href="css/style.css"> <!-- Keep external if needed -->
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #f9f9f9, #eef2f7);
      margin: 0;
      padding: 50px 20px;
    }

    .contact-form {
      max-width: 650px;
      margin: auto;
      background: #fff;
      padding: 50px 40px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .contact-form:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 25px rgba(0,0,0,0.15);
    }

    .contact-form h2 {
      text-align: center;
      margin-bottom: 25px;
      font-size: 32px;
      color: #e67e22;
      letter-spacing: 1px;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 14px 16px;
      margin: 12px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
      outline: none;
      border-color: #e67e22;
      box-shadow: 0 0 6px rgba(230,126,34,0.3);
    }

    .contact-form textarea {
      resize: none;
    }

    .contact-form button {
      width: 100%;
      background: #e67e22;
      color: white;
      border: none;
      padding: 14px;
      margin-top: 15px;
      border-radius: 8px;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    .contact-form button:hover {
      background: #cf6d19;
      transform: scale(1.02);
    }

    .contact-form button:active {
      transform: scale(0.98);
    }

    /* Responsive */
    @media (max-width: 768px) {
      body {
        padding: 30px 15px;
      }
      .contact-form {
        padding: 30px 20px;
      }
      .contact-form h2 {
        font-size: 26px;
      }
    }
  </style>
</head>
<body>

  <?php include 'nav.php'; ?>

  <div class="contact-form">
    <h2>Contact With Us</h2>
    <form action="contact-submit.php" method="POST">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="text" name="phone" placeholder="Phone Number" required>
      <input type="text" name="subject" placeholder="Subject" required>
      <textarea name="message" placeholder="Write a Message" rows="5" required></textarea>
      <!-- Add Google reCAPTCHA here if needed -->
      <button type="submit">Send a Message →</button>
    </form>
  </div>

</body>
</html>
