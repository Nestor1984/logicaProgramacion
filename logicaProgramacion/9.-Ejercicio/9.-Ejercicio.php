<?php

// Generar un vector con varios valores enteros (negativos, positivos y ceros), luego visualizar los numeros en una fila y en otra los signos de los mismos

if($_POST){

    $nombre = $_POST['nombre'];

}

$vector = array();
$vectorSignos = array();

for ($i=0; $i < 10; $i++) { 
   $vector[$i] = rand(-10, 10);

    if($vector[$i] > 0){
        $vectorSignos[$i] = " + ";
    }else if($vector[$i] < 0){
        $vectorSignos[$i] = " - ";
    }else{
        $vectorSignos[$i] = " 0 ";
    }

}

echo "Hola, " . $nombre . "<br>";

foreach ($vector as $key => $i) {
    echo $i . " ";
}

echo "<br>";

foreach ($vectorSignos as $key => $i) {
    echo $i . " ";
}

?>