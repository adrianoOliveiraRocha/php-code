<?php

function __autoload($class)
{
    $directories = array('models/', 'traits/');
    if($class) {
        foreach($directories as $directory) {
            print($directory . $class . '.php' . "\n");
            if(file_exists($directory . $class . '.php')){
                include_once $directory . $class . '.php';
                break;
            }
        }
    }
}

$mimi = new Cat();
$mimi->setFirstName('Mimi');
$mimi->setLastName('Peixoto');

print($mimi->walk() . "\n");
print($mimi->getFullName() . "\n");



