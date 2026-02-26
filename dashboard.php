<?php
// CONNECT TO DATABASE
$conn = new mysqli("localhost", "root", "", "stray_animal_rescue");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// FETCH COUNTS FOR DASHBOARD CARDS
$total_animals = $conn->query("SELECT COUNT(*) AS count FROM animal")->fetch_assoc()['count'];
$total_rescue  = $conn->query("SELECT COUNT(*) AS count FROM rescue_center")->fetch_assoc()['count'];
$total_vol     = $conn->query("SELECT COUNT(*) AS count FROM volunteer")->fetch_assoc()['count'];
$total_adopt   = $conn->query("SELECT COUNT(*) AS count FROM adoption")->fetch_assoc()['count'];
$total_med     = $conn->query("SELECT COUNT(*) AS count FROM medical_records")->fetch_assoc()['count'];
?>

<html>
<head>
    <title>Admin Dashboard</title>

    <style>
        body {
            background-image: url("img/dash.jpg");
            background-size: cover;
            background-position: center;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* TOP NAVBAR */
        .navbar {
            width: 100%;
            background: rgba(255,255,255,0.95);
            display: flex;
            padding: 15px 20px;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.15);
            position: sticky;
            top: 0;
        }

        .navbar a {
            text-decoration: none;
            color: #4f3ea0;
            font-size: 18px;
            font-weight: 600;
            margin: 0 15px;
        }

        .navbar a:hover {
            color: #5c4caf;
        }

        .title {
            font-size: 26px;
            font-weight: bold;
            color: #4f3ea0;
        }

        /* DASHBOARD BOX */
        .dashboard {
            width: 85%;
            margin: 40px auto;
            background: rgba(255,255,255,0.88);
            padding: 35px;
            border-radius: 18px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.20);
            text-align: center;
        }

        h1 {
            font-size: 36px;
            font-weight: bold;
            color: #4f3ea0;
        }

        /* GRID */
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-top: 40px;
        }

        .card {
            background: white;
            border-radius: 16px;
            padding: 25px 10px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.15);
            transition: 0.3s ease;
            text-decoration: none;
            color: #4f3ea0;
            font-size: 18px;
            font-weight: 600;
        }

        .card:hover {
            transform: scale(1.07);
            background: #f5edff;
        }

        .stat {
            font-size: 30px;
            color: #4f3ea0;
            font-weight: bold;
            margin-top: 10px;
        }

        .icon {
            font-size: 38px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

<!-- TOP NAVBAR -->
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

<div class="dashboard">
    <h1>Welcome to the Admin Dashboard 💼</h1>

    <div class="grid">

        <div class="card">
            <div class="icon">🐶</div>
            Total Animals
            <div class="stat"><?php echo $total_animals; ?></div>
        </div>

        <div class="card">
            <div class="icon">🚨</div>
            Rescue Operations
            <div class="stat"><?php echo $total_rescue; ?></div>
        </div>

        <div class="card">
            <div class="icon">🧑‍🤝‍🧑</div>
            Volunteers
            <div class="stat"><?php echo $total_vol; ?></div>
        </div>

        <div class="card">
            <div class="icon">🏠</div>
            Adoptions
            <div class="stat"><?php echo $total_adopt; ?></div>
        </div>

        <div class="card">
            <div class="icon">💉</div>
            Medical Records
            <div class="stat"><?php echo $total_med; ?></div>
        </div>

    </div>
</div>

</body>
</html>
