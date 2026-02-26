<?php
include "db.php";

$location       = $_POST['location'];
$date           = $_POST['date'];
$capacity       = $_POST['capacity'];
$animal_type    = $_POST['animal_type'];
$condition_info = $_POST['condition_info'];

$sql = "INSERT INTO rescue_center (Location, Date, Capacity, animal_type, condition_info)
        VALUES ('$location', '$date', '$capacity', '$animal_type', '$condition_info')";

if (mysqli_query($conn, $sql)) {
    header("Location: view_rescue.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
