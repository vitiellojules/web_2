<!DOCTYPE html>
<html>
<head>
    <title>Análise de Vetor</title>
</head>
<body>
    <h1>Análise de Vetor Exercicio 17 </h1>
    
    <?php
    $vetor = [5, 10, 7, 8, 12, 15, 20, 3, 25, 16, 21, 14, 9, 30, 2, 4, 17, 6, 1, 11];
    $maior = $vetor[0];
    $menor = $vetor[0];
    
    foreach ($vetor as $valor) {
        if ($valor > $maior) {
            $maior = $valor;
        }
        
        if ($valor < $menor) {
            $menor = $valor;
        }
    }
    
    $totalElementos = count($vetor);
    $numerosPares = 0;
    
    foreach ($vetor as $valor) {
        if ($valor % 2 == 0) {
            $numerosPares++;
        }
    }
    
    $percentualPares = ($numerosPares / $totalElementos) * 100;
    $soma = array_sum($vetor);
    $media = $soma / $totalElementos;
    
    // Exibe os resultados
    echo "Maior valor: $maior<br><br> ";
    echo "Menor valor: $menor<br> <br> ";
    echo "Percentual de números pares: $percentualPares%<br><br> ";
    echo "Média dos elementos do vetor: $media";
    ?>
</body>
</html>
