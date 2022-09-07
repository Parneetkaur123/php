<?php
$country=array("Punjab"=>"Amritsar","Haryana"=>"Karnal","Jammu"=>"Srinagar");

foreach($country as $key=> $value)
{
echo "capital of {$key} is {$value}<br>";
}
?>
<?php
$arra= [
    0=>["ID"=>1,"Tittle"=>"hello"],
    1=>["ID"=>2,"Tittle"=>"World"]
];
foreach($arra as $key=> $value){

    var_dump($value['ID']);
    echo "<br>";

}
    
?>
<?php
$car = array("maruti", "Swift","Zen","Alto");
$arrlength = count($car);
for($x=0; $x <= $arrlength; $x++){
 echo $car[$x];
 echo "<br>";
}
?>
