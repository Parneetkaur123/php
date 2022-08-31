<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess</title>
</head>
<body>
    <table width=50% border=1px>
        <tr>
        <?php
         for($col=0; $col<8; $col++)
        {
           echo "<tr>";
            for($row=0; $row<8; $row++)
            {
                $sum= $col + $row;
                if($sum%2==0)
                {
                    echo "<td height=30px; width=30px; bgcolor=black ></td>";
                    
                }
                else
                {
                    echo "<td height=30px; width=30px; bgcolor=white></td>";
                    
                }
            }
            echo "</tr>";
            
        }
    
        ?>
        </tr>
    </table>
</body>
</html>