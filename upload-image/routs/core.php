<?php

switch($rout) {

  case '/':
    include_once('views/home.php');
  break;

  case '/upload':
    \Controller\Core::uploadImage($_FILES['image'], '/uploads/');
  break;

}