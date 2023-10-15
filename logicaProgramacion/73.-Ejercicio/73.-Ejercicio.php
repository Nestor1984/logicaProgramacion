<?php

/* Crear una matriz n * m (cargar n y m por teclado) Imprimir los cuatro valores que se encuentran en los
vertices de la misma, pero esta vez usa datos de tipo char.*/

$matriz = array(
    array('n', 'm', 'p'),
    array('a', 'w', 'q'),
    array('x', 'h', 'e')
);

echo "<p>Vertice superior izquierdo es: " . $matriz[0][0] . "</p>";
echo "<p>Vertice superior derecho es: " . $matriz[0][count($matriz[0])-1] . "</p>"; // matriz[0][matriz[0].lenght-1]
echo "<p>Vertice inferior izquierdo es: " . $matriz[count($matriz)-1][0] . "</p>"; // matriz[matriz.lenght-1][0]
echo "<p>Vertice inferior derecho es: " . $matriz[count($matriz)-1][count($matriz[count($matriz)-1])-1] . "</p>"; // matriz[matriz.lenght-1][matriz[matriz.lenght-1].lenght-1]

?>