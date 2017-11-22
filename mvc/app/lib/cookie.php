<?php

namespace app\lib;

class Cookie{

  public function __construct(){

    if(!empty($_SESSION['cliente'])){
      foreach ($_SESSION['cliente'] as $key => $value) {
        setcookie($key, $value, time() + 3600);
      }
      var_dump($_SESSION);
    }
  }
}
