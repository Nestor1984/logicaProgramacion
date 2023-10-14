<?php

    include "Juego.php";
    /*
    Sea el juego de MAYOR MENOR, que utiliza dos dados, consiste en lanzar los dados
    y la suma obtenida puede ser Mayor o menor a 7, gana de acuerdo a Mayor elegida (o menor)
    Descripcion: Para esto podemos describir los siguientes pasos:
    - Menor (2, 3, 4, 5, 6), Mayor (8, 9, 10, 11, 12)
    - El 7 es la casa o dueno del juego.
    - Si se apuesta a Mayor gana, si apuesta a menor gana.
    - Si la suma es 7 pierden los que apuestan a mayor o menor, gana la casa. */

    // Validamos
    $opcionElegida = "";

    if (isset($_POST['opcion-elegida'])) {
        echo "<b>Datos ingresados con exito!</b><br>";
        $opcionElegida = $_POST['opcion-elegida'];
    }else{
        echo "<b>Datos no ingresados!</b><br><br>";
    }

    $juego = new Juego($opcionElegida);
    $juego->lanzarDado1();
    $juego->lanzarDado2();
    $juego->verificarLaOpcionGanada();

?>