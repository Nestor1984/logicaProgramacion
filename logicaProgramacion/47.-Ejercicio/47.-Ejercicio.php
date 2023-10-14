<?php

//  Crear una función que reciba un arreglo de números y devuelva el número que está en la posición media del arreglo.

function posicionMediaArreglo($arreglo){
    $medio = count($arreglo)/2;
    return $arreglo[$medio];
}

$arreglo = [];

for ($i=0; $i < 15; $i++) { 
    $arreglo[$i] = rand(1, 20);
}

echo "<h3>Arreglo original</h3>";
foreach ($arreglo as $key => $vM) {
    echo "(" . $vM . ") [" . $key . "], ";
}

echo "<br>El elemento obtenido en la posicion media es: " . posicionMediaArreglo($arreglo);

?>