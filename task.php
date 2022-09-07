<?php
for ($n=1;$n<=100;$n++)
{
    if($n%15==0){
            echo "fizzbuzz <br>";
        }
        elseif ($n%5==0) {
            echo "buzz <br>";
        }
        elseif($n%3==0) {
            echo "fizz <br>";
        }
    
}
?>  