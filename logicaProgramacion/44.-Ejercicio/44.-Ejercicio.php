<?php

// Crear una función que reciba un arreglo de cadenas y devuelva la cadena más larga en el arreglo.

function recibirArreglo($arreglo){
    $cadenaMasLarga = strlen($arreglo[0]);
    $posicion = 0;
    $valor = 0;
    for ($i=0; $i < (count($arreglo)-1); $i++) { 
        if (strlen($arreglo[$i]) > strlen($arreglo[$i+1])) {
            $cadenaMasLarga = strlen($arreglo[$i]); // Guardamos la longitud
            $posicion = $i; // Guardamos la posicion
            $valor = $arreglo[$i]; // Guardamos el valor o dato
        }
    }
    return "La cadena mas larga es: (" . $valor . ") en la posicion [" . $posicion . "] con una longitud de: " . $cadenaMasLarga;  
}


$arreglo = ["Nestor", "Zeus", "Angelica", "Abel"];

$mensaje = recibirArreglo($arreglo);

echo $mensaje;

?>