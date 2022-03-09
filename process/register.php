<?php
    $username = $_POST["Username"];
    $pass = $_POST["Pass"];
    $email = $_POST["Email"];
    include("../config/config.php");
    $sql = "Select * from users where user_name = '$username'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) <= 0){
        $sql1 = "Select * from users where email = '$email'";
        $result1 = mysqli_query($con,$sql1);
        if(mysqli_num_rows($result1) <= 0){
            $pass_hash = password_hash($pass,PASSWORD_DEFAULT);
            $sql2 = "INSERT INTO users ( `user_id`,`user_name`, `email`, `password`,`gender`, `birthday`) 
            VALUES (Null,'$username','$email','$pass_hash', Null,Null)";
            $result2 = mysqli_query($con,$sql2);
            if ($result2 >0) {
                echo"Thanhcong";
                mysqli_close($con);
            }else {
                echo"$sql2";
                mysqli_close($con);
            }
        }else {
            echo"Email";
            mysqli_close($con);
        }
    }else {
        echo "TK";
        mysqli_close($con);
    }


?>