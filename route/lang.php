<?php

require_once 'lib/common.php';

global $config;

check_security($args);

$lang = $args[1];

if ($lang == "") {
	$lang = $config['default_lang'];
}

//header('Location: /' . $config['default_page']);
setcookie('lang', $lang, 0, '/');
$_COOKIE['lang'] = $lang;


return <<<EOF
<script type="text/javascript">
<!--
window.location ="/
EOF
. $config['default_page'] .
<<<EOF
"
//-->
</script> "
EOF
?>
