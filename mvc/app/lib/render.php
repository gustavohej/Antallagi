<?php

namespace app\lib;
use app\core\app;

class Render{

  private $render = false;

  private $data = array();

  public function __construct($view){

    $file = 'app/views/'.strtolower($view) . '.php';
    if(file_exists($file)){
      $this->render = $file;
    }
  }

  public function assign($array){
      $this->data['data'] = $array;
  }

  public function __destruct(){
    extract($this->data);
    include($this->render);
  }
}
