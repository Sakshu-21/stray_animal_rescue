<?php
session_start(); // in case we need user info later
?>

<html>
<head>
    <title>Volunteer Registration</title>

    <style>
        .box {
            width: 50%;
            margin: 40px auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 5px 20px rgba(0,0,0,0.15);
        }

        h2 { text-align: center; }

        input, select {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #888;
        }

        .button {
            background: #5c4caf;
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
    <h2>Volunteer Registration</h2>

    <form action="save_volunteer.php" method="POST">

        <input type="text" name="volunteer_name" placeholder="Full Name" required>
        <input type="text" name="contact" placeholder="Contact Number" required>
        <input type="email" name="email" placeholder="Email Address" required>

        <label>Join Date:</label>
        <input type="date" name="join_date" required>

        <label>Assigned Center (optional):</label>
        <input type="text" name="assigned_center" placeholder="Center Name">

        <button class="button">Register as Volunteer ➤</button>

    </form>
</div>

</body>
</html>
