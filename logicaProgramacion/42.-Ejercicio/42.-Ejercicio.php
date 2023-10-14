<?php

/* Leer por teclado 2 tablas de 10 numeros enteros y mezclarlas en una 
tercera de la forma: el 1ro de A, 2do de A, el 1ro de B, el 2do de B, el 3ro de A, el 4to de A, el 3ro de B, el 4to de B, etc.*/
$arregloA = [1, 2, 5, 6, 9, 10, 13, 15, 17, 19];
$arregloB = [3, 4, 7, 8, 11, 12, 14, 16, 18, 20];
$arregloC = []; 

$j = 0; // iterador de arreglo c    j=0
for ($i=0; $i < 10; $i+=2) { // i iterador de arreglos A y B   i=0
    
    $arregloC[$j] = $arregloA[$i]; // arregloC[0] = 1
    $arregloC[$j+1] = $arregloA[$i+1]; // arregloC[1] = 2
    $arregloC[$j+2] = $arregloB[$i];  // arregloC[2] = 3
    $arregloC[$j+3] = $arregloB[$i+1]; // arregloC[3] = 4

    $j+=4;

}

foreach ($arregloC as $key => $vM) {
    echo $vM . ", ";
}





?>