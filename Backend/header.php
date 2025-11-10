<?php if(isset($_SESSION['student'])): ?>
  <a href="dashboard.php">Dashboard</a>
  <a href="companies.php">Companies</a>
  <a href="logout.php">Logout</a>
<?php elseif(isset($_SESSION['admin'])): ?>
  <a href="tpo_dashboard.php">Dashboard</a>
  <a href="add_company.php">Add Company</a>
  <a href="update_status.php">Update Status</a>
  <a href="logout.php">Logout</a>
<?php else: ?>
  <a href="index.php">Student Login</a>
  <a href="register.php">Register</a>
  <a href="admin.php">TPO Login</a>
<?php endif; ?>
