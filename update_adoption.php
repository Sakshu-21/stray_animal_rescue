<?php
include "db.php";

$id = $_POST['id'];
$animal = $_POST['animal_id'];
$name = $_POST['adopter_name'];
$contact = $_POST['contact_no'];
$date = $_POST['adoption_date'];

$sql = "UPDATE adoption SET 
            Animal_id = '$animal',
            Adopter_name = '$name',
            Contact_no = '$contact',
            Adoption_date = '$date'
        WHERE Adoption_id = $id";

mysqli_query($conn, $sql);

// Redirect to view page
header("Location: view_adoption.php");
exit();
?>
