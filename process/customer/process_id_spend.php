<?php
session_start();
if (isset($_POST['spend_id'])) {
    $_SESSION["spend_id"] = $_POST['spend_id'];
    echo $_SESSION["spend_id"];
}