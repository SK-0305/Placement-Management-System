<?php include("db.php"); session_start();
if(!isset($_SESSION['admin'])) { header("Location: admin.php"); exit; }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Company</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form-container">
    <h1>Add Company</h1>
    <form method="POST">
        <input type="text" name="name" placeholder="Company Name" required><br>
        <input type="text" name="role" placeholder="Job Role" required><br>
        <input type="number" step="0.01" name="package" placeholder="Package (LPA)" required><br>
        <input type="number" step="0.01" name="eligibility_cgpa" placeholder="Eligibility CGPA" required><br>
        <input type="date" name="drive_date" required><br>
        <input type="submit" name="add" value="Add Company">
    </form>
</div>
</body>
</html>

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
