<!DOCTYPE html>
<html>
<head>
    <title>Ordem Decrescente</title>
</head>
<body>
    <h1>Ordem Decrescente Exercicio 4 </h1>
    
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // os valores digitados pelo usuário
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $numero3 = $_POST["numero3"];
        
        // Array com os números
        $numeros = [$numero1, $numero2, $numero3];
        
        // Ordena o array em ordem decrescente
        rsort($numeros);
        
        // Exibe os números em ordem decrescente
        echo "Números em ordem decrescente:" . implode(", ", $numeros );

    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Número 1: <input type="text" name="numero1"><br> <br>
        Número 2: <input type="text" name="numero2"><br> <br>
        Número 3: <input type="text" name="numero3"><br> <br>
        <input type="submit" value="Ordenar em Ordem ">
    </form>
</body>
</html>
