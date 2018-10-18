<?php
	session_start();
	require_once $_SERVER['DOCUMENT_ROOT'].'/../engine/variables.php';
	require_once ENGINE.'/autoload.php';
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if (isset($_POST['add_to_cart'])) {
			$id = secure($_POST['item_id']);
			$count = secure($_POST['item_count']);
			cart_add($id, $count);
			echo json_encode(['status' => 'ok'] ,JSON_UNESCAPED_UNICODE);
		}
		
		if (isset($_POST['item_count_correct'])) {
			$id = secure($_POST['item_id']);
			$count = secure($_POST['item_count_correct']);
			cart_change($id, $count);
			echo json_encode(['status' => 'ok'] ,JSON_UNESCAPED_UNICODE);
		}
		
		if (isset($_POST['send_order'])) {
			$id = add_order();
			echo json_encode(['status' => 'ok', 'id' => $id] ,JSON_UNESCAPED_UNICODE);
		}
	}
?>