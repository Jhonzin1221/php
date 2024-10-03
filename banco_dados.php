<?php 

// $conexao = new mysqli("localhost", "root", "", "senai");


// verificar se a conexão funcionou

try{
    $conexao = new mysqli("localhost", "root", "", "senai");
}
catch(Exception $erro){
    echo "houve um erro com a conexão ao banco de dados" . $erro->getMessage();
}