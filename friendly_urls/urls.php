<?php

if (isset($_GET['item'])) {
	echo "</br>received: " . $_GET['item'] . ";";
}
if (isset($_GET['season'])) {
	echo "</br>received: " . $_GET['season'];
}
if (isset($_GET['page'])) {
	echo " </br>We are on page: " . $_GET['page'];
}
