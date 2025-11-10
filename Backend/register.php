<?php include("db.php"); include("header.php"); ?>

<div class="container mt-5">
  <div class="card mx-auto shadow" style="max-width: 450px;">
    <div class="card-body">
      <h3 class="card-title text-center mb-4">Student Registration</h3>
      <form method="POST">
        <div class="mb-3">
          <input type="text" name="name" class="form-control form-control-lg" placeholder="Full Name" required>
        </div>
        <div class="mb-3">
          <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required>
        </div>
        <div class="mb-3">
          <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required>
        </div>
        <div class="mb-3">
          <input type="text" name="branch" class="form-control form-control-lg" placeholder="Branch" required>
        </div>
        <div class="mb-3">
          <input type="number" step="0.01" name="cgpa" class="form-control form-control-lg" placeholder="CGPA" required>
        </div>
        <button type="submit" name="register" class="btn btn-primary btn-lg w-100">Register</button>
      </form>
      <p class="text-center mt-3">
        Already have an account? <a href="index.php">Login</a>
      </p>
    </div>
  </div>
</div>
