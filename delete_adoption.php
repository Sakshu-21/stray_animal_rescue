<?php
include "db.php";

$id = $_GET['id'];   // adoption ID coming from the link

// Delete the record
$sql = "DELETE FROM adoption WHERE Adoption_id = $id";

mysqli_query($conn, $sql);

// Redirect back to adoption view page
header("Location: view_adoption.php");
exit();
?>
