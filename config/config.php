<?php
    const HOST = 'localhost';
    const USER = 'root';
    const PASS = '';
    const DB   = 'school_register';

    $con = mysqli_connect(HOST, USER, PASS, DB);

    if(!$con) {
        die('Kết nối không thành công!');
    }
?>