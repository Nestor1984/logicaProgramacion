<?php
// Eliminar duplicados:
$numeros = [1, 2, 2, 3, 4, 4, 5];
$vDuplicados = [];

for ($i=0; $i < count($numeros); $i++) { 
    for ($j=0; $j < count($numeros); $j++) { 
        if (!in_array($numeros[$i], $vDuplicados)) { // in_array($elemento[$i], $arregloAVerificar): verifica si el elemento existe en el array
            $vDuplicados[] = $numeros[$i];
        } 
    }
}

foreach ($vDuplicados as $vMag) {
    echo $vMag . ", ";
}



?>