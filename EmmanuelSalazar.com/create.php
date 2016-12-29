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
$sql = "SELECT COUNT(*) FROM user where email='" . $email . "';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$count = $row["COUNT(*)"];


if($count == 0) {


$contrasena = md5 ("" . $_POST['password'] . "");
$sql = "INSERT INTO user(name, lastname, email, password, userType_iduserType, status_idstatus) VALUES ('" . $_POST['name'] . "', '" . $_POST['lastname'] . "', '" . $email . "', '" . $contrasena . "', 1, 1)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


} else {
echo "The email " . $email . " already exists <br>";
}

$conn->close();
?>