<?php

function __autoload($class) 
{	
	$directories = array("models/", "abstract_classes/", "interfaces/");
	if($class) {
		foreach($directories as $directory) {
			if(file_exists($directory . $class . '.php')) {
				include_once $directory . $class . '.php';
				echo $directory . $class . '.php included</br>';
			}			
		}		
	}	
}

$whiskers = new Cat();
echo $whiskers->walk(1);





