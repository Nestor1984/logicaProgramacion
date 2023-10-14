<?php

// Buscar valor en arreglo:
$frutas = ['manzana', 'pera', 'uva', 'naranja'];
$busqueda = 'pera';

for ($i=0; $i < count($frutas); $i++) { 
    if ($busqueda == $frutas[$i]) {
        echo "Elemento encontrado: " . $frutas[$i] . " en la posicion [" . $i . "]";
        break;
    }
}

?>