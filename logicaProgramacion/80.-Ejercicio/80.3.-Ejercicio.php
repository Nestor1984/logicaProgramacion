<?php

/**
 * Cargar 2 arreglos de 12 elementos y mezclarlos en un tercer arreglo de la forma que:
 * 3 del primer arreglo, 3 del segundo arreglo, 3 del primer arreglo, 3 del segundo arreglo, etc.
 */

$arregloA = [];
$arregloB = [];
$arregloC = [];

for ($i=0; $i < 12; $i++) { 
    $arregloA[$i] = rand(1, 20);
    $arregloB[$i] = rand(1, 20);
}

echo "<h2>Arreglo A</h2>";
foreach ($arregloA as $key => $vM) {
    echo $vM . ", ";
}

echo "<h2>Arreglo B</h2>";
foreach ($arregloB as $key => $vM) {
    echo $vM . ", ";
}

// Mezclamos arreglos
$j = 0;
$i = 0;
while ($i < 12) {
    for ($k=0; $k < 3; $k++) { 
        $arregloC[$j] = $arregloA[$i+$k];
        $j++;
    }

    for ($k=0; $k < 3; $k++) { 
        $arregloC[$j] = $arregloB[$i+$k];
        $j++;
    }
    $i+=3;
}

echo "<h2>Arreglo mezclado</h2>";
foreach ($arregloC as $key => $vM) {
    echo $vM . ", ";
}

?>