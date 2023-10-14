<?php

    class Moneda{

        private $moneda;

        public function __construct(){
            
        }

        public function landarMoneda(){
            $this->moneda = rand(1, 2);
            echo $this->moneda . "<br>";
        }

        public function imprimirImagen(){
            $this->landarMoneda();
            if ($this->moneda == 1) {
                echo '<img src="imagenes/80282358-ilustración-de-vector-de-personaje-de-dibujos-animados-de-moneda-de-cara-de-guiño.jpg" alt="cara" width="200px">';
            }else if($this->moneda == 2){
                echo '<img src="imagenes/101023064-signo-de-oro-icono-de-vector-de-moneda-de-dinero-icono-de-dólar-de-oro-de-dibujos-animados-de.jpg" alt="cruz" width="200px">';
            }
        }

    }

?>