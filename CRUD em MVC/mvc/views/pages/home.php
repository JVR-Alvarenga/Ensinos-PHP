<?php $render('header'); ?>

<a href="<?=$base?>/novo">Novo Usuário</a>
<br/><br/>

<table border="1px" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($usuarios as $storage): ?>
        <tr>
            <td><?=$storage['id'];?></td>
            <td><?=$storage['nome'];?></td>
            <td><?=$storage['email'];?></td>
            <td>
                <a href="<?=$base?>/usuario/<?=$storage['id']?>/editar">[ editar ]</a>
                <a href="<?=$base?>/usuario/<?=$storage['id']?>/excluir" onclick="return confirm('Tem Certeza Que Deseja Deletar Este Arquivo?')">[ deletar ]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>


<?php $render('footer'); ?>