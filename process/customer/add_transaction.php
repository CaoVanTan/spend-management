<?php
    session_start();
    include_once '../../config/config.php';

    if(isset($_POST['btnAddTran'])) {
        $userId = $_SESSION['CurrentID'];
        $tranGroup = $_POST['tranGroup'];
        $tranMoney = $_POST['tranMoney'];
        $tranDate = $_POST['tranDate'];
        $tranNote = $_POST['tranNote'];

        $sql = "INSERT INTO spending (group_id, user_id, money, spend_day, note)
                VALUES ('$tranGroup', '$userId', '$tranMoney', '$tranDate', '$tranNote')";
        $result = mysqli_query($con, $sql);

        if($result == 1) {
            header("Location: ../../view/customer/transaction.php");
        } else {
            echo "Error";
        }
    }

    mysqli_close($con);
?>
