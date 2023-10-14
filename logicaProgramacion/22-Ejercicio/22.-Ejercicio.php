<?php

// Encontrar el elemento más grande:

echo "1.- Encontrar el numero mas grande";
$numeros = [4, 7, 2, 9, 5];
$maximo = $numeros[0];

for ($i=0; $i < count($numeros); $i++) { 
    if ($numeros[$i] > $maximo) {
        $maximo = $numeros[$i];
    }
}
echo "<br><br>Array original:<br>";
foreach ($numeros as $vMagica) {
    echo "[" . $vMagica . "], ";
}
echo "<br> El numero mas grande es: " . $maximo;

echo "<br><br>2.- Encontrar el numero mas pequeno";
$numeros = [4, 7, 2, 9, 5];
$minimo = $numeros[0];

for ($i=0; $i < count($numeros); $i++) { 
    if ($numeros[$i] < $minimo) {
        $minimo = $numeros[$i];
    }
}

echo "<br><br>El arreglo original es: <br>";
foreach ($numeros as $vMagica) {
    echo "[" . $vMagica . "], "; 
}
echo "<br>El elemento menor encontrado es: " . $minimo;


?>