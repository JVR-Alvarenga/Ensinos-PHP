<?php
require 'dao/MercadoriaDao.php';
require 'config.php';

$dao = new MercadoriaDao($pdo); 

$id = (int)$_GET['id'];

if($id){

    $dao->delete($id);

}

header("Location: index.php");