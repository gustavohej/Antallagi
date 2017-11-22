<?php

require_once 'app/dao/server.php';

class ClientesModel extends DAO{

  //tabela clientes
  //id auto-increment - chave primaria
  private $id = null;
  private $nome;
  private $email;
  private $telefone;
  private $senha;
  private $data_nasc;
  private $msg;

  public function getId(){
    return $this->id;
  }

  public function setId($id){
    $this->id = $id;
  }

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

  public function getData_nasc(){
    return $this->data_nasc;
  }

  public function setData_nasc($data_nasc){
    $this->data_nasc = $data_nasc;
  }

  public function getMsg(){
    return $this->msg;
  }

  public function setMsg($msg){
    $this->msg = $msg;
  }

  //Metodo de inserção de dados na tabela clientes
  public function insert(){
    $sql  = 'INSERT INTO clientes (nome_cliente, email_cliente, telefone_cliente, senha_cliente, data_nasc_cliente)
             VALUES (:nome, :email, :telefone, :senha, :data_nasc)';
    $stmt = DAO::prepare($sql);
    $stmt->bindParam(':nome', $this->nome);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':telefone', $this->telefone);
    $stmt->bindParam(':senha', $this->senha);
    $stmt->bindParam(':data_nasc', $this->data_nasc);
    return $stmt->execute();
  }

  //Metodo de atualização de dados na tabela clientes
  public function update($id){
    $sql  = 'UPDATE clientes SET nome_cliente = :nome, email_cliente = :email, telefone_cliente = :telefone,
             senha_cliente = :senha, data_nasc_cliente = :data_nasc WHERE id_cliente = :id';
    $stmt = DAO::prepare($sql);
    $stmt->bindParam(':nome', $this->nome);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':telefone', $this->telefone);
    $stmt->bindParam(':senha', $this->senha);
    $stmt->bindParam(':data_nasc', $this->data_nasc);
    $stmt->bindParam(':id', $id);
    return $stmt->execute();
  }

  //Metodo de pesquisa pelo id na tabela clientes
  public function find($id){
    $sql  = 'SELECT * FROM clientes WHERE id_cliente = :id';
    $stmt = DAO::prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
  }

  //Metodo de listagem dos dados na tabela clientes
  public function findAll(){
    $sql  = 'SELECT * FROM clientes';
    $stmt = DAO::prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
  }

  //Metodo de exclusão dos dados na tabela clientes
  public function delete($id){
    $sql  = 'DELETE FROM clientes WHERE id_cliente = :id';
    $stmt = DAO::prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    return $stmt->execute();
  }

}
