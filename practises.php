<?php
function test_odd($var)
{
    return($var & 1);
}
$a1= array(1,3,2,3,4);
echo "<pre>";
print_r(array_filter($a1,"test_odd"));
echo "</pre>";
?>

<?php
$cars = array("maruti","zen","Swift");
for($i=0; $i < count($cars); $i++)
{
echo $cars[$i];
echo "<br>";
}
sort($cars);
echo "<pre>";
print_r($cars);
echo "</pre>";
rsort($cars);
echo "<pre>";
print_r($cars);
echo "</pre>";
print_r(array_slice($cars, 0,2));
?>
<?php
$arr = array("parneet"=>"20","Daljit"=>"16","harjot"=>"11");

foreach($arr as $key=>$value)
{
    echo "the age of {$key} is {$value}";
    echo "<br>";
}
krsort($arr);
echo "<pre>";
print_r ($arr);
echo "</pre>";
?>
<?php
$num = array(3,5,7,5,34);
echo "<pre>";
print_r($num);
echo "</pre>";
echo array_sum($num);
asort($num);
echo "<pre>";
print_r($num);
echo "</pre>";
?>

<?php
$fname= array("parneet","shikha","saveeta","anjali","poonam");
$age= array("30","34","29","32","34");
$c= array_combine($fname,$age);
echo "<pre>";
print_r($c);
echo "</pre>";
?>
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"black","c"=>"purple");
$a3=array("a"=>"red","b"=>"black","d"=>"yellow");

$result=array_diff_assoc($a1,$a2,$a3);
print_r($result);
?>

<?php
$fruit= array("a"=>"orange","b"=>"banana","c"=> "grapes");
$veggie= array("d"=>"carrot","b"=>"pea",88,90);
array_merge($fruit, $veggie);
$newarray= array_merge_recursive($fruit, $veggie);
echo "<pre>";
print_r($newarray);
echo "</pre>";
?>

<?php
function square($n, $m){
return "$n => $m";
}
$x= array(1,2,3,4,5);
$y= array("lemon","orange","banana","apple","guava");
$newwarray=array_map("square",$x,$y);
echo "<pre>";
print_r($newwarray);
echo "</pre>";
?>

<?php
function add($n){
    return "$n"+"$n";
}

$p= array(4,5,6,7,8);
$nearray= array_map("add",$p);
echo "<pre>";
print_r($nearray);
echo "</pre>";

?>

<?php
$str= "Hello world. It's a beautiful day";
$array= explode(".",$str,4);
echo "<pre>";
print_r ($array);
echo "</pre>";
?>