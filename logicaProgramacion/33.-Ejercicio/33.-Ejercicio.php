<?php

// Ordenar array por el metodo burbuja en forma ascendente y descendente

$arreglo = [];
$aux = 0;

# Generar arreglo con numeros aleatorios
for ($i=0; $i < 20; $i++) { 
    $arreglo[$i] = rand(1, 30);
}

echo "<br><em>Arreglo original:</em><br>";
foreach ($arreglo as $key => $vM) {
    echo "[" . $vM . "],";
}

// Ordenamiento por burbuja 
for ($i=0; $i < (count($arreglo)-1); $i++) { 
    for ($j=0; $j < (count($arreglo)-1); $j++) { 
        if ($arreglo[$j] > $arreglo[$j+1]) {
            $aux = $arreglo[$j];
            $arreglo[$j] = $arreglo[$j+1];
            $arreglo[$j+1] = $aux;
        }
    }
}

// Forma ascedente
echo "<br><br><em>Arreglo ascendente:</em><br><br>";
for ($i=0; $i < count($arreglo); $i++) { 
    if ($i == (count($arreglo)-1)) {
        echo "[" . $arreglo[$i] . "] ";
    }else{
        echo "[" . $arreglo[$i] . "], ";
    }
}

// Forma descendente
echo "<br><br><em>Arreglo descendente:</em><br><br>";
for ($i=(count($arreglo)-1); $i >= 0; $i--) { 
    if ($i == 0) {
        echo "[" . $arreglo[$i] . "]";
    }else{
        echo "[" . $arreglo[$i] . "], ";
    }
}

?>