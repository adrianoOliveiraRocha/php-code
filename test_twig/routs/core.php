<?php

switch($rout) {

    case '/':
        $home = $twig->load('/core/base.html');
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