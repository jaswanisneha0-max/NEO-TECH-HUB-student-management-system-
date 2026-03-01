<!-- center-login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Center Login - NEO TECH HUB</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      background: linear-gradient(135deg, #f9f9f9, #ececec);
      color: #333;
    }

    /* Header */
    header {
      background: linear-gradient(135deg, #e74c3c, #c0392b);
      padding: 18px 50px;
      color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 3px 8px rgba(0,0,0,0.15);
    }

    header img {
      height: 55px;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 25px;
      margin: 0;
      padding: 0;
    }

    nav ul li {
      position: relative;
    }

    nav ul li a {
      text-decoration: none;
      color: white;
      font-weight: 600;
      font-size: 15px;
      transition: color 0.3s ease;
    }

    nav ul li a:hover {
      color: #f1c40f;
    }

    /* Dropdown Menu */
    nav ul li .submenu {
      display: none;
      position: absolute;
      top: 35px;
      left: 0;
      background: #333;
      padding: 10px 0;
      border-radius: 6px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      min-width: 160px;
    }

    nav ul li:hover .submenu {
      display: block;
      animation: fadeIn 0.3s ease;
    }

    nav ul li .submenu li {
      padding: 8px 20px;
    }

    nav ul li .submenu li a {
      color: #fff;
      font-weight: normal;
      font-size: 14px;
    }

    nav ul li .submenu li a:hover {
      color: #f1c40f;
    }

    /* Login Box */
    .login-box {
      background: #fff;
      max-width: 420px;
      margin: 90px auto;
      padding: 40px 35px;
      border-radius: 12px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.15);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .login-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 24px rgba(0,0,0,0.2);
    }

    .login-box h2 {
      text-align: center;
      margin-bottom: 28px;
      color: #e74c3c;
      font-size: 24px;
      font-weight: 700;
      letter-spacing: 0.5px;
    }

    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 100%;
      padding: 14px 12px;
      margin-bottom: 18px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 15px;
      outline: none;
      transition: border 0.3s ease, box-shadow 0.3s ease;
    }

    .login-box input[type="text"]:focus,
    .login-box input[type="password"]:focus {
      border: 1px solid #e74c3c;
      box-shadow: 0 0 6px rgba(231,76,60,0.4);
    }

    .login-box button {
      width: 100%;
      padding: 14px;
      background: linear-gradient(135deg, #e74c3c, #c0392b);
      border: none;
      border-radius: 8px;
      color: #fff;
      font-weight: 600;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    .login-box button:hover {
      background: linear-gradient(135deg, #c0392b, #a93226);
      transform: translateY(-2px);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(5px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <?php include 'navs.php'; ?>

  <!-- Login Form -->
  <div class="login-box">
    <h2>Center Login</h2>
    <form action="center-login-action.php" method="post">
      <input type="text" name="username" placeholder="Enter Username" required />
      <input type="password" name="password" placeholder="Enter Password" required />
      <button type="submit">Login Now →</button>
    </form>
  </div>

</body>
</html>
