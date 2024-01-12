<?php

$pessoas = [
    ['nome' => 'Joao', 'sexo' => 'M', 'nota' =>  9],
    ['nome' => 'Julia', 'sexo' => 'F', 'nota' =>  10],
    ['nome' => 'Victor', 'sexo' => 'M', 'nota' =>  7],
    ['nome' => 'Juliano', 'sexo' => 'M', 'nota' =>  3],
    ['nome' => 'Ana', 'sexo' => 'F', 'nota' =>  6],
    ['nome' => 'Renata', 'sexo' => 'F', 'nota' =>  8]
];

$total_f = array_reduce($pessoas, 'somar_f');
function somar_f($subtotal, $item){
    if($item['sexo'] == 'F'){
        $subtotal ++;
    }
    return $subtotal;
}

echo $total_f;