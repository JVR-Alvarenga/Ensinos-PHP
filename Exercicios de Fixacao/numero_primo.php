<?php

$n = 4;

function primo($numero){
    if($numero <= 1){
        return 'n eh primo';
    }elseif($numero == 2){
        return 'primo';
    }

    for($i=2;$i<$numero;$i++){
        if($numero % $i == 0){ 
            return 'n eh primo';
        }else{
            return 'primo';
        }
    }
}

echo primo($n);