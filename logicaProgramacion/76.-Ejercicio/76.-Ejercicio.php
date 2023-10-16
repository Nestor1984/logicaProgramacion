<?php

// Crear un arreglo de 10 elementos enteros y contar los elementos negativos, positivos, pares e impares.

$arreglo = [];
$conNeg = 0;
$conPos = 0;
$conPar = 0;
$conImp = 0;

for ($i=0; $i < 10; $i++) { 

    $arreglo[$i] = rand(-30, 50);

    if ($arreglo[$i] < 0) {
        $conNeg++;
    }elseif ($arreglo[$i] > 0) {
        $conPos++;
    }

    if ($arreglo[$i] % 2 == 0) {
        $conPar++;
    }else{
        $conImp++;
    }

}

echo "<h3>El arreglo generado es: </h3>";
foreach ($arreglo as $key => $vM) {
    echo "[" . $vM . "] ";
}

echo "<br>Cantidad de posivos: " . $conPos . "<br>";
echo "<br>Cantidad de negativos: " . $conNeg . "<br>";
echo "<br>Cantidad de pares: " . $conPar . "<br>";
echo "<br>Cantidad de impares: " . $conImp . "<br>";

?>