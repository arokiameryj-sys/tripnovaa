<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OTP Verification</title>

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
background:linear-gradient(135deg,#4CAF50,#2E7D32);
}

.box{
width:360px;
background:white;
padding:35px;
border-radius:20px;
text-align:center;
box-shadow:0 10px 30px rgba(0,0,0,.2);
}

h2{
color:#2E7D32;
margin-bottom:20px;
}

input{
width:100%;
padding:14px;
margin:15px 0;
border:1px solid #ccc;
border-radius:10px;
font-size:18px;
text-align:center;
letter-spacing:5px;
}

button{
width:100%;
padding:14px;
background:#2E7D32;
color:white;
border:none;
border-radius:10px;
font-size:17px;
cursor:pointer;
}
</style>

</head>

<body>

<div class="box">

<h2>OTP Verification</h2>

<p>Enter the 6-digit OTP</p>

<input type="text" maxlength="6" placeholder="******">

<button onclick="alert('OTP Verified Successfully!')">
Verify OTP
</button>

</div>

</body>
</html>