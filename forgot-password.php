<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Forgot Password - Student Login</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #fff, #f3f4f6);
      color: #333;
      margin: 0;
      padding: 0;
      text-align: center;
    }

    .forgot-box {
      max-width: 600px;
      background: white;
      padding: 50px 40px;
      margin: 100px auto;
      border-radius: 12px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.1);
    }

    h2 {
      color: #e74c3c;
      margin-bottom: 15px;
      font-size: 26px;
    }

    p {
      font-size: 17px;
      color: #555;
      margin-bottom: 25px;
    }

    .contact-info {
      font-weight: 600;
      color: #222;
      font-size: 18px;
      line-height: 1.8;
      background: #fef4f4;
      padding: 15px;
      border-radius: 8px;
      display: inline-block;
    }

    a.button {
      display: inline-block;
      margin-top: 25px;
      padding: 12px 25px;
      background: linear-gradient(135deg, #e74c3c, #c0392b);
      color: #fff;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    a.button:hover {
      background: linear-gradient(135deg, #c0392b, #a93226);
      transform: translateY(-2px);
    }
  </style>
</head>
<body>

  <div class="forgot-box">
    <h2>Forgot Your Password?</h2>
    <p>To recover your username or password, please contact our support team:</p>

    <div class="contact-info">
      📞 +91 63546 36133 <br>
      📞 +91 88669 40040
    </div>

    <br>
    <a href="student-login.php" class="button">← Back to Login</a>
  </div>

</body>
</html>
