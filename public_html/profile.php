<?php
	session_start();
	require_once $_SERVER['DOCUMENT_ROOT'].'/../engine/variables.php';
	require_once ENGINE.'/functions/db.php';
	
	if (isset($_SESSION['login'])) {
		$id = $_SESSION['login'];
		$data = sql_get_all("SELECT name, email FROM users WHERE id = '$id'");
		include TEMPLATES.'/layouts/profile.php';
	} else {
		header('location: /index.php');
	}
	
?>