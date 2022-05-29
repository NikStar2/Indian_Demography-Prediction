<?php

$cname=$_POST['cname'];
$email=$_POST['email'];
$cmess=$_POST['cmess'];

$to = "ranjithkumar.a2019cse@sece.ac.in";
$subject="Mail From Demography";
$txt ="Name = ". $cname . "\r\n Email = ". $email . "\r\n Message =" . $cmess;

$headers ="From: noreply@demography.com" . "\r\n" . 
"CC: ranjithkumaranandh@gmail.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

header("Location:thankyou.html");

?>