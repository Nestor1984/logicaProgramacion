<?php
    /*Escriba un programa que pida el año actual y un año cualquiera y que escriba cuántos años
    han pasado desde ese año o cuántos años faltan para llegar a ese año.*/

    class Calculadora{

        private $anioActual;
        private $anioCualquiera;

        public function __construct($anioActual, $anioCualquiera){
            $this->anioActual = $anioActual;
            $this->anioCualquiera = $anioCualquiera;
        }

        private function siElAnioCualquieraEsMayorAlAnioActual(){
            return $this->anioCualquiera > $this->anioActual;
        }

        public function mostrarCuantosAniosFaltan(){
            $anios = 0;
            if (self::siElAnioCualquieraEsMayorAlAnioActual()) {
                $anios = $this->anioCualquiera - $this->anioActual;
                return "Faltan " . $anios . " anios para llegar a " . $this->anioCualquiera;
            }else {
                $anios = $this->anioActual - $this->anioCualquiera;
                return "Han pasado " . $anios . " anios desde " . $this->anioCualquiera;
            }
        }


    }
?>