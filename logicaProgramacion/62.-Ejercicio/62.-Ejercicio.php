<?php

// Crear una matriz de n * m filas. Intercambiar la primera fila con la segunda. Imprimir luego la matriz

$n = rand(5, 7);
$m = rand(6, 9);

// Generamos la matriz
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

$aux = 0;
// Intercambiamos la 1ra fila, con la 2da
for ($i=0; $i < count($matriz[0]); $i++) { // matriz[0].lenght 
    $aux = $matriz[0][$i];
    $matriz[0][$i] = $matriz[1][$i];
    $matriz[1][$i] = $aux;
}

echo "<h4>La matriz cambiada es: </h4>";
for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $m; $j++) { 
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

?>