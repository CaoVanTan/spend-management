<?php
if (!isset($_SESSION)) {
    session_start();
}

include_once '../../config/config.php';

if(isset($_SESSION['CurrentID'])) {
    $userId = $_SESSION['CurrentID'];
    $sql = "SELECT g.*, u.user_id FROM groups g, users u WHERE g.user_id = u.user_id AND g.user_id = '$userId'";
    $result = mysqli_query($con, $sql);
}
?>