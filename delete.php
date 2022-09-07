<?php
session_start();
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