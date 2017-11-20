<?php

use app\lib\render;
use app\models\Clientes;

class Cliente{

    public function index(){
      new Render('cliente/index');
    }

    public function listar(){

      $cliente = new Clientes();
      $data = $cliente->all();
      $view = new Render('cliente/index');
      $view->assign($data);
    }

    public function cadastrar(){
      $nome  = $_POST['nome'];
      $email = $_POST['email'];
      $telefone = $_POST['telefone'];
      $senha = $_POST['senha'];
      $nascimento = $_POST['nascimento'];

      $cliente = new Clientes();

      $cliente->setNome($nome);
      $cliente->setEmail($email);
      $cliente->setTelefone($telefone);
      $cliente->setSenha($senha);
      $cliente->setNascimento($nascimento);

      $cliente->insert();
    }
}
