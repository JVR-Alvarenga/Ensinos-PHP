<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuarioController extends Controller{
    public function add(){
        $this->render('add');
    }

    public function addAction(){
        $nome = htmlspecialchars($_POST['name']);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if($nome && $email){
            Usuario::insert([
                'nome' => $nome,
                'email' => $email
            ])->execute();

            $this->redirect('/');
        }

        $this->redirect('/novo');
    }

    public function edit($user){
        $usuario = Usuario::select()->find($user['id']);

        $this->render('edit', [
            'usuario' => $usuario
        ]);
    }

    public function editAction($user){
        
    }

}