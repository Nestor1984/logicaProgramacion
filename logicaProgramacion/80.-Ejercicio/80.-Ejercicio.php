<?php

// Mezclar 2 arreglos de tipo string de 3 elementos en un tercer arreglo con un total de 6 elementos

$arregloA = ["Uno", "Tres", "Cinco"];
$arregloB = ["Dos", "Cuatro", "Seis"];
$arregloC = [];

$j = 0;
for ($i=0; $i < 3; $i++) { 
    $arregloC[$j] = $arregloA[$i];
    $arregloC[$j+1] = $arregloB[$i];
    $j+=2;
}

foreach ($arregloC as $key => $vM) {
    echo "[" . $vM . "] ";
}

?>