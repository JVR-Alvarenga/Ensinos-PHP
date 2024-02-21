<?php

class Usuario {
    private $id;
    private $name;
    private $email;
    private $senha;

    public function setId($i){
        $this->id = $i;
    }
    public function getId(){
        return $this->id;
    }

    public function setName($n){
        $this->name = ucwords($n);
    }
    public function getName(){
        return $this->name;
    }

    public function setEmail($e){
        $this->email = $e;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setPassWord($p){
        $this->senha = $p;
    }
    public function getPassWord(){
        return $this->senha;
    }

}


interface MethodosDao {
    public function add(Usuario $u);
    public function findAll();
    public function findByPassWord($passWord);
    public function findById($id);
    public function update(Usuario $u);
    public function delete($id);
}