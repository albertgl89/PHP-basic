<?php

echo "<h1>Exercici 1</h1>";

$variableInteger = 4;//Integer
$variableDouble = 5.6; //Double
$variableString = "Hola :-D"; //String
$variableBoolean = false; //Boolean

echo $variableInteger."<br>";
echo $variableDouble ."<br>";
echo $variableString ."<br>";
echo $variableBoolean ? "true" : "false";

echo "<br> <h1>Exercici 2</h2>";

$hello = "Hello, World!";

echo $hello."<br>";//Impressió normal

echo strtoupper($hello)."<br>";//Tot a majúscules
echo strlen($hello)."<br>";//Longitud de variable. Esperat: 13
echo strrev($hello)."<br>";//String invertit

$text = "Aquest és el curs de PHP";

echo $hello.$text."<br>";//Concatenació dels dos string

echo "<br> <h1>Exercici 3</h2>";

define("NOM", "<h1><b>Albert Garcia Llorca<b></h1>");//Definició de constant amb text de capçalera i negreta

echo NOM;//Impressió

echo "<br> <h1>Exercici 4</h2>";

$x = 5;
$y = 3;
$n = 3.67;
$m = 8.49;

//X i Y
echo "Valor X: ".$x."<br>";
echo "Valor Y: ".$y."<br>";
echo "Suma: ".($x+$y)."<br>";
echo "Resta: ".($x-$y)."<br>";
echo "Producte: ".($x*$y)."<br>";
echo "Mòdul: ".($x%$y)."<br>";

echo "<br>";

//N i M 
echo "Valor N: ".$n."<br>";
echo "Valor M: ".$m."<br>";
echo "Suma: ".($n+$m)."<br>";
echo "Resta: ".($n-$m)."<br>";
echo "Producte: ".($n*$m)."<br>";
echo "Mòdul: ".($n%$m)."<br>";

echo "<br>";

//X, Y, N, M
echo "Doble del valor X: ".($x*2)."<br>";
echo "Doble del valor Y: ".($y*2)."<br>";
echo "Doble del valor N: ".($n*2)."<br>";
echo "Doble del valor M: ".($m*2)."<br>";
echo "Suma de totes les variables: ".($x+$y+$n+$m)."<br>";
echo "Producte de totes les variables: ".($x*$y*$n*$m)."<br>";

echo "<br>";

echo "<br> <h1>Exercici 5</h2>";

$array1 = array(1,2,3,4,5);//Primer array de 5 integers
$array2 = array(6,7,8); //Segon array de 3 integers

array_push($array2, 9);//Afegeix un integer més al segon array

$mescla = array_merge($array1, $array2); // Barreja els dos arrays
echo count($mescla)."<br>";//Esperat: 9 elements

foreach($mescla as $element){//Imprimeix tots els elements de l'array resultant
    echo $element."<br>";
}

echo "<br>";
