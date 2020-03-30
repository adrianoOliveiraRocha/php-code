<?php
require_once 'vendor/autoload.php';

function getLoader(){
  $loader = new Twig_Loader_Filesystem('templates');
  return $loader;
}

function getTwig(){
  $loader = getLoader();
  $twig = new Twig_Environment($loader, array(
    // 'cache' => 'cache',
  ));
  return $twig;
}

if (isset($_GET['key'])) {
  switch($_GET['key']){
    case 'test1':
      call_page1();
      break;
    case 'test2':
      call_page2();
      break;
  }
} else{
  $twig = getTwig();
  echo $twig->render('index.twig', array(
    'name' => 'Adriano Oliveira',
    'profission' => 'Systema Analist',
  ));
}

function call_page1(){
  echo $twig->render('page1.twig', array(
    'var1' => 'this is my variable 1',
    'var2' => 'this is my variable 2',
  ));
}

function call_page2(){
  echo $twig->render('page1.twig', array(
    'var3' => 'this is my variable 3',
    'var4' => 'this is my variable 4',
  ));
}

?>
