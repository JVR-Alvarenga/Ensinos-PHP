<?php
require 'dao/UsuarioDao.php';
require 'config.php';

$usuarioDao = new UsuarioDao($pdo);

$name = htmlspecialchars($_POST['name']);
$senha = (int)$_POST['password'];

if($name && $senha){
    if($usuarioDao->findByPassWord($senha) === true){
        header("Location:index.php");
        exit;
    }else{
        header("Location:login.html");
        exit;
    }
}else{
    header("login.php");
    exit;
}