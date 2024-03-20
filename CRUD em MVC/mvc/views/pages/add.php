<?php $render('header'); ?>

    <form action="<?=$base?>/novo" method="POST" >
        <input type="text" name="name" placeholder="Nome" require />
        <br/><br/>
        <input type="email" name="email" placeholder="E-mail" require />
        <br/><br/>

        <input type="submite" value="Adicionar" />
    </form>

<?php $render('footer'); ?>