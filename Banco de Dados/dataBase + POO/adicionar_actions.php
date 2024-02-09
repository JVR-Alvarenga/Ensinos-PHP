<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$name = htmlspecialchars($_POST['name']);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email){

    if($usuarioDao->findByEmail($email) === false){
        $usuario = new Usuario();
        $usuario->setName($name);
        $usuario->setEmail($email);

        $usuarioDao->add( $usuario );

        header("Location: index.php");
    }else{
        header("Location: adicionar.html");
        exit;
    }

}else{
    header("Location: adicionar.html");
    exit;
}