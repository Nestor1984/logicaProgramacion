<?php 
    /*Hallar una bonificacion que un trabajador recibe, si este bono se le asigna como un porcentaje de
    su salario mensual que depende de su antiguedad en la empresa:
    Tiempo                                   Bono
    Menos de 3 anios                        5% del salario
    3 anios o mas y menos de 6 anios        10% del salario
    6 anios o mas y menos de 15 anios       15% del salario
    15 anios o mas                          20% del salario */

    class Calculadora{

        private $bono;
        private $salario;

        public function __construct($salario) {
            $this->salario = $salario;
        }

        public function bonoDel5PorCiento(){
            $this->bono = 0;
            $this->bono = $this->salario * 0.05;
            return $this->bono;
        }

        public function bonoDel10PorCiento(){
            $this->bono = 0;
            $this->bono = $this->salario * 0.1;
            return $this->bono;
        }

        public function bonoDel15PorCiento(){
            $this->bono = 0;
            $this->bono = $this->salario * 0.15;
            return $this->bono;
        }

        public function bonoDel20PorCiento(){
            $this->bono = 0;
            $this->bono = $this->salario * 0.2;
            return $this->bono;
        }


    }
?>