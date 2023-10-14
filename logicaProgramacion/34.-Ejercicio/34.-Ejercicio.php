<?php

/* Interesar los coeficientes de un polinomio en un vector y hacer la evaluacion para un valor de x.
Descripion: Los coeficientes seran leidos por un ciclo repetitivo en un vector de tamanio n+1, tambien
se leera el valor de la incognita x, luego la evaluacion se hara con un ciclo repetitivo.

    P(x) = a0x^n + a1x^-1 + ... + an-1x + an

*/

$tamanio = rand(1, 15);
$polinomio = [];
$arregloCadena = "P(x) = ";
$valoresCoeficentes = 0;
$valoresX = 0;
$sumaPolinomio = 0;

// Leer coeficientes
for ($i=0; $i < $tamanio; $i++) { 

    $valoresCoeficentes = rand(1, 10); 
    $arregloCadena .= $valoresCoeficentes;
    $polinomio[$i] = $valoresCoeficentes; // Leemos los coeficientes

    if ($i == $tamanio-1) {
        $valoresX = rand(1, 10);
        $arregloCadena =  $arregloCadena . "(" . $valoresX . ")";
        $polinomio[$i] = $polinomio[$i] * $valoresX; // Leemos los valores de x
    }else{
        $valoresX = rand(1, 10);
        $arregloCadena =  $arregloCadena . "(" . $valoresX . ") + ";
        $polinomio[$i] = $polinomio[$i] * $valoresX; // Leemos los valores de x
    }

}

// Sumar terminos del arreglo
for ($i=0; $i < $tamanio; $i++) { 
    $sumaPolinomio+=$polinomio[$i];
}

echo $arregloCadena;
echo "<br>P(x) = " . $sumaPolinomio;

?>