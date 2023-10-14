<?php

// Eliminar un elemento en una posicion especifica
$numeros = [1, 2, 3, 4, 5];
$posicionAEliminar = 3;

for ($i=0; $i < count($numeros); $i++) { 
    if ($i == $posicionAEliminar) {
        unset($numeros[$i]);
    }
}

foreach ($numeros as $key => $vM) {
    echo $vM . ", ";
}

?>