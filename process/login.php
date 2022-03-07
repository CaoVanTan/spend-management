<?php
    session_start();
    $username =$_POST["username"];
    $pass =$_POST["pass"];
    include('../config/config.php');

    $sql ="Select * From users where user_name = ?";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $userid = $row['user_id'];
            $username = $row['user_name'];
            $pass_hash = $row['password'];
            if (password_verify($pass,$pass_hash)) {
                $_SESSION['CurrentUser'] = $username;
                $_SESSION['CurrentID'] = $userid;
                echo "Thanhcong";
            }else {
                mysqli_close($conn);
                echo "Sai";
            }
    }else {
        mysqli_close($conn);
        echo "Sai";
    }
?>