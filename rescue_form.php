<?php session_start(); ?>

<html>
<head>
    <title>Rescue Request Form</title>

    <style>
        .box {
            width: 50%;
            margin: 40px auto;
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 14px;
            box-shadow: 0px 5px 20px rgba(0,0,0,0.15);
        }

        h2 { text-align: center; color:#4f3ea0; }

        input, select {
            width: 100%;
            padding: 12px;
            margin: 12px 0;
            border-radius: 8px;
            border: 1px solid #aaa;
            font-size: 15px;
        }

        .button {
            background: #58c48d;
            padding: 12px 25px;
            border-radius: 8px;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            display: block;
            margin: 20px auto;
        }

        .button:hover {
            background: #48ac7a;
            transform: scale(1.03);
        }
    </style>
</head>

<body>

<div class="box">
    <h2>Rescue Request Form</h2>

    <form action="insert_rescue.php" method="POST">

        <!-- Animal ID -->
        <input type="number" name="animal_id" placeholder="Animal ID (optional)">

        <!-- Animal Type -->
        <select name="animal_type" required>
            <option value="">Select Animal Type</option>
            <option>Dog</option>
            <option>Cat</option>
            <option>Cow</option>
            <option>Other</option>
        </select>

        <!-- Location -->
        <input type="text" name="location" placeholder="Location of Rescue" required>

        <!-- Condition -->
        <input type="text" name="condition_info" placeholder="Condition (injured, sick, stranded...)" required>

        <!-- Date -->
        <input type="date" name="date" required>

        <!-- Capacity -->
        <input type="number" name="capacity" placeholder="Center Capacity">

        <button class="button">Submit Rescue Request ➤</button>

    </form>
</div>

</body>
</html>
