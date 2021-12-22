<?php

spl_autoload_register(
  function($classe) {
    require("$classe.php");
  }
);

$a = new Animal();

$p = new Planet();

$v = new Car();