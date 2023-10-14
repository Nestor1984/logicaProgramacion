<?php

/**
 * Mezclar dos arreglos en un tercer arreglo:
 *  A = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120]
 *  B = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]
 *  C = [10, 20, 30, 1, 2, 3, 40, 50, 60, 4, 5, 6, 70, 80, 90, 7, 8, 9......]
 * Usando un solo for
 */

$arregloA = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120];
$arregloB = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
$arregloC = [];

$j = 0; # j iterador del arreglo C
for ($i=0; $i < 12; $i+=3) { # i iterador del arreglo A y B
    $arregloC[$j] = $arregloA[$i];
    $arregloC[$j+1] = $arregloA[$i+1];
    $arregloC[$j+2] = $arregloA[$i+2]; # Hasta aca llenamos 3 elementos del arreglo A al arreglo C
    $arregloC[$j+3] = $arregloB[$i];
    $arregloC[$j+4] = $arregloB[$i+1];
    $arregloC[$j+5] = $arregloB[$i+2]; # Hasta aca llenamos 3 elementos del arreglo B al arreglo C
    $j+=6; // incrementamos el iterador del arreglo C a 6, por que metimos 6 elementos
}

echo "<h2>Imprimimos el arreglo C: </h2>";
foreach ($arregloC as $key => $vM) {
    echo " [" . $vM . "] ";
}


?>