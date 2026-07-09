<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TRIPNOVAA - Login</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,Helvetica,sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#2193b0,#6dd5ed);
}

.container{
    width:360px;
    background:rgba(255,255,255,.15);
    backdrop-filter:blur(15px);
    border-radius:25px;
    padding:35px;
    text-align:center;
    color:white;
    box-shadow:0 15px 35px rgba(0,0,0,.25);
}

.logo{
    font-size:60px;
    margin-bottom:10px;
}

h1{
    margin-bottom:8px;
}

p{
    margin-bottom:30px;
    opacity:.9;
}

.btn{
    display:block;
    width:100%;
    padding:15px;
    margin:15px 0;
    text-decoration:none;
    font-size:18px;
    font-weight:bold;
    border-radius:15px;
    transition:.3s;
}

.customer{
    background:#fff;
    color:#2193b0;
}

.customer:hover{
    transform:scale(1.05);
}

.captain{
    background:#0d47a1;
    color:white;
}

.captain:hover{
    transform:scale(1.05);
}
</style>

</head>

<body>

<div class="container">

<div class="logo">✈️</div>

<h1>TRIPNOVAA</h1>

<p>Select Your Role</p>

<a href="customer/login.php" class="btn customer">
👤 Customer Login
</a>

<a href="captain/login.php" class="btn captain">
🛵 Captain Login
</a>

</div>

</body>
</html>