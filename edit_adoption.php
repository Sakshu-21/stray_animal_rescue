<?php
include 'db.php';

// Check if ID is passed
if (!isset($_GET['id'])) {
    die("No adoption ID provided!");
}

$adoption_id = $_GET['id'];

// Fetch the existing record
$sql = "SELECT * FROM adoption WHERE Adoption_id = $adoption_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    die("Record not found!");
}

$row = mysqli_fetch_assoc($result);

// Update when form submitted
if (isset($_POST['update'])) {

    $animal_id = $_POST['animal_id'];
    $name = $_POST['adopter_name'];
    $contact = $_POST['contact_no'];
    $date = $_POST['adoption_date'];

    $update_sql = "UPDATE adoption SET 
                        Animal_id = '$animal_id',
                        Adopter_name = '$name',
                        Contact_no = '$contact',
                        Adoption_date = '$date'
                   WHERE Adoption_id = '$adoption_id'";

    mysqli_query($conn, $update_sql);

    header("Location: view_adoption.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Adoption</title>
</head>
<body>

<h2>Edit Adoption</h2>

<form method="POST">

    <label>Animal ID:</label><br>
    <input type="text" name="animal_id" value="<?= $row['Animal_id']; ?>" required><br><br>

    <label>Adopter Name:</label><br>
    <input type="text" name="adopter_name" value="<?= $row['Adopter_name']; ?>" required><br><br>

    <label>Contact No:</label><br>
    <input type="text" name="contact_no" value="<?= $row['Contact_no']; ?>" required><br><br>

    <label>Adoption Date:</label><br>
    <input type="date" name="adoption_date" value="<?= $row['Adoption_date']; ?>" required><br><br>

    <button type="submit" name="update">Update</button>

</form>

</body>
</html>
