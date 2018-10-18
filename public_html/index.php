<?php
	session_start();
	require_once $_SERVER['DOCUMENT_ROOT'].'/../engine/variables.php';
	require_once ENGINE.'/autoload.php';
	
	if (!$path = preg_replace(['#^/#', '#[?].*#'],'',$_SERVER['REQUEST_URI'])) {
		$path = 'products/catalog';
	}
	
	$page_name = CONTROLLERS.'/'.$path.'.php';
	if (file_exists($page_name)) {
		include $page_name;
	} else {
		include CONTROLLERS.'/errors/404.php';
	}
?>