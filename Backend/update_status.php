<?php include("db.php"); session_start();
if(!isset($_SESSION['admin'])) { header("Location: admin.php"); exit; }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Status</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form-container">
    <h1>Update Student Placement Status</h1>
    <table border="1" width="100%">
        <tr>
            <th>Student</th><th>Company</th><th>Status</th><th>Action</th>
        </tr>
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
                    <form method='POST'>
                        <input type='hidden' name='app_id' value='{$row['app_id']}'>
                        <select name='status'>
                            <option value='Applied'>Applied</option>
                            <option value='Selected'>Selected</option>
                            <option value='Rejected'>Rejected</option>
                        </select>
                        <input type='submit' name='update' value='Update'>
                    </form>
                </td>
            </tr>";
        }
        ?>
    </table>
</div>
</body>
</html>

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
