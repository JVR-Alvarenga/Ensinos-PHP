<?php
require_once 'class/Usuario.php';
require 'config.php';


class UsuarioDao implements MethodosDao{
    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }

    public function add(Usuario $u){
        $sql = $this->pdo->prepare("INSERT INTO operadores (name, email, senha) VALUES (:name, :email, :senha)");
        $sql->bindValue(':name', $u->getName());
        $sql->bindValue(':email', $u->getEmail());
        $sql->bindValue('senha', $u->getPassWord());
        $sql->execute();

        $u->setId($this->pdo->lastInsertId());

        return $u;
    }


    public function findAll(){
        $array = [];

        $sql->$this->pdo->query("SELECT * FROM operadores");
        if($sql->rowCount() > 0){
            $storage = $sql->fetchAll();

            foreach($storage as $user){
                $u = new Usuario();
                $u->setId($user['id']);
                $u->setName($user['name']);
                $u->setEmail($user['email']);
                $u->setPassWord($user['senha']);

                $array[] = $u;
            }

        }else{
            return false;
        }

        return $array;
    }


    public function findByPassWord($passWord){
        $sql = $this->pdo->prepare("SELECT * FROM operadores WHERE senha = :senha");
        $sql->bindValue(':senha', $passWord);
        $sql->execute();

        if($sql->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }


    public function findById($id){
        $sql = $this->pdo->prepare("SELECT * FROM operadores WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $user = $sql->fetch();

            $u = new Usuario();
            $u->setId($user['id']);
            $u->setName($user['name']);
            $u->setEmail($user['email']);
            $u->setPassWord($user['senha']);

            return $u;
        }else{
            return false;
        }

    }


    public function update(Usuario $u){
        $sql = $this->pdo-prepare("UPDATE operadores SET name=:name, email=:email, senha=:senha");
        $sql->bindValue(':name', $u->getName());
        $sql->bindValue(':email', $u->getEmail());
        $sql->bindValue (':senha', $u->getPassWord());
        $sql->execute();

        return true;
    }


    public function delete($id){
        $sql = $this->pdo-prepare("DELETE FROM operadores WHERE id=:id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        return true;
    }
} 