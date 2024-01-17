<?php

namespace classes;
class Cliente {
    private string $name;   //nome do cliente
    private string $cpf;    //cpf do cliente
    private string $address;    //endereco do cliente

    public function __construct($n, $cpf, $address){    //recebendo o nome, cpf e endereco do cliente
        $this->name = $n;   
        $this->cpf = $cpf;
        $this->address = $address;
    }
    public function getCliente(){   //retornando o nome, cpf e endereco do cliente
        return "Cliente: $this->name </br>".
        "Cpf: $this->cpf </br>".
        "Endereco: $this->address </br>";
    }
}


namespace conta;    
class Corrente {
    private $saldoCorrente = 1000;  //saldo da conta corrente

    public function setDeposito($d){    //depositar na conta corrente
        $this->saldoCorrente += $d;
    }
    
    public function setSaque($s){       //sacar da conta corrente
        $this->saldoCorrente -= $s;
    }
    
    public function getVerificacao(){      //verificar o saldo na conta corrente
        return 'Saldo da Conta Corrente: '.$this->saldoCorrente.'</br>';
    }

}

namespace conta;
class Poupanca {
    private $saldoPoupanca = 5000;      //saldo da conta poupanca

    public function setDeposito($d){    //depositar na conta poupanca
        $this->saldoPoupanca += $d;
        $this->saldoPoupanca += ($d * 2 / 100);     //acrescimos de 20% (de juros)
    }
    
    public function setSaque($s){       //sacar da conta poupanca
        $this->saldoPoupanca -= $s;
    }
    
    public function getVerificacao(){   //verificar o saldo na conta poupanca
        return 'Saldo da Conta Poupanca: '.$this->saldoPoupanca.'</br>';
    }

}


namespace classes;
class TransferirCorrente {
    private $methodo1;      //variavel para a class da conta poupanca
    private $methodo2;      //variavel para a class da conta corrente

    public function __construct($m1, $m2){      //recebendo as classes
        $this->methodo1 = $m1;
        $this->methodo2 = $m2;
    }

    public function tranferirParaCorrente($t){
        $this->methodo1->setSaque($t);      //sacar na conta poupanca
        $this->methodo2->setDeposito($t);   //depositar na conta corrente
    }
}
namespace classes;
class TransferirPoupanca  {
    private $methodo1;      //variavel para a class da conta corrente
    private $methodo2;      //variavel para a class da conta poupanca

    public function __construct($m1, $m2){  //recebendo as classes
        $this->methodo1 = $m1;
        $this->methodo2 = $m2;
    }

    public function transferirParaPoupanca($t){
        $this->methodo1->setSaque($t);      //sacar na conta corrente
        $this->methodo2->setDeposito($t);   //depositar na conta poupanca
    }
}
