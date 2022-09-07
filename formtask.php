<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <?php
    if(isset($_POST["submit"]))
    {
        
    }
    $result= $_POST;    
    ?>
    <form action="" method="post">
        <p>Username </p>
        <input type="txt" name="name" placeholder="Enter Username">
        <p>Email</p>
        <input type="txt" name="Email" placeholder="Enter Email">
        <p>gender</p>
        <input type="radio" name="gender[]" value="Male">
        <lable for="Male">Male</lable> 
        <input type="radio" name="gender[]" value="Female">
        <lable for="Female">Female</lable>
         

        <p>Profession</p>
        <input type="checkbox" name="Profession[]" value="PHP Developer">
        <lable for="PHP Developer">PHP Developer</lable> 
        <input type="checkbox" name="Profession[]" value="Dot Net Developer">
        <lable for="Dot Net Developer">Dot Net Developer</lable> 
        <input type="checkbox" name="Profession[]" value="Android Developer">
        <lable for="Android Developer">Android Developer</lable> 
        <input type="checkbox" name="Profession[]" value="IOS Developer">
        <lable for="IOS Developer">IOS Developer</lable><br><br>
        
        <input type="Submit" value="submit">
    </form>
    
       <?php
        if(count($result)>0)
        {
        ?>
        
        <ul>
           <li>Username:<?php echo isset($result["name"])?$result["name"]:"null"?></li>
           <li>Email:<?php echo isset($result["Email"])?$result["Email"]:"null"?></li>
           <li>gender:<?php echo isset($result["gender"])?implode(" , " , $result["gender"]):"null"?></li>
           <li>Profession:<?php echo isset($result["Profession"])?implode(" , " ,$result["Profession"]):"null"?></li>
        </ul>
        <?php
        }
        ?>
</body>
</html>