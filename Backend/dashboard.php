<?php include("db.php"); include("header.php"); 
if(!isset($_SESSION['student'])) { header("Location: index.php"); exit; }
$email = $_SESSION['student'];
$student = $conn->query("SELECT * FROM students WHERE email='$email'")->fetch_assoc();
?>

<div class="container mt-5">
  <div class="card mx-auto shadow text-center" style="max-width: 500px;">
    <div class="card-body">
      <h2>Welcome, <?php echo $student['name']; ?> 🎓</h2>
      <p class="mt-4">
        <a href="companies.php" class="btn btn-primary btn-lg w-75 mb-2">View Companies & Apply</a><br>
        <a href="logout.php" class="btn btn-danger btn-lg w-75">Logout</a>
      </p>
    </div>
  </div>
</div>
