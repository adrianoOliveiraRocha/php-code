<?php

class Player {
  public $name;
  public $country;
  public $age;
  public $currentTeam;
}

$r = new Player();
$r->name = "Ronaldo";
$r->country = "Brazil";
$r->age = 45;
$r->currentTeam = "Barcelona";

print_r($r);