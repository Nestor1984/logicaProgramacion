<?php

// Crear una matriz n * m filas (cargar n y m por teclado) Intercambiar la primera columna con la segunda. Imprimir luego la matriz.

$n = rand(4, 6);
$m = rand(4, 6);

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

// Cmabiamos la primera columna por la segunda
$aux = 0;
for ($i=0; $i < count($matriz[0]); $i++) { // matriz[0].lenght
    $aux = $matriz[$i][0];
    $matriz[$i][0] = $matriz[$i][1];
    $matriz[$i][1] = $aux;
}

echo "<h4>La matriz modificada es: </h4>";
for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $m; $j++) { 
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}


?>