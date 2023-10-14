<?php
/* Disenar el algoritmo que contenga las temperaturas de 7 dias en un vector, hallar la media
y determinar cuantos dias y cuales son los dias que tuvieron mayor temperatura que la media. 
*/

$arregloTemperaturas = [];
$arregloDiasMayoresAMedia = [];
$suma = 0;
$total = 0;
$media = 0;

for ($i=0; $i < 7; $i++) { 
    $arregloTemperaturas[$i] = rand(10, 20);
    $suma +=$arregloTemperaturas[$i];
    $total++;
}

$media = $suma/$total;

for ($i=0; $i < 7; $i++) { 
    if ($arregloTemperaturas[$i] > $media) {
        $arregloDiasMayoresAMedia[] = $arregloTemperaturas[$i];
    }
}

echo "<br><br>Media: " . $media . "<br><br>";

echo "<br><br>Arreglo Temperaturas<br><br>";
foreach ($arregloTemperaturas as $vM) {
    echo "[" . $vM . "], ";
}

echo "<br><br>Arreglo Mayores a la media<br><br>";
foreach ($arregloDiasMayoresAMedia as $vM) {
    echo "[" . $vM . "], ";
}

?>