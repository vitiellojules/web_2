<?php
// Inicializar variáveis
$somaPositivos = 0;
$totalNegativos = 0;

// Loop para ler os 20 números
for ($i = 1; $i <= 20; $i++) {
    $numero = floatval(readline("Digite o número $i: "));
    
    if ($numero > 0) {
        $somaPositivos += $numero;
    } elseif ($numero < 0) {
        $totalNegativos++;
    }
}

// Imprimir resultados
echo "A soma dos números positivos é: $somaPositivos\n";
echo "O total de números negativos é: $totalNegativos\n";
?>