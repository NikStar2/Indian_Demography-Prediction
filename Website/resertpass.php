<?php
      
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="data";

    $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);

    if(isset($_POST['check'])){
          $newpass=$_POST['newpass'];
          $email=$_GET['email'];

          $changepass=mysqli_query($conn,"UPDATE register SET upswd1='".$newpass."'  WHERE email='".$email."'");

          if($changepass){
              header("Location:pass.html");
          }else{
              echo "Error";
          }
    }

?>

<html>
    <head>
        <title>Resetpassword</title>
        
   </head>
<body style="background:whitesmoke;">
    <form method="post" style="background:white;width:300px; height:150px;margin-top:280px;margin-left:39%;">
    <h3 style="font-family: 'Courier New', Courier, monospace;align-text:center;justify-content:conter;">Enter Your New Password</h3>

        <table>
            <tr>
                <td><input type="password" name="newpass"  required="" placeholder="Enter your new Password" style="width:200px; background-color: white;
     height: 30px;
     border-radius: 20px;font:18px;margin-left:10%; "></td>
            </tr>
            <tr>
                <td><button  style="margin-left:40%;border-radius:20px;" name="check">Change</td>
            </tr>
        </table>
    </form>

</body>
</html>    