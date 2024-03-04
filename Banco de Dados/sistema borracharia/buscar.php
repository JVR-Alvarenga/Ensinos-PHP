<?php
require 'dao/MercadoriaDao.php';
require 'config.php';

$dao = new MercadoriaDao($pdo); 

$produto = htmlspecialchars($_POST['busca']);
$p = [];
if($produto){
    $p = $dao->findBySearch($produto);
}else{
    header("Location: index.php");
    exit;
}
?>
<header>
    <style>
        a{
            text-decoration:none;
        }
    </style>
</header>

<h2>
    <a href="index.php" >Voltar Para Tabela</a>
</h2>

<table border="1px" width="100%" >
            <tr>
                <th>ID</th>
                <th>MERCADORIA</th>
                <th>PREÇO</th>
                <th>AÇÕES</th>
            </tr>
            <?php foreach($p as $itens): ?>
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
        <table> 