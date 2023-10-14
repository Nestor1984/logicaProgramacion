<?php
    /*
    Sea el juego de MAYOR MENOR, que utiliza dos dados, consiste en lanzar los dados
    y la suma obtenida puede ser Mayor o menor a 7, gana de acuerdo a Mayor elegida (o menor)
    Descripcion: Para esto podemos describir los siguientes pasos:
    - Menor (2, 3, 4, 5, 6), Mayor (8, 9, 10, 11, 12)
    - El 7 es la casa o dueno del juego.
    - Si se apuesta a Mayor gana, si apuesta a menor gana.
    - Si la suma es 7 pierden los que apuestan a mayor o menor, gana la casa. */
    class Juego{

        private $opcionElegida;
        private $dado1;
        private $dado2;
        private $sumaDados;

        public function __construct($opcionElegida){
            $this->opcionElegida = $opcionElegida;   
        }
        
        public function lanzarDado1(){
            return $this->dado1 = rand(1, 6);
        }

        public function getDado1(){
            return $this->dado1;
        }

        public function lanzarDado2(){
            return $this->dado2 = rand(1, 6);
        }

        public function getDado2(){
            return $this->dado2;
        }

        public function getSumaDados(){
            return $this->sumaDados = $this->getDado1() + $this->getDado2();
        }

        public function siLaOpcionElegidaEsMayor(){
            return $this->opcionElegida = "Mayor";
        }

        public function verificarLaOpcionGanada(){

            $sumaDeDados = "";
            $sumaDeDados = $this->getSumaDados();

         /*   if ( ($this->siLaOpcionElegidaEsMayor()) && ($sumaDeDados > 7)) {
                echo "<br>Primer dado: " . $this->getDado1() . "<br><br>Segundo Dado: " . $this->getDado2() . "<br><br>Suma de dados: " . $sumaDeDados;
                echo "<br><br>Usted aposto a mayor y gano";
            }else if (!($this->siLaOpcionElegidaEsMayor()) && ($sumaDeDados < 7)) {
                echo "<br>Primer dado: " . $this->getDado1() . "<br><br>Segundo Dado: " . $this->getDado2() . "<br><br>Suma de dados: " . $sumaDeDados;
                echo "<br><br>Usted aposto a menor y gano";
            }else if($sumaDeDados == 7) {
                echo "<br>Primer dado: " . $this->getDado1() . "<br><br>Segundo Dado: " . $this->getDado2() . "<br><br>Suma de dados: " . $sumaDeDados;
                echo "<br><brGana la casa";
            }*/

            if ( ($this->siLaOpcionElegidaEsMayor()) && ($sumaDeDados > 7) ) {
                echo "<br>Primer dado: " . $this->getDado1() . "<br><br>Segundo Dado: " . $this->getDado2() . "<br><br>Suma de dados: " . $sumaDeDados;
                echo "<br><br>Usted aposto a mayor y gano";
            }else if(!($this->siLaOpcionElegidaEsMayor()) && ($sumaDeDados > 7)){
                echo "<br>Primer dado: " . $this->getDado1() . "<br><br>Segundo Dado: " . $this->getDado2() . "<br><br>Suma de dados: " . $sumaDeDados;
                echo "<br><br>Usted aposto a mayor y perdio";
            }else if (!($this->siLaOpcionElegidaEsMayor()) && ($sumaDeDados < 7)) {
                echo "<br>Primer dado: " . $this->getDado1() . "<br><br>Segundo Dado: " . $this->getDado2() . "<br><br>Suma de dados: " . $sumaDeDados;
                echo "<br><br>Usted aposto a menor y gano";
            }else if (!(!($this->siLaOpcionElegidaEsMayor()) && ($sumaDeDados < 7))) {
                echo "<br>Primer dado: " . $this->getDado1() . "<br><br>Segundo Dado: " . $this->getDado2() . "<br><br>Suma de dados: " . $sumaDeDados;
                echo "<br><br>Usted aposto a menor y perdio";
            }else if($sumaDeDados == 7) {
                echo "<br>Primer dado: " . $this->getDado1() . "<br><br>Segundo Dado: " . $this->getDado2() . "<br><br>Suma de dados: " . $sumaDeDados;
                echo "<br><brGana la casa";
            }
        }

    }
?>