<?php
require 'dao/MercadoriaDao.php';
require 'config.php';

$dao = new MercadoriaDao($pdo); 

$storage = $dao->findAll();

?>

<header>
<style>
        div {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        input {
            font-size: 20px;
            width: 500px;
            margin-top: 10px;
        }

        a{
            text-decoration: none;
        }
    </style>
</header>

<div>
    <h3>
        <a href="adicionar.html" >ADICIONAR MARCADORIA</a>
    </h3>

    <form action="buscar.php" method="POST" >
        <input type="text" name="busca" placeholder="Buscar Mercadoria:" />
    </form>

</div>

<table border="1px" width="100%" >

    <tr>
        <th>ID</th>
        <th>MERCADORIA</th>
        <th>PREÇO</th>
        <th>AÇÕES</th>
    </tr>

    <?php foreach($storage as $itens): ?>
        <tr>
            <td><?=$itens->getId(); ?></td>
            <td><?=$itens->getName(); ?></td>
            <td><?=$itens->getPreco(); ?></td>
            <td>
                <a href="editar.php?id=<?=$itens->getId(); ?>" >[ EDITAR MERCADORIA ]</a>
                <a href="delete.php?id=<?=$itens->getId(); ?>" onclick="return confirm('Tem certeza que quer deletar este arquivo?')" >[ DELETAR MERCADORIA ]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
