<html>
<head>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background-image: url("img/thankyou.jpg"); /* your thank you bg image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            backdrop-filter: blur(2px);
            padding: 60px 0;
        }

        .thank-box {
            width: 55%;
            margin: auto;
            background: rgba(255, 255, 255, 0.85);
            padding: 45px;
            border-radius: 20px;
            box-shadow: 0px 6px 20px rgba(0,0,0,0.18);
            animation: fadeIn 0.6s ease-in-out;
            text-align: center;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(25px);}
            to   {opacity: 1; transform: translateY(0);}
        }

        h1 {
            color: #4f3ea0;
            font-size: 36px;
            margin-bottom: 10px;
        }

        p {
            color: #555;
            font-size: 18px;
            margin-bottom: 25px;
        }

        .button {
            background: #58c48d;
            padding: 14px 28px;
            border-radius: 10px;
            font-size: 17px;
            color: white;
            text-align: center;
            text-decoration: none;
            margin: 10px;
            display: inline-block;
            transition: 0.3s;
        }

        .button:hover {
            background: #48ac7a;
            transform: scale(1.06);
        }

        .icon {
            font-size: 50px;
            color: #6a4caf;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <div class="thank-box">
        <div class="icon">🐾</div>

        <h1>Thank You!</h1>

        <p>Your details have been successfully saved to our rescue system.</p>

        <a class="button" href="dashboard.php">Go to Dashboard</a>
        <a class="button" href="view_animals.php">View Records</a>
    </div>

</body>
</html>
