<?php
$conn = new mysqli("localhost", "root", "", "stray_animal_rescue");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$animal_type   = $_POST['animal_type'];      // from your form
$location      = $_POST['location'];
$condition     = $_POST['condition'];
$date          = $_POST['date'];
$capacity      = $_POST['capacity'];
$animal_id     = $_POST['animal_id'];        // optional if used

$sql = "INSERT INTO rescue_center (Location, Date, Capacity, animal_type, condition_info, Animal_id)
        VALUES ('$location', '$date', '$capacity', '$animal_type', '$condition', '$animal_id')";

if ($conn->query($sql)) {
    header("Location: rescue_success.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}
?>
