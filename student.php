<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Student</title>
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: "Segoe UI", Arial, sans-serif;
            background: #eef2f7;
            color: #333;
        }

        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 30px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.6s ease-in-out;
        }

        h2 {
            margin-bottom: 25px;
            text-align: center;
            color: #2563eb;
            font-size: 28px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        /* Form Grid */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 22px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: 600;
            margin-bottom: 6px;
            color: #444;
        }

        input, select, textarea {
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            transition: 0.3s;
            background: #fdfdfd;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #2563eb;
            outline: none;
            box-shadow: 0 0 6px rgba(37, 99, 235, 0.3);
        }

        .photo-upload {
            text-align: center;
        }

        .photo-upload img {
            max-width: 90px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .full-width {
            grid-column: span 2;
        }

        /* Button */
        .btn {
            padding: 12px 20px;
            border: none;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: white;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s ease-in-out;
            box-shadow: 0 4px 10px rgba(37, 99, 235, 0.3);
        }

        .btn:hover {
            background: linear-gradient(135deg, #1d4ed8, #1e40af);
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(37, 99, 235, 0.4);
        }

        .section {
            margin-top: 30px;
        }

        /* Animation */
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
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
                        <option>CCC</option>
                        <option>Tally</option>
                        <option>DTP</option> 
                        <option>Web Designing</option>
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
                
                <div class="form-group full-width">
                    <label>Remarks</label>
                    <textarea name="remarks" rows="2"></textarea>
                </div>
            </div>

            <div style="margin-top: 30px; text-align: center;">
                <button type="submit" class="btn">Add Student</button>
            </div>
        </form>
    </div>
</body>
</html>
