<?php

// Filtrar elementos mayores a 3:

$numeros = [1, 2, 3, 4, 5];
$mayores_que_tres = [];

for ($i=0; $i < count($numeros); $i++) { 
    if ($numeros[$i] > 3) {
        $mayores_que_tres[] = $numeros[$i];
    }
}

echo "Array orginal:<br>";
foreach ($numeros as $vMagica) {
    echo $vMagica . ", ";
}

echo "<br>Array mayores a 3:<br><br>";
foreach ($mayores_que_tres as $vMagica) {
    echo $vMagica . ", ";
}

?>