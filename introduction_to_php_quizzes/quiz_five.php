<?php
$names = array ("John","Jane","Joe");
$hobbies = array ("running","reading","cooking");
$n_h = array_combine ($names, $hobbies);
foreach ($n_h as $x=>$x_value){
    echo "My name is ". $x.". I love ". $x_value. ".<br>";
}