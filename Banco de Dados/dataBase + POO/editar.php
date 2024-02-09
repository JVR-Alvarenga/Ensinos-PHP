<?php 
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$usuario = false;
$id = (int)$_GET['id'];

if($id){
    $usuario = $usuarioDao->findById($id);
}
if($usuario === false){
    header("Location: index.php");
    exit;
}
?>

<h1>EDITAR USUARIO</h1>

<form action="editar_actions.php" method="POST">
    <input type="hidden" name="id"  value="<?=$usuario->getId(); ?>" >

    <label>Nome: </br>
        <input type="text" name="name" value="<?=$usuario->getName(); ?>" />
    </label></br></br></br>
    
    <label>E-mail:</br>
        <input type="email" name="email" value="<?=$usuario->getEmail(); ?>" />
    </label></br></br></br>

    <input type="submit" value="Salvar" />
</form>