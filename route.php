<?php

function route($args) {
	switch ($args[0]) {
	case 'lang':
		return require 'route/lang.php';
		break;
	default:
		return require 'route/page.php';
		break;
	}
}

?>
