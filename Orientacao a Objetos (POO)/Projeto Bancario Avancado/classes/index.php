<?php 

namespace cliente;  //definindo o namespace da classe Banco
class Banco {
    private $cliente;   
    private $cpf;
    private $address;
    private $corrente;
    private $poupanca;
    private $transferencia;
    //criando as propriedades

    public function __construct($c, $p, $t){    //injetando as outras classes apartir do construtor
        $this->corrente = $c;
        $this->poupanca = $p;
        $this->transferencia = $t;
    }

    public function depositoCorrente($d){   //definindo a funcao de deposito da conta corrente
        $this->corrente->setDeposito($d);
    }
    public function depositoPoupanca($d){   //definindo a funcao de deposito da conta poupanca
        $this->poupanca->setDeposito($d);
    }
    public function saqueCorrente($s){      //definindo a funcao de saque da conta corrente
        $this->corrente->setSaque($s);
    }
    public function saquePoupanca($s){      //definindo a funcao de saque da conta poupanca
        $this->poupanca->setSaque($s);
    }


    public function transfCorrente($t){
        $this->transferencia->transfCorrente($t);
    }
    public function transfPoupanca($t){
        $this->transferencia->transfPoupanca($t);
    }


    public function saldoCorrente(){        //mostrando saldo da conta corrente
        return $this->corrente->getVerificar();
    }
    public function saldoPoupanca(){        //mostrando saldo da conta poupanca
        return $this->poupanca->getVerificar();
    }

    
    public function tscDepCorrente(){   //depositos da conta corrente
        return $this->corrente->tscDeposito();
    }
    public function tscSaqCorrente(){   //saques da conta corrente
        return $this->corrente->tscSaque();
    }

    public function tscDepPoupanca(){   //depositos da conta poupanca
        return $this->poupanca->tscDeposito();
    }
    public function tscSaqPoupanca(){   //saques da conta poupanca
        return $this->poupanca->tscSaque();
    }
    


    public function setCliente($n, $cpf, $ad){  //definindo o cliente 
        $this->cliente = $n;
        $this->cpf = $cpf;
        $this->address = $ad;
    }
    public function getCliente(){       //retornando os dados do cliente
        return 'Cliente: '.$this->cliente.'</br>'.
        'CPF do Cliente: '.$this->cpf.'</br>'.
        'Endereco do Cliente: '.$this->address.'</br>'.'</br>';
    } 
}


namespace conta;    //definindo o namespace da classe Corrente
class Corrente {
    private $contaCorrente = 500;
    private $tscDeposito = 0;
    private $tscSaque = 0;

    public function setDeposito($d){    //depositando na conta corrente
        $this->contaCorrente += $d;
        $this->tscDeposito += $d;
    }

    public function setSaque($s){       //sacando na conta corrente
        $this->contaCorrente -= $s;
        $this->tscSaque += $s;
    }


    public function tscDeposito(){   //retornando as transacoes de deposito da conta corrente
        return '</br>'.'Dinheiro depositado na conta Corrente: '.$this->tscDeposito.'</br>';
    }
    public function tscSaque(){   //retornando as transacoes de saque da conta corrente
        return 'Dinheiro sacado na conta Corrente: '.$this->tscSaque.'</br>';
    }


    public function getVerificar(){     //retornando o saldo da conta corrente
        return 'Saldo da Conta Corrente: '.$this->contaCorrente.'</br>';
    }
}


namespace conta;    //definindo namespace da classes Poupanca
class Poupanca {
    private $contaPoupanca  = 2000;
    private $tscDeposito = 0;
    private $tscSaque = 0;

    public function setDeposito($d){    //depositando na conta poupanca
        $this->contaPoupanca += $d + ($d * 2 / 100);
        $this->tscDeposito += $d;
    }

    public function setSaque($s){       //sacando na conta poupanca
        $this->contaPoupanca -= $s;
        $this->tscSaque += $s;
    }

    
    public function tscDeposito(){   //retornando as transacoes de deposito da conta corrente
        return 'Dinheiro depositado na conta Poupanca: '.$this->tscDeposito.'</br>';
    }
    public function tscSaque(){   //retornando as transacoes de saque da conta corrente
        return 'Dinheiro sacado na conta Poupanca: '.$this->tscSaque.'</br>';
    }


    public function getVerificar(){        //retornando o saldo da conta poupanca
        return 'Saldo da Conta Poupanca: '.$this->contaPoupanca.'</br>';
    }
}


namespace efetuacoes;
class Transferencia {
    private $corrente;
    private $poupanca;

    public function __construct($c, $p){
        $this->corrente = $c;
        $this->poupanca = $p;
    }

    public function transfCorrente($c){
        $this->corrente->setDeposito($c);
        $this->poupanca->setSaque($c);
    } 
    public function transfPoupanca($p){
        $this->poupanca->setDeposito($p);
        $this->corrente->setSaque($p);
    }

}

