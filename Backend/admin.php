<?php include("db.php"); include("header.php"); ?>

<div class="container mt-5">
  <div class="card mx-auto shadow" style="max-width: 400px;">
    <div class="card-body">
      <h3 class="card-title text-center mb-4">Student Login</h3>
      <form method="POST">
        <div class="mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
      </form>
      <p class="text-center mt-3">
        No account? <a href="register.php">Register here</a>
      </p>
    </div>
  </div>
</div>

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
