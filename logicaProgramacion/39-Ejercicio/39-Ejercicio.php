<?php

// Ingresar por teclado 10 números en un arreglo y mostrar el numero mayor y el numero menor.

$arreglo = array();
for ($i=0; $i < 10; $i++) { 
    $arreglo[$i] = rand(1, 10);
}

echo "Arreglo<br>";
foreach ($arreglo as $key => $vM) {
    echo $vM . ", ";
}

$numeroMayor = $arreglo[0];
for ($i=0; $i < count($arreglo)-1; $i++) { 
    if ($arreglo[$i] > $numeroMayor) { 
        $numeroMayor = $arreglo[$i];
    }
}

echo "<br><br>Numero mayor: " . $numeroMayor . "<br>";

$numeroMenor = $arreglo[0];
for ($i=0; $i < count($arreglo)-1; $i++) { 
    if ($arreglo[$i] < $numeroMenor) {
        $numeroMenor = $arreglo[$i];
    }
}

echo "<br>Numero menor: " . $numeroMenor . "<br>";


?>