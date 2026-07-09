<?php
session_start();

if(!isset($_SESSION['admin_id']))
{
    header("Location: login.php");
    exit();
}

include("../config.php");

$totalCustomers = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM customers"));
$totalRides = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM rides"));
$pending = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM rides WHERE status='Pending'"));
$accepted = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM rides WHERE status='Accepted'"));
$rejected = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM rides WHERE status='Rejected'"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TRIPNOVAA - Admin Dashboard</title>

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
color:white;
padding:25px;
text-align:center;
}

.header h1{
margin-bottom:8px;
}

.container{
padding:30px;
}

.grid{
display:grid;
grid-template-columns:repeat(2,1fr);
gap:20px;
}

.card{
background:white;
padding:25px;
border-radius:15px;
text-align:center;
box-shadow:0 5px 15px rgba(0,0,0,.1);
transition:.3s;
}

.card:hover{
transform:translateY(-5px);
}

.card h2{
font-size:40px;
color:#2196F3;
margin-bottom:10px;
}

.card p{
font-size:18px;
}

.menu{
margin-top:40px;
display:grid;
grid-template-columns:repeat(2,1fr);
gap:20px;
}

.btn{
display:block;
text-align:center;
background:#2196F3;
color:white;
padding:15px;
text-decoration:none;
border-radius:10px;
font-size:18px;
}

.btn:hover{
background:#1976D2;
}

</style>

</head>

<body>

<div class="header">

<h1>🛠️ Admin Dashboard</h1>

<h3>Welcome <?php echo $_SESSION['admin_name']; ?></h3>

</div>

<div class="container">

<div class="grid">

<div class="card">
<h2><?php echo $totalCustomers; ?></h2>
<p>👥 Customers</p>
</div>

<div class="card">
<h2><?php echo $totalRides; ?></h2>
<p>🚖 Total Rides</p>
</div>

<div class="card">
<h2><?php echo $pending; ?></h2>
<p>⏳ Pending Rides</p>
</div>

<div class="card">
<h2><?php echo $accepted; ?></h2>
<p>✅ Accepted Rides</p>
</div>

<div class="card">
<h2><?php echo $rejected; ?></h2>
<p>❌ Rejected Rides</p>
</div>

</div>

<div class="menu">

<a href="#" class="btn">👥 Manage Customers</a>

<a href="#" class="btn">🚖 Manage Rides</a>

<a href="#" class="btn">🚕 Manage Captains</a>

<a href="../customer/dashboard.php" class="btn">🏠 Customer Dashboard</a>

</div>

</div>

</body>
</html>