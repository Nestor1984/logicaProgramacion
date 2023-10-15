<?php

/* Crear una matriz de n * m filas (cargar n y m por teclado) Imprimir la matriz completa y la ultima fila.*/

$n = rand(4, 6);
$m = rand(4, 6);

// Generamos la matriz
for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $m; $j++) { 
        $matriz[$i][$j] = rand(1, 9);
    }
}

echo "<h2>Imprimimos la matriz:</h2>";
for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $m; $j++) { 
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<h2>Imprimimos la ultima fila de la matriz:</h2>";

for ($i=0; $i < count($matriz[count($matriz)-1]); $i++) { // matriz[matriz.lenght-1].lenght
    echo $matriz[count($matriz)-1][$i] . " ";// matriz[matriz.lenght-1][i]
}


?>