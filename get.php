<?php 
//$_GET["nome"]; para pegar a string com o nome digitável;

if(isset($_GET["nome"])){ //isset verifica se a variável existe, nesse caso para pegaro que for inserido na string 'nome';
    echo $_GET["nome"];
} else{
    echo "erro";
}
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="text" name="nome" placeholder="digite nome">
        <button type="submit">enviar</button>
    </form>
</body>
</html>