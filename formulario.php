<?php
session_start();

if (!isset($_SESSION['numero_aleatorio'])) {
    $_SESSION['numero_aleatorio'] = rand(0, 5);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero_usuario = intval($_POST['numero']);
    $numero_aleatorio = $_SESSION['numero_aleatorio'];

    if ($numero_usuario === $numero_aleatorio) {
        echo "Parabéns! Você acertou o número aleatório: $numero_aleatorio.";
    } else {
        echo "Você errou! O número aleatório era: $numero_aleatorio. Tente novamente.";
    }

    $_SESSION['numero_aleatorio'] = rand(0, 100);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Número Aleatório</title>
</head>
<body>
    <h1>Verifique seu Número</h1>
    <form method="POST" action="">
        <label for="numero">Digite um número entre 0 e 100:</label>
        <input type="number" id="numero" name="numero" min="0" max="100" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
