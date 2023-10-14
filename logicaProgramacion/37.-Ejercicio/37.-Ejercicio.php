<?php
//  Saber si un array está en orden creciente o decreciente.
$arreglo = [1, 2, 3, 4, 5, 6];
# $arreglo = [6, 5, 4, 3, 2, 1];
# $arreglo = [4, 5, 2, 1, 7, 3];
$creciente = false;
$decreciente = false;

for ($i=0; $i < (count($arreglo)-1); $i++) { 
    if ($arreglo[$i] > $arreglo[$i+1]) {
        $decreciente = true;
    }elseif($arreglo[$i] < $arreglo[$i+1]){
        $creciente = true;
    }
}

if ($creciente == true && $decreciente == false) {
    echo "El arreglo esta en forma creciente!";
}elseif ($creciente == false && $decreciente == true) {
    echo "El arreglo esta en forma decreciente!";
}elseif($creciente == true && $decreciente == true){
    echo "El arreglo esta desordenado!";
}

?>