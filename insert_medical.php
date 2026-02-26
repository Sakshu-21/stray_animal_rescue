<?php
include "db.php";

$animal_id  = $_POST['animal_id'];
$diagnosis  = mysqli_real_escape_string($conn, $_POST['diagnosis']);
$treatment  = mysqli_real_escape_string($conn, $_POST['treatment']);
$date       = $_POST['date'];
$vet        = mysqli_real_escape_string($conn, $_POST['vet']);

$sql = "INSERT INTO medical_records (animal_id, diagnosis, treatment, date, vet_name)
        VALUES ('$animal_id', '$diagnosis', '$treatment', '$date', '$vet')";

if (mysqli_query($conn, $sql)) {
    header("Location: view_medical.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
