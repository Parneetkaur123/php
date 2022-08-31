<?php
  $str1= "Parneet";
  $str2= "abc";
  $str3=0;

     if(strlen($str1) != strlen($str2))
     {
       echo "These strings are not Anagram";
     }
    else
     {
       for ($i=0; $i < count($str1); $i++)
       {
         for($j=0; $j < count($str2); $j++)
         {
           if($str1[$i]==$str2[$j])
           {
            $str3++; 
           }
         }
       }
     }
     if($str3==count($str1))
     {
       echo "These are anagram";
     }
  else
  {
    echo "these are not anagrams";
  }   
    
?>

    



