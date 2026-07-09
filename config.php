<?php

$conn = mysqli_connect("localhost","root","","tripnovaa");

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}

?>