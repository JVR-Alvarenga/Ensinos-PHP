<?php
require 'dao/MercadoriaDao.php';
require 'config.php';

$dao = new MercadoriaDao($pdo);

$name = htmlspecialchars($_POST['name']);
$preco = (int)$_POST['preco'];

if($name && $preco){

    $m = new Mercadoria();
    $m->setName($name);
    $m->setPreco($preco);

    $dao->add( $m );

    header("Location: index.php");
    exit;
}else{
    header("Location: adicionar.html");
    exit;
}