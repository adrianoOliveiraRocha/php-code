<?php

require_once(__DIR__ . '/src/factory/ToyFactory.php');
require_once(__DIR__ . '/src/factory/SFToyFactory.php');
require_once(__DIR__ . '/src/factory/UKToyFactory.php');

require_once(__DIR__ . '/src/toys/Toy.php');
require_once(__DIR__ . '/src/toys/MazeToy.php');
require_once(__DIR__ . '/src/toys/PuzzleToy.php');
require_once(__DIR__ . '/src/toys/SFMazeToy.php');
require_once(__DIR__ . '/src/toys/SFPuzzleToy.php');
require_once(__DIR__ . '/src/toys/UKMazeToy.php');
require_once(__DIR__ . '/src/toys/UKPuzzleToy.php');

$sanFranciscoFactory = new \Factory\SFToyFactory();
var_dump($sanFranciscoFactory->makeMaze());
echo "\n";
var_dump($sanFranciscoFactory->makePuzzle());
echo "\n";