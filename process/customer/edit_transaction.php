<?php
    session_start();
    include_once '../../config/config.php';

    if(isset($_POST['btnEditTran'])) {
        $spend_id = $_SESSION['id_tran'];
        $tranGroup = $_POST['tranGroup'];
        $tranMoney = $_POST['tranMoney'];
        $tranDate = $_POST['tranDate'];
        $tranNote = $_POST['tranNote'];

        $sql = "UPDATE spending SET group_id = '$tranGroup', money = '$tranMoney', spend_day = '$tranDate',
                note = '$tranNote' where spend_id = '$spend_id'";
        $result = mysqli_query($con, $sql);

        if($result) {
            header("Location: ../../view/customer/transaction.php");
        } else {
            echo "Error";
        }
    }

    mysqli_close($con);
?>
