<?php
require 'dao/MercadoriaDao.php';
require 'config.php';

$dao = new MercadoriaDao($pdo); 

$id = (int)$_POST['id'];
$name = htmlspecialchars($_POST['name']);
$preco = (int)$_POST['preco'];

if($id && $name && $preco){

    $m = new Mercadoria();
    $m->setId($id);
    $m->setName($name);
    $m->setPreco($preco);

    $dao->update( $m );
    header("Location: index.php");
    exit;

}else{
    header("Location: editar.php.$id");
    exit;
}