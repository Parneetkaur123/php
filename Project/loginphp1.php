<?php
session_start();
include "loginphp1code.php";
?>
<html>
<body>
    <style>
    *{
        margin: 0%;
        padding: 0%;
        
    }
    body{
       margin: 0%;
       padding: 0%;
       background-position: center;
       background-size: cover;
    }
    #form{
        width: 320px;
        height: 450px;
        margin-top: 20px;
        margin-bottom: 20px;
        border: 3px solid white;
        background: grey;
        color: white;  
        box-shadow: 10px 10px 3px;
        box-sizing: border-box;
        padding: 70px 30px;
        margin: auto;
        margin-top: 70px;
        border-radius: 30px;
    }
    #form h1{
        margin-bottom: 40px;
        text-align: center;
    }
#form p{
    margin: 0%;
    padding: 0%;
    font-weight: bold;
}
#form input{
    width: 100%;
    margin-bottom: 20px;
}
#form input[type="text"],input[type=password]
{
    border: none;
    height: 40px;
    background-color: white;
    border-radius: 20px;

}
#form input[type="submit"], input[type=login]
{
    border: none;
    height: 40px;
    background-color: red;
    border-radius:20px ;
}
#form input[type="submit"]:hover
{
cursor: pointer;
background: purple;
}

    </style>   
   <div id="form">
        <h1>Login Here</h1>
        <form action="loginphp1.php" method="Post">
          <label for="username">username:</label>
            <input type="text" name="email" placeholder="@gmail.com"/><br>
            <?php
                // if(!empty ($_SESSION['error']['email']))
                // {
                //     echo $_SESSION['error']['email'];
                // }
            ?>
            <label for="password">password:</label>
            <input type="password" name="password" placeholder="Enter here"/><br><br>
            <?php
                // if(!empty ($_SESSION['error']['password']))
                // {
                //     echo $_SESSION['error']['password'];
                // }
            ?>
            <input type="submit" name="submit" value="submit"/>
            <p>back to signup</p><a href=signin.php>sign up</a>
            

        </form>
    </div>
</body>
</html>