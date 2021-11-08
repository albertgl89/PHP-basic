<?php

echo "<h1>Exercici 1</h1>";

function suma($a,$b) {
    if ($a == $b){
        return ($a+$b)*2;
    } else {
        return $a+$b;
    }
}

echo suma(1,2)."<br>"; //Esperat: 3
echo suma(3,2)."<br>"; //Esperat: 5
echo suma(2,2)."<br>"; //Esperat: 8

echo "<br>";

