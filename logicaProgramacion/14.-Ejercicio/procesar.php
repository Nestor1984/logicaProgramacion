<?php
/*
Ingresar por teclado un numero real y muestre los siguientes resultados:
-Si el numero es menor que 50, mostrara su cuadrado.
-Si el numero esta entre 51 y 100 mostrara su raiz cubica 
-En otro caso terminar con un mensaje "No sirve" y finalizar.
*/
$numero = 0;

// Validamos
if ( (isset($_POST['numero-leido'])) and (!empty($_POST['numero-leido'])) ) {
    $numero = $_POST['numero-leido'];
    echo '<b>Numero Ingresado con exito!</b><br>';
}else{
    echo 'Numero no valido';
}

// Hacemos un autoload
function autoload($clase){
    include $clase . ".php";
}

spl_autoload_register("autoload");

// Hacemos una instancia
$calculadora = new Calculadora($numero);

// Operamos
if ($calculadora->siElNumeroEsMenorQue50()) {
    echo "<br>El Cuadrado es: " . pow($numero, 2);
}
elseif ($calculadora->siElNumeroEstaEntre51Y100()) {
    echo "<br>El Cubo es: " . pow($numero, 3);
}else{
    echo "<br>No sirve";
    exit();
}


?>