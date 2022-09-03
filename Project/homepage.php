<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <tittle></tittle>
    <style>
    table 
    {   
       border:1px solid;
       width:100%;
    } 
    th,td 
    {
    background-color:lightyellow;
    border:0.5px;
    text-align:center;
    font-size:large;
    }
    h1
    {
        text-align:center;
        background: red;
        font-weight: bold;
    }
    </style>
</head>
<body>
    <h1>User Data</h1>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>ID</th>
            <th>Operations</th>
            <th>Operations</th>
        </tr>
            <?php
            foreach($_SESSION['User'] as $key=>$value)
            {
            ?>
            <tr>
            <td><?php echo $_SESSION['User'][$key]['fname']?> </td>
            <td><?php echo $_SESSION['User'][$key]['lname']?></td>
            <td><?php echo $_SESSION['User'][$key]['email']?></td>
            <td><?php echo $_SESSION['User'][$key]['id']?></td>
            <td><?php echo "<a href=\"edit.php?id=".$_SESSION['User'][$key]['id']."\">Edit</a>"?></td>
            <td><?php echo "<a href=\"delete.php?id=".$_SESSION['User'][$key]['id']."\">Delete</a>"?></td>
            <?php
                }
            ?>
        </tr>
    </table>
    <a href="logout.php">Logout</a> 

</body>
</html>