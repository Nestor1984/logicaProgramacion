<?php

/*
Pida a un usuario la edad y el genero, para que la computadora le indique si ya puede jubilarse. Tome en cuenta que un Hombre
se puede jubilar cuando tenga 60 anos o mas, en cambio, una mujer mayor se jubilara si tiene mas de 54 anos.
*/

if (isset($_POST)) {
    
    $edad = $_POST['edad-usuario'];
    $genero = $_POST['genero'];

}

if ($genero == "Masculino" && $edad >= 60) {
    
    echo "Puede Jubilarse";

}elseif ($genero == "Femenino" && $edad > 54) {
    
    echo "Puede Jubilarse";

}else{

    echo "No puede Jubilarse";

}

?>