<?php

// Contar elementos pares:
echo "1.- Contar elementos pares: <br>";
$numeros = [1, 2, 3, 4, 5];
$contadorPares = 0;

for ($i=0; $i < count($numeros); $i++) { 
    if ($numeros[$i] % 2 == 0) {
        $contadorPares++;
    }
}

echo "<br>Elementos del array: <br>";
foreach ($numeros as $vMagica) {
    echo $vMagica . ", ";
}
echo "<br>Total de numeros pares: " . $contadorPares;

?>