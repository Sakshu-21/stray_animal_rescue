<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "stray_animal_rescue";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
