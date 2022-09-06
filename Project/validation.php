<?php
$error=[];
function email ($email)
{
    global $error;
    if(empty($email))
    {
        $error['email'] =" Email required";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $error["email"]= "Email not valid";
    }
    return $error;
}

function pass($password)
{
    global $error;
    if(empty($password))
    {
        $error['password']= "password is required";
    }
    return $error ;
}
function fname($name)
{
    global $error;
    if(empty($name))
    {
        $error['fname'] ="fname is required";
    }
    return $error;
}
function lname($password)
{
    global $error;
    if(empty($password))
    {
        $error['lname']= "lname is required";
    }
    return $error;
}

?>