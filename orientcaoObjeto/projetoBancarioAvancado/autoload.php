<?php

spl_autoload_register(function($class){     //criando autoload
    $file = 'classes\index.php';    //definindo a variavel com o local do arquivo

    if(file_exists($file)){     //verificando se o arquivo existe
        require $file;          //incluindo o arquivo 
    }
});