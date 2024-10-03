<?php 
//atividade consiste em simular a entrada de uma pessoa em um evento com valor booleano (verdadeiro ou falso)
//se ela for maior de 16 anos, o valor booleano retornará true, caso contrário, false

$autorizar; //valor booleano, será utilizado depois
$idade = 17;

if($idade > 16){
    $autorizar = true;
    echo "Sua entrada foi autorizada";
} else{
    $autorizar = false;
    echo "Sua entrada foi negada, você é menor de 16 anos";
}
?>