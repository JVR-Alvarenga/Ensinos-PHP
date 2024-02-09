<?php 

class Usuario {
    private $id;
    private $name;
    private $email;

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

}

interface UsuarioDAO {
    public function add(Usuario $u); //adicionar usuario
    public function findAll();   //encontrar tudo
    public function findByEmail($email);  //encontrar pelo email
    public function findById($id);  //encontrar pelo id
    public function update(Usuario $u);  //update recenbendo uma variavel da classe Usuario
    public function delete($id); //deleando recenbendo uma variavel da classe Usuario
 }