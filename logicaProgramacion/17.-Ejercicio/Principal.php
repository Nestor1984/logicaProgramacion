<?php
    /*27. Probar con: a) P(x) = x^2+3x+2 b) P(x) = 2x^2+4x+2 c) P(x) = 3x^2+2 */
    $opcion = "";
    $valorX = 0;

    if (isset($_POST['Opcion-elegida']) && isset($_POST['x'])) {
        $opcion = $_POST['Opcion-elegida'];
        $valorX = $_POST['x'];
        echo "<em>Datos recepcionados con exito<br></em>";
    }

    function autoload($clase){
        include $clase . ".php";
    }

    spl_autoload_register("autoload");

    $cal = new Calculadora($valorX);

    switch($opcion){
        case "primeraFuncion":
            echo "La imagen hallada en: <br> P(x) = x^2+3x+2; P(" . $cal->getValorX() . ")<br>" . $cal->evaluarEnPrimeraFuncion();
            break;
        case "segundaFuncion":
            echo "La imagen hallada en: <br> P(x) = 2x^2+4x+2; P(" . $cal->getValorX() . ")<br>" . $cal->evaluarEnSegundaFuncion();
            break;
        case "terceraFuncion":
            echo "La imagen hallada en: <br> P(x) = 3x^2+2; P(" . $cal->getValorX() . ")<br>" . $cal->evaluarEnTerceraFuncion();
            break;
        default:
            echo "Opcion no valida";
            break;
    }
    
?>