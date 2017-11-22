<?php

namespace app\models;

use app\lib\crud;
use app\dao\dao;

class Usuarios extends Crud{

  protected $table = 'login';

  private $id = null;
  private $email;
  private $senha;
  private $tipo;

  public function getEmail(){
    return $this->email;
  }
  public function setEmail($email){
    $this->email = $email;
  }
  public function getSenha(){
    return $this->senha;
  }
  public function setSenha($senha){
    $this->senha = $senha;
  }
  public function getTipo(){
    return $this->tipo;
  }
  public function setTipo($tipo){
    $this->tipo = $tipo;
  }

  public function insert(){
    $sql  = 'INSERT INTO '. $this->table .' (email, senha, tipo)
             VALUES (:email, :senha, :tipo)';
    $stmt = DAO::prepare($sql);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':senha', $this->senha);
    $stmt->bindParam(':tipo', $this->tipo);
    return $stmt->execute();
  }

  public function update($id){
	$sql  = 'UPDATE clientes SET email = :email,
             senha = :senha, tipo = :tipo WHERE idLogin = :id';
    $stmt = DAO::prepare($sql);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':senha', $this->senha);
    $stmt->bindParam(':tipo', $this->tipo);
    return $stmt->execute();
  }
}
