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
<title>Offers - TRIPNOVAA</title>

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
background:linear-gradient(135deg,#ff9800,#ff5722);
padding:20px;
text-align:center;
color:white;
}

.container{
padding:20px;
}

.offer{
background:white;
padding:20px;
margin-bottom:20px;
border-radius:15px;
box-shadow:0 5px 10px rgba(0,0,0,.1);
}

.offer h2{
color:#ff5722;
margin-bottom:10px;
}

.offer p{
margin:8px 0;
}

.btn{
display:inline-block;
margin-top:10px;
background:#ff5722;
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
font-size:18px;
color:#2196F3;
}

</style>

</head>

<body>

<div class="header">
<h1>🎁 Today's Offers</h1>
<p>Save more on every trip</p>
</div>

<div class="container">

<div class="offer">
<h2>🎉 20% OFF on Cab Booking</h2>
<p>Use Code: <b>TRIP20</b></p>
<a href="quick_ride.php" class="btn">Book Now</a>
</div>

<div class="offer">
<h2>🏨 Flat ₹500 OFF on Hotels</h2>
<p>Minimum booking ₹3000</p>
<a href="hotels.php" class="btn">View Hotels</a>
</div>

<div class="offer">
<h2>🚌 10% OFF on Bus Tickets</h2>
<p>Valid till this weekend</p>
<a href="bus.php" class="btn">Book Bus</a>
</div>

<div class="offer">
<h2>🚆 Free Seat Upgrade</h2>
<p>Selected train routes only</p>
<a href="train.php" class="btn">Book Train</a>
</div>

<a href="dashboard.php" class="back">⬅ Back to Dashboard</a>

</div>

</body>
</html>