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
<title>Rewards - TRIPNOVAA</title>

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
background:linear-gradient(135deg,#673AB7,#9C27B0);
color:white;
padding:25px;
text-align:center;
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
color:#673AB7;
margin-bottom:10px;
}

.points{
font-size:45px;
font-weight:bold;
color:#4CAF50;
text-align:center;
margin:20px 0;
}

.btn{
display:inline-block;
padding:12px 20px;
background:#673AB7;
color:white;
text-decoration:none;
border-radius:8px;
}

.back{
display:block;
margin-top:25px;
text-align:center;
text-decoration:none;
font-size:18px;
color:#673AB7;
}

</style>

</head>

<body>

<div class="header">

<h1>🎉 Rewards</h1>

<p>Earn points every trip</p>

</div>

<div class="container">

<div class="card">

<h2>Your Reward Points</h2>

<div class="points">
1250
</div>

<p>🏆 Gold Member</p>

<p>Complete more rides to earn exciting rewards.</p>

</div>

<div class="card">

<h2>Available Rewards</h2>

<p>🎁 ₹100 Discount Coupon</p>

<p>☕ Free Coffee Voucher</p>

<p>🚖 15% OFF Next Ride</p>

<p>🏨 Hotel Cashback</p>

</div>

<center>

<a href="#" class="btn" onclick="alert('Reward redeemed successfully!')">
Redeem Rewards
</a>

</center>

<a href="dashboard.php" class="back">
⬅ Back to Dashboard
</a>

</div>

</body>
</html>