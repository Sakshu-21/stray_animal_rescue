<?php
$conn = new mysqli("localhost", "root", "", "stray_animal_rescue");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Correct form field names
$name            = $_POST['volunteer_name'];
$contact         = $_POST['contact'];
$email           = $_POST['email'];
$join_date       = $_POST['join_date'];
$assigned_center = $_POST['assigned_center'];

// If user left assigned center empty, set NULL
if ($assigned_center == "") {
    $assigned_center = "NULL";
} else {
    $assigned_center = intval($assigned_center);
}

// Insert volunteer
$sql = "INSERT INTO volunteer (Volunteer_name, Contact_info, email, Join_date, Assigned_center)
        VALUES ('$name', '$contact', '$email', '$join_date', $assigned_center)";

if ($conn->query($sql)) {
    header("Location: volunteer_success.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}
?>
