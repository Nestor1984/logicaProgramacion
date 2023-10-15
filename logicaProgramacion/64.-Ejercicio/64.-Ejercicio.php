<?php

// Crear una matriz de n * m filas. Intercambiar la segunda fila con la cuarta. Imprimir luego la matriz

$n = rand(5, 6);
$m = rand(6, 8);

// Generamos la matriz
for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $m; $j++) { 
        $matriz[$i][$j] = rand(1, 9);
    }
}

echo "<h3>La matriz generada es: </h3>";
for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $m; $j++) { 
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

// Cambiamos la 2da fila por la 4ta
$aux = 0;
for ($i=0; $i < count($matriz[1]); $i++) { // matriz[1].lenght
    $aux = $matriz[1][$i];
    $matriz[1][$i] = $matriz[3][$i];
    $matriz[3][$i] = $aux;
}

echo "<br>Salida:<br><br>";
for ($i=0; $i < $n; $i++) { // matriz[0].lenght
    for ($j=0; $j < $m; $j++) { // matriz.lenght
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

?>