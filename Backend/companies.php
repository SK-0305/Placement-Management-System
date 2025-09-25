<?php include("db.php"); session_start();
if(!isset($_SESSION['student'])) { header("Location: index.php"); exit; }
$email = $_SESSION['student'];
$student = $conn->query("SELECT * FROM students WHERE email='$email'")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Companies</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form-container">
    <h1>Available Companies</h1>
    <table border="1" width="100%">
        <tr><th>Name</th><th>Role</th><th>Package</th><th>Eligibility</th><th>Action</th></tr>
        <?php
        $result = $conn->query("SELECT * FROM companies");
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['role']}</td>
                <td>{$row['package']}</td>
                <td>{$row['eligibility_cgpa']}</td>
                <td>
                    <a href='apply.php?cid={$row['company_id']}'>Apply</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
