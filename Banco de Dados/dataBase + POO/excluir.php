<?php 
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$id = (int)$_GET['id'];

if($id){
    $usuarioDao->delete($id);
}

header("Location: index.php");
exit;