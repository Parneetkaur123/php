<?php
$unit="300";
if($unit<=50)
{
  echo $unit*3.50;
}
elseif($unit>50 && $unit<=150)
{
    $a = $unit-50;
    $c= $a*4.00;
    $temp= $c+(50*3.50);
    echo $temp;
}
elseif($unit>150 && $unit<=250)
{
    $d= $unit-150;
    $e= $d* 5.20;
    $value= $e + (100*4.00)+(50*3.50);
    echo $value;
}
elseif($unit>=250)
{
    $f= $unit-250;
    $g= $f * 6.50;
    $cal= $g + (50*3.50)+(100*4.00)+(100*5.20);
    echo $cal;
}
else
{
    echo "no result found";
}
?>