<?php $render('header'); ?>

    <form action="<?=$base?>/usuario/<?=$args['id'] ?>/editar" method="POST" >
        <input type="text" name="name" value="<?=$args['name'] ?>" require />
        <br/><br/>
        <input type="email" name="email" value="<?=$args['email'] ?>" require />
        <br/><br/>

        <input type="submit" value="Adicionar" />
    </form>

<?php $render('footer'); ?>