<?php 
require 'config.php';

$info = [];
$id = filter_input(INPUT_GET, 'id');
$sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
$sql->bindValue('id', $id);
$sql->execute();

if($sql->rowCount() > 0){

    $info = $sql->fetch(PDO::FETCH_ASSOC);

}else{
    header("Location: index.php");
    exit;
}

?>

<h1>EDITAR USUÁRIO</h1>

<form action="actions/editar.php" method="POST" >
    <input type="hidden" name="id" value="<?=$info['id'];?>"/>

    <label>
        Nome: </br>
        <input type="text" name="name" value="<?=$info['name'];?>" />
    </label>  </br></br></br>
    <label>
        E-mail: </br>
        <input type="email" name="email" value="<?=$info['email'];?>" />
    </label>  </br></br></br>

    <input type="submit" value="Salvar">    
</form>