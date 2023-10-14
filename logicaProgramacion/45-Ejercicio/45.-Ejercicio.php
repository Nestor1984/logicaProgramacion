<?php

// Crear una función que reciba un arreglo de números y devuelva el número más cercano a cero.

function valorMasCercanoACero($arreglo){
    $valorMaCercanoA0 = $arreglo[0];
    $indice = 0;
    for ($i=0; $i < count($arreglo)-1; $i++) { 
        if ($arreglo[$i] < $arreglo[$i+1]) {
            $valorMaCercanoA0 = $arreglo[$i];
            $indice = $i;
        }
    }
    return "El valor mas cercano a cero es [" . $valorMaCercanoA0 . "], con el indice [" . $indice . "]";
}

$arreglo = array(4, 3, 7, 8, 9, 10, 2, 6);
$mensaje = valorMasCercanoACero($arreglo);
echo $mensaje;


?>