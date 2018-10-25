<?php
//$t = temperature(C)
$t = 15;
if ($t <=20) { 
    echo "It is really cold today <br>";
}elseif ($t > 20 && $t < 30){
    echo "The weather is just perfect <br>";
}elseif ($t >=30 && $t< 40){
    echo "It's so hot today <br>";
} elseif ($t >= 40){
    echo "Am I in the Sahara Desert?! <br>";
}

?>