<?php

/**
 * Mezclar dos arreglos en un tercer arreglo:
 *  A = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120]
 *  B = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]
 *  C = [10, 20, 30, 1, 2, 3, 40, 50, 60, 4, 5, 6, 70, 80, 90, 7, 8, 9......]
 */

 $arregloA = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120];
 $arregloB = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
 $arregloC = [];

$i = 0; // i iterador para recorrer arreglo A y B
$j = 0;  // j iterador para recorrer el arreglo C
 while($i < 12){

    for ($k=0; $k < 3; $k++) { // k iterador para recorrer de 3 en 3, el arreglo A 
        $arregloC[$j] = $arregloA[$i+$k];
        $j++;
    }

    for ($k=0; $k < 3; $k++) { // k iterador para recorrer de 3 en 3, el arreglo B
        $arregloC[$j] = $arregloB[$i+$k];
        $j++;
    }
    $i+=3;
 }

foreach ($arregloC as $key => $vM) {
    echo $vM . ", ";
}

?>