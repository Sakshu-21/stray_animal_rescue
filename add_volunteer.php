<html>
<head>
<title>Add Volunteer</title>

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
    box-shadow: 0 2px 10px rgba(0,0,0,0.15);
}
.navbar a {
    text-decoration: none;
    color: #4f3ea0;
    font-size: 18px;
    font-weight: 600;
    margin: 0 15px;
}
.navbar a:hover { color: #5c4caf; }
.title { font-size: 26px; font-weight:bold; color:#4f3ea0; }

/* FORM BOX */
.form-box {
    width: 60%;
    margin: 40px auto;
    background: rgba(255,255,255,0.85);
    padding: 35px;
    border-radius: 18px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.18);
    text-align: center;
}

.header-icon { font-size: 45px; margin-bottom: 10px; }

input {
    width: 100%;
    padding: 14px;
    margin: 12px 0;
    border-radius: 10px;
    border: 1px solid #ccc;
    font-size: 16px;
}
.button {
    background:#58c48d;
    padding:14px 25px;
    border-radius:10px;
    color:white;
    border:none;
    font-size:17px;
    cursor:pointer;
}
.button:hover {
    background:#48ac7a;
    transform:scale(1.06);
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

<div class="form-box">
    <div class="header-icon">🙋‍♂️</div>
    <h1>Add Volunteer</h1>

    <form action="insert_volunteer.php" method="POST">

        <input type="text" name="vname" placeholder="Volunteer Name" required>
        <input type="text" name="contact" placeholder="Contact Info" required>
        <input type="date" name="join_date" required>
        <input type="text" name="assigned_center" placeholder="Assigned Center">

        <button class="button">Save Volunteer ➤</button>
    </form>
</div>

</body>
</html>
