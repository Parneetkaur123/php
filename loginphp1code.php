<?php

if(!empty ($_POST['submit']))
{
    
    $error= array();
    $email=array();
    $username=$_POST['email'];
    $password=$_POST['password'];

    if(isset($_POST['email']) && empty($_POST['email']) )
    {
        $error['email']= "required";
    }
    else
    {
        $email= $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $error['email']= "Email not valid";
        }
    }

    if(isset($_POST['password']) && empty($_POST['password']))
    {
        $error['password']= "required";
    }

    foreach($_SESSION['User'] as $key=>$value)
    {
       if($username== $_SESSION['User'][$key]['email'] && $password== $_SESSION['User'][$key]['password'])
        {
            
            echo "login successfully";
            header ('location: homepage.php');
        }
        else
        {
            echo "Incorrect username or password";
            header ('location: loginphp1.php');
        }
    }
    if(!empty($error))
    {
        $_SESSION['error']= $error;
        header ("location: loginphp1.php");
    }
    else
    {
        if(!empty ($_SESSION['error']))
        {
            session_unset($_SESSION['error']);
        }
    }

     
    // echo "<pre>";
    // print_r($_SESSION);
    // echo "</pre>";
}
?>