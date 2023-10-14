<?php

    /**
     * Leer cuatro numeros, pero que no sean ceros, luego visualizar la secuencia de signos, en caso de que alguno sea cero,
     * emitir falla.
    */

    $numero1;
    $numero2;
    $numero3;
    $numero4;

    // Validamos
    if ( (!empty($_POST['numero1'])) && (!empty($_POST['numero2'])) && (!empty($_POST['numero3'])) && (!empty($_POST['numero4']))) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];
        $numero4 = $_POST['numero4'];
        echo "<strong>Numeros ingresados con exito!</strong><br>";
    }else{
        echo "<strong>Falla!</strong><br>";
    }

    // Generamos nuestro autoload
    function autoload($clase){
        include $clase . ".php";
    }

    spl_autoload_register("autoload");

    // Hacemos una instancia
    $calculadora = new Calculadora($numero1, $numero2, $numero3, $numero4);

    // Imprimimos
    echo "<br>" . $calculadora->getNumero1() . ", " . $calculadora->getNumero2() . ", " . $calculadora->getNumero3() . ", " . $calculadora->getNumero4() . "<br>";
    echo $calculadora->visualizarSecuenciaDeSignos();
?>