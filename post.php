<?php 
if(isset($_POST['nome'])){
    echo $_POST['nome'];
} else{
    echo 'aguardando envio';
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
    <form method="post">
        <input type="text" name="nome" placeholder="digite nome">
        <button type="submit">enviar</button>
    </form>    
</body>
</html>