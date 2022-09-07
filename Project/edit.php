<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Page</title>
</head>
<style>
    form
    {
        border: 1px solid black;
        height: 300px;
        width: 300px;
        text-align: center;
        background: lightyellow;
        margin-top: 10%;
        margin-left:40%;
        border-radius: 30px;
        padding: 3px;
    }
</style>
<body>
    <?php
    if (isset($_GET['id']))
    { 
        $id=$_GET['id'];
        $user=[];
        foreach($_SESSION['User'] as $key=>$value)
        {
           
            if($id==$value['id'])
            {
                $user=$_SESSION['User'][$key];
                break;
            }
        }
    }    
        ?> 
    <form action=" " method="POST">
        <h2>Edit Here</h2>
        <label for="First name">First name</label>
        <input type="text" name="fname" placeholder="Enter name" value= <?php echo $user['fname']?? null; ?> /><br><br>
        <label for="Last name">Last name</label>
        <input type="text" name="lname" placeholder="Enter Last name" value= <?php echo $user['lname']?? null; ?>><br><br>
        <label for="Email">Email</label>
        <input type="email" name="email" placeholder="Enter Email" value= <?php echo $user['email'] ?? null; ?>><br><br>
        <input type="submit" name="submit" value="edit">  
        
    
    <?php
    if(isset($_POST['submit']))
    {
    
        foreach($_SESSION['User'] as $key => $value)
        {
            if($_SESSION['User'][$key]['id']==$id)
            {
                $_SESSION['User'][$key]= $_POST;
                $_SESSION['User'][$key]['id']=$id;
                header ('location: homepage.php');
            }
        }
    }
    ?>
    </form>
    </body>
</html>