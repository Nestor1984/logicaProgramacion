<?php

class Calculadora{

    // Atributos
    private $numero1;
    private $numero2;
    private $numero3;
    private $numero4;

    // Metodos
    public function __construct($numero1, $numero2, $numero3, $numero4){
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
        $this->numero3 = $numero3;
        $this->numero4 = $numero4;
    }

    public function getNumero1(){
        return $this->numero1;
    }

    public function getNumero2(){
        return $this->numero2;
    }

    public function getNumero3(){
        return $this->numero3;
    }

    public function getNumero4(){
        return $this->numero4;
    }

    public function siEsPositivo($numeroAEvaluar){
        return $numeroAEvaluar > 0;
    }

    public function siEsNegativo($numeroAEvaluar){
        return $numeroAEvaluar < 0;
    }

    public function visualizarSecuenciaDeSignos(){
        $secuencia = "";
        // Para el primer numero
        if (self::siEsPositivo($this->numero1)) {
            $secuencia = $secuencia . "+, ";
        }else{
            $secuencia = $secuencia . "-, ";
        }
        // Para el segundo numero
        if (self::siEsPositivo($this->numero2)) {
            $secuencia = $secuencia . "+, ";
        }else{
            $secuencia = $secuencia . "-, ";
        }
        // Para el tercer numero
        if (self::siEsPositivo($this->numero3)) {
            $secuencia = $secuencia . "+, ";
        }else{
            $secuencia = $secuencia . "-, ";
        }
        // Para el cuarto numero
        if (self::siEsPositivo($this->numero4)) {
            $secuencia = $secuencia . "+, ";
        }else{
            $secuencia = $secuencia . "-, ";
        }
        return $secuencia;
    }

}


?>