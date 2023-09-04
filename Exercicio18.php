<?php
// Inicializar dois vetores com 10 números inteiros cada
$vetor1 = array(1, 3, 5, 7, 9, 11, 13, 15, 17, 19);
$vetor2 = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);

// Gerar um vetor dos números não comuns
$vetorNaoComuns = array_merge(array_diff($vetor1, $vetor2), array_diff($vetor2, $vetor1));

// Imprimir o vetor dos números não comuns
echo "Números não comuns: " . implode(', ', $vetorNaoComuns) . "\n";
?>