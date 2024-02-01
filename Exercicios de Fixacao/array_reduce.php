<?php

$pessoas = [
    ['nome' => 'Joao', 'sexo' => 'Masculino', 'nota' =>  8],
    ['nome' => 'Julia', 'sexo' => 'Feminino', 'nota' =>  8],
    ['nome' => 'Victor', 'sexo' => 'Masculino', 'nota' =>  5],
    ['nome' => 'Juliano', 'sexo' => 'Masculino', 'nota' =>  10],
    ['nome' => 'Ana', 'sexo' => 'Feminino', 'nota' =>  10],
    ['nome' => 'Renata', 'sexo' => 'Feminino', 'nota' =>  7]
];

$totalMulheres = array_reduce($pessoas, 'somarM');
function somarM($subTotal, $item){
    if($item['sexo'] == 'Feminino'){
        $subTotal ++;
    }
    return $subTotal;
}
echo 'Quantidade de Mulheres: '.$totalMulheres."</br>";

$notaFemininas = array_reduce($pessoas, 'notasMulheres');
    function notasMulheres($subTotal, $item){
    if($item['sexo'] == 'Feminino'){
        $subTotal += $item['nota'];
    }
    return $subTotal;
}

echo 'Notas das Mulheres: '.$notaFemininas."</br>";

$totalHomens = array_reduce($pessoas, 'somar_m');
    function somar_m($subTotal, $item){
        if($item['sexo'] == 'Masculino'){
            $subTotal++;
        }
        return $subTotal;
    }

echo 'Quantidade de Homens: '.$totalHomens."</br>";

$notaMasculinas = array_reduce($pessoas, 'notasHomens');
    function notasHomens($subTotal, $item){
        if($item['sexo'] == 'Masculino'){
            $subTotal += $item['nota'];
        }
        return $subTotal;
    }

echo 'Notas dos Homens: '.$notaMasculinas."</br>";


if($notaMasculinas > $notaFemininas){
    echo 'O total das notas dos Homens é maior que a das Mulheres !';
}elseif($notaMasculinas < $notaFemininas){
    echo 'O total das notas das Mulheres é maior que a dos Homens !';
}else{
    echo 'O total das Notas de ambos sao Iguais !';
}





























