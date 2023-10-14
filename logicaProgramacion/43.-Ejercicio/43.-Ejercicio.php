<?php

// Sacar el factorial de todos los elementos de un arreglo
$arreglo = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$factorial = 1;
$numeroFactorial = 0;

for ($i=0; $i < count($arreglo); $i++) {  // i iterador para recorrer el arreglo  i=0
    for ($j=1; $j <= $arreglo[$i] ; $j++) {  //j iterador para sacar el factorial al elemento del arreglo
        $factorial = $factorial * $j; 
    }
    echo "Factorial [" . $arreglo[$i] . "!] = " . $factorial . "<br>";
    $factorial = 1; // Inicializamos al factorial en 1 para poder ser reutilizado por el siguiente elemento
}



?>