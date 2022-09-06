<?php
if(!empty ($_POST['submit']))
{
    $error= array();
    $email=array();
    $username=$_POST['email'];
    $password=$_POST['password'];
    
    include('validation.php');
    
    email($_POST['email']);
    pass($_POST['password']);
    
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