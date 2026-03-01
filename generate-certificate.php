
<?php
include('db_conn.php');
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $cr = $_GET['cr'];
    $res = $conn->query("SELECT * FROM admission WHERE id = $id");
    $student = $res->fetch_assoc();
}
if (!$student) {
    echo "Student not found.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Certificate - NEO TECH HUB</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            background: #0b1d3a; /* dark blue background */
            padding: 50px;
            text-align: center;
            color: #fff;
        }
        .certificate {
            width: 900px;
            margin: auto;
            padding: 70px;
            background-image: url('bg-main.png');
            background-size: cover;
            border: 12px solid #FFD700; /* Gold border */
            box-shadow: 0 0 25px rgba(0,0,0,0.6);
            position: relative;
            border-radius: 15px;
        }
        .certificate h1 {
            color: #FFD700;
            font-size: 60px;
            margin-bottom: 0;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
            letter-spacing: 4px;
        }
        .certificate h2 {
            font-size: 24px;
            font-weight: normal;
            margin-top: 0;
            color: #f0f0f0;
            letter-spacing: 2px;
        }
        .certificate p {
            font-size: 18px;
            color: #e0e0e0;
        }
        .certificate .name {
            font-size: 40px;
            font-weight: bold;
            color: #FFD700;
            margin: 30px 0 20px;
            text-transform: uppercase;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
        }
        .certificate .course {
            font-size: 22px;
            font-weight: bold;
            color: #fff;
            margin-top: 10px;
        }
        .certificate .date {
            margin-top: 20px;
            font-size: 18px;
            color: #ddd;
        }
        .certificate .signatures {
            margin-top: 70px;
            display: flex;
            justify-content: space-around;
        }
        .certificate .sign-box {
            text-align: center;
            color: #f8f8f8;
        }
        .certificate .sign-box h2 {
            font-size: 20px;
            color: #FFD700;
            margin-bottom: 10px;
        }
        .certificate .sign-box p {
            font-size: 16px;
            color: #ccc;
        }
        .certificate .sign-box hr {
            border: none;
            border-top: 2px solid #FFD700;
            width: 180px;
            margin: 15px auto;
        }
        .logo {
            width: 220px;
            height: 220px;
            border-radius: 50%; /* Makes logo round */
            object-fit: cover;
            position: absolute;
            top: 30px;
            left: 30px;
            border: 5px solid #FFD700;
        }
        /* Download button */
        .download-btn {
            margin-top: 30px;
            background: #FFD700;
            color: #0b1d3a;
            padding: 12px 25px;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0,0,0,0.4);
            transition: 0.3s;
        }
        .download-btn:hover {
            background: #e6c200;
        }
    </style>
</head>
<body>
    <div class="certificate" id="certificate">
        <img src="logo-aroundss.png" class="logo" alt="NEO TECH HUB Logo"> <!-- Update logo path -->
      <center>  <h1>CERTIFICATE</h1></center>
        <h2>OF COMPLETION</h2>
        <p>This is to certify that</p>
        <div class="name"><?= htmlspecialchars($student['student_name']) ?></div>
        <p class="course">Has successfully completed the course titled as<br> <br><?php echo $cr ?> at <br><br> NEO TECH HUB</p>
        <div class="date">Admission Date: <?= date("l, F d, Y", strtotime($student['admission_date'])) ?> </div>

        <div class="signatures">
            <div class="sign-box">
                <h2>NEO TECH HUB</h2>
                <hr>
                <p>Authorized</p>
            </div>
            <div class="sign-box">
                <h2>Sneha</h2>
                <hr>
                <p>Director</p>
            </div>
        </div>
    </div>

    <!-- Download Button -->
    <button class="download-btn" onclick="downloadCertificate()">Download Certificate</button>

    <script>
        function downloadCertificate() {
            window.print();
        }
    </script>
</body>
</html>
