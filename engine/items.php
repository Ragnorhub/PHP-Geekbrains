<?php
	function items_get_all() {
		return sql_get_all("SELECT * FROM items ORDER BY id DESC");
	}
	function items_get_one($id) {
		return sql_get_all("SELECT * FROM items WHERE id = {$id}");
	}
?>