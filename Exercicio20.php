<!DOCTYPE html>
<html>
<head>
    <title>Matriz Original e Matrizes de Pares e Ímpares</title>
</head>
<body>
    <h1>Matriz Original e Matrizes de Pares e Ímpares Exercicio 20 </h1>
    
    <?php
    // Inicializa a matriz 5x5
    $matriz = [
        [1, 2, 3, 4, 5],
        [6, 7, 8, 9, 10],
        [11, 12, 13, 14, 15],
        [16, 17, 18, 19, 20],
        [21, 22, 23, 24, 25]
    ];
    
    // Imprime a matriz original
    echo "<h2>Matriz Original:</h2>";
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            echo $matriz[$i][$j] . " ";
        }
        echo "<br> <br> ";
    }
    
    // Gera uma matriz só com números ímpares
    $matrizImpares = [];
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($matriz[$i][$j] % 2 != 0) {
                $matrizImpares[$i][$j] = $matriz[$i][$j];
            }
        }
    }
    
    // Imprime a matriz de números ímpares
    echo "<h2>Matriz de Números Ímpares:</h2>";
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            echo isset($matrizImpares[$i][$j]) ? $matrizImpares[$i][$j] . " " : "  ";
        }
        echo "<br> <br> ";
    }
    
    // Gera uma matriz só com números pares
    $matrizPares = [];
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($matriz[$i][$j] % 2 == 0) {
                $matrizPares[$i][$j] = $matriz[$i][$j];
            }
        }
    }
    
    // Imprime a matriz de números pares
    echo "<h2>Matriz de Números Pares:</h2>";
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            echo isset($matrizPares[$i][$j]) ? $matrizPares[$i][$j] . " " : "  ";
        }
        echo "<br> <br>";
    }
    ?>
</body>
</html>
