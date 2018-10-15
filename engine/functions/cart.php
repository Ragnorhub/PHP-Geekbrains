<?php
	function cart_add($id) {
		if (isset($_SESSION['cart'][$id])) {
			$_SESSION['cart'][$id]++;
		} else {
			$_SESSION['cart'][$id] = 1;
		}
	}
	
	function cart_delete($id) {
		unset($_SESSION['cart'][$id]);
	}
	
	function cart_get_all() {
		return $_SESSION['cart'];
	}
?>