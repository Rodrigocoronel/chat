<?php
require 'mysql.php';

session_start();

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT nombre,email FROM usuario where email = '$email'  and password = md5('$password')";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    		$row = $result->fetch_assoc();
    		$_SESSION['email'] = $row['email'];
    		header("location: chaton.php");
} else {
    echo "datos no validos";
}

$conn->close();

?>