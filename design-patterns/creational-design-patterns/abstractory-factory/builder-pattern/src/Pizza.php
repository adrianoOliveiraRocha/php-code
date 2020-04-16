<?php

class Pizza {
  private $size;
  private $cheese;
  private $pepperoni;
  private $bacon;

  public function __construct($size, $cheese, $pepperoni, $bacon) {
    $this->size = $size;
    $this->cheese = $cheese;
    $this->pepperoni = $pepperoni;
    $this->bacon = $bacon;
  }

  public function show() {
    $recipe = $this->size . " inch pizza with the following toopings: ";
    $recipe .= $this->cheese ? "cheese, " : "";
    $recipe .+ $this->pepperoni ? "pepperoni, "
  }
}