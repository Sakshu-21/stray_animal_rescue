<?php
// insert_adoption.php
include "db.php";

$animal_id     = isset($_POST['animal_id']) ? $_POST['animal_id'] : null;
$adopter_name  = isset($_POST['adopter_name']) ? mysqli_real_escape_string($conn, $_POST['adopter_name']) : '';
$contact_no    = isset($_POST['contact_no']) ? mysqli_real_escape_string($conn, $_POST['contact_no']) : '';
$adoption_date = isset($_POST['adoption_date']) ? $_POST['adoption_date'] : null;

if (!$animal_id || !$adoption_date) {
    echo "Animal ID and adoption date are required.";
    exit();
}

// Adjust column names to match your DB (lowercase assumed)
$sql = "INSERT INTO adoption (animal_id, adopter_name, contact_no, adoption_date)
        VALUES ('$animal_id', '$adopter_name', '$contact_no', '$adoption_date')";

if (mysqli_query($conn, $sql)) {
    // Redirect admin to the adoption listing
    header("Location: view_adoption.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
