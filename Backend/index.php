<?php include("db.php"); session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form-container">
    <h1>Student Login</h1>
    <form method="POST">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" name="login" value="Login">
    </form>
    <p>No account? <a href="register.php">Register</a></p>
</div>
</body>
</html>

<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    $result = $conn->query("SELECT * FROM students WHERE email='$email' AND password='$pass'");
    if ($result->num_rows > 0) {
        $_SESSION['student'] = $email;
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Invalid Login');</script>";
    }
}
?>
