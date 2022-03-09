<?php
    include_once '../../config/config.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM student WHERE std_id = '$id'";
        $result = mysqli_query($con, $sql);
        echo $result;

        if($result) {
            header("Location: ../../view/admin/admin_student.php");
        } else {
            echo "Error";
        }
    }
?>