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

