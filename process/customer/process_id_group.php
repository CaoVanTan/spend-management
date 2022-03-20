<?php
if (!isset($_SESSION)) {
    session_start();
}

include_once '../../config/config.php';

if(isset($_POST['group_id'])) {
    $_SESSION['group_id'] = $_POST['group_id'];

    echo $_SESSION['group_id'];
}
?>