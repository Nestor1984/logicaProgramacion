<?php

// Cargar un arreglo de n elementos, imprimir el menor y un mensaje si se repite dentro del arreglo.

$n = rand(5, 9);
$arreglo = [];

// Rellenamos el arreglo
for ($i=0; $i < $n; $i++) { 
    $arreglo[$i] = rand(4, 20);
}

echo "<h4>Arreglo</h4>";
for ($i=0; $i < $n; $i++) { 
    echo "[" . $arreglo[$i] . "] ";
}

// Hallamos el numero menor
$numMenor = $arreglo[0];
for ($i=0; $i < count($arreglo); $i++) { 
    if ($arreglo[$i] < $numMenor) {
        $numMenor = $arreglo[$i];
    }
}

// Verificamos si el numero se repite
$contador = 0;
for ($i=0; $i < count($arreglo); $i++) { 
    if ($arreglo[$i] == $numMenor) {
        $contador++;
    }
}

// Imprimimos
echo "<br>El elemento menor es: " . $numMenor;

if ($contador >= 2) {
    echo "<br>El numero se repite " . $contador . " veces";
}else{
    echo "<br>El numero no se repite";
}

?>