<?php include("db.php"); include("header.php"); 
if(!isset($_SESSION['student'])) { header("Location: index.php"); exit; }
$email = $_SESSION['student'];
$student = $conn->query("SELECT * FROM students WHERE email='$email'")->fetch_assoc();
?>

<div class="container mt-5">
  <h3 class="mb-4">Available Companies</h3>
  <div class="table-responsive">
  <table class="table table-bordered table-hover">
    <thead class="table-primary">
      <tr>
        <th>Name</th>
        <th>Role</th>
        <th>Package (LPA)</th>
        <th>Eligibility CGPA</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $result = $conn->query("SELECT * FROM companies");
      while($row = $result->fetch_assoc()){
          echo "<tr>
                  <td>{$row['name']}</td>
                  <td>{$row['role']}</td>
                  <td>{$row['package']}</td>
                  <td>{$row['eligibility_cgpa']}</td>
                  <td><a href='apply.php?cid={$row['company_id']}' class='btn btn-success btn-sm'>Apply</a></td>
                </tr>";
      }
      ?>
    </tbody>
  </table>
  </div>
</div>
