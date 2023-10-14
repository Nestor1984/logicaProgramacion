<?php

/*
Leer en un vector n numeros, luego hallar el mayor y las veces que se repite.
*/

$arreglo = [];
$mayor = 0;
$contador = 0;

for ($i=0; $i < 15; $i++) { 
    $arreglo[] = rand(1, 20);
}

$mayor = $arreglo[0];
for ($i=0; $i < count($arreglo); $i++) { 
    if ($arreglo[$i] > $mayor) {
        $mayor = $arreglo[$i];
    }
}

// For para las veces que se repite el mayor
for ($i=0; $i < count($arreglo); $i++) { 
    if ($mayor == $arreglo[$i]) {
        $contador++;
    }
}

echo "Array original:<br><br>";
foreach ($arreglo as $key => $vM) {
    echo "[" . $vM . "], ";
}

echo "<strong><br><br>El valor mayor es: " . $mayor . "<br>El numero de veces que se repite es: " . $contador .  "</strong>";



?>