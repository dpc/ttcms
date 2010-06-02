<?php

require_once 'lib/common.php';

global $config;
$page = $args[0];

if ( $page == '') {
	$page = $config['default_page'];
}
$path = get_path_to_page($page);
$content = read_page($path);
if (is_null($content)) {
	return  "<p>Page does not exist. ($path)</p>";
}

return $content;

?>
