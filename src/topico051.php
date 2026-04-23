<?php
$idade = 18;

if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}
?>
<hr>
<?php
$hora = 18;

if ($hora < 12) {
    echo "Bom dia!";
} elseif ($hora < 18) {
    echo "Boa tarde!";
} else {
    echo "Boa noite!";
}
?>
<hr>
<?php
$semaforo = "azul";
if($semaforo == "verde") {
    echo "Pode passar!";
} else if ($semaforo == "amarelo") {
    echo "Atenção, prepare-se para parar!";
} elseif ($semaforo == "vermelho") {
    echo "Pare!";
} else {
    echo "Sinal de trânsito desconhecido.";
}
?>
<?php
$resultado_jogo = "empate"

?>
<hr>
<?php
$diaSemana = date('w');  // Retorna o dia da semana em número (0-6)

switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}
?>
<hr>
<?php
date_default_timezone_set('America/Sao_Paulo');
echo date("d/m/Y H:i:s");
?>
<hr>
<?php
$nome = "u";//só u!!!!!
echo "nome = $nome";
echo "<br>md5 = " . md5($nome);
$hash = password_hash($nome, PASSWORD_DEFAULT);
echo "<br>hash = " . $hash;

?>