<!DOCTYPE html>
<html>
<head>
    <title>Verificar Par ou Ímpar</title>
</head>
<body>
    <h1>Verificar Par ou Ímpar Exercicio 16 </h1>
    
    <?php
    // Inicializa um vetor com 15 números inteiros
    $numeros = [5, 10, 7, 8, 12, 15, 20, 3, 25, 16, 21, 14, 9, 30, 2];
    
    echo "Números e suas características (par ou ímpar):<br>";
    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            echo "$numero é par.<br>";
        } else {
            echo "$numero é ímpar.<br>";
        }
    }
    ?>
</body>
</html>
