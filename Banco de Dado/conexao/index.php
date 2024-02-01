<?php

$pdo = new PDO("mysql:dbname=teste;host=localhost", "root", "");    
//fazendo conexao com o data base
$sql = $pdo->query('SELECT * FROM usuarios');
//pegando todos os dados, fazendo consulta
$dados = $sql->fetchAll(PDO::FETCH_ASSOC);
//salvando os dados

echo '<pre>';   //fazendo com que haja pulada de linha

print_r($dados);    //mostrando os dados