<?php

/* Leer un arreglo de 10 elementos numericos enteros con posiciones del (0, 9).
Eliminar el elemento situado en la posicion dada*/

$arreglo = [];
$posicionAEliminar = 4;

// Generamos un arreglo de numeros aleatorios
for ($i=0; $i < 10; $i++) { 
    $arreglo[$i] = rand(1, 20);
}

echo "<h2>Arreglo original</h2>";
foreach ($arreglo as $key => $vM) {
    echo "[" . $vM . "] ";
}

// Eliminamos la posicion
for ($i=0; $i < 10; $i++) { 
    if ($i == $posicionAEliminar) {
        unset($arreglo[$i]); // unset(): sirve para eliminar un elemento
    }
}

echo "<h2>Arreglo modificado</h2>";
foreach ($arreglo as $key => $vM) {
    echo "[" . $vM . "] ";
}

?>