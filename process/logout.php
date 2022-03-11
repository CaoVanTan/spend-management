<?php
include_once "../config/config.php";
session_start();
if(isset($_SESSION['CurrentUser'])) {
    unset($_SESSION['CurrentUser']);
    unset($_SESSION['CurrentId']);
    header("Location: ../view/index.php");
}
mysqli_close($con);
