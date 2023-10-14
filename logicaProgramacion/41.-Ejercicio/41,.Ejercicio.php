<?php

/* Leer por teclado tres tablas de 10 numeros enteros y mezclarlas en una 
cuarta de la forma: el 1ro de A, el 1ro de B, el 1ro de C, el 2do de A, el 2do de B, el 2do de C, etc.*/

$arregloA = array(1, 4, 7, 10, 13, 16, 19, 22, 25, 28);
$arregloB = array(2, 5, 8, 11, 14, 17, 20, 23, 26, 29);
$arregloC = array(3, 6, 9, 12, 15, 18, 21, 24, 27, 30);
$arregloD = array();

$j = 0; // iterador para el arreglo d
for ($i=0; $i < 10; $i++) { // i iterador para los arreglos a, b y c    
    $arregloD[$j] = $arregloA[$i]; 
    $arregloD[$j+1] = $arregloB[$i]; 
    $arregloD[$j+2] = $arregloC[$i]; 
    $j+=3;
}

foreach ($arregloD as $key => $vM) {
    echo "[" . $vM . "] ";
}

?>