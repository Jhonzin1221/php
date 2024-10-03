<?php 
if(isset($_GET["idade"])){ //isset verifica se a variável existe, nesse caso para pegaro que for inserido na string 'nome';
    echo 'você tem '; 
    echo $_GET["idade"]; 
    echo ' anos.'; //os três echos ficam na mesma linha na página, porém, também é prático usar '.' para usar apenas um echo, igual '+' é usado em js;
} else{
    echo "insira sua idade";
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
        <input type="number" name="idade" placeholder="digite sua idade">
        <button type="submit">enviar</button>
    </form>
</body>
</html>