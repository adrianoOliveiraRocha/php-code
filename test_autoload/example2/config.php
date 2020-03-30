<?php
// get protocol
$protocol = null;
if($_SERVER['SERVER_PROTOCOL'] === 'HTTP/1.1') {
    $protocol = 'http://';
} else {
    $protocol = 'https://';
}

define('ROOT', dirname (__FILE__) . DIRECTORY_SEPARATOR);
define('STATIC_DIRECTORY', $protocol . "{$_SERVER['HTTP_HOST']}/core/static");
