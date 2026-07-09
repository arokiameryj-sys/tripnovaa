<?php
session_start();
include("../config.php");

if(!isset($_SESSION['customer_id']))
{
    header("Location: login.php");
    exit();
}

if(isset($_POST['book']))
{
    $customer_id = $_SESSION['customer_id'];
    $pickup = $_POST['pickup'];
    $drop = $_POST['drop'];
    $vehicle = $_POST['vehicle'];
    $fare = $_POST['fare'];

    $sql = "INSERT INTO rides
    (customer_id,pickup_location,drop_location,vehicle,fare,status)
    VALUES
    ('$customer_id','$pickup','$drop','$vehicle','$fare','Pending')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Ride Booked Successfully!');</script>";
    }
    else
    {
        echo "<script>alert('Booking Failed!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Quick Ride</title>

<style>

body{
    font-family:Arial, sans-serif;
    background:#f5f5f5;
}

.container{
    width:400px;
    margin:50px auto;
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0px 0px 10px gray;
}

h2{
    text-align:center;
    color:#2196F3;
}

label{
    font-weight:bold;
}

input,select{
    width:100%;
    padding:10px;
    margin-top:5px;
    margin-bottom:15px;
    border:1px solid #ccc;
    border-radius:5px;
}

button{
    width:100%;
    padding:12px;
    background:#2196F3;
    color:white;
    border:none;
    border-radius:5px;
    font-size:18px;
    cursor:pointer;
}

button:hover{
    background:#1976D2;
}

</style>

</head>

<body>

<div class="container">

<h2>🚕 Quick Ride Booking</h2>

<form method="POST">

<label>Pickup Location</label>
<input type="text" name="pickup" required>

<label>Drop Location</label>
<input type="text" name="drop" required>

<label>Select Vehicle</label>

<select name="vehicle" id="vehicle" onchange="calculateFare()">

<option value="Bike">Bike</option>
<option value="Auto">Auto</option>
<option value="Cab">Cab</option>

</select>

<label>Estimated Fare (₹)</label>

<input type="text" name="fare" id="fare" readonly value="100">

<button type="submit" name="book">
Book Ride
</button>

</form>

</div>

<script>

function calculateFare()
{
    var vehicle=document.getElementById("vehicle").value;

    if(vehicle=="Bike")
    {
        document.getElementById("fare").value=100;
    }
    else if(vehicle=="Auto")
    {
        document.getElementById("fare").value=180;
    }
    else
    {
        document.getElementById("fare").value=300;
    }
}

</script>

</body>
</html>