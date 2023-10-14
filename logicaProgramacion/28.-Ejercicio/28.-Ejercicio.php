<?php
// Unir arrays:
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array3 = [];



for ($i=0; $i < 2; $i++) { // Contador de vueltas
    for ($j=0; $j < 3; $j++) { 
        if ($i == 0) { 
            $array3[] = $array1[$j];
        }else{
            $array3[] = $array2[$j];
        }
    }
}

echo "Array Original 1: <br>";
foreach ($array1 as $key => $vM) {
    echo "[" . $vM . "], ";
}

echo "<br>Array Original 2: <br>";
foreach ($array2 as $key => $vM) {
    echo "[" . $vM . "], ";
}

echo "<br>Array concatenado: <br>";
for ($i=0; $i < 6; $i++) { 
    if ($i == 5) {
        echo "[" . $array3[$i] . "]";
    }else{
        echo "[" . $array3[$i] . "], ";
    }
}

?>