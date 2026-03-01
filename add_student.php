<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Student</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }

        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input, select, textarea {
            padding: 8px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        .photo-upload {
            text-align: center;
        }

        .photo-upload img {
            max-width: 100px;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .full-width {
            grid-column: span 2;
        }

        .btn {
            padding: 10px 15px;
            border: none;
            background-color: #28a745;
            color: white;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #218838;
        }

        .section {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add New Student</h2>
        <form action="submit_student.php" method="POST" enctype="multipart/form-data">
            <div class="form-grid">
                <div class="form-group photo-upload">
                    <label>Upload Photo</label>
                    <input type="file" name="photo">
                </div>
                <div class="form-group photo-upload">
                    <label>Upload Signature</label>
                    <input type="file" name="signature">
                </div>

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
                        <option>Web Development</option>
			<option>DTP</option>
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

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password">
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
            </div>

            <div class="form-grid section">
                <div class="form-group">
                    <label>Course Fees</label>
                    <input type="text" name="course_fee">
                </div>
                <div class="form-group">
                    <label>Discount Rate</label>
                    <input type="text" name="discount_rate">
                </div>
                <div class="form-group">
                    <label>Discount Amount</label>
                    <input type="text" name="discount_amount">
                </div>
                <div class="form-group">
                    <label>Total Fee</label>
                    <input type="text" name="total_fee">
                </div>
                <div class="form-group">
                    <label>Fees Received</label>
                    <input type="text" name="fees_received">
                </div>
                <div class="form-group">
                    <label>Balance</label>
                    <input type="text" name="balance">
                </div>
                <div class="form-group full-width">
                    <label>Remarks</label>
                    <textarea name="remarks" rows="2"></textarea>
                </div>
            </div>

            <div style="margin-top: 30px; text-align: center;">
                <button type="submit" class="btn">Add Student</button>
 $sql = "INSERT INTO admission (student_name, course, exam_mode, exam_code, username, password, mobile, admission_date, photo)
            VALUES ('$student_name', '$course', '$exam_mode', '$exam_code', '$username', '$password', '$mobile', '$admission_date', '$photo')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Student Added Successfully!'); window.location.href='students.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
            </div>
        </form>
    </div>
</body>
</html>
