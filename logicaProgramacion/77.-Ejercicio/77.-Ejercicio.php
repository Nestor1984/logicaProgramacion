<?php

// Crear un array de tipo String de 5 elementos y mostrar por pantalla el elemento con mayor letras
$arreglo = ["Nestor", "Karla", "Casandra", "Lui", "JuanCarlos"];
$mayorElemento = strlen($arreglo[0]);
$dato = 0;

for ($i=0; $i < count($arreglo); $i++) { 
    if(strlen($arreglo[$i]) > $mayorElemento){
        $mayorElemento = strlen($arreglo[$i]);
        $dato = $arreglo[$i];
    }
}

echo "El mayor elemento es: " . $dato . "<br>Con una longitud de: " . $mayorElemento;

?>