<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();
?>

<a href="adicionar.html" >ADICIONAR USUARIO</a>

<table border="1px" width="100%" >

    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>ACOES</th>
    </tr>
    <?php foreach($lista as $usuario): ?>   
    <tr>
        <td><?=$usuario->getId(); ?></td>
        <td><?=$usuario->getName(); ?></td>
        <td><?=$usuario->getEmail(); ?></td>
        <td>
            <a href="editar.php?id=<?=$usuario->getId(); ?>" >[ Editar ]</a>
            <a href="excluir.php?id=<?=$usuario->getId(); ?>" onclick="return confirm('Tem certeza que quer deletar este arquivo?')" >[ Excluir ]</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>