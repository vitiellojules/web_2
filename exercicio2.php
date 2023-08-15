<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Soma em PHP</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $soma = $numero1 + $numero2;
    echo "A soma de $numero1 e $numero2 é: $soma";
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="numero1">Digite o primeiro número:</label>
    <input type="number" id="numero1" name="numero1">
    <br>
    <br>
    <label for="numero2">Digite o segundo número:</label>
    <input type="number" id="numero2" name="numero2"><br>
    <br>
    <input type="submit" value="Calcular Soma">
</form>

</body>
</html>