<?php

    if ($_POST) {
        $valorA = $_POST['a'];
        $valorB = $_POST['b'];
    }

    $r = 0.0;

    $r = (3*$valorA) - $valorB;

    echo "<br>Valor de r: " . $r;

?>