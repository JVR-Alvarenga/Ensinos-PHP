<?php
require 'dao/MercadoriaDao.php';
require 'config.php';

$dao = new MercadoriaDao($pdo); 

$produto = htmlspecialchars($_POST['produto']);

if($produto){
    $p = $dao->findByName($produto);
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
            <tr>
                <td><?=$p->getId(); ?></td>
                <td><?=$p->getName(); ?></td>
                <td><?=$p->getPreco(); ?></td>
                <td>
                    <a href="editar.php?id=<?=$p->getId(); ?>" >[ EDITAR MERCADORIA ]</a>
                    <a href="delete.php?id=<?=$p->getId(); ?>" onclick="return confirm('Tem certeza que quer deletar este arquivo?')" >[ DELETAR MERCADORIA ]</a>
                </td>
            </tr>
        <table> 