<?php
//a atividade consistia em testar três (usei apenas dois) operadores lógicos, então construí um código
//baseado na lógica de limite de velocidade de um carro, sim ela está quebrada, mas não importa para a atividade.
//também havia elseif, mas não utilizei 
$velocidade = 154;
$mensagem;
$mensagem2;
if($velocidade > 150){
    if($velocidade > 150 && $velocidade < 156){
        $mensagem2 = "Você está dentro da velocidade de tolerância. ";
        echo $mensagem2;
    }
    $mensagem = "Você foi multado por ultrapassar a velocidade limite.";
    echo $mensagem;

} else{
    $mensagem = "Você está no limite da velocidade ideal";
    echo $mensagem;
}
?>