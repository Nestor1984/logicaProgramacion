<?php

// Crear y cargar una matrzi de 3 filas por 4 columnas. Imprimir la primera fila. Imprimir la ultima fila e imprimir la primera columna

// Creamos la matriz
for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j < 4; $j++) { 
        $matriz[$i][$j] = rand(1, 9);
    }
}

echo "<h1>Matriz generada:</h1>";
for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j < 4; $j++) { 
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<h6>La primera fila es: </h6>";
for ($i=0; $i < count($matriz[0]); $i++) { //matriz[0].lenght
    echo $matriz[0][$i]. " ";
}

echo "<h6>La ultima fila es: </h6>";
for ($i=0; $i < count($matriz[2]); $i++) { // matriz[2].lenght
    echo $matriz[2][$i] . " ";
}

echo "<h6>La primera columna es: </h6>"; // matriz.lenght
for ($i=0; $i < count($matriz); $i++) { 
    echo $matriz[$i][0] . "<br>";
}

?>