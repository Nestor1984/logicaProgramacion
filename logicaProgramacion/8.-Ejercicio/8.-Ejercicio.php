<?php

if ($_POST) {
    
    $nombre = $_POST['nombre-usuario'];

}

echo "Hola " . $nombre . "<br>";

echo "<br> <hr> <br>";

// Generar en un vector de n numeros aleatorios de una cifra entera, una cifra decimal
$array = array();

$i = 0;
while($i < 10){

    $array[$i] = rand(null, 8);

    $i++;
}

// Imprimimos el array
foreach ($array as $punteroParaString => $variableMagica) {
    
    echo $variableMagica . ", ";

}


?>