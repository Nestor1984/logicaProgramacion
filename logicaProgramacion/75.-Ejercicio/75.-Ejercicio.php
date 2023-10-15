<?php

// Crear un array de tipo String de 8 elementos y mostrar por pantalla el elemento con mayor letras

$arreglo = ["ab", "abc", "abcd", "abcde", "abcdef", "abcdefg", "abcdefgh", "abcdefghl"];

$mayorLongitud = strlen($arreglo[0]);
$elementoMayor = 0;
$posicion = 0;

// Hallamos el elemento con mayor letras
for ($i=0; $i < count($arreglo); $i++) { 
    if (strlen($arreglo[$i]) > $mayorLongitud) {
        $mayorLongitud = strlen($arreglo[$i]);
        $elementoMayor = $arreglo[$i];
        $posicion = $i;
    }
}

echo "<h2>Arreglo generado:</h2>";
foreach ($arreglo as $key => $vM) {
    echo $vM . ", ";
}

echo "<br><br>La mayor longitud es: " . $mayorLongitud;
echo "<br>El elemento mayor es: " . $elementoMayor;
echo "<br>La posicion es: " . $posicion;

?>