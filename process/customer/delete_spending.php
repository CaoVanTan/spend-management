<?php
session_start();
include_once '../../config/config.php';

if (isset($_SESSION['spend_id'])) {
    $spend_id = $_SESSION['spend_id'];

    $sql = "DELETE FROM spending WHERE spend_id = '$spend_id'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header("Location: ../../view/customer/spending.php");
    } else {
        echo "Error";
    }
} else {
    echo "Error";
}
