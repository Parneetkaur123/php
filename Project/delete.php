<?php
session_start();
session_destroy();
$id=$_GET['id'];
foreach($_SESSION['User'] as $key=>$value)
{
    if($_SESSION['User'][$key]['id']== $id)
    {
        unset($_SESSION['User'][$key]);
        header ('location: homepage.php');
    }
}        
?>
