<?php

class Mercadoria {
    private $id;
    private $name;
    private $preco;

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

    public function setPreco($p){
        $this->preco = $p;
    }
    public function getPreco(){
        return $this->preco;
    }

}


interface MethodosDao {
    public function add(Mercadoria $u);
    public function findAll();
    public function findById($id);
    public function findByName($name);
    public function update(Mercadoria $u);
    public function delete($id);
}