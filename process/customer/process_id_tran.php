<?php
session_start();
if (isset($_POST['spend_id'])) {
    $_SESSION["id_tran"] = $_POST['spend_id'];
    echo $_SESSION["id_tran"];
}