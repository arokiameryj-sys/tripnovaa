<?php
session_start();
include("../config.php");

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM customers WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['customer_id'] = $row['id'];
        $_SESSION['customer_name'] = $row['name'];

        header("Location: dashboard.php");
        exit();
    }
    else
    {
        echo "<script>alert('Invalid Email or Password');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Customer Login</title>

<style>

body{
font-family:Arial;
background:#2196F3;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.box{
background:white;
padding:30px;
border-radius:15px;
width:350px;
}

input{
width:100%;
padding:12px;
margin:10px 0;
border:1px solid #ccc;
border-radius:8px;
}

button{
width:100%;
padding:12px;
background:#2196F3;
color:white;
border:none;
border-radius:8px;
cursor:pointer;
font-size:16px;
}

a{
text-decoration:none;
}

</style>

</head>

<body>

<div class="box">

<h2 align="center">Customer Login</h2>

<form method="POST">

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button name="login">Login</button>

</form>

<br>

<p align="center">
New User?
<a href="register.php">Register Here</a>
</p>

</div>

</body>
</html>