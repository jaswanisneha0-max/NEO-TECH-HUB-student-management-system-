<?php include 'nav.php'; ?>
<?php
include("db.php");

// Get filters
$month = isset($_GET['month']) ? $_GET['month'] : '';
$course = isset($_GET['course']) ? $_GET['course'] : '';
$search = isset($_GET['search']) ? $_GET['search'] : '';
$table = isset($_GET['table']) ? $_GET['table'] : '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Website Report</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 25px;
            color: #333;
        }
  
        h1 {
            text-align: center;
            color: #1d3557;
            margin-bottom: 35px;
            font-size: 32px;
            font-weight: 700;
        }

        h2 {
            margin-top: 45px;
            margin-bottom: 15px;
            color: #0077b6;
            font-size: 22px;
            border-left: 6px solid #00b4d8;
            padding-left: 12px;
            font-weight: 600;
        }

        .filter-box {
            margin: 15px 0;
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            background: #ffffff;
            padding: 14px 18px;
            border-radius: 10px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.06);
        }

        input[type="text"], select {
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            min-width: 170px;
            transition: all 0.2s ease;
            font-size: 14px;
        }

        input[type="text"]:focus, select:focus {
            border-color: #00b4d8;
            box-shadow: 0 0 6px rgba(0,180,216,0.35);
        }

        button {
            padding: 10px 18px;
            border: none;
            background: #00b4d8;
            color: white;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        button:hover {
            background: #0077b6;
            transform: translateY(-2px);
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 12px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }

        th, td {
            border: 1px solid #f1f1f1;
            padding: 12px 14px;
            text-align: left;
            font-size: 14px;
        }

        th {
            background: #e3f2fd;
            color: #023e8a;
            font-weight: 600;
            font-size: 15px;
        }

        tr:nth-child(even) {
            background: #fafbfc;
        }

        tr:hover {
            background: #e8f5ff;
        }

        a button {
            margin-top: 25px;
            background: #6c757d;
            font-size: 14px;
        }

        a button:hover {
            background: #495057;
        }
    </style>
</head>
<body>

    <h1>📊 Website Report</h1>

    <!-- Contact Inquiries -->
    <h2>📩 Contact Inquiries</h2>
    <form method="GET" class="filter-box">
        <input type="hidden" name="table" value="contact_inquiries">
        <input type="text" name="search" value="<?php echo ($table=='contact_inquiries') ? $search : ''; ?>" placeholder="Search...">
        <button type="submit">Search</button>

        <select name="course">
            <option value="">-- Select Course --</option>
            <option value="CCC" <?php if($course=="CCC") echo "selected"; ?>>CCC</option>
            <option value="Miracle" <?php if($course=="Miracle") echo "selected"; ?>>Miracle</option>
            <option value="Ms Office" <?php if($course=="Ms Office") echo "selected"; ?>>Ms Office</option>
            <option value="Tally" <?php if($course=="Tally") echo "selected"; ?>>Tally</option>
            <option value="Web designing" <?php if($course=="Web designing") echo "selected"; ?>>Web designing</option>
            <option value="DTP" <?php if($course=="DTP") echo "selected"; ?>>DTP</option>
        </select>

        <select name="month">
            <option value="">-- Select Month --</option>
            <?php 
            for ($m=1; $m<=12; $m++) {
                $monthName = date("F", mktime(0, 0, 0, $m, 10));
                $selected = ($month==$m && $table=="contact_inquiries") ? "selected" : "";
                echo "<option value='$m' $selected>$monthName</option>";
            }
            ?>
        </select>

        <button type="submit">Apply</button>
    </form>
    <table>
        <tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Preferred Course</th><th>Date</th></tr>
        <?php
        $sql = "SELECT * FROM contact_inquiries WHERE 1";
        if ($course && $table=="contact_inquiries") $sql .= " AND preferred_course='$course'";
        if ($search && $table=="contact_inquiries") $sql .= " AND (name LIKE '%$search%' OR email LIKE '%$search%' OR phone LIKE '%$search%')";
        if ($month && $table=="contact_inquiries") $sql .= " AND MONTH(submitted_at)='$month'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['preferred_course']}</td>
                <td>{$row['submitted_at']}</td>
            </tr>";
        }
        ?>
    </table>

    <!-- Admissions -->
    <h2>🎓 Admissions</h2>
    <form method="GET" class="filter-box">
        <input type="hidden" name="table" value="admission">
        <input type="text" name="search" value="<?php echo ($table=='admission') ? $search : ''; ?>" placeholder="Search...">
        <button type="submit">Search</button>

        <select name="course">
            <option value="">-- Select Course --</option>
            <option value="CCC" <?php if($course=="CCC") echo "selected"; ?>>CCC</option>
            <option value="Miracle" <?php if($course=="Miracle") echo "selected"; ?>>Miracle</option>
            <option value="Ms Office" <?php if($course=="Ms Office") echo "selected"; ?>>Ms Office</option>
            <option value="Tally" <?php if($course=="Tally") echo "selected"; ?>>Tally</option>
            <option value="Web designing" <?php if($course=="Web designing") echo "selected"; ?>>Web designing</option>
            <option value="DTP" <?php if($course=="DTP") echo "selected"; ?>>DTP</option>
        </select>

        <select name="month">
            <option value="">-- Select Month --</option>
            <?php 
            for ($m=1; $m<=12; $m++) {
                $monthName = date("F", mktime(0, 0, 0, $m, 10));
                $selected = ($month==$m && $table=="admission") ? "selected" : "";
                echo "<option value='$m' $selected>$monthName</option>";
            }
            ?>
        </select>

        <button type="submit">Apply</button>
    </form>
    <table>
        <tr><th>ID</th><th>Student Name</th><th>Course</th><th>Batch</th><th>Date</th></tr>
        <?php
        $sql = "SELECT * FROM admission WHERE 1";
        if ($course && $table=="admission") $sql .= " AND course='$course'";
        if ($search && $table=="admission") $sql .= " AND (student_name LIKE '%$search%' OR batch LIKE '%$search%')";
        if ($month && $table=="admission") $sql .= " AND MONTH(admission_date)='$month'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['student_name']}</td>
                <td>{$row['course']}</td>
                <td>{$row['batch']}</td>
                <td>{$row['admission_date']}</td>
            </tr>";
        }
        ?>
    </table>

    <!-- Franchises -->
    <h2>🏢 Franchises</h2>
    <form method="GET" class="filter-box">
        <input type="hidden" name="table" value="franchises">
        <input type="text" name="search" value="<?php echo ($table=='franchises') ? $search : ''; ?>" placeholder="Search...">
        <button type="submit">Search</button>

        <select name="month">
            <option value="">-- Select Month --</option>
            <?php 
            for ($m=1; $m<=12; $m++) {
                $monthName = date("F", mktime(0, 0, 0, $m, 10));
                $selected = ($month==$m && $table=="franchises") ? "selected" : "";
                echo "<option value='$m' $selected>$monthName</option>";
            }
            ?>
        </select>

        <button type="submit">Apply</button>
    </form>
    <table>
        <tr><th>ID</th><th>Franchise Name</th><th>Director</th><th>Email</th><th>Mobile</th><th>Created At</th></tr>
        <?php
        $sql = "SELECT * FROM franchises WHERE 1";
        if ($search && $table=="franchises") $sql .= " AND (franchise_name LIKE '%$search%' OR director_name LIKE '%$search%' OR director_email LIKE '%$search%' OR director_mobile LIKE '%$search%')";
        if ($month && $table=="franchises") $sql .= " AND MONTH(created_at)='$month'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['franchise_name']}</td>
                <td>{$row['director_name']}</td>
                <td>{$row['director_email']}</td>
                <td>{$row['director_mobile']}</td>
                <td>{$row['created_at']}</td>
            </tr>";
        }
        ?>
    </table>

    <!-- Student Fees -->
    <h2>💰 Student Fees</h2>
    <form method="GET" class="filter-box">
        <input type="hidden" name="table" value="student_fees">
        <input type="text" name="search" value="<?php echo ($table=='student_fees') ? $search : ''; ?>" placeholder="Search...">
        <button type="submit">Search</button>

        <select name="month">
            <option value="">-- Select Month --</option>
            <?php 
            for ($m=1; $m<=12; $m++) {
                $monthName = date("F", mktime(0, 0, 0, $m, 10));
                $selected = ($month==$m && $table=="student_fees") ? "selected" : "";
                echo "<option value='$m' $selected>$monthName</option>";
            }
            ?>
        </select>

        <button type="submit">Apply</button>
    </form>
    <table>
        <tr><th>ID</th><th>Admission ID</th><th>Amount Paid</th><th>Payment Date</th><th>Mode</th><th>Transaction ID</th></tr>
        <?php
        $sql = "SELECT * FROM student_fees WHERE 1";
        if ($search && $table=="student_fees") $sql .= " AND (admission_id LIKE '%$search%' OR payment_mode LIKE '%$search%' OR transaction_id LIKE '%$search%')";
        if ($month && $table=="student_fees") $sql .= " AND MONTH(payment_date)='$month'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['admission_id']}</td>
                <td>{$row['amount_paid']}</td>
                <td>{$row['payment_date']}</td>
                <td>{$row['payment_mode']}</td>
                <td>{$row['transaction_id']}</td>
            </tr>";
        }
        ?>
    </table>
<br>
<br>
<br>
<a href="center-dashboard.php"><button type="submit">Back to Dashboard</button></a>

</body>
</html>
