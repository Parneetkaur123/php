<?php

function Students($grade)
{

   
   switch($grade)
   {
    case $grade>=60:
    echo "First Division";
    break;
   
   case $grade>=45 && $grade<=59:
    echo "Second Division";
    break;
    
    case $grade>=33 && $grade<=44:
    echo "fail";
    break;
    
    case $grade<33:
    echo "fail";
    break;
    
    default:
    echo "No result found";
    break;
        

    }

    }
     Students(54);
?>