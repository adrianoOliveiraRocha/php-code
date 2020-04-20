<?php

namespace Pizza;

class Pizza 
{
  private $size;
  private $cheese;
  private $pepperoni;
  private $bacon;

  public function __construct(PizzaBuilder $builder) 
  {
    $this->size = $builder->size;
    $this->cheese = $builder->cheese;
    $this->pepperoni = $builder->pepperoni;
    $this->bacon = $builder->bacon;
  }

  public function show()
  {
    $recipe = $this->size . " inch pizza with the following toopings: ";
    $recipe .= $this->cheese ? "cheese, " : "";
    $recipe .+ $this->pepperoni ? "pepperoni, " : "";
    $recipe .+ $this->bacon ? "bacon, " : "";

    return $recipe;
  }
}