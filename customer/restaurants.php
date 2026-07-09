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
<title>Restaurants</title>

<style>

body{
font-family:Arial;
background:#f5f5f5;
margin:0;
}

.header{
background:#ff5722;
color:white;
padding:20px;
text-align:center;
}

.container{
padding:20px;
}

.card{
background:white;
padding:20px;
margin-bottom:20px;
border-radius:12px;
box-shadow:0 3px 10px rgba(0,0,0,.2);
}

button{
background:#ff5722;
color:white;
padding:10px 20px;
border:none;
border-radius:8px;
cursor:pointer;
}

a{
text-decoration:none;
}

</style>

</head>

<body>

<div class="header">

<h1>🍽 Restaurants</h1>

</div>

<div class="container">

<div class="card">

<h2>Domino's Pizza</h2>

<p>⭐4.6</p>

<p>₹250 onwards</p>

<button>Order Now</button>

</div>

<div class="card">

<h2>KFC</h2>

<p>⭐4.5</p>

<p>₹300 onwards</p>

<button>Order Now</button>

</div>

<div class="card">

<h2>A2B Restaurant</h2>

<p>⭐4.7</p>

<p>South Indian Meals</p>

<button>Order Now</button>

</div>

<a href="dashboard.php">⬅ Back</a>

</div>

</body>
</html>