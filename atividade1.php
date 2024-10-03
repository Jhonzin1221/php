<?php 
//é só um jogo de adivinhar o número que a máquina te jogar, mas com o número na variável e não com prompt.

$numSec = rand(0, 10); //rand é o comando para aleatório
$palpite = 7; //número da sorte
$mensagem;
if($numSec === $palpite){
    $mensagem = "A máquina chutou, entre 0 e 10: $numSec; Você acertou";
    echo $mensagem;
} else {
    $mensagem = "Tente novamente.";
    echo $mensagem;
}
?>