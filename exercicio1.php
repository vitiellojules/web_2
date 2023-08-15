<!DOCTYPE html>
<html>
<head>
    <title> EXERCICIO 1 EM PHP</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    echo "Olá, $nome! Bem-vindo no mundo de PHP !";
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="nome">Digite seu nome:</label>
    <input type="text" id="nome" name="nome">
    <input type="submit" value="Enviar">
</form>

</body>
</html>