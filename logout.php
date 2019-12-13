<?php
session_start();
//setcookie("userEmail", "", -1);
session_destroy();
header("location: login.php");
?>