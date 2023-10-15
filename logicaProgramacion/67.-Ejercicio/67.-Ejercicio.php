<?php

//Crear y cargar una matriz de 4 filas por 4 columnas. Imprimir la diagonal secundaria

// Cargamos la matriz
for ($i=0; $i < 4; $i++) { 
    for ($j=0; $j < 4; $j++) { 
        $matriz[$i][$j] = rand(1, 4);
    }
}

echo "<h4>La matriz generada es: </h4>";
for ($i=0; $i < 4; $i++) { 
    for ($j=0; $j < 4; $j++) { 
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<h4>La diagonal secundaria es: </h4>";
for ($i=0; $i < 4; $i++) { 
    for ($j= count($matriz[0])-1; $j >= 0; $j--) { // matriz[0].lenght-1
        if ($i == 0 && $j == count($matriz[0])-1) { // matriz[0].lenght-1
            echo $matriz[$i][$j];
        }elseif ($i == 1 && $j == count($matriz[0])-2) { // // matriz[0].lenght-2
            echo $matriz[$i][$j];
        }elseif ($i == 2 && $j == count($matriz[0])-3) { // // matriz[0].lenght-3
            echo $matriz[$i][$j];
        }elseif ($i == 3 && $j == count($matriz[0])-4) { // // matriz[0].lenght-4
            echo $matriz[$i][$j];
        }
    }
    echo "<br>";
}

?>