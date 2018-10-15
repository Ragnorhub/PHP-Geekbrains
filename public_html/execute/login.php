<?php
	session_start();
	require_once $_SERVER['DOCUMENT_ROOT'].'/../engine/variables.php';
	require_once ENGINE.'/functions/db.php';
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if (isset($_POST['login'])) {
			$email = secure($_POST['user_email']);
			$pw = secure($_POST['user_password']);
			$data = sql_get_all("SELECT id, pw FROM users WHERE email = '$email'");
			
			if (password_verify($pw, $data[0]['pw'])) {
				$_SESSION['login'] = $data[0]['id'];
				header('location: /profile.php');
			} else {
				echo 'Данные не верны';
			}
		}
	}
?>