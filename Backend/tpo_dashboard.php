<?php include("db.php"); session_start();
if(!isset($_SESSION['admin'])) { header("Location: admin.php"); exit; }
?>

<!DOCTYPE html>
<html>
<head>
    <title>TPO Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form-container">
    <h1>Welcome, TPO</h1>
    <p><a href="add_company.php">➕ Add New Company</a></p>
    <p><a href="update_status.php">📊 Update Student Status</a></p>
    <p><a href="logout.php">Logout</a></p>
</div>
</body>
</html>
