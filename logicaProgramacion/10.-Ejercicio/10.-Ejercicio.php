<?php

/* Hacer un programa que calcule el total a pagar por la compra de camisas. Si se compran tres camisas o mas se aplica
un descuento del 20% sobre el total de la compra y si son menos de tres camisas un descuento del 10% */

if (isset($_POST)) {
    $cantidadDeCamisas = $_POST['total-camisas'];
    $precio = $_POST['precio'];
}

$descuento = 0.0;
# Operador ternario
($cantidadDeCamisas >= 3)? $descuento = $precio * 0.2: $descuento = $precio * 0.10;


echo "Su descuento es de: " . $descuento;

?>