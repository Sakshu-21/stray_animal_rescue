<?php
// view_adoption.php
include "db.php";

// Order newest adoption first
$result = mysqli_query($conn, "SELECT * FROM adoption ORDER BY Adoption_date DESC");
?>

<html>
<head>
    <title>View Adoptions</title>

    <style>
        body {
            background-image: url("img/all.jpg");
            background-size: cover;
            background-attachment: fixed;
            margin: 0;
            padding: 40px 0;
            font-family: Arial, sans-serif;
        }

        /* NAVBAR */
        .navbar {
            width: 100%;
            background: rgba(255,255,255,0.95);
            display: flex;
            padding: 15px 20px;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 10px rgba(0,0,0,0.15);
        }

        .navbar a {
            text-decoration: none;
            color: #4f3ea0;
            font-size: 18px;
            font-weight: 600;
            margin: 0 12px;
        }

        .navbar a:hover { color: #6a4caf; }

        .title {
            font-size: 26px;
            font-weight: bold;
            color: #4f3ea0;
        }

        .table-box {
            width: 85%;
            margin: 40px auto;
            background: rgba(255,255,255,0.9);
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.18);
        }

        h1 {
            text-align: center;
            color: #4f3ea0;
            margin-bottom: 18px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 15px;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        th {
            background: #f3eaff;
            color: #4f3ea0;
            font-weight: 700;
        }

        tr:hover {
            background: #faf5ff;
        }

        .btn-edit {
            background: #5c4caf;
            color: white;
            padding: 6px 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        .btn-delete {
            background: #e06a6a;
            color: white;
            padding: 6px 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        .btn-edit:hover { background: #4a3cb0; }
        .btn-delete:hover { background: #c45151; }
    </style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="title">🐾 Admin Panel</div>

    <div>
        <a href="dashboard.php">Dashboard</a>
        <a href="view_animals.php">Animals</a>
        <a href="view_rescue.php">Rescue</a>
        <a href="view_volunteer.php">Volunteers</a>
        <a href="view_adoption.php">Adoptions</a>
        <a href="view_medical.php">Medical</a>
    </div>
</div>


<div class="table-box">
    <h1>❤️ Adoption Records</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Animal ID</th>
            <th>Adopter</th>
            <th>Contact</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['Adoption_id'] ?></td>
            <td><?= $row['Animal_id'] ?></td>
            <td><?= htmlspecialchars($row['Adopter_name']) ?></td>
            <td><?= htmlspecialchars($row['Contact_no']) ?></td>
            <td><?= $row['Adoption_date'] ?></td>

            <td>
                <a href="edit_adoption.php?id=<?= $row['Adoption_id'] ?>">
                    <button class="btn-edit">Edit</button>
                </a>

                <a href="delete_adoption.php?id=<?= $row['Adoption_id'] ?>" 
                   onclick="return confirm('Are you sure you want to delete this adoption record?');">
                    <button class="btn-delete">Delete</button>
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>

</div>

</body>
</html>
