<?php

// Crear una matriz de n * m, Imprimir los cuatro valores que se encuentran en los vertices de la misma

$n = rand(4, 6);
$m = rand(6, 8);

// Rellenamos la matriz
for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $m; $j++) { 
        $matriz[$i][$j] = rand(1, 9);
    }
}

// Imprimimos la matriz
for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $m; $j++) { 
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<h3>Los vertices son:</h3>";
echo "Vertice superior izquierdo: " . $matriz[0][0];
echo "<br>Vertice superior derecho: " . $matriz[0][count($matriz[0])-1]; // matriz[0][matriz[0].lenght-1]
echo "<br>Vertice inferior izquierdo: " . $matriz[count($matriz)-1][0]; // matriz[matriz.lenght-1][0]
echo "<br>Vertice inferior derecho: " . $matriz[count($matriz)-1][count($matriz[count($matriz)-1])-1]; // matriz[matriz.lenght-1][matriz[matriz.lenght-1].lenght-1]

?>