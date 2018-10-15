<?php
	session_start();
	require_once $_SERVER['DOCUMENT_ROOT'].'/../engine/variables.php';
	require_once ENGINE.'/functions/db.php';
	require_once ENGINE.'/functions/items.php';
	require_once ENGINE.'/functions/cart.php';
	
	$items = items_get_all();
	$cart_items = cart_get_all();
	
	if (!is_null($cart_items)) {
		foreach ($cart_items as $key => &$value) {
			$data = items_get_one($key);
			$value = [
				'id' => $key,
				'name' => $data[0]['name'],
				'text' => $data[0]['text'],
				'count' => $value
			];
		}
		unset($value);
	}
	
	include TEMPLATES.'/layouts/index.php';
?>