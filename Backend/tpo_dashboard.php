<?php include("db.php"); include("header.php");
if(!isset($_SESSION['admin'])) { header("Location: admin.php"); exit; }
?>

<div class="container mt-4">
  <div class="card text-center">
    <div class="card-body">
      <h2>Welcome, TPO/Admin</h2>
      <p class="mt-3"><a href="add_company.php" class="btn btn-primary">➕ Add New Company</a></p>
      <p><a href="update_status.php" class="btn btn-warning">📊 Update Student Status</a></p>
      <p><a href="logout.php" class="btn btn-danger">Logout</a></p>
    </div>
  </div>
</div>
