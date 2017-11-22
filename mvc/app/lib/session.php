<?php

namespace app\lib;

use app\dao\dao;
use app\lib\cookie;
use Exception;

class Session extends DAO{

  protected $table = 'clientes';

  private $email;
  private $senha;

  public function __construct($email = null, $senha = null){
    try {
      new Cookie();
      $this->setEmail($email);
      $this->setSenha($senha);
      $stmt = $this->find();
      if($stmt->rowCount() == 0){
        throw new Exception('Dados de logon incorretos!');
      } else {
        $_SESSION['cliente'] = $stmt->fetch();
      }
    } catch (Exception $e) {
      $e->getMessage();
    }
  }

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

  public function find(){
    $sql = 'SELECT * FROM ' . $this->table . ' WHERE email_cliente = :email AND senha_cliente = :senha';
    $stmt = DAO::prepare($sql);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':senha', $this->senha);
    $stmt->execute();
    return $stmt;
  }

  public function logout(){
    session_destroy();
  }

  public function __destruct(){
    if (!isset($_SESSION['cliente'])) {
      session_start();
    }
  }
}
