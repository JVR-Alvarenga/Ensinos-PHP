<?php
require 'dao/MercadoriaDao.php';
require 'config.php';

$dao = new MercadoriaDao($pdo); 

$id = (int)$_GET['id'];
if($id){
    $itens = $dao->findById($id);
}else{
    header("Location: index.php");
    exit;
}

?>

<header>
<style>
        form {
            display: flex;
            flex-direction: row;
        }

        input {
            font-size: 20px;
            width: 500px;
            margin-left: 20px;
        }

        label{
            font-size: 25px;
        }
    </style>
</header>

<form action="editar_action.php" method="POST">
        <input type="hidden" name="id" value="<?=$itens->getId(); ?>" />

        <label>Nome da Mercadoria: </br>        
        <input type="text" name="name" value="<?=$itens->getName(); ?>" AUTOFOCUS />
        </label>

        <label>Preco da Mercadoria: </br>
        <input type="number" name="preco" value="<?=$itens->getPreco(); ?>" />
        </label>

        <input type="submit" value="Salvar" />
    </form>
