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

echo "<h1>Exercici 2</h1>";

function inverteix($text){
    if (strlen($text) <= 1){
        return $text;
    } else if (strlen($text) == 2){
        $array = str_split($text);
        return $array[1].$array[0]; 
    } else {
        $array = str_split($text);
        $primerCaracter = $array[0];
        $ultimCaracter = $array[count($array)-1];
        $cosText = [];
        for ($i = 1; $i < count($array)-1; $i++){
            array_push($cosText, $array[$i]);
        }
        $cosText = implode("",$cosText);
        return $ultimCaracter.$cosText.$primerCaracter;
    }
}

echo inverteix('wxyz')."<br>";//Esperat: zxyw
echo inverteix('a')."<br>"; //Esperat: a
echo inverteix('ab')."<br>"; //Esperat ba