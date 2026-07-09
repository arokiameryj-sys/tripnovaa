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
<title>Bus Booking - TRIPNOVAA</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#f5f6fa;
}

.header{
background:linear-gradient(135deg,#2196F3,#00BCD4);
padding:20px;
text-align:center;
color:white;
}

.container{
padding:20px;
}

.bus{
background:white;
padding:20px;
margin-bottom:20px;
border-radius:15px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
}

.bus h2{
color:#2196F3;
}

.bus p{
margin:8px 0;
}

.btn{
display:inline-block;
margin-top:10px;
background:#2196F3;
color:white;
padding:10px 20px;
text-decoration:none;
border-radius:8px;
}

.back{
display:block;
text-align:center;
margin-top:30px;
text-decoration:none;
color:#2196F3;
font-size:18px;
}

</style>

</head>

<body>

<div class="header">

<h1>🚌 Bus Booking</h1>

<p>Choose your bus</p>

</div>

<div class="container">

<div class="bus">

<h2>SETC Express</h2>

<p>📍 Madurai → Chennai</p>

<p>🕒 09:00 PM</p>

<p>💰 ₹850</p>

<a href="#" class="btn">Book Now</a>

</div>

<div class="bus">

<h2>KPN Travels</h2>

<p>📍 Madurai → Coimbatore</p>

<p>🕒 10:30 PM</p>

<p>💰 ₹950</p>

<a href="#" class="btn">Book Now</a>

</div>

<div class="bus">

<h2>Parveen Travels</h2>

<p>📍 Chennai → Bangalore</p>

<p>🕒 08:30 PM</p>

<p>💰 ₹1100</p>

<a href="#" class="btn">Book Now</a>

</div>

<a href="dashboard.php" class="back">
⬅ Back to Dashboard
</a>

</div>

</body>
</html>