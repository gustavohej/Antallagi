<?php

namespace app\lib;

use app\dao\dao;
use PDO;

abstract class Crud extends DAO{

  protected $table;

  abstract public function insert();
  abstract public function update($id);

  public function find($id){
    $sql = 'SELECT * FROM '.$this->table.' WHERE id = :id';
    $stmt = DAO::prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
  }

  public function all(){
    $sql = 'SELECT * FROM '.$this->table;
    $stmt = DAO::prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
  }

  public function delele($id){
    $sql = 'DELETE * FROM '.$this->table.' WHERE id = :id';
    $stmt = DAO::prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    return $stmt->execute();
  }
}
