<?php
session_start();

if(!isset($_SESSION['customer_id']))
{
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Tours - TRIPNOVAA</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#f5f7fb;
}

.header{
background:linear-gradient(135deg,#4CAF50,#2E7D32);
padding:25px;
text-align:center;
color:white;
}

.container{
padding:20px;
}

.card{
background:white;
padding:20px;
margin-bottom:20px;
border-radius:15px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
}

.card h2{
color:#2E7D32;
margin-bottom:10px;
}

.card p{
margin:8px 0;
}

.btn{
display:inline-block;
margin-top:15px;
background:#4CAF50;
color:white;
padding:10px 20px;
border-radius:8px;
text-decoration:none;
}

.back{
display:block;
text-align:center;
margin-top:25px;
text-decoration:none;
font-size:18px;
color:#2E7D32;
}

</style>

</head>

<body>

<div class="header">

<h1>🌍 Tour Packages</h1>

<p>Explore Amazing Destinations</p>

</div>

<div class="container">

<div class="card">

<h2>🏔️ Ooty Tour</h2>

<p>📍 2 Days / 1 Night</p>

<p>💰 ₹4,999 Per Person</p>

<a href="#" class="btn">Book Now</a>

</div>

<div class="card">

<h2>🌊 Kanyakumari Tour</h2>

<p>📍 3 Days / 2 Nights</p>

<p>💰 ₹6,499 Per Person</p>

<a href="#" class="btn">Book Now</a>

</div>

<div class="card">

<h2>⛰️ Kodaikanal Tour</h2>

<p>📍 2 Days / 1 Night</p>

<p>💰 ₹5,499 Per Person</p>

<a href="#" class="btn">Book Now</a>

</div>

<a href="dashboard.php" class="back">
⬅ Back to Dashboard
</a>

</div>

</body>
</html>