<?php
session_start();
// function pr($arr) {
//     print "<pre>";
//     print_r($arr);
//     die;
// }

include "registration.php";
?>
<html>
<head>
    <title>Sign up</title>
</head>
<body style="background-color:rgb(166, 163, 156); size: cover;align-items: center;box-sizing: border-box;top:50%;
left: 50%;position: absolute;transform: translate(-50%,-50%);box-sizing: border-box;
padding: 70px 30px; color: aliceblue">
 <svg class="w-64 h-64" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="none" viewBox="0 0 24 24"><path d="M20.978 13.21a1 1 0 0 0-.396-1.024l-14-10a.999.999 0 0 0-1.575.931l2 17a1 1 0 0 0 1.767.516l3.612-4.416 3.377 5.46 1.701-1.052-3.357-5.428 6.089-1.218a.995.995 0 0 0 .782-.769z"></path></svg>
      <h1 style="background-color:red ;"><center>   Sign Up</center></h1>

      <form action="registration.php" method= "post" >   
      <label>First Name</label>
         <input type="text" name="fname" placeholder="Enter 1st name"/><br><br>

         <?php
            if (!empty($_SESSION['error']['fname'])) {
                echo $_SESSION['error']['fname'];
            } 
         ?>
         <label>Last name</label>
         <input type="text" name="lname" placeholder="Enter last name"/><br><br>

         <?php
            if (!empty($_SESSION['error']['lname'])) {
                echo $_SESSION['error']['lname'];
            } 
         ?>
         <label>Email</label>
         <input type="text" name="email" placeholder="E-mail"/><br><br>
         <label>Mobile No.</label>
         <input type="text" name="mobile" placeholder="Mobile no."/><br><br>
         <label>Gender</label>
         <input type="radio" name="gender" value="male"/>male
         <input type="radio" name="gender" value="female"/>female<br><br>
         <label>Age</label>
         <input type="checkbox" name="age" value="below 18"/>below 18
         <input type="checkbox" name="age" value="18-30"/>18-30
         <input type="checkbox" name="age" value="30 or above"/>30 or above<br><br>
         <label>Nationality</label>  <select name="nationality">
             <option value=""> Select </option>
        <option value="India">India</option>
        <option value="Canada">Canada</option>
        <option value="America">America</option>
        <option value="Other">Other</option>
         </select><br><br>
         <input type="Submit" name="submit"/>
         

        </form>
 
</body>
</html>
