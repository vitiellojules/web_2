<!DOCTYPE html>
<html>
<head>
    <title>Imprimir Números e Produto</title>
</head>
<body>
    <h1>Imprimir Números e Produto Exercicio 8 </h1>
    
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $numero = $_POST["numero"];
        
    
        $produto = 1;
        
        // Loop para imprimir números de 1 até $numero e calcular o produto
        echo "Números de 1 até $numero e seu produto:<br>";
        for ($i = 1; $i <= $numero; $i++) {
            echo "$i ";
            $produto *= $i;
        }
        
        // Exibe o produto
        echo "<br>O produto dos números é: $produto";
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Digite um número: <input type="text" name="numero"><br> <br>
        <input type="submit" value="Imprimir Números ">
    </form>
</body>
</html>
