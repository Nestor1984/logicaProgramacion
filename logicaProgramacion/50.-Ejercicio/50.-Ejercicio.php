<?php

/* Leer 10 enteros ordenados crecientemente. Leer N y buscarlo en la tabla. Se debe 
mostrar la posicion en que se encuentra. Si no esta indicarlo con un mensaje.*/

$arreglo = [];
$n = 7;


for ($i=0; $i < 10; $i++) { 
    $arreglo[$i] = rand(1, 20);
}

echo "El arreglo generado es:<br>";
foreach ($arreglo as $key => $vM) {
    echo $vM . ", ";
}

$aux = 0;
for ($i=0; $i < count($arreglo)-1; $i++) { 
    for ($j=0; $j < count($arreglo)-1; $j++) { 
        if ($arreglo[$j] > $arreglo[$j+1]) {
            $aux = $arreglo[$j];
            $arreglo[$j] = $arreglo[$j+1];
            $arreglo[$j+1] = $aux;
        }
    }
}

echo "<br>El arreglo en forma creciente es:<br>";
for ($i=0; $i < count($arreglo); $i++) { 
    echo $arreglo[$i] . ", ";
}

for ($i=0; $i < 10; $i++) { // i iterador para cada elemento
    if ($n == $arreglo[$i]) {
        echo "<br>Elemento encontrado en [" . $i . "] (" . $arreglo[$i] . ")";
        break;
    }elseif(($i == 9) && ($n != $arreglo[$i])){
        echo "<br>El elemento no ha sido encontrado";
    }
}


?>