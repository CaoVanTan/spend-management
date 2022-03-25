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
            $sql2 = "INSERT INTO users (`user_name`, `email`, `password`)
            VALUES ('$username','$email','$pass_hash')";
            $result2 = mysqli_query($con,$sql2);
            if ($result2 >0) {
                $sql3 = "SELECT * from users where user_name = '$username'";
                $result3 = mysqli_query($con,$sql3);
                     if(mysqli_num_rows($result3) > 0){
                        while($row =   mysqli_fetch_assoc($result3))
                        {
                            $user_id = $row["user_id"];
                        }
                        $sql4 = "INSERT INTO groups (group_id, user_id, group_name) VALUES
                        (Null, '$user_id', 'Ăn uống'),
                        (Null, '$user_id', 'Hóa đơn và tiện ích'),
                        (Null, '$user_id', 'Mua sắm'),
                        (Null, '$user_id', 'Di chuyển'),
                        (Null, '$user_id', 'Giải trí')";
                        $result4 = mysqli_query($con,$sql4);
                        if ($result4 > 0) {
                            echo"Thanhcong";
                             mysqli_close($con);
                        }else {
                            echo"Sai";
                        }
                }else {
                    echo"Sai";
                }
            }else {
                echo"Sai";
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
