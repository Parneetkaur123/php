<?php
session_start();
session_destroy();
unset($_SESSION['User'][$key]);
header ('location: loginphp1.php');
?>