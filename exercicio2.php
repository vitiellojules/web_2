<!DOCTYPE html>
<html>
<head>
    <title>Verificar Divisibilidade</title>
</head>
<body>
    <h1>Verificar Divisibilidade</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // o número digitado pelo usuário
        $numero = $_POST["numero"];
        
        // testando se o número é divisível por 10, 5 e 2
        $divisivel_por_10 = ($numero % 10 == 0);
        $divisivel_por_5 = ($numero % 5 == 0);
        $divisivel_por_2 = ($numero % 2 == 0);
        
        // Exibe os resultados
        echo "O número $numero é:";
        echo "<ul>";
        echo "<li>" . ($divisivel_por_10 ? "Divisível por 10" : "Não divisível por 10") . "</li>";
        echo "<li>" . ($divisivel_por_5 ? "Divisível por 5" : "Não divisível por 5") . "</li>";
        echo "<li>" . ($divisivel_por_2 ? "Divisível por 2" : "Não divisível por 2") . "</li>";
        echo "<li>" . (($divisivel_por_10 || $divisivel_por_5 || $divisivel_por_2) ? "" : "Não divisível por nenhum dos números (10, 5, 2)") . "</li>";
        echo "</ul>";
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Digite um número   : <input type="text" name="numero"><br> <br>
        <input type="submit" value=" Divisibilidade">
    </form>
</body>
</html>
