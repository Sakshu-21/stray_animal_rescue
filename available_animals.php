<?php
include "db.php";

// Fetch all animals
$result = mysqli_query($conn, "SELECT * FROM animal");
?>

<html>
<head>
<title>Available Animals</title>
<link rel="stylesheet" href="style.css">

<style>
body {
    background-image: url('img/all.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    padding: 40px 0;
    backdrop-filter: blur(2px);
}

.box {
    width: 85%;
    margin: auto;
    background: rgba(255,255,255,0.88);
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.18);
    animation: fadeIn 0.5s ease-in-out;
}

@keyframes fadeIn {
    from {opacity:0; transform: translateY(20px);}
    to   {opacity:1; transform: translateY(0);}
}

h1 {
    text-align: center;
    color: #4f3ea0;
    margin-bottom: 25px;
    font-size: 32px;
}

table {
    width: 100%;
    border-collapse: collapse;
    text-align: center;
}

th, td {
    padding: 14px;
    border-bottom: 1px solid #ddd;
    font-size: 16px;
}

th {
    background: #f3eaff;
    color: #4f3ea0;
}

tr:hover {
    background: #faf5ff;
}

.adopt-btn {
    padding: 10px 20px;
    background: #58c48d;
    color: white;
    border-radius: 10px;
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s;
}

.adopt-btn:hover {
    background: #48ac7a;
    transform: scale(1.06);
}
</style>
</head>

<body>

<div class="box">
    <h1>🐾 Available Animals for Adoption</h1>

    <table>
        <tr>
            <th>Animal ID</th>
            <th>Type</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Breed</th>
            <th>Health</th>
            <th>Action</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['Animal_id'] ?></td>
            <td><?= $row['type'] ?></td>
            <td><?= $row['Name_animal'] ?></td>
            <td><?= $row['Age'] ?></td>
            <td><?= $row['Gender'] ?></td>
            <td><?= $row['Breed'] ?></td>
            <td><?= $row['Health_status'] ?></td>

            <td>
                <a class="adopt-btn" href="add_adoption.php?animal_id=<?= $row['Animal_id'] ?>">
                    Adopt ❤️
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>

</div>

</body>
</html>
