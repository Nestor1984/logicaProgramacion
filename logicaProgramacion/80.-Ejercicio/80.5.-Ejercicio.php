<?php

// Verificar si el arreglo esta creciente, decreciente o esta ordenado

$arreglo = [9, 8, 7, 6, 5, 4, 3, 2, 1];
$creciente = False;
$decreciente = False;

echo "<h3>Arreglo</h3>";
foreach ($arreglo as $key => $vM) {
    echo $vM . ", ";
}

// Comprobamos
for ($i=0; $i < count($arreglo)-1; $i++) { 
    if ($arreglo[$i] > $arreglo[$i+1]) {
        $decreciente = true;
    }
    if ($arreglo[$i] < $arreglo[$i+1]) {
        $creciente = true;
    }
}

if ($creciente == true && $decreciente == false) {
    echo "<br>Arreglo creciente</br>";
}elseif ($creciente == false && $decreciente == true) {
    echo "<br>Arreglo decreciente</br>";
}elseif ($creciente == true && $decreciente == true) {
    echo "<br>Arreglo desordenado</br>";
}

?>