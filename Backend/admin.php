<?php include("db.php"); session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>TPO Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form-container">
    <h1>TPO/Admin Login</h1>
    <form method="POST">
        <input type="text" name="username" placeholder="Admin Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" name="login" value="Login">
    </form>
</div>
</body>
</html>

<?php
// Simple static admin login (you can also create an 'admin' table in DB)
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user == "tpo" && $pass == "admin123") {   // hardcoded credentials
        $_SESSION['admin'] = $user;
        header("Location: tpo_dashboard.php");
    } else {
        echo "<script>alert('Invalid Admin Credentials');</script>";
    }
}
?>
