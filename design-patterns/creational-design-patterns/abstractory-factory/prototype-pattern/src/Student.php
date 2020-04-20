<?php

class Student 
{
  public $name;
  public $year;
  public $grade;

  public function setName(string $name) 
  {
    $this->name = $name;
  }

  public function setYear(string $year) 
  {
    $this->year = $year;
  }

  public function setGrade(string $grade) 
  {
    $this->grade = $grade;
  }


}