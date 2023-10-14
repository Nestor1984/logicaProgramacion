<?php

if ($_POST) {
    $primerNumero = $_POST['primer-numero'];
    $segundoNumero = $_POST['segundo-numero'];
}

for ($i=0; $i < $segundoNumero; $i++) { 
    echo $primerNumero . "<br>";
}


?>