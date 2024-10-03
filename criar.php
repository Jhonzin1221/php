<?php
require "banco_dados.php";
if($_SERVER['REQUEST_METHOD'] == "POST") {
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$conexao->query("INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', $senha)");

echo "Usuario registrado com sucesso";
}

?>

<form method="POST">
        <input type="text" name="nome" placeholder="Digite seu nome">
        <input type="email" name="email" placeholder="Digite seu email">
        <input type="password" name="senha" placeholder="Digite sua senha">
        <button type="submit">Enviar</button>
</form>