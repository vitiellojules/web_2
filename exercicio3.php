<!DOCTYPE html>
<html>
<head>
    <title>Verificar Aceitação  </title>
</head>
<body>
    <h1>Verificar Aceitação exercicios 3 </h1>
    
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // os valores digitados pelo usuário
        $nome = $_POST["nome"];
        $sexo = $_POST["sexo"];
        $idade = $_POST["idade"];
        
        // Verifica se a pessoa é do sexo feminino e tem menos de 25 anos
        if ($sexo == "Feminino" && $idade < 25) {
            echo "$nome ACEITA.";
        } else {
            echo "$nome NÃO ACEITA.";
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Nome: <input type="text" name="nome"><br><br>
        Sexo: 
        <input type="radio" name="sexo" value="Masculino"> Masculino 
        <input type="radio" name="sexo" value="Feminino"> Feminino<br> <br>
        Idade: <input type="text" name="idade"><br> <br>
        <input type="submit" value="Verificar Aceitação">
    </form>
</body>
</html>
