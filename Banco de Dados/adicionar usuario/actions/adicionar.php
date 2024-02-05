<?php
require 'config.php';

$name = htmlspecialchars($_POST['name']);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email){

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue('email', $email);
    $sql->execute();

    if($sql->rowCount() === 0){

        $sql = $pdo->prepare("INSERT INTO usuarios (name, email) VALUES (:name, :email)");
        $sql->bindValue('name', $name);
        $sql->bindValue('email', $email);
        $sql->execute();

        header("Location: ../index.php");
        exit;

    }else{
        header("Location: ../index.php");
        exit;
    }

}else{
    header("Location: ../index.php");
    exit;
}