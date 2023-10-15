<?php

/* Crear y cargar una matriz de 4 filas por 4 columnas. Imprimir los elementos del medio
- - - -
- x x -
- x x -
- - - -
*/

// Cargar matriz
for ($i=0; $i < 4; $i++) { 
    for ($j=0; $j < 4; $j++) { 
        $matriz[$i][$j] = rand(1, 9);
    }
}

echo "<h2>La matriz generada es: </h2>";
for ($i=0; $i < 4; $i++) { 
    for ($j=0; $j < 4; $j++) { 
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<h2>Los elementos del medio: </h2>";
for ($i=0; $i < 4; $i++) { 
    for ($j=0; $j < 4; $j++) { 
        if ($i == 1 && $j > 0 && $j < 3) {
            echo $matriz[$i][$j] . " ";
        }elseif ($i == 2 && $j > 0 && $j < 3) {
            echo $matriz[$i][$j] . " ";
        }
    }
    echo "<br>";
}

?>