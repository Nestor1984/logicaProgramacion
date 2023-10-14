<?php

// Generar un arreglo con numero aleatorios no repetidos entre sí
$arreglo = array();
$numeroAleatorio = 0;
$i = 0;

echo "<br><br>Arreglo generado<br><br>";
do{

    $numeroAleatorio = rand(1, 20);

    if (!(in_array($numeroAleatorio, $arreglo))) {
        $arreglo[$i] = $numeroAleatorio;
        $i++;
    }

}while($i < 20);

foreach ($arreglo as $key => $vM) {
    echo $vM . ", ";
}

echo "<br><br>Arreglo ordenado";
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

echo "<br><br>Arreglo ordenado ascendente<br><br>";
for ($i=0; $i < count($arreglo); $i++) { 
    echo $arreglo[$i] . ", ";
}

echo "<br><br>Arreglo ordenado descendente<br><br>";
for ($i=count($arreglo)-1; $i >= 0 ; $i--) { 
    echo $arreglo[$i] . ", ";
}



?>