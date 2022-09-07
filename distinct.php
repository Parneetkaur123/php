<?php
$a= array(8,6,9,8,4,3,5,6);
function distinct($a)
{
sort($a);
for($i=0; $i<=count($a)-1;$i++)
{
    if(isset($a[$i+1]) && $a[$i] != $a[$i+1])
    {
       echo "<pre>"; 
        print $a[$i];
        echo "</pre>";
    }
    else
    {
        continue;
    }
}
}
distinct($a);
?>