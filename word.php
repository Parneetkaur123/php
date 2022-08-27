<?php
function words($string)
{
  $array= (explode(" ",$string));
  $a=count($array);
  echo "the number of words in sentence are:". "$a";
}
words("I like to learn coding");

?>