<?php
$array = array(3,0,1,4,5,6,45,4,87,98,-2,-3);
 $b = array();
for($i = 0; $i < count($array); $i++)
{
    if($array[$i]>0)
    {
        $b[] = $array[$i];
    
    }
}

sort($b);
echo "<pre>";
print_r($b);
echo "</pre>";
for($i = 0; $i < count($array); $i++)
{
    if($b[1]-$b[0]>1)
    {
      echo $b[0]+1;
      break;
    }
}


  





?>