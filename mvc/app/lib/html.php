<?php

namespace app\lib;

class Html{

  public static function style(){
    $css = array(
      'materialize',
      'main'
    );
    foreach ($css as $value) {
      $file = 'public/css/'.$value.'.css';
      if (file_exists($file)) {
        echo '<link rel="stylesheet" type="text/css" href="'.$file.'">';
      }
    }
  }

  public static function script(){
    $js = array();
    foreach ($js as $value) {
      $file = 'public/js/'.$value.'.js';
      if (file_exists($file)) {
        echo '<script type="text/javascript" src="'.$file.'"></script>';
      }
    }
  }
}
