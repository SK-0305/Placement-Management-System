<?php include("db.php"); session_start();
if(!isset($_SESSION['student'])) { header("Location: index.php"); exit; }
$student_email = $_SESSION['student'];
$student = $conn->query("SELECT * FROM students WHERE email='$student_email'")->fetch_assoc();
$cid = $_GET['cid'];
$conn->query("INSERT INTO applications(student_id, company_id) VALUES('{$student['student_id']}', '$cid')");
echo "<script>alert('Applied Successfully'); window.location='companies.php';</script>";
?>
