<?php


function my_autoload($class) {
  if(preg_match('/\A\w+\Z/', $class)) {
    include 'classes/' . $class . '.csv';
  }
}
spl_autoload_register('my_autoload');




?>
