<?php
require 'autoload.php';     //incluindo o arquivo

use cliente\Banco;  //puxando a classe banco
use conta\Corrente;     //puxando a classe da conta corrente
use conta\Poupanca;     //puxando a classe da conta poupanca
use efetuacoes\Transacoes;      //puxando a classe das transacoes

$name = 'Joao Victor';      //definindo o cliente
$cpf = '000.000.000-00';    //o cpf do cliente
$address = 'Rua Anonima 325';   //o endereco do cliente

$cliente1 = new Banco(new Corrente(), new Poupanca());    //colocando as tres classes dentro da classe principal
$cliente1->setCliente($name, $cpf, $address);   //definindo o cliente
$cliente1->depositoCorrente(1000);    //depositando na conta corrente
$cliente1->depositoPoupanca(300);    //depositando na conta poupanca
$cliente1->saqueCorrente(500);     //sacando na conta corrente
$cliente1->saquePoupanca(500);      //sacando na conta poupanca
echo $cliente1->getCliente();       //mostrando os dados do cliente
echo $cliente1->saldoCorrente();    //mostrando o saldo da conta corrente
echo $cliente1->saldoPoupanca();    //mostrando o saldo da conta poupanca
echo $cliente1->tscDepCorrente();   //mostrando os depositos da conta corrente
echo $cliente1->tscSaqCorrente();   //mostrando os saques da conta corrente
echo $cliente1->tscDepPoupanca();   //mostrando os depositos da conta poupanca
echo $cliente1->tscSaqPoupanca();   //mostrando os saque da conta poupanca 
//mostrando as transacoes
