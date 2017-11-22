<?php

namespace app\models;

use app\lib\crud;
use app\dao\dao;

class Clientes extends Crud{

  protected $table = 'clientes';

  private $id = null;
  private $nome;
  private $email;
  private $telefone;
  private $senha;
  private $nascimento;

  public function getNome(){
    return $this->nome;
  }
  public function setNome($nome){
    $this->nome = $nome;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setEmail($email){
    $this->email = $email;
  }
  public function getTelefone(){
    return $this->telefone;
  }
  public function setTelefone($telefone){
    $this->telefone = $telefone;
  }
  public function getSenha(){
    return $this->senha;
  }
  public function setSenha($senha){
    $this->senha = $senha;
  }
  public function getNascimento(){
    return $this->nascimento;
  }
  public function setNascimento($nascimento){
    $this->nascimento = $nascimento;
  }

  public function insert(){
    $sql  = 'INSERT INTO '. $this->table .' (nome_cliente, email_cliente, telefone_cliente, senha_cliente, data_nasc_cliente)
             VALUES (:nome, :email, :telefone, :senha, :nascimento)';
    $stmt = DAO::prepare($sql);
    $stmt->bindParam(':nome', $this->nome);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':telefone', $this->telefone);
    $stmt->bindParam(':senha', $this->senha);
    $stmt->bindParam(':data_nasc', $this->nascimento);
    return $stmt->execute();
  }

  public function update($id){

  }
}
