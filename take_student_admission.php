<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add New Student</title>
  <style>
    body {
      margin: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background-color: #eef2f6;
      color: #333;
    }

    .container {
      max-width: 1100px;
      margin: 40px auto;
      padding: 30px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
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


    h2 {
      margin-bottom: 25px;
      text-align: center;
      color: #2c3e50;
      font-size: 26px;
      font-weight: 600;
    }

    .form-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px 25px;
    }

    .form-group {
      display: flex;
      flex-direction: column;
    }

    label {
      font-weight: 600;
      margin-bottom: 6px;
      font-size: 14px;
      color: #444;
    }

    input,
    select,
    textarea {
      padding: 10px 12px;
      border: 1px solid #cfd8dc;
      border-radius: 6px;
      font-size: 14px;
      transition: all 0.3s ease;
      background: #fafafa;
    }

    input:focus,
    select:focus,
    textarea:focus {
      border-color: #007bff;
      outline: none;
      background: #fff;
      box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.15);
    }

    textarea {
      resize: vertical;
    }

    .photo-upload {
      text-align: center;
    }

    .photo-upload img {
      max-width: 100px;
      border-radius: 6px;
      margin-bottom: 10px;
    }

    .full-width {
      grid-column: span 2;
    }

    .btn {
      padding: 12px 20px;
      border: none;
      background: #007bff;
      color: #fff;
      border-radius: 6px;
      font-size: 15px;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    .btn:hover {
      background: #0056b3;
      transform: translateY(-2px);
    }

    .btn:active {
      transform: translateY(0);
    }

    .btn.small {
      padding: 8px 15px;
      font-size: 14px;
      background: #6c757d;
    }

    .btn.small:hover {
      background: #5a6268;
    }

    .info-box {
      grid-column: span 2;
      text-align: center;
      margin: 25px 0 10px;
      padding: 15px;
      background: #f1f7ff;
      border-left: 4px solid #007bff;
      border-radius: 6px;
      font-size: 15px;
      font-weight: 500;
      color: #2c3e50;
    }

    .info-box a {
      color: #007bff;
      font-weight: 600;
      text-decoration: none;
    }

    .info-box a:hover {
      text-decoration: underline;
    }

    .form-actions {
      margin-top: 35px;
      text-align: center;
      display: flex;
      justify-content: center;
      gap: 15px;
      flex-wrap: wrap;
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
    <h2>Explore New Course </h2>
    <form action="submit_student.php" method="POST" enctype="multipart/form-data">
      <div class="form-grid">
        <div class="form-group">
          <label>Full Name</label>
          <input type="text" name="name" required>
        </div>

        <div class="form-group">
          <label>Father's Name</label>
          <input type="text" name="father_name">
        </div>

        <div class="form-group">
          <label>Gender</label>
          <select name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
        </div>

        <div class="form-group">
          <label>Date of Birth</label>
          <input type="date" name="dob">
        </div>

        <div class="form-group">
          <label>Mobile</label>
          <input type="text" name="mobile" required>
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email">
        </div>

        <div class="form-group">
          <label>Select Course</label>
          <select name="course">
            <option value="">--Select--</option>
            <option>Course on Computer Concepts</option>
            <option>Financial Accounting (Tally)</option>
            <option>DTP</option>
            <option>Web Development</option>
            <option>Ms Office</option>
            <option>Miracle</option>
          </select>
        </div>

        <div class="form-group">
          <label>Batch</label>
          <input type="text" name="batch">
        </div>

        <div class="form-group">
          <label>Exam Mode</label>
          <input type="text" name="exam_mode" value="ONLINE">
        </div>

        <div class="form-group">
          <label>Exam Code</label>
          <input type="text" name="exam_code">
        </div>

        <div class="form-group full-width">
          <label>Permanent Address</label>
          <textarea name="address" rows="2"></textarea>
        </div>

        <div class="form-group">
          <label>Photo ID Type</label>
          <input type="text" name="id_type">
        </div>

        <div class="form-group">
          <label>Photo ID Number</label>
          <input type="text" name="id_number">
        </div>

        <div class="info-box">
          Contact Us for Your Username and Password <br>
          <a href="tel:+916354636133">+91 6354636133</a>
        </div>

        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username">
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="text" name="password">
        </div>
      </div>

      <div class="form-actions">
        <button type="submit" class="btn">Click here to Take Admission</button>
        <a href="student-dashboard.php"><button type="button" class="btn small">Back</button></a>
      </div>
    </form>
  </div>
</body>
</html>
