<?php

/*
            <p> <strong>Menu de opciones:</strong> <br></p>
            <p>a. 1/2   +   3/4   +   5/8   +   7/16   +   ... </p>
            <p>b. Visualizar la secuencia <br>
                <br>1   1   1   1
                <br>2   2   2   2
                <br>3   3   3   3
                <br>4   4   4   4
            </p>
*/

if ($_POST) {
    
    $opcion = $_POST['opcion'];
    $cantidad = $_POST['cantidad'];

}

// Hacemos una instancia
$calculadora = new Calculadora();

switch ($opcion) {
    case 'a':
    case 'A':
        $calculadora->setCantidad($cantidad);
        $calculadora->generarPrimeraSerie();
        break;

    case 'b':
    case 'B':
        $calculadora->setCantidad($cantidad);
        $calculadora->generarSegundaSerie();
        break;
    
    default:
        echo "Opcion no valida";
        break;
}

class Calculadora{

    // Atributos
    private $cantidad;

    // Metodos
    public function setCantidad($cantidad){
        $this->cantidad = $cantidad;
    }

    public function generarPrimeraSerie(){

        $numerador = 1;
        $denominador = 2;

        for ($i=0; $i < $this->cantidad; $i++) { 
            
            echo $numerador . "/" . $denominador . " + ";

            $numerador = $numerador + 2;
            $denominador = $denominador * 2;

            if($i == ($this->cantidad - 1)){
                echo $numerador . "/" . $denominador;
            }
        }
    }

    public function generarSegundaSerie(){

        // Definimos un array bidimensional vacio
        $arrayBiDimensional = array(
            array( 0, 0, 0, 0),
            array( 0, 0, 0, 0),
            array( 0, 0, 0, 0),
            array( 0, 0, 0, 0)
        );

        $numeroInicial = 1;
        // Llenamos el array
        for ($i=0; $i < count($arrayBiDimensional); $i++) { 
            for ($j=0; $j < count($arrayBiDimensional); $j++) { 
                
                if ( ($i == 0) && ($j < 4) ) {
                    
                    $arrayBiDimensional[$i][$j] = 1;

                }else if( ($i == 1) && ($j < 4) ){

                    $arrayBiDimensional[$i][$j] = 2;

                }else if ( ($i == 2) && ($j < 4) ) {

                    $arrayBiDimensional[$i][$j] = 3;

                }else if ( ($i == 3) && ($j < 4) ) {
                    
                    $arrayBiDimensional[$i][$j] = 4;

                }

            }
        }

        // Imprimimos el array
        for ($i=0; $i < count($arrayBiDimensional); $i++) { 
            for ($j=0; $j < count($arrayBiDimensional); $j++) { 
                
                echo $arrayBiDimensional[$i][$j] . " ";

            }
            echo "<br>";
        }

    }


}

?>