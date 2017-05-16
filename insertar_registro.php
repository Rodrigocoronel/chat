<?php
require 'mysql.php';

$nombre1=$_POST['nombres'];
$nombre2=$_POST['apellidos'];
$email=$_POST['email'];
$password=$_POST['password'];
$nombre=$nombre1 ." ". $nombre2;

$sql = "INSERT INTO usuario (nombre, email, password)
VALUES ('$nombre', '$email', md5('$password'))";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>