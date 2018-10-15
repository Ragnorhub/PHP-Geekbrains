<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/../engine/variables.php';
	require_once ENGINE.'/functions/db.php';
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if (isset($_POST['reg'])) {
			$name = secure($_POST['user_name']);
			$email = secure($_POST['user_email']);
			$pw = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
			sql_execute("INSERT INTO users (name, email, pw) VALUES  ('$name', '$email' ,'$pw')");
			header('location: /login.php');
		}
	}
?>