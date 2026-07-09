<?php
session_start();
include("../config.php");

$sql = "SELECT * FROM rides WHERE status='Pending'";
$result = mysqli_query($conn,$sql);

if(isset($_GET['accept']))
{
    $id=$_GET['accept'];
    mysqli_query($conn,"UPDATE rides SET status='Accepted' WHERE id='$id'");
    header("Location: dashboard.php");
    exit();
}

if(isset($_GET['reject']))
{
    $id=$_GET['reject'];
    mysqli_query($conn,"UPDATE rides SET status='Rejected' WHERE id='$id'");
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Captain Dashboard</title>

<style>

body{
font-family:Arial;
background:#f4f4f4;
padding:30px;
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
padding:12px;
border:1px solid #ddd;
text-align:center;
}

th{
background:#2196F3;
color:white;
}

.accept{
background:green;
color:white;
padding:8px 12px;
text-decoration:none;
border-radius:5px;
}

.reject{
background:red;
color:white;
padding:8px 12px;
text-decoration:none;
border-radius:5px;
}

</style>

</head>

<body>

<h2>🚖 Captain Dashboard</h2>

<table>

<tr>

<th>ID</th>
<th>Pickup</th>
<th>Drop</th>
<th>Vehicle</th>
<th>Fare</th>
<th>Action</th>

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

<td>

<a class="accept" href="?accept=<?php echo $row['id']; ?>">Accept</a>

<a class="reject" href="?reject=<?php echo $row['id']; ?>">Reject</a>

</td>

</tr>

<?php

}

?>

</table>

</body>
</html>