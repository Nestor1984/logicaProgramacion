<?php

/*
En una fabrica de computadoras se planea ofrecer a los clientes un descuento que 
dependera del numero de computadoras que compre. Si las computadoras son menos de cinco se les
dara un 10% de descuento sobre el total de la compra; si el numero de computadoras es mayor o igual
a cinco pero menos de diez se le otorga un 20% de descuento; y si son 10 o mas se les da un 40% de descuento.
El precio de cada computadora es de $700
*/
if (isset($_POST)) {
    
    $cantidadDeComputadoras = $_POST['numero-de-computadoras'];

}

// Declaramos una constante
const precio = 700;
$operacion = "";

if ($cantidadDeComputadoras < 5) {

    $operacion = precio * 0.10;

    echo "Su descuento es del 0.10% y su total es de: " . $operacion;
    
}elseif($cantidadDeComputadoras >= 5 && $cantidadDeComputadoras < 10){

    $operacion = precio * 0.20;

    echo "Su descuento es del 0.20% y su total es de: " . $operacion;

}elseif($cantidadDeComputadoras >= 10 ){

    $operacion = precio  * 0.40;

    echo "Su descuento es del 0.40% y su total es de: " . $operacion;

}
?>