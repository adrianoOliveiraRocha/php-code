<?php

namespace Controller;

class Core
{
    public static function home($twig)
    {
        // ... something here
        $home = $twig->load('/core/home.html');
        echo $home->render();
    }    
}