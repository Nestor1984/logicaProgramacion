<?php

/* Crear una matriz de n * m filas (cargar n y m por teclado) Imprimir la matriz completa y la primera fila.*/

$n = rand(7, 9);
$m = rand(7, 9);

// Rellenamos la matriz
for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $m; $j++) { 
        $matriz[$i][$j] = rand(1, 9);
    }
}

// Mostramos la matriz
echo "<h3>La matriz generada es:</h3>";
for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $m; $j++) { 
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<h3>Mostramos la primera fila</h3>";
for ($i=0; $i < count($matriz[0]); $i++) { //matriz[0].lenght
    echo $matriz[0][$i] . " "; // sout( matriz[0][i])
}

?>