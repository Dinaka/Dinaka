<?php
function myTest(){
    static $a = 2, $b = 5;
    $c=$a+$b;
    echo "The sum of a and b is $c <br>";
    $d=$a*$b; 
    echo "The product of a and b is $d <br>";
}


myTest();
    
       
?>