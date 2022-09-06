<?php

include('validation.php');
if(isset($_POST["submit"]))
{
    session_start();
    $errorcatch['err']= array();
   $errorcatch['err']= email($_POST['email']);
   $errorcatch['err']= pass($_POST['password']);
   $errorcatch['err']= fname($_POST['fname']);
   $errorcatch['err']= lname($_POST['lname']);

//    $error=pass($_POST['password']);


    if(!empty($errorcatch['err']))
    {
        $_SESSION['error']= $errorcatch['err'];
        header("location: signin.php");    
    }

    else
    {
        if(!empty ($_SESSION['error']))
        {
            unset($_SESSION["error"]);
        }
        //print_r($_SESSION['User']);
        $user_id = isset($_SESSION['User'])? count($_SESSION['User']): 0;
        $_POST['id'] = $user_id+1;
        $_SESSION['User'][] = $_POST;
        header ('location: loginphp1.php');
 
        //  echo "<pre>";
        //  print_r($_SESSION);
        //  echo "</pre>";
       
    // echo "created successfully". "<br><br>";  
    // echo "<a href='loginphp1.php'>Click here for login</a>"; 
    }
}
?>