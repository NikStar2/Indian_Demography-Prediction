<?php
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $con= new mysqli("localhost","root","","data");

    if($con->connect_error){
        die("Failed to Connect: ".$con->connect_error);
    }else{
        $stmt = $con->prepare("SELECT * FROM register WHERE  email = ?");
        $stmt->bind_param('s',$email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
               $data=$stmt_result->fetch_assoc();
               if($data['upswd1']===$pass){
                   header("location:home.html");
               }else{
                echo "<h2>Invalid Email or Password</h2>";

               }
        }else{
            echo "<h2>Invalid Email or Password</h2>";
        }
    }

?>