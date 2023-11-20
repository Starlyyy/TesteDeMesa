<?php

$matriz = array();

for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j < 5; $j++) { 
        echo "Digite um valor para a posição [$i][$j]: ";
        $matriz[$i][$j] = readline();
    }
}

for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j < 5; $j++) { 
        if ($matriz[$i][$j] % 2 == 0) {
            echo "Este número par {$matriz[$i][$j]} está na posição [$i][$j]\n";
        }
    }
}
