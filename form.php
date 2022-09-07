<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php
    if(isset($_POST['submit']))
    {
        $result = $_POST;       
    }

    ?>
<form action="" method= "post" enctype="multipart/form-data">
<p>Username</p>
<input type="text" name="fname" placeholder="Enter Username">
<p>ID</p>
<input type="tel" name="phone" placeholder="Enter phone no."><br><br>
<input type=file name= uploadfile><br><br>
<input type="Submit" value="submit" name="submit">
</form>
<?php
    echo "<pre>";
        if(isset($_FILES['uploadfile']))
        {
            print_r($_FILES['uploadfile']);
            print_r($result);
        }
        if(isset($_FILES['uploadfile']))
        {
            $filename = $_FILES['uploadfile']['name'];     
            $temp_name = $_FILES['uploadfile']['tmp_name'];
            $folder = 'uploaded/'.$filename;
            move_uploaded_file($temp_name, $folder);
        }
?>
    <ul>
        <li>Firstname:<?php echo isset($result["fname"])?$result['fname']:null;?></li>
        <li>Phone Number:<?php echo isset($result["phone"])?$result['phone']:null;?></li>
        <li>Uploaded file:<?php echo isset($result["uploadfile"])?$result['uploadfile']:null;?></li>
        <img src="uploaded/CAB BOOKING 2.PNG" alt="image">
    </ul>
<?php


?>
</body>
</html>