<html>
<head>
<title>Add Rescue Record</title>

<style>
body {
    background-image: url("img/all.jpg");
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    padding: 40px 0;
    margin: 0;
    font-family: Arial, sans-serif;
}
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
.title { font-size: 26px; font-weight: bold; color:#4f3ea0; }

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
input, select {
    width: 100%;
    padding: 14px;
    margin: 12px 0;
    border-radius: 10px;
    border: 1px solid #ccc;
    font-size: 16px;
}
.button {
    background:#58c48d;
    color:white;
    padding:14px 25px;
    border-radius:10px;
    border:none;
    font-size:17px;
    cursor:pointer;
    transition:0.3s;
}
.button:hover { background:#48ac7a; transform:scale(1.06); }
</style>
</head>

<body>

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
    <div class="header-icon">🚑</div>
    <h1>Add Rescue Record</h1>

    <form action="insert_rescue.php" method="POST">

        <input type="number" name="animal_id" placeholder="Animal ID (optional)">

        <input type="text" name="location" placeholder="Rescue Location" required>

        <input type="date" name="date" required>

        <input type="number" name="capacity" placeholder="Capacity" required>

        <select name="animal_type" required>
            <option value="">Select Animal Type</option>
            <option>Dog</option>
            <option>Cat</option>
            <option>Cow</option>
            <option>Other</option>
        </select>

        <input type="text" name="condition_info" placeholder="Animal Condition (Injured, Sick...)" required>

        <button class="button">Save Rescue ➤</button>
    </form>
</div>

</body>
</html>
