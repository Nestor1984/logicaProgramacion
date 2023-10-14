<?php

/*
Guardar 20 numeros en un arreglo, y al final, mostrarlos en pantalla en el siguiente
orden: el primero, el ultimo, el segundo, el penultimo......
*/

$arreglo = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150, 160, 170, 180, 190, 200];

echo "Arreglo original<br>";
foreach ($arreglo as $key => $vM) {
    echo $vM . ", ";
}

echo "<br><br>Arreglo mezclado<br>";
for ($i=0; $i < 10; $i++) { // Como vamos a imprimir de dos en dos, debemos dar solo la mitad de vueltas (en este caso 10)
    echo $arreglo[$i] . "<br>";
    echo $arreglo[19-$i] . "<br>";
}

?>