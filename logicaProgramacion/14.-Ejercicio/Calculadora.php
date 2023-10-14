<?php
/*
Ingresar por teclado un numero real y muestre los siguientes resultados:
-Si el numero es menor que 50, mostrara su cuadrado.
-Si el numero esta entre 51 y 100 mostrara su raiz cubica 
-En otro caso terminar con un mensaje "No sirve" y finalizar.
*/

class Calculadora{

    private $numero;

    public function __construct($numero){
        $this->numero = $numero;
    }

    public function siElNumeroEsMenorQue50(){
        if($this->numero < 50){
            return true;
        }else{
            return false;
        }
    }

    public function siElNumeroEstaEntre51Y100(){
        if ($this->numero >= 51 && $this->numero <= 100) {
            return true;
        }else{
            return false;
        }
    }

}
?>