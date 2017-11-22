<?php

namespace app\core;

class App{
	
  protected $controller = 'Home';

  protected $method = 'index';

  protected $param = [];

  public function __construct(){
		
    $url = self::parseURL($_SERVER['REQUEST_URI']);
	
    if(file_exists('app/controllers/' . $url[0] . '.php')){
      $this->controller = $url[0];
      unset($url[0]);
    }

    require_once 'app/controllers/' . $this->controller . '.php';
    $this->controller = new $this->controller;

    if(isset($url[1]) && method_exists($this->controller, $url[1])){
      $this->method = $url[1];
      unset($url[1]);
    }

    $this->param = $url ? array_values($url) : [];
    call_user_func_array([$this->controller, $this->method], $this->param);
  }

  private function parseUrl($url){

    $url = substr($url, 15, strlen($url));
    return explode("/", filter_var(rtrim($url), FILTER_SANITIZE_URL));
  }

}
