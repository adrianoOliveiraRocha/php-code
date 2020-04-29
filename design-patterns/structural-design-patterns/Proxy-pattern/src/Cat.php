<?php

namespace IcyApril\PetShop\AnimalFeeders;

use IcyApril\PetShop\AnimalFeeder;

class Cat implements AnimalFeeder
{
  public function __construct(string $petName)
  {
    $this->petName = $petName;
  }
  
  public function dropFood(int $hungerLevel, bool $water = false): string
  {
    return $this->selectedFood($hungerLevel);
  }
  
  public function displayFood(int $hungerLevel): string
  {
    switch($hungerLevel) {
      case 0:
        return 'lamb';
        break;
      case 1:
        return 'chicken';
        break;
      case 2:
        return 'tuna';
        break;
    }
  }
  
  
}


