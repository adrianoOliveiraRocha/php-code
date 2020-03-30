<?php
require __DIR__ . '/Autoload/Loader.php';
Application\Autoload\Loader::init(__DIR__ . '/..');
$test = new Application\Test\TestClass();

echo "initing...";

function getPosition($haystack, $needle) {
	return stripos(haystack, needle);
}

$haystack = "I am sorry. I should not have made it";
$needle = "a";


$position = getPosition($haystack, $needle);
if ($position !== false) {
	echo $position;
} else {
	echo "</br>nothing for show";
}

echo "</br>end";
?>
