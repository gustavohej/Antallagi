<?php

use app\lib\render;

class Login{

    public function index(){
      new Render('login/index');
    }
}
