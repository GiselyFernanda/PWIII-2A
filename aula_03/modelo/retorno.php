<?php

$NOME = $_REQUEST['NOME'];
$BEBIDA = $_REQUEST['BEBIDA'];
$NASC = $_REQUEST['ANO'];
$DataAtual = date("Y-m-d");
$IDADE = date_diff(date_create($NASC), date_create($DataAtual));

if (empty($NOME)) {
    $dados = array(
        "mensagem" => 'Ainda a campos a serem preenchidos.'
    );
} else {

    if ($IDADE->format('%y') >= 18) {
        $dados = array(
            "B4" => 'alert-success',
            "mensagem" => 'Bem vindo, ' . $NOME . ', A sua bebida favorita é ' . $BEBIDA . ', acesso livre as bebidas por ser de maior. '
        );
    } else {
        $dados = array(
            "B4" => 'alert-success',
            "mensagem" => 'Ola' . $NOME . ', você é menor de idade então não consuma bebida alcoólica!'
        );
    }

}

echo json_encode($dados);