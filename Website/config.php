<?php

$con = new mysqli("localhost","root","","data");

if($con->connect_error)
{
    echo $con->connect_error;
    die("Sorry DataBase Connection Failed");
}
?>