<?php
include "Factorial.php";

/**
 * 1.- Sacar factorial de un numero.
 */

 $numero = 0;

 if (isset($_POST['numero-factorial'])) {
    $numero = $_POST['numero-factorial'];
    echo "<b>Numero ingresado correctamente</b><br><br>";
 }

 $factorial = new Factorial($numero);
 $factorial->sacarFactorial();
 $resultadoFactorial = $factorial->getFactorial();

 echo "El factorial de " . $numero . " es: " . $resultadoFactorial;

?>