<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Tally Course Details</title>
  <style>
    /* Reset & Base Styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: "Segoe UI", Arial, sans-serif;
      background: linear-gradient(135deg, #e3f2fd, #f9f9f9);
      padding: 40px 20px;
      color: #333;
    }

 /* Sidebar */
        .sidebar {
            width: 240px;
            height: 100vh;
            background: linear-gradient(180deg, #1f2937, #374151);
            float: left;
            padding-top: 40px;
            position: fixed;
            top: 0;
            left: 0;
            box-shadow: 3px 0 20px rgba(0,0,0,0.1);
        }

        .sidebar a {
            display: block;
            padding: 14px 22px;
            margin: 10px 18px;
            color: #e5e7eb;
            text-decoration: none;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 500;
            transition: all 0.3s ease;
            letter-spacing: 0.5px;
        }

        .sidebar a:hover {
            background: linear-gradient(135deg, #06b6d4, #3b82f6);
            color: #fff;
            transform: translateX(6px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }


    /* Container Box */
    .container {
      background: #fff;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.08);
      max-width: 650px;
      margin: 30px auto;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .container:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 30px rgba(0,0,0,0.12);
    }

    /* Headings */
    h1 {
      color: #2c3e50;
      font-size: 1.8rem;
      margin-bottom: 15px;
      font-weight: 600;
    }
    p {
      font-size: 1rem;
      color: #555;
      margin-bottom: 20px;
      line-height: 1.5;
    }

    /* Download Button */
    a.download-link {
      display: inline-block;
      padding: 14px 28px;
      font-size: 16px;
      text-decoration: none;
      background: linear-gradient(135deg, #2980b9, #1c5980);
      color: #fff;
      border-radius: 8px;
      font-weight: 500;
      letter-spacing: 0.5px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      transition: all 0.3s ease;
    }
    a.download-link:hover {
      background: linear-gradient(135deg, #1c5980, #123d59);
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(0,0,0,0.2);
    }

    /* Back Button */
    .btn {
      padding: 12px 24px;
      margin: 30px auto;
      font-size: 15px;
      font-weight: 500;
      border: none;
      border-radius: 8px;
      background: linear-gradient(135deg, #00c6ff, #0072ff);
      color: #fff;
      cursor: pointer;
      display: block;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(0,0,0,0.12);
    }
    .btn:hover {
      background: linear-gradient(135deg, #0072ff, #004ba0);
      transform: scale(1.05);
      box-shadow: 0 6px 16px rgba(0,0,0,0.2);
    }

    /* Responsive */
    @media (max-width: 768px) {
      body {
        padding: 20px;
      }
      .container {
        padding: 20px;
      }
      h1 {
        font-size: 1.5rem;
      }
      p {
        font-size: 0.95rem;
      }
    }
  </style>
</head>
<body>
<div class="sidebar">
    <a href="student-dashboard.php">Dashboard</a>
    <a href="take_student_admission.php">New Admission</a>
    <a href="student-fees.php">Fees</a>
    <a href="exam.php">Exam</a>
    <a href="student-profile.php">Profile</a>
    <a href="student_studies.php">Online Courses</a>
    <a href="student-logout.php">Logout</a>
</div>



  <div class="container">
    <h1>📘 Tally Course Detailed Information</h1>
    <p>Click the button below to download the full Tally course syllabus:</p>
    <a href="📘 Tally Course Detailed Information.docx" download class="download-link">
     ⬇️ Download Tally Course Document
    </a>
  </div>

  <div class="container">
    <h1>📘 CCC Detailed Information</h1>
    <p>Click the button below to download the full CCC course syllabus:</p>
    <a href="ccc.docx" download class="download-link">
      ⬇️ Download CCC Course Document
    </a>
  </div>

  <div class="container">
    <h1>📘 DTP Detailed Information</h1>
    <p>Click the button below to download the full DTP course syllabus:</p>
    <a href="DTP Software Menus and Tools.docx" download class="download-link">
      ⬇️ Download DTP Course Document
    </a>
  </div>

  <div class="container">
    <h1>📘 MS-Office Detailed Information</h1>
    <p>Click the button below to download the full MS-Office course syllabus:</p>
    <a href="Microsoft Office Suite.docx" download class="download-link">
      ⬇️ Download MS-Office Course Document
    </a>
  </div>

  <div class="container">
    <h1>📘 Web Designing Detailed Information</h1>
    <p>Click the button below to download the full Web Designing course syllabus:</p>
    <a href="🌐 Web Designing Languages.docx" download class="download-link">
      ⬇️ Download Web Designing Course Document
    </a>
  </div>

  <div class="container">
    <h1>📘 Miracle Detailed Information</h1>
    <p>Click the button below to download the full Miracle course syllabus:</p>
    <a href="📘 Miracle Accounting Software.docx" download class="download-link">
      ⬇️ Download Miracle Course Document
    </a>
  </div>

  <a href='student-dashboard.php'><button class='btn blue'>⬅ Back</button></a>
</body>
</html>
