<?php 
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$id = (int)$_POST['id'];
$name = htmlspecialchars($_POST['name']);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($id && $name && $email){
    $usuario = new Usuario();
    $usuario->setId($id);
    $usuario->setName($name);
    $usuario->setEmail($email);

    $usuarioDao->update( $usuario );

    header("Location: index.php");
}else{
    header("Location: editar.php?id=".$id);
}
