<?php
$unit= "70";
if($unit<=50)
{
    echo $unit*3.50;
}
elseif($unit>50 && $unit<=100)
{
    echo $unit*4.00;
}
elseif($unit>100 && $unit<=200)
{
    echo $unit*5.20;
}
elseif($unit>=250)
{
    echo $unit*6.50;
}
else
{
    echo "no result found";
}
?>