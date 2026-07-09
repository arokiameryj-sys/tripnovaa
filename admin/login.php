<?php
session_start();
include("../config.php");

if(isset($_POST['login']))
{
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM admins WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if($result && mysqli_num_rows($result) == 1)
    {
        $row = mysqli_fetch_assoc($result);

        if($row['password'] == $password)
        {
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['admin_name'] = $row['name'];

            header("Location: dashboard.php");
            exit();
        }
        else
        {
            echo "<script>alert('Wrong Password');</script>";
        }
    }
    else
    {
        echo "<script>alert('Admin Email Not Found');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>

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
width:350px;
border-radius:15px;
box-shadow:0 0 15px gray;
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
font-size:18px;
cursor:pointer;
}

h2{
text-align:center;
}
</style>

</head>

<body>

<div class="box">

<h2>🛠️ Admin Login</h2>

<form method="POST">

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit" name="login">Login</button>

</form>

</div>

</body>
</html>