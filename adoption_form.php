<?php
$conn = new mysqli("localhost", "root", "", "stray_animal_rescue");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$animal_id = $_GET['id']; // Animal selected for adoption
?>

<html>
<head>
    <title>Adoption Form</title>

    <style>
        .box {
            width: 50%;
            margin: 40px auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 5px 20px rgba(0,0,0,0.15);
        }

        h2 { text-align: center; }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #888;
        }

        .button {
            background: #58c48d;
            padding: 12px 20px;
            border-radius: 8px;
            color: white;
            border: none;
            cursor: pointer;
            display: block;
            margin: 20px auto;
        }
    </style>
</head>

<body>

<div class="box">
    <h2>Adoption Form</h2>

    <form action="save_adoption.php" method="POST">

        <input type="hidden" name="animal_id" value="<?php echo $animal_id; ?>">

        <input type="text" name="adopter_name" placeholder="Your Name" required>
        <input type="text" name="contact" placeholder="Contact Number" required>
        <input type="text" name="address" placeholder="Address" required>
        <input type="date" name="adoption_date" required>

        <button class="button">Submit Adoption Request ➤</button>
    </form>
</div>

</body>
</html>
