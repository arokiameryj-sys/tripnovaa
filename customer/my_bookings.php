<?php
session_start();
include("../config.php");

if(!isset($_SESSION['customer_id']))
{
    header("Location: login.php");
    exit();
}

$customer_id = $_SESSION['customer_id'];

$sql = "SELECT * FROM rides WHERE customer_id='$customer_id' ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>

<title>My Bookings</title>

<style>

body{
    font-family:Arial;
    background:#f4f4f4;
    margin:30px;
}

h2{
    text-align:center;
    color:#2196F3;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
}

th,td{
    border:1px solid #ddd;
    padding:12px;
    text-align:center;
}

th{
    background:#2196F3;
    color:white;
}

tr:nth-child(even){
    background:#f2f2f2;
}

a{
    text-decoration:none;
    color:white;
    background:#2196F3;
    padding:10px 15px;
    border-radius:5px;
}

.top{
    margin-bottom:20px;
}

</style>

</head>

<body>

<div class="top">
<a href="dashboard.php">⬅ Back to Dashboard</a>
</div>

<h2>📋 My Bookings</h2>

<table>

<tr>

<th>Ride ID</th>
<th>Pickup</th>
<th>Drop</th>
<th>Vehicle</th>
<th>Fare</th>
<th>Status</th>
<th>Date</th>

</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['pickup_location']; ?></td>
<td><?php echo $row['drop_location']; ?></td>
<td><?php echo $row['vehicle']; ?></td>
<td>₹<?php echo $row['fare']; ?></td>
<td><?php echo $row['status']; ?></td>
<td><?php echo $row['created_at']; ?></td>

</tr>

<?php

}

?>

</table>

</body>
</html>