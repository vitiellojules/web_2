<!DOCTYPE html>
<html>
<head>
    <title>Imprimir a palavra SOL</title>
</head>
<body>
    <h1>Imprimir a palavra SOL Exercicio 9</h1>
    
    <?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
        $numVezes = $_POST["numVezes"];
        
        // Verifica se o número de vezes é válido (maior que 0)
        if ($numVezes > 0) {
            // Loop para imprimir a palavra "SOL" o número de vezes desejado
            echo "Palavra 'SOL' repetida $numVezes vezes:<br>";
            for ($i = 0; $i < $numVezes; $i++) {
                echo "SOL ";
            }
        } else {
            echo "Digite um número válido maior que 0.";
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Digite o número de vezes que deseja imprimir a palavra 'SOL': <input type="text" name="numVezes"><br> <br>
        <input type="submit" value="Imprimir">
    </form>
</body>
</html>
