<?php
include "db.php";
$result = mysqli_query($conn, "SELECT * FROM medical_records ORDER BY Date DESC");
?>

<html>
<head>
<title>View Medical Records</title>

<style>
body {
    background-image: url("img/all.jpg");
    background-size: cover;
    background-attachment: fixed;
    padding: 40px 0;
    margin: 0;
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
    box-shadow: 0 2px 10px rgba(0,0,0,0.15);
}
.navbar a {
    text-decoration: none;
    color: #4f3ea0;
    font-size: 18px;
    font-weight: 600;
    margin: 0 12px;
}
.title { font-size:26px; font-weight:bold; color:#4f3ea0; }

/* TABLE BOX */
.table-box {
    width:85%; margin:auto;
    background:rgba(255,255,255,0.9);
    padding:30px;
    border-radius:18px;
    box-shadow:0 6px 18px rgba(0,0,0,0.18);
}

h1 { text-align:center; color:#4f3ea0; margin-bottom:18px; }

table {
    width:100%; border-collapse:collapse;
}
th, td {
    padding:14px;
    border-bottom:1px solid #ddd;
    text-align:center;
}
th {
    background:#f3eaff; color:#4f3ea0;
}
tr:hover { background:#faf5ff; }
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
    <h1>💊 Medical Records</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Animal ID</th>
            <th>Diagnosis</th>
            <th>Treatment</th>
            <th>Date</th>
            <th>Vet</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['Record_id']; ?></td>
            <td><?php echo $row['Animal_id']; ?></td>
            <td><?php echo htmlspecialchars($row['Diagnosis']); ?></td>
            <td><?php echo htmlspecialchars($row['Treatment']); ?></td>
            <td><?php echo $row['Date']; ?></td>
            <td><?php echo htmlspecialchars($row['Vet_name']); ?></td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>
