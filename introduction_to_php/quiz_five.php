<?php
$names = array ("John","Jane","Joe");
$hobbies = array ("running","reading","cooking");
$N_H = array ("John"=>"running", "Jane"=>"reading", "Joe"=>"cooking");
foreach ($N_H as $x=>$x_value){
    echo "My name is ". $x.". I love ". $x_value. ".<br>";
}