<?php
// get action
$arrayUri = explode('/', $_SERVER['REQUEST_URI']);
$action = $arrayUri[sizeof($arrayUri) - 1];

function __autoload($class) 
{    
    $directories = array('../control/', '../models/');
    foreach($directories as $directory) {
        if(file_exists($directory . $class . '.php')) {
            include_once $directory . $class . '.php';
            break;
        }
    }
}

switch ($action) {    
    case 'home':
        header('location:/../../index.php');
        break;
    
    case 'new':
        CoreController::newUser();
        break;
    
    case 'show':
        echo "It's time of to see all";
        break;
    
    default:
        //
        break;
}





