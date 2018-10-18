<?php
	function cart_add($id, $count) {
		if ($count < 1 || $count > 20) {
			$count = 1;
		}
		if (isset($_SESSION['cart'][$id])) {
			$_SESSION['cart'][$id] += $count;
		} else {
			$_SESSION['cart'][$id] = $count;
		}
	}
	
	function cart_change($id, $count) {
		if ($count < 1) {
			unset($_SESSION['cart'][$id]);
		} else {
			$_SESSION['cart'][$id] = $count;
		}
	}
	
	function cart_get_all() {
		return $_SESSION['cart'];
	}
	
	function add_order() {
		$order_id = uniqid();
		foreach ($_SESSION['cart'] as $key => $value) {
			sql_execute("INSERT INTO orders (item, count, order_id)
				VALUES ('$key', '$value', '$order_id') ");
		}
		unset($_SESSION['cart']);
		return $order_id;
	}
?>