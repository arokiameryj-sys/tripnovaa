<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Captain Login</title>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
display:flex;
justify-content:center;
align-items:center;
height:100vh;
background:linear-gradient(135deg,#ff9800,#ff5722);
}

.login-box{
width:360px;
background:#fff;
padding:35px;
border-radius:20px;
box-shadow:0 10px 30px rgba(0,0,0,.2);
text-align:center;
}

h2{
color:#ff5722;
margin-bottom:25px;
}

input{
width:100%;
padding:14px;
margin:12px 0;
border:1px solid #ccc;
border-radius:10px;
font-size:16px;
}

button{
width:100%;
padding:14px;
background:#ff5722;
color:white;
border:none;
border-radius:10px;
font-size:17px;
cursor:pointer;
}

button:hover{
background:#e64a19;
}
</style>

</head>

<body>

<div class="login-box">

<h2>Captain Login</h2>

<form action="../otp.php" method="get">

<input type="text" placeholder="Enter Mobile Number" required>

<button type="submit">
Send OTP
</button>

</form>

</div>

</body>
</html>