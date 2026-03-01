<?php include 'nav.php'; ?>
<?php
include 'db.php'; // your database connection file

// Handle file upload
if (isset($_POST['upload'])) {
    if (isset($_FILES['pdf_file']) && $_FILES['pdf_file']['error'] == 0) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $fileName = basename($_FILES['pdf_file']['name']);
        $targetFilePath = $targetDir . $fileName;

        if (move_uploaded_file($_FILES['pdf_file']['tmp_name'], $targetFilePath)) {
            $sql = "INSERT INTO exam_pdfs (file_name) VALUES ('$fileName')";
            if ($conn->query($sql)) {
                echo "<script>alert('PDF uploaded successfully!');</script>";
            } else {
                echo "DB Error: " . $conn->error;
            }
        } else {
            echo "File upload failed.";
        }
    } else {
        echo "Please choose a PDF file.";
    }
}

// Fetch all PDFs
$sql = "SELECT * FROM exam_pdfs ORDER BY uploaded_on DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exams PDFs</title>
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background: #f4f7fa;
            color: #333;
        }

        h2 {
            color: #2c3e50;
            font-size: 28px;
            margin-bottom: 15px;
            border-left: 6px solid #007BFF;
            padding-left: 10px;
        }

        .upload-box {
            margin-bottom: 25px;
            padding: 20px;
            border-radius: 10px;
            background: #ffffff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            width: 400px;
        }

        .upload-box label {
            font-size: 16px;
            font-weight: 600;
        }

        .btn {
            background: #007BFF;
            color: white;
            padding: 10px 18px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
            font-size: 14px;
        }

        .btn:hover {
            background: #0056b3;
            transform: translateY(-2px);
        }

        input[type="file"] {
            margin: 10px 0;
            padding: 5px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 25px;
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            font-size: 14px;
        }

        th {
            background: #007BFF;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        tr:hover {
            background: #f1f7ff;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: 500;
        }

        a:hover {
            text-decoration: underline;
        }

        .back-btn {
            margin-top: 20px;
        }

        .back-btn button {
            background: #28a745;
            border: none;
            color: #fff;
            padding: 10px 18px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            transition: 0.3s;
        }

        .back-btn button:hover {
            background: #1e7e34;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

<h2>📘 Exam PDFs</h2>

<div class="upload-box">
    <form method="post" enctype="multipart/form-data">
        <label><b>Upload New PDF:</b></label><br><br>
        <input type="file" name="pdf_file" accept="application/pdf" required>
        <button type="submit" name="upload" class="btn">Add PDF</button>
    </form>
</div>

<h3>Available PDFs:</h3>
<?php
if ($result && $result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>File Name</th>
                <th>Uploaded On</th>
                <th>Action</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='uploads/".$row['file_name']."' target='_blank'>".$row['file_name']."</a></td>
                <td>".$row['uploaded_on']."</td>
                <td><a href='uploads/".$row['file_name']."' target='_blank'>View</a></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No PDFs uploaded yet.";
}
?>
<br><br><br>

<div class="back-btn">
    <a href="exams.php"><button type="button">⬅ Back</button></a>
</div>

</body>
</html>
