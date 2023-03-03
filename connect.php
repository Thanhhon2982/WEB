<?php
$servername = "localhost";
$database = "lab3";
$username = "web";
$password = "H0344517822";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>