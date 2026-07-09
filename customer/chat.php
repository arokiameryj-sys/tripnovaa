<?php
session_start();

if(!isset($_SESSION['customer_id']))
{
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Chat Support</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#f4f6f9;
}

.header{
background:#2196F3;
padding:20px;
text-align:center;
color:white;
}

.chatbox{
width:90%;
max-width:600px;
margin:30px auto;
background:white;
padding:20px;
border-radius:15px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
}

.msg{
margin:15px 0;
padding:12px;
border-radius:10px;
}

.driver{
background:#e3f2fd;
}

.user{
background:#dcedc8;
text-align:right;
}

input{
width:80%;
padding:12px;
border:1px solid #ccc;
border-radius:8px;
}

button{
padding:12px 20px;
background:#2196F3;
color:white;
border:none;
border-radius:8px;
cursor:pointer;
}

.back{
display:block;
text-align:center;
margin-top:20px;
text-decoration:none;
font-size:18px;
color:#2196F3;
}

</style>

</head>

<body>

<div class="header">

<h1>💬 Chat Support</h1>

</div>

<div class="chatbox">

<div class="msg driver">
👨‍✈️ Driver: Hello! I am on the way.
</div>

<div class="msg user">
🙂 You: Okay, I'll wait.
</div>

<div class="msg driver">
👨‍✈️ Driver: I'll reach in 5 minutes.
</div>

<br>

<input type="text" placeholder="Type your message...">

<button>Send</button>

<a href="dashboard.php" class="back">⬅ Back to Dashboard</a>

</div>

</body>

</html>