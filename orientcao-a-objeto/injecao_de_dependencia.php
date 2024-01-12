<?php

interface Matematica{
    public function somar($x, $y);
}

class Somas implements Matematica {
    private $equacao;

    public function __construct($class){
        $this->equacao  = $class;
    }

    public function somar($x, $y){
        return $this->equacao->somar($x, $y);
    }

}

class Add1 implements Matematica {
    public function somar($x, $y){
        $res = $x;
        for($q=0;$q<$y;$q++){
            $res++;
        }
        return $res;
    }
}

class Add2 implements Matematica {
    public function somar($x, $y){
        return $x + $y;
    }
}

class Sub implements Matematica {
    public function somar($x, $y){
        return  $x - $y;
    }

}

class Div {
    public function somar($x, $y){
        return $x / $y;
    }
}

class Mult {
    public function somar($x, $y){
        return $x * $y;
    }
}


$calc = new Somas(new Mult());
echo $calc->somar(100, 50);