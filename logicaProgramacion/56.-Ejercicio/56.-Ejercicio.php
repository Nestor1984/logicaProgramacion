<?php

/**
 * 
 * Generar la matriz:
 * 1 1 1 1
 * 2 2 2 2
 * 3 3 3 3
 * 4 4 4 4
 * 
 */

 $matriz = [
    [],
    [],
    [],
    []
 ];

// Generamos la matriz
for ($i=0; $i < 4; $i++) { 
    for ($j=0; $j < 4; $j++) { 
        $matriz[$i][$j] = $i+1;
    }
}

// Imprimimos la matriz
for ($i=0; $i < 4; $i++) { 
    for ($j=0; $j < 4; $j++) { 
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

?>