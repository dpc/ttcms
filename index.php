<?php

require_once 'config.php';
require_once 'lib/common.php';
require_once 'route.php';


global $meta;

$args = explode ('/', $_GET['args']);

$content = route($args);

if ($content != '') {
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
	include 'lib/header.php';
	echo '<body>';
	$nav = read_page(get_path_to_page($config['navigation_page']));
	if (!is_null($nav)) {
		echo '<div id="navigation">';
		echobig($nav);
		echo '</div>';
	}

	echo '<div id="content">';
	echobig($content);
	echo '</div>';
	echo '</body>';
	include 'lib/footer.php';
}
?>
