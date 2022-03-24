<?php
    session_start();
    include_once '../../config/config.php';

    if(isset($_POST['btnAddSpend'])) {
        $userId = $_SESSION['CurrentID'];
        $spendGroup = $_POST['spendGroup'];
        $spendMoney = $_POST['spendMoney'];
        $spendDate = $_POST['spendDate'];
        $spendNote = $_POST['spendNote'];

        $sql = "INSERT INTO spending (group_id, user_id, money, spend_day, note)
                VALUES ('$spendGroup', '$userId', '$spendMoney', '$spendDate', '$spendNote')";
        $result = mysqli_query($con, $sql);

        if($result == 1) {
            header("Location: ../../view/customer/spending.php");
        } else {
            echo "Error";
        }
    } else {
        echo "Error";
    }

    mysqli_close($con);
