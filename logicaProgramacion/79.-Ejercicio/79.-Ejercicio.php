<?php

/* Crear un programa que guarde 10 nombres de personas con sus dichas alturas, luego indicar la mayor 
y menor altura con sus dichos nombres
*/

$alturas = [180, 177, 167, 176, 190, 198, 149, 168, 178, 194];
$nombres = ["Juan", "Juanita", "Carl", "Max", "Pepe", "Adriana", "John", "Marcos", "Pepe", "Marleny"];

echo "<h4>Alturas</h4>";
foreach ($alturas as $key => $vM) {
    echo "[" . $vM . "] ";
}

echo "<h4>Nombres</h4>";
foreach ($nombres as $key => $vM) {
    echo "[" . $vM . "] ";
}

// Hallamos menor y mayor altura
$mayorAltura = $alturas[0];
$menorAltura = $alturas[0];
$posicionMayor = 0;
$posicionMenor = 0;

for ($i=0; $i < count($alturas); $i++) { 
    
    if ($alturas[$i] > $mayorAltura) {
        $mayorAltura = $alturas[$i];
        $posicionMayor = $i;
    }

    if ($alturas[$i] < $menorAltura) {
        $menorAltura = $alturas[$i];
        $posicionMenor = $i;
    }

}

echo "<br><br><br>La persona: " . $nombres[$posicionMayor] . " con una altura de " . $mayorAltura . " es la persona mas alta";
echo "<br>La persona: " . $nombres[$posicionMenor] . " con una altura de " . $menorAltura . " es la persona mas baja";

?>