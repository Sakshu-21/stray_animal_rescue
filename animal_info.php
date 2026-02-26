<?php
// CONNECT TO DATABASE
$conn = new mysqli("localhost", "root", "", "stray_animal_rescue");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// GET USER INFO FROM index.php
$username = $_POST['username'];
$phone    = $_POST['phone'];
$email    = $_POST['email'];

// SAVE INTO users_info TABLE
$sql = "INSERT INTO users_info (name, phone, email)
        VALUES ('$username', '$phone', '$email')";
$conn->query($sql);

// START SESSION TO CARRY USER DATA IF NEEDED
session_start();
$_SESSION['username'] = $username;
$_SESSION['phone']    = $phone;
$_SESSION['email']    = $email;
?>
<html>
<head>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background-image: url("img/page.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding: 40px 0;
        }

        .form-box {
            width: 60%;
            margin: auto;
            background: rgba(255, 255, 255, 0.86);
            padding: 35px;
            border-radius: 18px;
            box-shadow: 0px 6px 20px rgba(0,0,0,0.18);
        }

        h1 { text-align: center; }
        .header-icon { font-size: 50px; text-align:center; }

        select {
            width: 100%;
            padding: 14px;
            margin: 12px 0;
            border-radius: 10px;
            border: 1px solid #ccc;
        }

        .button {
            background: #58c48d;
            padding: 14px 25px;
            border-radius: 10px;
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn-container { text-align:center; }
    </style>
</head>

<body>

<div class="form-box">
    <div class="header-icon">🐶</div>

    <h1>Select Reason</h1>

    <form method="POST">
        <select name="reason" required>
            <option value="">Choose What You Want To Do</option>
            <option value="adoption">Adoption</option>
            <option value="rescue">Rescue</option>
            <option value="volunteer">Volunteer</option>
        </select>

        <div class="btn-container">
            <button class="button" name="next">Continue ➤</button>
        </div>
    </form>
</div>

</body>
</html>

<?php
// REDIRECT TO CORRECT PAGE AFTER SELECTING REASON
if (isset($_POST['next'])) {
    $reason = $_POST['reason'];

    if ($reason == "adoption") {
        header("Location: available_animals.php");
        exit();
    }
    elseif ($reason == "rescue") {
        header("Location: rescue_form.php");
        exit();
    }
    elseif ($reason == "volunteer") {
        header("Location: volunteer_form.php");
        exit();
    }
}
?>
