<?php
/*Escribe un script que simule el comportamiento de lanzar una moneda al aire y muestre una imagen
con la cara o la cruz de la moneda.*/

// Autoload
function Autoload($clase){
    include $clase . ".php";
}

spl_autoload_register("Autoload");

// Validamos
if ($_POST['lanzador'] == "si") {
    $moneda = new Moneda();
    $moneda->imprimirImagen();
}

?>