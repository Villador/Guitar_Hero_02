<?php
spl_autoload_register(function($class){
  require 'clases/' . $class . '.php';
});
 ?>
