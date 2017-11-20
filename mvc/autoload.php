<?php

define( 'ROOT', dirname(__FILE__));
define( 'DS', DIRECTORY_SEPARATOR);

function __autoload($classname) {
  $filename = ROOT . DS . str_replace('\\', DS, $classname) . '.php';
  include_once($filename);
}
