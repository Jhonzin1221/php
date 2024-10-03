<?php

    $nome = "Carlos";
    $idade = 17;
    $souRico = false;
    if($souRico === false){
        $souRico = "Não. não sou rico.";
    }
    echo "olá mundo! Meu nome é $nome, minha idade é $idade, se eu sou rico? $souRico";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Meu nome é <?php echo $nome?> </h1>
</body>
</html>