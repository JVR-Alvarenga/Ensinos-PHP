<?php
require_once 'class/Mercadoria.php';
require 'config.php';


class MercadoriaDao implements MethodosDao{
    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }

    public function add(Mercadoria $m){
        $sql = $this->pdo->prepare("INSERT INTO mercadorias (name, preco) VALUES (:name, :preco)");
        $sql->bindValue(':name', $m->getName());
        $sql->bindValue(':preco', $m->getPreco());
        $sql->execute();

        $m->setId($this->pdo->lastInsertId());

        return $m;
    }


    public function findAll(){
        $array = [];

        $sql = $this->pdo->query("SELECT * FROM mercadorias");
        if($sql->rowCount() > 0){
            $storage = $sql->fetchAll();

            foreach($storage as $itens){
                $m = new Mercadoria();
                $m->setId($itens['id']);
                $m->setName($itens['name']);
                $m->setPreco($itens['preco']);

                $array[] = $m;
            }
            return $array;

        }else{
            return false;
        }
    }


    public function findById($id){
        $sql = $this->pdo->prepare("SELECT * FROM mercadorias WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $storage = $sql->fetch();

            $m = new Mercadoria();
            $m->setId($storage['id']);
            $m->setName($storage['name']);
            $m->setPreco($storage['preco']);

            return $m;
        }else{
            return false;
        }

    }

    public function findBySearch($produto){
        $sql = $this->pdo->prepare("SELECT * FROM mercadorias WHERE id LIKE '%$produto%' or name LIKE '%$produto%'");
        $sql->execute();

        $array = [];
        if($sql->rowCount() > 0){
            $storage = $sql->fetchAll();

            foreach($storage as $itens){
                $m = new Mercadoria();
                $m->setId($itens['id']);
                $m->setName($itens['name']);
                $m->setPreco($itens['preco']);

                $array[] = $m;
            }
            return $array;
        }
    }


    public function update(Mercadoria $m){
        $sql = $this->pdo->prepare("UPDATE mercadorias SET name=:name, preco=:preco WHERE id=:id");
        $sql->bindValue(':id', $m->getId());
        $sql->bindValue(':name', $m->getName());
        $sql->bindValue(':preco', $m->getPreco());
        $sql->execute();

        return true;
    }


    public function delete($id){
        $sql = $this->pdo->prepare("DELETE FROM mercadorias WHERE id=:id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        return true;
    }
} 