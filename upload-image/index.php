<?php

require_once('controllers/Core.php');
require_once('models/Upload.php');
require_once('helpers/Core.php');

$rout = explode('&', $_SERVER['REQUEST_URI'])[0];

require_once('routs/core.php');
