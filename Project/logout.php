<?php
session_start();
unset($_SESSION['User'][$key]);
header ('location: loginphp1.php');
?>