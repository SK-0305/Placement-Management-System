<?php include("db.php"); include("header.php");
if(!isset($_SESSION['admin'])) { header("Location: admin.php"); exit; }
?>

<div class="container-box">
  <h1 class="text-center mb-4">Add Company</h1>
  <form method="POST">
    <input type="text" name="name" class="form-control mb-2" placeholder="Company Name" required>
    <input type="text" name="role" class="form-control mb-2" placeholder="Job Role" required>
    <input type="number" step="0.01" name="package" class="form-control mb-2" placeholder="Package (LPA)" required>
    <input type="number" step="0.01" name="eligibility_cgpa" class="form-control mb-2" placeholder="Eligibility CGPA" required>
    <input type="date" name="drive_date" class="form-control mb-2" required>
    <input type="submit" name="add" class="btn btn-success w-100" value="Add Company">
  </form>
</div>

<?php
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $role = $_POST['role'];
    $package = $_POST['package'];
    $eligibility = $_POST['eligibility_cgpa'];
    $date = $_POST['drive_date'];

    $sql = "INSERT INTO companies (name, role, package, eligibility_cgpa, drive_date) 
            VALUES ('$name', '$role', '$package', '$eligibility', '$date')";

    if ($conn->query($sql)) {
        echo "<script>alert('Company Added Successfully'); window.location='tpo_dashboard.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
