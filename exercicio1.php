<!DOCTYPE html>
<html>
<head>
    <title>Adição de Dois Números</title>
</head>
<body>
    <h1>Adição de Dois Números</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        
        $resultado = $numero1 + $numero2;
        if ($resultado > 20) {
            $resultado += 8;
        } else {
            $resultado -= 5;
        }
        
        echo "O resultado é: $resultado";
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Número 1: <input type="text" name="numero1"><br> <br>
        Número 2: <input type="text" name="numero2"><br> <br>
        <input type="submit" value="Somar">
    </form>
</body>
</html>

