<?php

require_once __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader( __DIR__ . '/views');

$twig = new \Twig\Environment($loader);

$rout = explode('?', $_SERVER['REQUEST_URI'])[0];

// routs/core.php
switch($rout) {

    case '/':
        $home = $twig->load('/core/home.html');
        echo $home->render();
    break; 

    case '/new-user':
        $page1 = $twig->load('/core/page1.html');
        echo $page1->render(['profession' => 'PHP Programmer']);
    break;

    case '/show-users':
        $page1 = $twig->load('/core/page2.html');
        echo $page1->render(['old_profession' => 'Musician']);
    break;

}

