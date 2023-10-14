<?php

/* Teniendo:
 Un arreglo A: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12
 Mostrar un arreglo B: 1, 2, 3, 0, 4, 5, 6, 0, 7, 8, 9, 0, 10, 11, 12, 0
*/

$arregloA = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
$arregloB = [];

$j = 0;
for ($i=0; $i < count($arregloA); $i+=3) { 
    $arregloB[$j] = $arregloA[$i];
    $arregloB[$j+1] = $arregloA[$i+1];
    $arregloB[$j+2] = $arregloA[$i+2];
    $arregloB[$j+3] = 0;
    $j+=4;
}

foreach ($arregloB as $key => $vM) {
    echo $vM . ", ";
}


?>