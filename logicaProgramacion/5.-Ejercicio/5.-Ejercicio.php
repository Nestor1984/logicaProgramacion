<?php

/*
Generar la siguiente sucesion, y hallar la suma.
    1 3 9 27 81 243 ...
*/

if ($_POST) {
    $cantidadDeVeces = $_POST['cantidad-de-veces'];
}

$suma = 0;
$serie = 1;

for ($i=1; $i <= $cantidadDeVeces; $i++) { 
    


    echo $serie . ", ";

    $serie = $serie * 3;

    $suma ++;

}

echo "<br> <em>La suma de la serie es: </em>" . $suma;


?>