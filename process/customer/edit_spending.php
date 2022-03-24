<?php
    session_start();
    include_once '../../config/config.php';

    if(isset($_POST['btnEditSpend'])) {
        $spend_id = $_SESSION['spend_id'];
        $spendGroup = $_POST['spendGroup'];
        $spendMoney = $_POST['spendMoney'];
        $spendDate = $_POST['spendDate'];
        $spendNote = $_POST['spendNote'];

        $sql = "UPDATE spending SET group_id = '$spendGroup', money = '$spendMoney', spend_day = '$spendDate', note = '$spendNote'
                WHERE spend_id = '$spend_id'";
        $result = mysqli_query($con, $sql);

        if($result) {
            header("Location: ../../view/customer/spending.php");
        } else {
            echo "Error";
        }
    } else {
        echo "Error";
    }

    mysqli_close($con);
?>
