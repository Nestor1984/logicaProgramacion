<?php

// Crear una matriz n * m, mostrar la suma de cada fila y columna de la matriz.

$n = rand(4, 6);
$m = rand(5, 6);
for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $m; $j++) { 
        $matriz[$i][$j] = rand(1, 9);
    }
}

echo "<h5>Matriz generada:</h5>";
for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $m; $j++) { 
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

$sumaFilas = 0;
$sumaColumnas = 0;

echo "<h6>Suma de las filas</h6>";
for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $m; $j++) { 
        $sumaFilas+=$matriz[$i][$j];
    }
    echo "La suma de la fila [" . $i . "] es: " . $sumaFilas . "<br>";
    $sumaFilas = 0;
}

echo "<h6>Suma de las columnas</h6>";
for ($j=0; $j < $m; $j++) { 
    for ($i=0; $i < $n; $i++) { 
        $sumaColumnas+=$matriz[$i][$j];
    }
    echo "La suma de la columna [" . $j . "] es: " . $sumaColumnas . "<br>";
    $sumaColumnas = 0;
}

?>