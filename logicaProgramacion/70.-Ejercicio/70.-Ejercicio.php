<?php

// De una matriz cuadrada, debe hallar la suma de la diagonal principal y secundaria

$sumaDiagonalPrincipal = 0;
$sumaDiagonalSecundaria = 0;

// Rellenamos la matriz
for ($i=0; $i < 4; $i++) { 
    for ($j=0; $j < 4; $j++) { 
        $matriz[$i][$j] = rand(1, 9);
    }
}

echo "<h4>La matriz generada es</h4>";
for ($i=0; $i < 4; $i++) { 
    for ($j=0; $j < 4; $j++) { 
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

// Sumamos la diagonal principal
for ($i=0; $i < 4; $i++) { 
    for ($j=0; $j < 4; $j++) { 
        if ($i == $j) {
            $sumaDiagonalPrincipal+=$matriz[$i][$j];
        }
    }
}

// Sumamos la diagonal secundaria
for ($i=count($matriz[0])-1; $i >= 0; $i--) { // matriz[0].lenght-1
    for ($j=0; $j < 4; $j++) { 
        if ( $i == 0 && $j == count($matriz[0])-1) { // matriz[0].lenght-1
            $sumaDiagonalSecundaria+=$matriz[$i][$j];
        }elseif ( $i == 1 && $j == count($matriz[0])-2) { // matriz[0].lenght-2
            $sumaDiagonalSecundaria+=$matriz[$i][$j];
        }elseif ( $i == 2 && $j == count($matriz[0])-3) { // matriz[0].lenght-3
            $sumaDiagonalSecundaria+=$matriz[$i][$j];
        }elseif ( $i == 3 && $j == count($matriz[0])-4) { // matriz[0].lenght-4
            $sumaDiagonalSecundaria+=$matriz[$i][$j];
        }
    }
}

echo "<br>La suma de la diagonal principal es: " . $sumaDiagonalPrincipal . "<br>";
echo "La suma de la diagonal secundaria es: " . $sumaDiagonalSecundaria . "<br>";
?>