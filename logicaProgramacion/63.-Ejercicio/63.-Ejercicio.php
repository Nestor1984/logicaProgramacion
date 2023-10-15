<?php
// Crear una matriz de n * m filas. Intercambiar la primera fila con la tercera. Imprimir luego la matriz
$n = rand(5, 8);
$m = rand(6, 8);

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

// Cambiamos la 1ra fila por la 3ra fila
$aux = 0;
for ($i=0; $i < count($matriz[0]); $i++) { // matriz[0].lenght
    $aux = $matriz[0][$i];
    $matriz[0][$i] = $matriz[2][$i];
    $matriz[2][$i] = $aux;
}

echo "<h3>La matriz con las filas cambiadas es:</h3>";
for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $m; $j++) { 
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}


?>