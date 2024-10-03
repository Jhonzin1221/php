<?php 

if($_SERVER['REQUEST_METHOD'] == "POST"){ //POST precisa estar em maiúsculo.
    echo 'Seu nome é ' . $_POST['nome'] . '. Tem ' . $_POST['idade']. ' anos.' . ' Sua cor favorita é ' . $_POST['cor'] . '.' ;
} else{
    echo 'erro';
}
?>