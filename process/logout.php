
<?php
session_start();
unset($_SESSION['CurrentUser']);
unset($_SESSION['CurrentId']);

header("../view/index.php");
mysqli_close($con);
?>