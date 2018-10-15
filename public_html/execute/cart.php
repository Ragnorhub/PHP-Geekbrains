<?php
	session_start();
	require_once $_SERVER['DOCUMENT_ROOT'].'/../engine/variables.php';
	require_once ENGINE.'/functions/cart.php';
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if (isset($_POST['add'])) {
			$id = $_POST['item'];
			cart_add($id);
			header('location: /index.php');
		}
		
		if (isset($_POST['delete'])) {
			$id = $_POST['item'];
			cart_delete($id);
			header('location: /index.php');
		}
	}
?>