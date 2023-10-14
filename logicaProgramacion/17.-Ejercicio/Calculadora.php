<?php
/*27. Probar con: a) P(x) = x^2+3x+2 b) P(x) = 2x^2+4x+2 c) P(x) = 3x^2+2 */
    class Calculadora{

        private $valorX;

        public function __construct($x){
            $this->valorX = $x;
        }

        public function evaluarEnPrimeraFuncion(){
            return (pow($this->valorX, 2)) + (3*$this->valorX) + 2;
        }

        public function evaluarEnSegundaFuncion(){
            return 2*(pow($this->valorX, 2)) + (4*$this->valorX) + 2;
        }

        public function evaluarEnTerceraFuncion(){
            return 3*(pow($this->valorX, 2)) + 2;
        }

        public function getValorX(){
            return $this->valorX;
        }

    }
?>