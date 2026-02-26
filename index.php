<!-- index.php -->

<html>
<head>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background-image: url("img/bp.jpg");
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

        .header-icon {
            font-size: 45px;
            text-align:center;
        }

        h1 { text-align:center; }
        p  { text-align:center; }

        input {
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
        <div class="header-icon">🐾</div>

        <h1>User Information</h1>
        <p>Please fill in your details below</p>

        <!-- FORM redirects to animal_info.php -->
        <form action="animal_info.php" method="POST">
            <input type="text" name="username" placeholder="Your Name" required>
            <input type="text" name="phone" placeholder="Phone Number" required>
            <input type="email" name="email" placeholder="Email Address" required>

            <div class="btn-container">
                <button class="button" type="submit">Next ➤</button>
            </div>
        </form>
    </div>
</body>
</html>
