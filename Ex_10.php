<?php

function removerCaractere(&$palavra, &$caractere) {
    $count = 0;

    $tamanho = strlen($palavra); //pega o tamanho da string
    for ($i = 0; $i < $tamanho; $i++) {
        if ($palavra[$i] === $caractere) {
            $count++;
            
            $palavra = substr_replace($palavra,'', $i, 1);
            $tamanho--;  
            $i--;  
        }
    }

    $caractere = $count;
}

$texto = readline("Qual é a palavra que você gostaria de alterar?\n");
$caractereParaRemover = readline("Qual é o caracter a ser removido?\n");
$caractere = $caractereParaRemover;

removerCaractere($texto, $caractereParaRemover);

echo "Aqui esrá a palavra modificada: $texto\n";
echo "Número de vezes que '$caractere' foi removido: $caractereParaRemover\n";
