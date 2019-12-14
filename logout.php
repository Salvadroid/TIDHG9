<?php
session_start();
setcookie('email',"", time()-1);
setcookie('password',"", time()-1);
session_destroy();
header("location: login.php");
?>
