<?php
$a= array(8,8,9,5,2,4,6);
function distinct($a)
{
sort($a);
for($i=0; $i<count($a);$i++)
{
    if($a[$i] != $a[$i+1])
    {
        
        echo $a[$i];
        
    }
    else
    {
        continue;
    }

}
}
distinct($a);


?>