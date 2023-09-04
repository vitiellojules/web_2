<!DOCTYPE html>
<html>
<head>
    <title>Tabuada</title>
</head>
<body>
    <h1>Tabuada Exercicio 11 </h1>
    
    <?php
     
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $numero = $_POST["numero"];
        
        // Exibe a tabuada do número escolhido
        echo "Tabuada do $numero:<br>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado<br>";
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Digite um número para a tabuada: <input type="text" name="numero"><br> <br>
        <input type="submit" value="Gerar Tabuada">
    </form>
</body>
</html>
