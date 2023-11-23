<?php

function removerCaractere(&$palavra, &$caractere) {
    $count = 0;

    $length = strlen($palavra); //pega o tamanho da string
    for ($i = 0; $i < $length; $i++) {
        if ($palavra[$i] === $caractere) {
            $count++;
            
            $palavra = substr_replace($palavra,'', $i, 1);
            $length--;  
            $i--;  
        }
    }

    $caractere = $count;
}

$texto = readline("Qual é a palavra que você gostaria de alterar?\n");
$caractereParaRemover = readline("Qual é o caracter a ser removido?\n");
$caractere = $caractereParaRemover;

removerCaractere($texto, $caractereParaRemover);

echo "Palavra modificada: $texto\n";
echo "Número de vezes que '$caractere' foi removido: $caractereParaRemover\n";
