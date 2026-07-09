<?php
session_start();
include("../config.php");

if(!isset($_SESSION['customer_id']))
{
    header("Location: login.php");
    exit();
}

$id = $_SESSION['customer_id'];

$sql = "SELECT * FROM customers WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>My Profile</title>

<style>

body{
font-family:Arial,sans-serif;
background:#f4f6f9;
margin:0;
padding:0;
}

.header{
background:linear-gradient(135deg,#2196F3,#00BCD4);
color:white;
padding:25px;
text-align:center;
}

.container{
width:400px;
margin:40px auto;
background:white;
padding:30px;
border-radius:15px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
}

.profile{
text-align:center;
margin-bottom:20px;
}

.profile img{
width:120px;
height:120px;
border-radius:50%;
}

.info{
margin-top:20px;
}

.info p{
font-size:18px;
padding:10px 0;
border-bottom:1px solid #ddd;
}

.btn{
display:block;
margin-top:25px;
text-align:center;
background:#2196F3;
color:white;
padding:12px;
text-decoration:none;
border-radius:8px;
}

.btn:hover{
background:#1976D2;
}

</style>

</head>

<body>

<div class="header">

<h2>👤 My Profile</h2>

</div>

<div class="container">

<div class="profile">

<img src="https://via.placeholder.com/120" alt="Profile">

<h3><?php echo $row['name']; ?></h3>

</div>

<div class="info">

<p><b>📱 Mobile:</b> <?php echo $row['mobile']; ?></p>

<p><b>📧 Email:</b> <?php echo $row['email']; ?></p>

<p><b>🆔 Customer ID:</b> <?php echo $row['id']; ?></p>

</div>

<a href="dashboard.php" class="btn">⬅ Back to Dashboard</a>

</div>

</body>
</html>