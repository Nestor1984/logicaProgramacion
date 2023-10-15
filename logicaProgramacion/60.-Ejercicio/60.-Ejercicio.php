<?php

/* Crear una matriz de n * m filas (cargar n y m por teclado) Imprimir la matriz completa y la primera columna.*/

$n = rand(5, 8);
$m = rand(6, 8);

// Rellenamos la matriz
for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $m; $j++) { 
        $matriz[$i][$j] = rand(1, 9);
    }
}

echo "<h4>La matriz generada es: </h4>";
for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $m; $j++) { 
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<h4>La primera columna es</h4>";
for ($i=0; $i < count($matriz); $i++) { // matriz.lenght
    echo $matriz[$i][0] . "<br>"; // matriz[i][0];
}

 ?>