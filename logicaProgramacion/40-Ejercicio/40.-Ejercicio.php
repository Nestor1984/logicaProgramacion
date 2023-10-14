<?php

/* Leer por teclado dos tablas de 10 numeros enteros y mezclarlas en una 
tercera de la forma: el 1ro de A, el 1ro de B, el 2do de A, el 2do de B, etc.*/
$arregloA = [1, 3, 5, 7, 9, 11, 13, 15, 17, 19];
$arregloB = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
$arregloC = [];

$j = 0; # Iterador para el arreglo c
$i = 0; # Iterador para el arreglo a y b
while($i < 10){
    $arregloC[$j] = $arregloA[$i];
    $arregloC[$j+1] = $arregloB[$i];
    $j+=2; // j incrementa a 2 por que le metimos 2 datos del arreglo A y B
    $i++; // i incrementa en 1
}

echo "Arreglo A original<br>";
foreach ($arregloA as $key => $vM) {
    echo $vM . ", ";
}

echo "<br>Arreglo B original<br>";
foreach ($arregloB as $key => $vM) {
    echo $vM . ", ";
}

echo "<br>Arreglo mezclado<br>";
foreach ($arregloC as $key => $vM) {
    echo $vM . ", ";
}

?>