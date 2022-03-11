<?php
    session_start();
    include_once '../../config/config.php';

    if(isset($_SESSION['id_tran'])) {
        $spend_id = $_SESSION['id_tran'];

        $sql = "DELETE FROM spending WHERE spend_id = '$spend_id'";
        $result = mysqli_query($con, $sql);
        echo $result;

        if($result) {
            header("Location: ../../view/customer/transaction.php");
        } else {
            echo "Error";
        }
    }
