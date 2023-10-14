<?php

// Crear una función que reciba un arreglo de números y devuelva el número que aparece con más frecuencia en el arreglo.

function valorQueApareceConMasFrecuencia($arreglo){
    $contador = 0;
    $vectorContadorFrecuencias = [];
    for ($i=0; $i < count($arreglo); $i++) { // i iterador para cada elemento del arreglo
        for ($j=0; $j < count($arreglo); $j++) { // j iterador para comparar con todo el arreglo original
            if ($arreglo[$i] == $arreglo[$j]) { 
                $contador++;
            }
        }
        $vectorContadorFrecuencias[] = $contador;
        $contador = 0;
    }
    
    // For para sacar el valor que mas se repite en el arreglo
    $posicion = 0;
    $valorMasFrecuente = $arreglo[0];
    for ($i=0; $i < count($vectorContadorFrecuencias)-1; $i++) { 
        if ($vectorContadorFrecuencias[$i] > $vectorContadorFrecuencias[$posicion]) {
            $valorMasFrecuente = $arreglo[$i];
            $posicion = $i;
        }
    }
    return "El valor con mas frecuencia es: " . $valorMasFrecuente . " en la posicion [" . $posicion . "]"; 
}


$arreglo = [1, 5, 3, 4, 5, 6, 7, 8, 9, 3, 2, 6, 9, 10, 6, 6, 5, 6];
$mensaje = valorQueApareceConMasFrecuencia($arreglo);

echo $mensaje;
/*
function valorQueApareceConMasFrecuencia($arreglo) {
    $contador = 0;
    $vectorContadorFrecuencias = [];
    
    for ($i = 0; $i < count($arreglo); $i++) {
        $contador = 0; // Reiniciar el contador en cada iteración
        for ($j = 0; $j < count($arreglo); $j++) {
            if ($arreglo[$i] == $arreglo[$j]) {
                $contador++;
            }
        }
        $vectorContadorFrecuencias[] = $contador;
    }
    
    $posicion = 0;
    $valorMasFrecuente = $arreglo[0]; // Asignar el primer valor como el más frecuente inicialmente
    
    for ($i = 0; $i < count($vectorContadorFrecuencias); $i++) {
        if ($vectorContadorFrecuencias[$i] > $vectorContadorFrecuencias[$posicion]) {
            $valorMasFrecuente = $arreglo[$i];
            $posicion = $i;
        }
    }
    
    return $valorMasFrecuente;
}

$arreglo = [1, 5, 3, 4, 5, 6, 7, 8, 9, 3, 2, 6, 9, 10, 6, 6, 5, 6];
$valorMasFrecuente = valorQueApareceConMasFrecuencia($arreglo);

echo "El valor con más frecuencia es: " . $valorMasFrecuente;*/


?>