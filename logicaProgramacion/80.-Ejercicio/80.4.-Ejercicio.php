<?php
/**
 * Crear un programa que lea por teclado una tabla de 10 numeros enteros
 * y desplace N posiciones en el arreglo 
 */

 $nPosiciones = 3;
 $arreglo = [];

 for ($i=0; $i < 10; $i++) { 
    $arreglo[$i] = rand(1, 20);
 }

echo "<h2>Arreglo original</h2>";
foreach ($arreglo as $key => $vM) {
    echo "[" . $vM . "] ";
}

// Desplazamos
for ($i = 0; $i < $nPosiciones; $i++) { 
    $ultimoElemento = $arreglo[9];
    for ($j = 8; $j >= 0 ; $j--) { 
        $arreglo[$j+1] = $arreglo[$j];
    }
    $arreglo[0] = $ultimoElemento;
}

echo "<h2>Arreglo desplazando 3 elementos</h2>";
foreach ($arreglo as $key => $vM) {
    echo "[" . $vM . "] ";
}

?>