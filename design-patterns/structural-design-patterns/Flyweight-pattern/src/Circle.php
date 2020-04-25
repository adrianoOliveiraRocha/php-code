<?php

class Circle
{
  private $colour;
  private $x;
  private $y;
  private $radius;

  public function __construct(string $colour)
  {
    $this->colour = $colour;
  }  

  public function setX(string $x)
  {
    $this->x = $x;
  }

  public function setY(string $y)
  {
    $this->y = $y;
  }

  public function setRadius(string $radius)
  {
    $this->radius = $radius;
  }

  public function draw()
  {
    print("Drwaing circule with is " . $this->colour 
      . "at [" . $this->x . ", " . $this->y 
      . "] of radius " . $this->radius . ".");
    echo "\n";
  }

}
