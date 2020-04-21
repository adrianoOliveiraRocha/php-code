<?php

require_once('src/EBook.php');

$PHPEBook = new EBook("Mastering PHP Design Patterns", "Junade Ali", "Some contents");

echo "{$PHPEBook->getTitle()}";