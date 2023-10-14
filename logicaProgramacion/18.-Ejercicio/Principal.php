<?php
    /*Hallar una bonificacion que un trabajador recibe, si este bono se le asigna como un porcentaje de
    su salario mensual que depende de su antiguedad en la empresa:
    Tiempo                                   Bono
    Menos de 3 anios                        5% del salario
    3 anios o mas y menos de 6 anios        10% del salario
    6 anios o mas y menos de 15 anios       15% del salario
    15 anios o mas                          20% del salario */

    // Validacion
    $aniosAntiguedad = 0;
    $salarioEmpleado = 0;

    if (isset($_POST['anios-antiguedad']) && !empty($_POST['anios-antiguedad']) && isset($_POST['salario-empleado']) && !empty($_POST['salario-empleado'])) {
        echo "<i>Datos ingresados!</i><br>";
        $aniosAntiguedad = $_POST['anios-antiguedad'];
        $salarioEmpleado = $_POST['salario-empleado'];
    }

    // Autoload
    function Autoload($clase){
        require $clase . ".php";
    }

    spl_autoload_register("Autoload");

    // Instanciamos
    $cal = new Calculadora($salarioEmpleado);

    if ($aniosAntiguedad < 3) {
        echo "El bono que le corresponde a los que tienen una antiguedad menos de 3 anios es: " . $cal->bonoDel5PorCiento() . "Bs.";
    }elseif ($aniosAntiguedad > 3 && $aniosAntiguedad < 6) {
        echo "El bono que le corresponde a los que tienen una antiguedad entres 3 anios o mas y menos de 6 anios es: " . $cal->bonoDel10PorCiento() . "Bs.";
    }elseif ($aniosAntiguedad > 6 && $aniosAntiguedad < 15) {
        echo "El bono que le corresponde a los que tienen una antiguedad entres 6 anios o mas y menos de 15 anios es: " . $cal->bonoDel15PorCiento() . "Bs.";
    }elseif ($aniosAntiguedad > 15) {
        echo "El bono que le corresponde a los que tienen una antiguedad entres 15 anios o mas es: " . $cal->bonoDel20PorCiento() . "Bs.";
    }

?>