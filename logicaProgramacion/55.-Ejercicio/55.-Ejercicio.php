<?php

/**
 * Hacer dos arreglos de 12 puestos, luego hacer un tercer arreglo y rellenarlo con los arreglos anteriores de la siguiete forma, 
 * 3 componentes del primer arreglo y luego 3 del segundo, otra vez tres del primero y asi sucesivamente
 */

 $puestosA = ['p1', 'p2', 'p3', 'p6', 'p7', 'p8', 'p12', 'p13', 'p14', 'p18', 'p19', 'p20'];
 $puestosB = ['p3', 'p4', 'p5', 'p9', 'p10', 'p11', 'p15', 'p16', 'p17', 'p21', 'p22', 'p23'];
 $arregloC = [];


$i = 0; // i iterador del arreglo a y b   i=0 
$j = 0; // j iterador del arreglo    j=0
 while ($i < 12) { 
    for ($k=0; $k < 3; $k++) { // iterador para ir iterando de 3 en 3
        $arregloC[$j] = $puestosA[$i+$k];
        $j++;
    }
    for ($k=0; $k < 3; $k++) { // iterador para ir iterando de 3 en 3
        $arregloC[$j] = $puestosB[$i+$k];
        $j++;
    }
    $i+=3;
 }

 for ($i=0; $i < count($arregloC); $i++) { 
    echo $arregloC[$i] . ", "; 
 };


?>