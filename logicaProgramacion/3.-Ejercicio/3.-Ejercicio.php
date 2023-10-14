<?php
/*Ingresar por teclado un numero real y muestre los siguientes resultados:
- Si el numero es menor que 50, mostrara su cuadrado
- Si el numero esta entre 51 y 100 mostrara su raiz cuadrada, y
- En otro caso terminar con un mensaje "No sirve" y finalizar  */

if($_POST){
    $numeroReal = $_POST['numero-real'];
}

if($numeroReal < 50){

    $cuadrado = pow($numeroReal, 2);

    echo "El cuadrado de" . $numeroReal . " es: " . $cuadrado;

}else if($numeroReal >= 51 && $numeroReal <= 100){

    $raizCuadrada = sqrt($numeroReal);

    echo "La raiz cuadrada es: " . $raizCuadrada;

}else{
    echo "No sirve";
}

?>