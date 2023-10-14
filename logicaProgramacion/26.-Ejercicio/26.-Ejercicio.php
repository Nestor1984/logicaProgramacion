<?php

// Invertir un array:

$numeros = [1, 2, 3, 4, 5];
$invertido = [];

$longitudArray = count($numeros);

for ($i=$longitudArray-1; $i >= 0; $i--) { 
    $invertido[] = $numeros[$i];
}

echo "Array Invertido: <br>";
foreach ($invertido as $vMag) {
    echo $vMag . ", ";
}

?>