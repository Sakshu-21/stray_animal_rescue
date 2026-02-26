<?php
$conn = new mysqli("localhost", "root", "", "stray_animal_rescue");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from adoption_form
$animal_id      = $_POST['animal_id'];
$adopter_name   = $_POST['adopter_name'];
$contact        = $_POST['contact'];
$address        = $_POST['address'];
$adoption_date  = $_POST['adoption_date'];

// Insert into adoption table
$sql = "INSERT INTO adoption (adopter_name, contact_info, address, adoption_date, Animal_id)
        VALUES ('$adopter_name', '$contact', '$address', '$adoption_date', '$animal_id')";

if ($conn->query($sql) === TRUE) {
    header("Location: adoption_success.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}
?>
