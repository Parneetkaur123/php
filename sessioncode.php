<?php

if(!empty($_POST["submit"]))
{
    session_start();
    $error= array();
    $email= array();
    

    if(isset($_POST["fname"]) && empty($_POST["fname"]))
    {
        $error["fname"]= "Required";
    }
    
    if(isset($_POST["lname"]) && empty($_POST["lname"]))
    {
        $error["lname"]= "Required";
    }
    
    if(isset($_POST["email"]) && empty($_POST["email"]))
    {
        $error["email"]= "Required";
    }
    else
    {
        $email= $_POST["email"];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $error["email"]= "Email not valid";
        }
    }
    if(isset($_POST["mobile"]) && empty($_POST["mobile"]))
    {
        $error["mobile"]= "Required";
    }
    if(isset($_POST["password"]) && empty($_POST["password"]))
    {
        $error["password"]= "Required";
    }
    
     if(!empty($error))
    {
        $_SESSION['error']= $error;
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
        //  echo "<pre>";
        //  print_r($_SESSION);
        //  echo "</pre>";
        echo "created successfully". "<br><br>";  
    echo "<a href='loginphp1.php'>Click here for login</a>"; 
    }
}
?>