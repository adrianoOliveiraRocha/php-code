<?php

namespace IcyApril\PetShop\AnimalFeeders;

class Dog
{
  public function __construct(string $petName)
  {
    if(strlen($petName) > 10) {
      throw new \Exception('Name too long');
    }
    
    $this->petName = $petName;
  }
}
