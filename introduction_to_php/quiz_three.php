<?php

if ($T <=20) { 
    echo "It is really cold today <br>";
}elseif ($T > 20 && $T < 30){
    echo "The weather is just perfect <br>";
}elseif ($T >=30 && $T< 40){
    echo "It's so hot today <br>";
} elseif ($T >= 40){
    echo "Am I in the Sahara Desert?! <br>";
}

?>