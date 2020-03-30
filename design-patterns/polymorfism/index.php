<?php

function __autoload($class) 
{   
    $directories = array(
        'models' . DIRECTORY_SEPARATOR, 
        'interfaces' . DIRECTORY_SEPARATOR, 
        'abstract_classes' . DIRECTORY_SEPARATOR);

    if($class) {
        foreach($directories as $directory) {
            if(file_exists($directory . $class . '.php')) {
                include_once $directory . $class . '.php';
            }
        }
    }
}

$pets = array(
    'felix' => new Cat(),
    'oscar' => new Dog(),
    'snowflake' => new Cat()
);

foreach($pets as $pet) {
    print($pet->talk(true));
}

echo "\n";