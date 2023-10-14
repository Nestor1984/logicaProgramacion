<?php

/* Leer un numero por teclado, luego generar en un vector de tamano 5 numeros  aleatorios cuya suma sea
igual al numero original*/

$numero = rand(0, 20);
$vector = [];
$suma = 0;
$contador = 0;

echo "Numero elegido: " . $numero;
do {
    $suma = 0;
    for ($i=0; $i < 5; $i++) { 
        $vector[$i] =rand(1, 5);
        $suma+=$vector[$i];
        $contador++;
        echo "<br><br>Iteracion: " . $contador . "<br>Suma: " . $suma . "<br><br>";
    }
} while ($suma != $numero);

?>