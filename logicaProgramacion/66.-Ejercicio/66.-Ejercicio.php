<?php

// Crear y cargar una matriz de 4 filas por 4 columnas. Imprimir la diagonal principal

// Rellenamos la matriz
for ($i=0; $i < 4; $i++) { 
    for ($j=0; $j < 4; $j++) { 
        $matriz[$i][$j] = rand(1, 9);
    }
}

echo "<h5>Matriz original:</h5>";
for ($i=0; $i < 4; $i++) { 
    for ($j=0; $j < 4; $j++) { 
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<h4>La diagonal principal es</h4>";
for ($i=0; $i < 4; $i++) { 
    for ($j=0; $j < 4; $j++) { 
        if ($i == $j) {
            echo $matriz[$i][$j] . " ";
        }else{
            echo "_ ";
        }
    }
    echo "<br>";
}

?>