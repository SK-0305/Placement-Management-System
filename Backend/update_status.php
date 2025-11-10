<?php include("db.php"); include("header.php");
if(!isset($_SESSION['admin'])) { header("Location: admin.php"); exit; }
?>

<div class="container mt-4">
  <div class="card shadow">
    <div class="card-header bg-warning">
      <h4 class="mb-0 text-dark">Update Student Placement Status</h4>
    </div>
    <div class="card-body">
      <table class="table table-bordered table-hover">
        <thead class="table-dark">
          <tr><th>Student</th><th>Company</th><th>Status</th><th>Action</th></tr>
        </thead>
        <tbody>
          <?php
          $result = $conn->query("SELECT a.app_id, s.name AS student, c.name AS company, a.status 
                                  FROM applications a 
                                  JOIN students s ON a.student_id = s.student_id 
                                  JOIN companies c ON a.company_id = c.company_id");

          while($row = $result->fetch_assoc()) {
              echo "<tr>
                <td>{$row['student']}</td>
                <td>{$row['company']}</td>
                <td>{$row['status']}</td>
                <td>
                  <form method='POST' class='d-flex'>
                    <input type='hidden' name='app_id' value='{$row['app_id']}'>
                    <select name='status' class='form-select me-2'>
                        <option value='Applied'>Applied</option>
                        <option value='Selected'>Selected</option>
                        <option value='Rejected'>Rejected</option>
                    </select>
                    <input type='submit' name='update' class='btn btn-sm btn-primary' value='Update'>
                  </form>
                </td>
              </tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php
if (isset($_POST['update'])) {
    $app_id = $_POST['app_id'];
    $status = $_POST['status'];

    $sql = "UPDATE applications SET status='$status' WHERE app_id='$app_id'";
    if ($conn->query($sql)) {
        echo "<script>alert('Status Updated'); window.location='update_status.php';</script>";
    }
}
?>
