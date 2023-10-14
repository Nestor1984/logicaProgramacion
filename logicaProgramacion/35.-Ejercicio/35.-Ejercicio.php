<?php
/*
Disenar un algoritmo para leer numeros grandes en dos vectores, y luego hallar la suma de ambos
numeros.

Descripcion: Se aplicara un ciclo repetitivo para ingresar los numeros en dos vectores, cada vector tendra
en cada celda un digito, hagamos que el primer numero tenga n digitos, y el segundo numero m digitos, siendo n>m. La suma se efectuara en un ciclo
para n repeticiones, sumando digito a digito.
*/

$n = 0;
$m = 0;
$arreglo1 = [];
$arreglo2 = [];
$arreglo3Suma = [];

// Obteniendo los digitos
do {

    $n = rand(1, 5);
    $m = rand(1, 5);

} while (!($n > $m));

for ($i=0; $i < 15; $i++) {
    
    // Para el primer arreglo
    if ($n == 1) {
        $arreglo1[] = rand(0, 9);
    }elseif ($n == 2) {
        $arreglo1[] = rand(10, 99);
    }elseif ($n == 3) {
        $arreglo1[] = rand(100, 999);
    }elseif ($n == 4) {
        $arreglo1[] = rand(1000, 9999);
    }elseif($n == 5){
        $arreglo1[] = rand(10000, 99999);
    }

    // Para el segundo arreglo
    if ($m == 1) {
        $arreglo2[] = rand(0, 9);
    }elseif ($m == 2) {
        $arreglo2[] = rand(10, 99);
    }elseif ($m == 3) {
        $arreglo2[] = rand(100, 999);
    }elseif ($m == 4) {
        $arreglo2[] = rand(1000, 9999);
    }elseif($m == 5){
        $arreglo2[] = rand(10000, 99999);
    }
}

echo "n: " . $n . "<br>m: " . $m;

echo "<br>El arreglo 1:<br><br>";
foreach ($arreglo1 as $key => $vM) {
    echo "[" . $vM . "], ";
}

echo "<br><br>El arreglo 2:<br><br>";
foreach ($arreglo2 as $key => $vM) {
    echo "[" . $vM . "], ";
}

// Sumamos dos arreglos en uno tercero
for ($i=0; $i < 15; $i++) { 
    $arreglo3Suma[$i] = $arreglo1[$i] + $arreglo2[$i];
}

// Imprimos
echo "<br><br>Arreglo suma:<br><br>";
foreach ($arreglo3Suma as $key => $vM) {
    echo "[" . $vM . "], ";
}

?>