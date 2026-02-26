<?php
include "db.php";

// GET FORM VALUES
$type    = $_POST['type'];
$name    = $_POST['name'];
$age     = $_POST['age'];
$gender  = $_POST['gender'];
$breed   = $_POST['breed'];
$health  = $_POST['health'];

// CORRECT SQL (matching your actual table column names)
$sql = "INSERT INTO animal (type, name, age, gender, breed, health_status)
        VALUES ('$type', '$name', '$age', '$gender', '$breed', '$health')";

if (mysqli_query($conn, $sql)) {
    // SUCCESS → redirect to view animals
    header("Location: view_animals.php");
    exit();
} else {
    echo "Error saving animal: " . mysqli_error($conn);
}
?>
