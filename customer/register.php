<?php
include("../config.php");

if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO customers(name,mobile,email,password)
            VALUES('$name','$mobile','$email','$password')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Registration Successful');</script>";
    }
    else
    {
        echo "<script>alert('Registration Failed');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Customer Registration</title>

<style>

body{
font-family:Arial;
background:#f4f4f4;
}

.container{

width:350px;
margin:50px auto;
background:white;
padding:30px;
border-radius:15px;
box-shadow:0 0 10px gray;

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
font-size:17px;
cursor:pointer;

}

button:hover{

background:#1976D2;

}

h2{

text-align:center;

}

</style>

</head>

<body>

<div class="container">

<h2>Customer Registration</h2>

<form method="POST">

<input type="text" name="name" placeholder="Full Name" required>

<input type="text" name="mobile" placeholder="Mobile Number" required>

<input type="email" name="email" placeholder="Email Address" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit" name="register">Register</button>

</form>

</div>

</body>
</html>