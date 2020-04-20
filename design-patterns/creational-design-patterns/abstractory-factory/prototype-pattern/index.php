<?php

require_once('src/Student.php');

$prototypeStudent = new Student();
$prototypeStudent->setName("Dave");
$prototypeStudent->setYear(2);
$prototypeStudent->setGrade('A*');

// print_r($prototypeStudent);

$theLesserChild = clone $prototypeStudent;
$theLesserChild->setName('Mike');
$theLesserChild->setGrade('B');

// print_r($theLesserChild);

$theChildProdigy = clone $prototypeStudent;
$theChildProdigy->setName('Bob');
$theChildProdigy->setYear(3);
$theChildProdigy->setGrade('A');

// print_r($theChildProdigy);

$theChildProdigy->danceSkills = "Outstanding"; // add attribute
$theChildProdigy->dance = function (string $style) { // add a method
  return "Dancing $style style";
};

echo $theChildProdigy->dance->__invoke('Pogo') . "\n";
echo $theChildProdigy->danceSkills . "\n";


// print_r($theChildProdigy);
