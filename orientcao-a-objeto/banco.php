<?php 

$valor = 5000;
 
class Banco {
    private $saldoBancario = 0;
    private $segundaConta = 0;

    public function __construct($sB){
        $this->saldoBancario = $sB;
    }

    public function deposito($d){
        $this->saldoBancario += $d;
    }

    public function saque($s){
        $this->saldoBancario -= $s;
    }

    public function getVerificar(){
        return $this->saldoBancario;
    }


    public function transferencia($t){
        $this->segundaConta = $t;
        $this->saldoBancario -= $t;
    }

    public function getSegConta(){
        return $this->segundaConta;
    }

}

$conta1 = new Banco($valor);
$conta1->deposito(2000);
$conta1->saque(3000);
echo 'Saldo da conta Atual: '.$conta1->getVerificar()."</br>";
$conta1->transferencia(2000);
echo 'Saldo da Segunda Conta Atual: '.$conta1->getSegConta();
