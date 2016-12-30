<?php
$servername = "sql113.byethost33.com";
$username = "b33_17297076";
$password = "ersa92cr";
$dbname = "b33_17297076_mydb";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$email = $_POST['email'];
$contrasena = md5 ("" . $_POST['password'] . "");

$sql = "SELECT COUNT(*) FROM user where email='" . $email . "' and password='" . $contrasena . "';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$count = $row["COUNT(*)"];


if($count == 0) {
	header('location:login.php?status=error');
} else {
	header('location:main.php?status=success');
}

$conn->close();
?>