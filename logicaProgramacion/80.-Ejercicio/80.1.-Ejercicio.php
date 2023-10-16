<?php

    /**
     * Guardar 10 numeros en un arreglo, y al final, mostrarlos en pantalla en el siguiente orden:
     * el primero, el ultimo, el segundo, el penultimo....
     */

    $arreglo = [];

    // Generamos numeros aleatorios
    for ($i=0; $i < 10; $i++) { 
        $arreglo[$i] = rand(1, 20);
    }

    echo "<h3>Arreglo generado es: </h3>";
    foreach ($arreglo as $key => $vM) {
        echo "[" . $vM . "] ";
    }

    // Ordenamos el arreglo en forma ascendente
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
    
    echo "<h3>Arreglo ordenado es: </h3>";
    foreach ($arreglo as $key => $vM) {
        echo "[" . $vM . "] ";
    }

    echo "<h3>Arreglo intercalado es: </h3>";
    for ($i=0; $i < 5; $i++) { 
        echo $arreglo[$i] . "<br>";
        echo $arreglo[9-$i] . "<br>";
    }


?>