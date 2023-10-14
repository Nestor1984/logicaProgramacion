<?php

/**
 * Teniendo:
 * a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
 * b = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100]
 * Visualizar un arreglo C:
 * a = [1, 100, 2, 90, 3, 80, 4, 70, 5, 60, 6, 50, 7, 40, 8, 30, 9, 20, 10, 10]
 */

 $arregloA = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
 $arregloB = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
 $arregloC = [];

 $j = 0; // Iterador del arreglo C
 for ($i=0; $i < 10; $i++) { 
    $arregloC[$j] = $arregloA[$i];
    $arregloC[$j+1] = $arregloB[9-$i];
    $j+=2;
 }

echo "<h3>Arreglo C:</h3>";
for ($i=0; $i < count($arregloC); $i++) { 
    echo " [" . $arregloC[$i] . "] ";
}

?>