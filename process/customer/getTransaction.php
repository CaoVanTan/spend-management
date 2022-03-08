<?php
    include_once '../../config/config.php';

    $sql = 'SELECT sp.*, g.* FROM spending sp, groups g WHERE sp.group_id = g.group_id';
    $result = mysqli_query($con, $sql);
?>