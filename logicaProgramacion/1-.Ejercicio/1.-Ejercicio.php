<?php

if ($_POST) {
    
    $numero = $_POST['numero'];

}

echo "<br>Numero anterior: " . ($numero-1);
echo "<br>Numero propio: " . $numero;
echo "<br>Numero posterior: " . ($numero+1);

?>