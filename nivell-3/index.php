<?php

echo "<h1>Exercici 1</h1>";

/**
 * Recull un string i el processa de manera que cada caràcter és inclòs en un nou array com a element individual, sense espais ni altres retorns de carro, etc.
 * @param string $text String a processar
 * @return array Array amb els caràcters de l'string, sense espais ni caràcters escapats especials
 */
function converteixStrEnArray($text){
    $textNet = trim($text);
    $textNet = str_replace(" ", "", $textNet);
    $textNet = str_replace("\n", "", $textNet);
    $textNet = str_replace("\r", "", $textNet);
    $textNet = str_replace("\t", "", $textNet);
    $textNet = str_replace("\v", "", $textNet);
    $textNet = str_replace("\0", "", $textNet);

    $arr = str_split($textNet);

    return $arr;
}

print_r(converteixStrEnArray("  ABCDE TRE \n TROWP  "));//Test. Esperat: Array ( [0] => A [1] => B [2] => C [3] => D [4] => E [5] => T [6] => R [7] => E [8] => T [9] => R [10] => O [11] => W [12] => P )