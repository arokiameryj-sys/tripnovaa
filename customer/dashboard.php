<?php
session_start();

if(!isset($_SESSION['customer_id']))
{
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TRIPNOVAA Dashboard</title>

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
background:linear-gradient(135deg,#2196F3,#00BCD4);
padding:25px;
color:white;
border-radius:0 0 25px 25px;
}

.header h2{
margin-bottom:8px;
}

.search{
margin-top:20px;
}

.search input{
width:100%;
padding:15px;
border:none;
border-radius:12px;
font-size:16px;
}

.container{
padding:20px;
}

.grid{
display:grid;
grid-template-columns:repeat(2,1fr);
gap:15px;
}

.card{
background:white;
padding:20px;
text-align:center;
border-radius:18px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
transition:.3s;
cursor:pointer;
}

.card:hover{
transform:translateY(-5px);
}

.icon{
font-size:40px;
margin-bottom:10px;
}

.grid a{
text-decoration:none;
color:black;
}

.bottom{
position:fixed;
bottom:0;
width:100%;
background:white;
display:flex;
justify-content:space-around;
padding:15px;
box-shadow:0 -3px 10px rgba(0,0,0,.1);
}

.bottom a{
text-decoration:none;
font-size:16px;
color:#333;
}

</style>

</head>

<body>

<div class="header">

<a href="../logout.php"
style="
float:right;
background:red;
color:white;
padding:10px 15px;
border-radius:8px;
text-decoration:none;
margin-top:-10px;
">
🚪 Logout
</a>

<h2>👋 Welcome <?php echo $_SESSION['customer_name']; ?></h2>

<p>Where would you like to travel today?</p>

<div class="search">
<input type="text" placeholder="Search destination...">
</div>

</div>

<div class="container">

<div class="grid">

<a href="quick_ride.php">
<div class="card">
<div class="icon">🚕</div>
Quick Ride
</div>
</a>

<a href="hotels.php" style="text-decoration:none;color:black;">
<div class="card">
<div class="icon">🏨</div>
Hotels
</div>
</a>

<a href="train.php" style="text-decoration:none;color:black;">
<div class="card">
<div class="icon">🚆</div>
Train
</div>
</a>

<a href="bus.php" style="text-decoration:none;color:black;">
<div class="card">
<div class="icon">🚌</div>
Bus
</div>
</a>

<a href="restaurants.php" style="text-decoration:none;color:black;">
<div class="card">
<div class="icon">🍽️</div>
Restaurants
</div>
</a>

<a href="tours.php" style="text-decoration:none;color:black;">
<div class="card">
<div class="icon">🌍</div>
Tours
</div>
</a>

<a href="offers.php" style="text-decoration:none;color:black;">
<div class="card">
<div class="icon">🎁</div>
Offers
</div>
</a>

<a href="chat.php" style="text-decoration:none;color:black;">
<div class="card">
<div class="icon">💬</div>
Chat
</div>
</a>

</div>

</div>

<div class="bottom">

<a href="dashboard.php">🏠 Home</a>

<a href="my_bookings.php">📖 My Bookings</a>

<a href="profile.php">👤 Profile</a>

</div>

</body>
</html>