<?php
$arr= array(4,6,3,2,7,8,4,3);
sort($arr);
function distinct($arr)
{
    for($i=0; $i< count($arr); $i++)
    {
        if($arr[$i]==$arr[$i+1])
        {
            continue;
        }
        else
        {
            echo "<pre>";
            print $arr[$i];
            echo "</pre>";
        }
    }

}
distinct($arr);
?>