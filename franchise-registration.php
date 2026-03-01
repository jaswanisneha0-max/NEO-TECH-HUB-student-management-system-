<?php include 'nav.php'; ?>
<?php
// franchise-registration.php
include 'db.php'; // your database connection file

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $franchise_name   = $_POST['franchise_name'];
    $franchise_address = $_POST['franchise_address'];
    $state            = $_POST['state'];
    $district         = $_POST['district'];
    $director_name    = $_POST['director_name'];
    $director_email   = $_POST['director_email'];
    $director_mobile  = $_POST['director_mobile'];

    // Insert query
    $sql = "INSERT INTO franchises 
            (franchise_name, franchise_address, state, district, director_name, director_email, director_mobile) 
            VALUES 
            ('$franchise_name', '$franchise_address', '$state', '$district', '$director_name', '$director_email', '$director_mobile')";

    if (mysqli_query($conn, $sql)) {
        $message = "✅ Franchise Registered Successfully!";
    } else {
        $message = "❌ Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Franchise Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <div class="card shadow-lg p-4 rounded-4">
    <h2 class="text-center mb-4">Franchise Registration</h2>

    <?php if ($message): ?>
      <div class="alert alert-info text-center"><?php echo $message; ?></div>
    <?php endif; ?>

    <form method="POST">
      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Franchise Name</label>
          <input type="text" name="franchise_name" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Director Name</label>
          <input type="text" name="director_name" class="form-control" required>
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Franchise Address</label>
        <textarea name="franchise_address" class="form-control" required></textarea>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">State</label>
          <input type="text" name="state" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">District</label>
          <input type="text" name="district" class="form-control" required>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Director Email</label>
          <input type="email" name="director_email" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Director Mobile</label>
          <input type="text" name="director_mobile" class="form-control" required>
        </div>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary px-5">Register</button>
      </div>
    </form>
  </div>
</div>
</body>
</html>
