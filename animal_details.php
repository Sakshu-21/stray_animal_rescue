<?php
$conn = new mysqli("localhost", "root", "", "stray_animal_rescue");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$animal_id = $_GET['id'];  // get id from URL

$sql = "SELECT * FROM animal WHERE Animal_id = $animal_id";
$result = $conn->query($sql);
$animal = $result->fetch_assoc();
?>

<html>
<head>
    <title>Animal Details</title>

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

        .label { font-weight: bold; }
        
        .button {
            background: #5c4caf;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            display: block;
            margin: 20px auto 0 auto;
        }
    </style>
</head>

<body>

<div class="box">
    <h2>Animal Details</h2>

    <p><span class="label">ID:</span> <?php echo $animal['Animal_id']; ?></p>
    <p><span class="label">Name:</span> <?php echo $animal['name']; ?></p>
    <p><span class="label">Type:</span> <?php echo $animal['type']; ?></p>
    <p><span class="label">Age:</span> <?php echo $animal['age']; ?></p>
    <p><span class="label">Breed:</span> <?php echo $animal['breed']; ?></p>
    <p><span class="label">Gender:</span> <?php echo $animal['gender']; ?></p>
    <p><span class="label">Health:</span> <?php echo $animal['health_status']; ?></p>

    <!-- Proceed to adoption button -->
    <a href="adoption_form.php?id=<?php echo $animal['Animal_id']; ?>">
        <button class="button">Proceed to Adoption ➤</button>
    </a>
</div>

</body>
</html>
