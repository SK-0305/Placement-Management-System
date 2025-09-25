<?php include("db.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form-container">
    <h1>Student Registration</h1>
    <form method="POST">
        <input type="text" name="name" placeholder="Full Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="text" name="branch" placeholder="Branch" required><br>
        <input type="number" step="0.01" name="cgpa" placeholder="CGPA" required><br>
        <input type="submit" name="register" value="Register">
    </form>
    <p>Already have an account? <a href="index.php">Login</a></p>
</div>
</body>
</html>

<?php
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $branch = $_POST['branch'];
    $cgpa = $_POST['cgpa'];

    $sql = "INSERT INTO students (name, email, password, branch, cgpa)
            VALUES ('$name', '$email', '$pass', '$branch', '$cgpa')";
    if ($conn->query($sql)) {
        echo "<script>alert('Registration successful!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
