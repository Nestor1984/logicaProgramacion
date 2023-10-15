<?php

// Crear una matriz de n * m filas. Imprimir la matriz completa y la ultima fila, pero esta vez usando datos de tipo String.

$matriz = [
    ["Nestor", "Carla", "Mariana"],
    ["Hanna", "Jim", "Frank"],
    ["Selena", "Dolly", "Scarleth"]
];

for ($i=0; $i < 3; $i++) { 
    echo $matriz[count($matriz)-1][$i] . " "; // matriz.lenght
}

?>