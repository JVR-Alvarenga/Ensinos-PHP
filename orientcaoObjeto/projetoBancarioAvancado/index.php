<?php
require 'autoload.php';     //incluindo o arquivo

$name = 'Joao Victor';      //definindo a variavel
$cpf = '000.000.000.-00';   //definindo a variavel
$address = 'Rua Anonima 576';   //definindo a variavel

use classes\Cliente;    //puxando o namespace para uso
$cliente = new Cliente($name, $cpf, $address);      //definindo o __construct para uso
echo $cliente->getCliente();    //mostrando o resultado

use conta\Corrente;     //puxando o namespace para uso
$contaCorrente = new Corrente();    //criando objeto
$contaCorrente->setDeposito(500);   //depositando na conta corrente
$contaCorrente->setsaque(200);      //sacando da conta corrente
echo $contaCorrente->getVerificacao();      //verificando o valor da conta corrente


use conta\Poupanca;     //puxando o namespace para uso
$contaPoupanca = new Poupanca();    //criando objeto
$contaPoupanca->setDeposito(1000);  //depositando na conta poupanca
$contaPoupanca->setsaque(350);      //sacando da conta poupanca
echo $contaPoupanca->getVerificacao().'</br>';      //verificando o valor da conta poupanca

use classes\TransferirCorrente;      //puxando o namespace para uso   
use classes\TransferirPoupanca;     //puxando o namespace para uso
$transacao1 = new TransferirCorrente(new Poupanca(), new Corrente());    //definindo o __construct para uso
$transacao1->transferirParaCorrente(570);       //transferindo

$transacao2 = new TransferirPoupanca(new Corrente(), new Poupanca());   //definindo o __construct para uso
$transacao2->transferirParaPoupanca(100);      //transferindo
