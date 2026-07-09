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
<title>Hotels - TRIPNOVAA</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#f4f6f9;
}

.header{
background:linear-gradient(135deg,#2196F3,#00BCD4);
padding:20px;
color:white;
text-align:center;
}

.container{
padding:20px;
}

.hotel{
background:white;
padding:15px;
border-radius:12px;
margin-bottom:20px;
box-shadow:0 5px 10px rgba(0,0,0,.1);
}

.hotel img{
width:100%;
height:200px;
object-fit:cover;
border-radius:10px;
}

.hotel h2{
margin-top:10px;
}

.hotel p{
margin:8px 0;
color:#555;
}

.btn{
display:inline-block;
background:#2196F3;
color:white;
padding:10px 20px;
text-decoration:none;
border-radius:8px;
margin-top:10px;
}

.back{
display:block;
text-align:center;
margin-top:30px;
text-decoration:none;
font-size:18px;
color:#2196F3;
}

</style>

</head>

<body>

<div class="header">
<h1>🏨 Hotels</h1>
<p>Find the best hotels</p>
</div>

<div class="container">

<div class="hotel">

<img src="https://picsum.photos/600/300?random=1">

<h2>Grand Palace Hotel</h2>

<p>📍 Madurai</p>

<p>⭐ 4.8 Rating</p>

<p>💰 ₹2500 / Night</p>

<a href="#" class="btn">Book Now</a>

</div>

<div class="hotel">

<img src="https://picsum.photos/600/300?random=2">

<h2>Royal Residency</h2>

<p>📍 Chennai</p>

<p>⭐ 4.6 Rating</p>

<p>💰 ₹3200 / Night</p>

<a href="#" class="btn">Book Now</a>

</div>

<div class="hotel">

<img src="https://picsum.photos/600/300?random=3">

<h2>Hill View Resort</h2>

<p>📍 Kodaikanal</p>

<p>⭐ 4.9 Rating</p>

<p>💰 ₹4500 / Night</p>

<a href="#" class="btn">Book Now</a>

</div>

<a href="dashboard.php" class="back">
⬅ Back to Dashboard
</a>

</div>

</body>
</html>