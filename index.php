<?php
$x= "hello world";
$y= 123.4;
$a= 123;
$z= true;
echo $x. "<br>";//string
echo $y. "<br>";//float
echo $z."<br>";//boolean
echo $a. "<br>";//number
var_dump($x);
var_dump($y);
var_dump($z);
?>
<?php
define("test",50);
echo test. "<br>";
$sum =test+20;
echo $sum. "<br>";
?>
<?php
$p=10;
$q=3;
$r= $p + $q;
echo $r. "<br>";
$s = $p - $q;
echo $s. "<br>";
$t = $p * $q;
echo $t. "<br>";
$u = $p/$q;
echo $u. "<br>";
$v = $p%$q;
echo $v. "<br>";
$w=$p**$q;
echo $w. "<br>";
$w++;
echo $w. "<br>";
$r--;
echo $r. "<br>";

?>
<?php
$color= array("red","yellow","blue", "green");
echo $color[0]."<br>";
echo $color[3]. "<br>";
echo $color[2]. "<br>";
print_r($color) ;
?>
<?php
$age= array("bill"=>10,"joe"=>20,"peter"=>30);
echo $age["bill"] . "<br>";
echo $age["joe"] . "<br>" ;
print_r($age);
var_dump($age);

?>

