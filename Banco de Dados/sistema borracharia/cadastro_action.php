<?php
require 'dao/UsuarioDao.php';
require 'config.php';

$usuarioDao = new UsuarioDao($pdo);

$name = htmlspecialchars($_POST['name']);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = (int)$_POST['password'];


if($name && $email && $senha){

    $user = new Usuario();
    $user->setName($name);
    $user->setEmail($email);
    $user->setPassWord($senha);

    $usuarioDao->add( $user );

    header("Location: index.php");
    exit;

}else{
    header("Location: cadastro.html");
    exit;
}
