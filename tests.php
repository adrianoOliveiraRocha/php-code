<?php

$class = "InterfaceAnimal";
$prefix = "Interface";
$prefix1 = "abstract";

if(strpos($class, $prefix1) === 0) {
    echo "This prefix exists in this string \n";
} else {
    echo "It doesn't exists \n";
}
