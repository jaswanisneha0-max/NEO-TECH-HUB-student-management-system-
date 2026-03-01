
<!DOCTYPE html>
<html>
<head>
  <title>Thank You</title>
  <style>
    body {
      font-family: "Segoe UI", Arial, sans-serif;
      background: #f4f6f9;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #333;
    }

    .thank-you {
      background: #ffffff;
      text-align: center;
      padding: 50px 40px;
      border-radius: 12px;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
      max-width: 500px;
      width: 100%;
      animation: fadeIn 0.8s ease-in-out;
    }

    .thank-you h2 {
      color: #0077b6;
      font-size: 28px;
      margin-bottom: 15px;
      font-weight: 700;
    }

    .thank-you p {
      font-size: 16px;
      margin-bottom: 25px;
      color: #555;
    }

    .thank-you .btn {
      display: inline-block;
      text-decoration: none;
      background: #00b4d8;
      color: #fff;
      padding: 12px 24px;
      border-radius: 8px;
      font-weight: 600;
      font-size: 15px;
      transition: all 0.3s ease;
    }

    .thank-you .btn:hover {
      background: #0077b6;
      transform: translateY(-2px);
      box-shadow: 0 4px 10px rgba(0, 119, 182, 0.3);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.95); }
      to { opacity: 1; transform: scale(1); }
    }
  </style>
</head>
<body>
  <div class="thank-you">
    <h2>✅ Thank you for your inquiry!</h2>
    <p>We’ll contact you shortly.</p>
    <a href="index.php" class="btn">Return to Home</a>
  </div>
</body>
</html>
