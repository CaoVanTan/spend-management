<?php
session_start();

if(isset($_POST['group_id'])) {
    $_SESSION['group_id'] = $_POST['group_id'];
    echo $_SESSION['group_id'];
}
?>