<?php
session_start();
session_unset();
session_destroy();
header("Location: ../3 - halamanlogin/login.php");
exit();
?>