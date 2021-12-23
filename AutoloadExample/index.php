<?php

spl_autoload_register(
  function($class) {
    $class = str_replace("\\", "/", $class);
    $path =  __DIR__ . "/src/$class.php";
    require($path);
  }
);

use models\animal\Dog;
use models\car\Fusca;

$a = new Dog();
$f = new Fusca();
