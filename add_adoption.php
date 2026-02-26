<?php
// Fetch animal_id if coming from available_animals.php php backend
$animal_id = isset($_GET['animal_id']) ? $_GET['animal_id'] : "";
?>

<html> 
    <head>
    <title>Add Adoption</title>

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
            margin: 0 15px;
            transition: 0.3s;
        }

        .navbar a:hover {
            color: #6a4caf;
        }

        .title {
            font-size: 26px;
            font-weight: bold;
            color: #4f3ea0;
        }

        /* FORM BOX */
        .form-box {
            width: 60%;
            margin: 50px auto;
            background: rgba(255,255,255,0.92);
            padding: 35px;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.18);
            text-align: center;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to   {opacity: 1; transform: translateY(0);}
        }

        .header-icon {
            font-size: 50px;
            margin-bottom: 8px;
            color: #e05d8f;
        }

        h1 {
            color: #3d3d3d;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 14px;
            margin: 12px 0;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 16px;
            transition: 0.3s ease;
        }

        input:focus {
            border-color: #6a4caf;
            background: #faf7ff;
            box-shadow: 0 0 6px rgba(106,76,175,0.3);
            outline: none;
        }

        .button {
            background: #58c48d;
            color: white;
            padding: 14px 25px;
            border-radius: 10px;
            border: none;
            font-size: 17px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        .button:hover {
            background: #48ac7a;
            transform: scale(1.06);
        }
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

<!-- FORM -->
<div class="form-box">
    <div class="header-icon">❤️</div>

    <h1>Add Adoption Record</h1>

    <form action="insert_adoption.php" method="POST">

        <!-- Auto-filled if user clicked "Adopt ❤️" -->
        <input 
            type="number"
            name="animal_id"
            value="<?= $animal_id ?>"
            placeholder="Animal ID"
            <?= $animal_id ? 'readonly' : '' ?>
            required>

        <input type="text" name="adopter_name" placeholder="Adopter Name" required>

        <input type="text" name="contact_no" placeholder="Contact Number" required>

        <input type="date" name="adoption_date" required>

        <button class="button" type="submit">Save Adoption ➤</button>
    </form>
</div>

</body>
</html>
