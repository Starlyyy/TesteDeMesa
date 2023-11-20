<?php

    $matriz = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9)
    );

    $soma = 0;

    foreach($matriz as $linha){
        $soma += array_sum($linha); //o array_sum soma todos os valores que estão dentro do array
    }

    echo 'A soma dos valores que estão na matriz é: ' . $soma . "\n";
