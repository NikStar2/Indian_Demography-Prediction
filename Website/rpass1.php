<?php

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="data";

$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);

if(isset($_POST['check'])){
    $email=$_POST['email'];
    $check_email=mysqli_query($conn,"SELECT * FROM register WHERE email='".$email."'");
    if(mysqli_num_rows($check_email)==1){
        header('location:resertpass.php?email='.$email);
    }else{
        echo "Wrong Email";
    }

}

?>
<html>
<head>
        <title>Resetpassword</title>
        <link rel="stylesheet" href="pop.css" type="text/css">

</head>
<body style="background:whitesmoke">
    <form method="post"  style="background:white;width:300px; height:150px;margin-top:280px;margin-left:39%;">
        <h3 style="font-family: 'Courier New', Courier, monospace;align-text:center;justify-content:conter;">Enter Your Existing Email</h3>
    
          <table >

            <tr>
                <td><input type="text" name=email placeholder="Enter Your Email" style="width:200px; background-color: white;
     height: 30px;
     border-radius: 20px;font:18px;margin-left:10%;"></td>
            </tr>
            <br>
            <tr>
                <td><button class="but"  style="margin-left:40%;border-radius:20px;" name="check">check</button></td>

            </tr>
        </table>
    </form>
</body>
</html>