<?php
$emp= [
    ["Krishna","Manager",18000],
    ["Salman","salesman",13000],
    ["saab","Computer Operator",20000],
    ["Amir","Driver",15000]
];
echo "<pre>";
print_r($emp);
echo "</pre>";
echo $emp [0][0]. " ";
echo $emp [0][1]. " ";
echo $emp [0][2]. " ";
echo "<br>";
echo $emp [1][0]. " ";
echo $emp [1][1]. " ";
echo $emp [1][2]. " ";
echo "<br>";
echo $emp [2][0]. " ";
echo $emp [2][1]. " ";
echo $emp [2][2]. " ";
echo "<br>";
echo $emp [3][0]. " ";
echo $emp [3][2]. " ";
echo $emp [3][0]. " ";
?>
<?php
$fruit = ["orange", "banana","apple","grapes"];
array_push($fruit,"kiwi","lichi");
echo "<pre>";
print_r($fruit);
echo "</pre>";
?>
<?php
$color = [
    "first"=>"red",
    "second" => "green",
    "third" => "blue",
    "fourth" => "yellow"
];
$newArray = array_keys ($color);
echo "<pre>";
print_r ($color);
?>
<?php
$demo =["A","B","C","D"];
array_push ($demo,"E","F");
array_pop ($demo);
echo "<pre>";
print_r($demo);
echo "</pre>";
?>
<?php
$demo2 =["A"=>"red","B"=>"green","C"=> "red","D"=>"yellow"];
$nnarray= array_unique($demo2);
echo "<pre>";
print_r ($demo2);
echo "</pre>";

?>
