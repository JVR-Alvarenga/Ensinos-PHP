<?php

$pessoas = [
    ['nome' => 'Joao', 'sexo' => 'M', 'nota' =>  8],
    ['nome' => 'Julia', 'sexo' => 'F', 'nota' =>  8],
    ['nome' => 'Victor', 'sexo' => 'M', 'nota' =>  5],
    ['nome' => 'Juliano', 'sexo' => 'M', 'nota' =>  10],
    ['nome' => 'Ana', 'sexo' => 'F', 'nota' =>  10],
    ['nome' => 'Renata', 'sexo' => 'F', 'nota' =>  7]
];

$total_f = array_reduce($pessoas, 'somar_f');
function somar_f($subTotal, $item){
    if($item['sexo'] == 'F'){
        $subTotal ++;
    }
    return $subTotal;
}
echo 'Quantidade de Mulheres: '.$total_f."</br>";

$notaFemininas = array_reduce($pessoas, 'notas_f');
    function notas_f($subTotal, $item){
    if($item['sexo'] == 'F'){
        $subTotal += $item['nota'];
    }
    return $subTotal;
}

echo 'Notas das Mulheres: '.$notaFemininas."</br>";

$total_m = array_reduce($pessoas, 'somar_m');
    function somar_m($subTotal, $item){
        if($item['sexo'] == 'M'){
            $subTotal++;
        }
        return $subTotal;
    }

echo 'Quantidade de Homens: '.$total_m."</br>";

$notaMasculinas = array_reduce($pessoas, 'notas_m');
    function notas_m($subTotal, $item){
        if($item['sexo'] == 'M'){
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





























