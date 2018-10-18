<?php
	if (isset($_SESSION['login'])) {
		$id = $_SESSION['login'];
		$data = sql_get_all("SELECT name, email FROM users WHERE id = '$id'");
		include VIEW.'/layouts/profile.php';
	} else {
		header('location: /index.php');
	}
?>