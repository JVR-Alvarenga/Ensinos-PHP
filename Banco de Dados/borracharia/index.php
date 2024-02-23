<?php
require 'dao/MercadoriaDao.php';
require 'config.php';

$dao = new MercadoriaDao($pdo);

$storage = [];

if($storage === null){
$storage = $dao->findAll();
}
?>

<h2>
    <a href="adicionar.html" >ADICIONAR MARCADORIA</a>
</h2>

<table border="1px" width="100%" >

    <tr>
        </th>ID</th>
        </th>MERCADORIA</th>
        </th>PREÇO</th>
        </th>AÇÕES</th>
    <tr>

    <?php foreach($storage as $itens): ?>
        <tr>
            </td><?=$itens['id']; ?></td>
            </td><?=$itens['name']; ?></td>
            </td><?=$itens['preco']; ?></td>
            <td>
                <a href="editar.php?id=<?=$itens['id'] ?>" >[ EDITAR MERCADORIA ]</a>
                <a href="deletar.php?id=<?=$itens['id'] ?>" >[ DELETAR MERCADORIA ]</a>
            </td>
        <tr>
    <?php endforeach; ?>
</table>