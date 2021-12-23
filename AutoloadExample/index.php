<?php

spl_autoload_register(
  function($class) {
    $class = str_replace("\\", "/", $class);
    $path =  __DIR__ . "/src/$class.php";
    require($path);
  }
);

use Models\Animal\Dog;
use Models\Car\Fusca;
use Controller\Animal as AnimalController;
use Controller\Car as CarController;

$a = new Dog();
$f = new Fusca();
$ac = new AnimalController();
$cc = new CarController();
