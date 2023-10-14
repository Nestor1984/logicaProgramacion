<?php
    class Factorial{

        private $numeroFactorial;
        private $factorial = 1;

        public function __construct($numeroFactorial){
            $this->numeroFactorial = $numeroFactorial;
        }

        public function sacarFactorial(){
            for ($i=$this->numeroFactorial; $i > 0; $i--) { 
                $this->factorial = $this->factorial * $i;
            }
        }

        public function getFactorial(){
            return $this->factorial;
        }

    }
?>