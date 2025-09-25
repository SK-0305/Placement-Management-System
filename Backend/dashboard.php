<?php include("db.php"); session_start(); 
if(!isset($_SESSION['student'])) { header("Location: index.php"); exit; }
$email = $_SESSION['student'];
$student = $conn->query("SELECT * FROM students WHERE email='$email'")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form-container">
    <h1>Welcome, <?php echo $student['name']; ?> 🎓</h1>
    <p><a href="companies.php">View Companies & Apply</a></p>
    <p><a href="logout.php">Logout</a></p>
</div>
</body>
</html>
