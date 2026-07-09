<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TRIPNOVAA</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    background:linear-gradient(135deg,#4facfe,#00f2fe);
    overflow:hidden;
}

.splash{
    text-align:center;
    color:white;
}

.logo{
    width:130px;
    height:130px;
    border-radius:50%;
    background:white;
    color:#2196F3;
    display:flex;
    justify-content:center;
    align-items:center;
    margin:auto;
    font-size:60px;
    box-shadow:0 10px 30px rgba(0,0,0,.3);
    animation:zoom 1.5s infinite alternate;
}

h1{
    margin-top:20px;
    font-size:42px;
    letter-spacing:3px;
}

p{
    margin-top:10px;
    font-size:18px;
}

.loader{
    width:220px;
    height:8px;
    background:white;
    margin:30px auto;
    border-radius:10px;
    overflow:hidden;
}

.bar{
    width:0%;
    height:100%;
    background:#1565C0;
    animation:load 3s linear forwards;
}

@keyframes load{
    from{width:0%;}
    to{width:100%;}
}

@keyframes zoom{
    from{transform:scale(.9);}
    to{transform:scale(1.08);}
}
</style>

<script>
setTimeout(function(){
    window.location="get_started.php";
},3000);
</script>

</head>

<body>

<div class="splash">

<div class="logo">✈</div>

<h1>TRIPNOVAA</h1>

<p>Your Smart Travel Partner</p>

<div class="loader">
<div class="bar"></div>
</div>

</div>

</body>
</html>