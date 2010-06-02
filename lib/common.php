<?php

require_once '3rd/markdown.php';

function check_security($args) {

	foreach($args as $arg) {
		if (preg_match('/[^a-zA-Z\.\-]/', $arg) != 0) {
			echo 'SECURITY!';
			exit(0);
		}
	}
}

function get_current_language() {
	global $config;
	if (isset($_COOKIE['lang']) && $_COOKIE['lang'] != '') {
		return $_COOKIE['lang'];
	}
	return $config['default_lang'];
}


function get_path_to_page($page) {
	global $config;
	if ($config['multilang']) {
		return 'page/content/' . $page . '.' . get_current_language() . '.txt';
	}
	return 'page/content/' . $page . '.txt';
}

function read_page($path) {
	if (file_exists($path)) {
		$text = file_get_contents($path);
		$html = Markdown($text);
		return ($html);
	}
	return NULL;
}

function echobig($string, $bufferSize = 8192)
{
	$splitString = str_split($string, $bufferSize);

	foreach($splitString as $chunk)
		echo $chunk;
}

?>
