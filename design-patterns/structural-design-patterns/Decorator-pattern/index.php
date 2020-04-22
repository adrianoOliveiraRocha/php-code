<?php

require_once('src/Book.php');
require_once('src/EBook.php');
require_once('src/PrintBook.php');

$PHPEBook = new EBook("Mastering PHP Design Patterns", "Junade Ali", "Some contents.");

$PHPEBook = new PrintBook("Mastering PHP Design Patterns", "Junade Ali", "Some contents.");
print("{$PHPEBook->getText()}\n");
print_r($PHPEBook);
