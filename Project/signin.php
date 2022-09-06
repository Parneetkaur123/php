<?php
session_start();
// session_destroy();

// include "sessioncode.php";
?>
<html>
<head></head>
<body style="size: cover;align-items: center;box-sizing: border-box;top:50%;
left: 50%;position: absolute;transform: translate(-50%,-50%);box-sizing: border-box;
padding: 70px 30px; color: aliceblue ">
<style>
    #form
    {
        height: 520px;
        width: 350px;
        border: 1px solid black;
        align:center;
        padding: 2px;
        background: black;
        box-shadow: 10px 10px 3px black;
        border-radius: 30px;
        text-align: center;
    }
    #form input[type="submit"], input[type=login]
    {
    border: none;
    height: 40px;
    background-color: red;
    width: 40%;
    border-radius: 20px;

    }
    #form input[type="submit"]:hover
    {
    cursor: pointer;
    background: white;
    }
    
     
</style>
 <div id="form">
  <form action="sessioncode.php" method= "post" >   
  <b><h1><center>Sign in</center></h1></b>  
  <label>First Name</label>
         <input type="text" name="fname" placeholder="Enter 1st name"/><br><br>
         <?php
            if(!empty($_SESSION['error']['fname']))
            {
                echo $_SESSION["error"]["fname"];
            }
            ?>
         <label>Last name</label>
         <input type="text" name="lname" placeholder="Enter last name"/><br><br>
            <?php
            if(!empty($_SESSION["error"]["lname"]))
            {
                echo $_SESSION["error"]["lname"];
            }

            ?>
         <label>Email</label>
         <input type="text" name="email" placeholder="E-mail"/><br><br>
         <?php
         if(!empty($_SESSION["error"]["email"]))
            {
                echo $_SESSION["error"]["email"];
            }

         ?>
    
         <label>Mobile No.</label>
         <input type="text" name="mobile" placeholder="Mobile no."/><br><br>
        <?php 
        // if(!empty($_SESSION["error"]["mobile"]))
        //     {
        //         echo $_SESSION["error"]["mobile"];
        //     }
        ?>
         <label>Gender</label>
         <input type="radio" name="gender" value="male"/>male
         <input type="radio" name="gender" value="female"/>female<br><br>
         <label>Age</label>
         <input type="checkbox" name="age" value="below 18"/>below 18
         <input type="checkbox" name="age" value="18-30"/>18-30
         <input type="checkbox" name="age" value="30 or above"/>30 or above<br><br>
         <label>Nationality</label>  
         <select name="nationality">
         <!-- <option> Select </option> -->
        <option value="India">India</option>
        <option value="Canada">Canada</option>
        <option value="America">America</option>
        <option value="Other">Other</option>
        </select><br><br>
        <label>Enter password</label>
         <input type="password" name="password"/><br><br>
        <?php 
        if(!empty($_SESSION["error"]["password"]))
            {
                echo $_SESSION["error"]["password"];
            }
         ?>
        
            <center><input type="Submit" name="submit" value="submit"/></center>
            <p>If you have an account. Login here!!</p><a href=loginphp1.php>Login</a>

        </form>
        </div>
</body>
</html>