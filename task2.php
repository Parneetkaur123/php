<?php
$a = array(3,4,7,6,9,8);
$b = array();
for ($i=0; $i < count($a); $i++)
{
    if($i < $i+1)
    {
        $b[]= $a[$i];
    }
    echo "<pre>";
    print_r($b);
    echo "</pre>";
}
 ?>