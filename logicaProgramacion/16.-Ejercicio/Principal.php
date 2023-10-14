<!--Escriba un programa que pida el año actual y un año cualquiera y que escriba cuántos años
     han pasado desde ese año o cuántos años faltan para llegar a ese año.-->
<?php

    include "Calculadora.php";

    $anioActual;
    $anioCualquiera;

    if (isset($_POST['anio-actual']) && isset($_POST['anio-cualquiera'])) {
        $anioActual = $_POST['anio-actual'];
        $anioCualquiera = $_POST['anio-cualquiera'];
        echo "<strong>Datos ingresados con exito!<br/><br/></strong>";
    }

    $cal = new Calculadora($anioActual, $anioCualquiera);

    echo $cal->mostrarCuantosAniosFaltan();


?>