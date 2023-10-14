<?php

/*
                <li>0.5   1   1.5   2   2.5   ...</li>
                <li>1/2   3/4   5/6   7/8   ...</li>
                <li>1  3   8   27   81   243   ...</li>
                <li>0.21   0.2121   0.212121   0.21212121   </li>
*/

// Leemos los datos
if($_POST){
    try {

        $opcion = $_POST['opcion-elegida'];
        $cantidad = $_POST['cantidad'];
        
    } catch (Exception $e) {
        
        echo "Error: " . $e;

    }
}

// Hacemos una instancia de la clase Usuario
$usuario = new Usuario();

// Switch
switch($opcion){
    case 1:

        // Enviamos la cantidad de veces que se desea ver la serie
        $usuario->setCantidad($cantidad);

        $usuario->generarPrimeraSerie();

        break;
    
    case 2:

        // Enviamos la cantidad de veces que se desea ver la serie
        $usuario->setCantidad($cantidad);

        $usuario->generarSegundaSerie();

        break;

    case 3:

        $usuario->setCantidad($cantidad);

        $usuario->generarTerceraSerie();

        break;

    case 4:

        $usuario->setCantidad($cantidad);

        $usuario->generarCuartaSerie();

        break;

    default:
        echo "Opcion No Valida";
        break;
}

class Usuario{

    // Atributos
    private $cantidad;

    // Metodos
    public function setCantidad($cantidad){
        $this->cantidad = $cantidad;
    }

    // Opcion 1
    public function generarPrimeraSerie(){

        $numeroInicial = 0.5; // Variable Local
        for ($i=0; $i < $this->cantidad; $i++) { 
            
            echo $numeroInicial . ", ";

            $numeroInicial = $numeroInicial + 0.5; // Sumamos para que la serie se incremente

        }

    }

    // Opcion 2
    public function generarSegundaSerie(){

         $numeroInicialNumerador = 1;
         $numeroInicialDenominador = 2;

         for ($i=0; $i < $this->cantidad; $i++) { 
            
            echo "(" . $numeroInicialNumerador . "/" . $numeroInicialDenominador . "), ";

            // Incrementamos tanto al numerador, como al denominador
            $numeroInicialNumerador = $numeroInicialNumerador + 2;
            $numeroInicialDenominador = $numeroInicialDenominador + 2;

         }

    }

    // Opcion 3
    public function generarTerceraSerie(){

        $numeroInicial = 1;

        for ($i=0; $i < $this->cantidad; $i++) { 
            
            echo $numeroInicial . ", ";

            // Incrementamos
            $numeroInicial = $numeroInicial * 3;

        }

    }

    public function generarCuartaSerie(){

        $numeroInicial = "0.21";

        for ($i=0; $i < $this->cantidad; $i++) { 
            
            echo $numeroInicial . ", ";

            // Concatenamos al string 
            $numeroInicial += "21";

        }

    }

}

?>