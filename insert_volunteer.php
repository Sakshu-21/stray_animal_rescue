<?php
include "db.php";

$name       = $_POST['vname'];
$contact    = $_POST['contact'];
$join_date  = $_POST['join_date'];
$center     = $_POST['assigned_center'];

$sql = "INSERT INTO volunteer (volunteer_name, contact_info, join_date, assigned_center)
        VALUES ('$name', '$contact', '$join_date', '$center')";

if (mysqli_query($conn, $sql)) {
    header("Location: view_volunteer.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
