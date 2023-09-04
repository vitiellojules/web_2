<!DOCTYPE html>
<html>
<head>
    <title>Identificar Mês</title>
</head>
<body>
    <h1>Identificar Mês Exercicio 6 </h1>
    
    <?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $numero = $_POST["numero"];
        
        // Define um array com os nomes dos meses
        $meses = [
            1 => "Janeiro",
            2 => "Fevereiro",
            3 => "Março",
            4 => "Abril",
            5 => "Maio",
            6 => "Junho",
            7 => "Julho",
            8 => "Agosto",
            9 => "Setembro",
            10 => "Outubro",
            11 => "Novembro",
            12 => "Dezembro"
        ];
        
        // Verifica se o número está dentro do intervalo válido
        if ($numero >= 1 && $numero <= 12) {
            // Exibe o mês correspondente
            echo "O mês correspondente é  $numero é " . $meses[$numero] . "." ;
        } else {
           
            echo "Não existe mês com o número $numero.";
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Digite um número (entre 1 e 12): <input type="text" name="numero"><br> <br>
        <input type="submit" value="Identificar Mês">
    </form>
</body>
</html>
