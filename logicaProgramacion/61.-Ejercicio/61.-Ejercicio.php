<?php

/* Crear una matriz de n * m filas (cargar n y m por teclado) Imprimir la matriz completa y la ultima columna.*/

$n = rand(4, 9);
$m = rand(5, 9);

// Generamos la matriz
for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $m; $j++) { 
        $matriz[$i][$j] = rand(1, 9);
    }
}

echo "<h5>La matriz obtenida es: </h5>";
for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $m; $j++) { 
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<h5>La ultima columna de la matriz:</h5>";
for ($i=0; $i < count($matriz); $i++) { // matriz[matriz[0].lenght].lenght
    echo $matriz[count($matriz[0])-1][$i] . "<br>"; // matriz[matriz[0].lenght-1][i]
} 

// PENDIENTE

?>