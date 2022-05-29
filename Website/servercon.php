<?php

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="data";

$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);

if(!$conn){
    die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $upswd1=$_POST['upswd1'];
    $upswd2=$_POST['upswd2'];
    $uph=$_POST['uph'];

    $sql_query = "INSERT INTO register (uname,email,upswd1,upswd2,uph) VALUES ('$uname','$email','$upswd1','$upswd2','$uph')";

    if(mysqli_query($conn,$sql_query))
    {
        header("location:main.html");
    }
    else
    {
        echo "Error: ".$sql. "" .mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>