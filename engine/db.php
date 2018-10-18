<?php
	function sql_connect() {
		static $connect = null;
		if (!$connect) {
			$connect = mysqli_connect('localhost', 'root', '', 'php_base');
		}
		return $connect;
	}
	
	function sql_execute($querry) {
		return mysqli_query(sql_connect(), $querry);
	}
	
	function sql_get_all($querry) {
		return mysqli_fetch_all(sql_execute($querry), MYSQLI_ASSOC);
	}
	
	function secure($str) {
		return mysqli_real_escape_string (sql_connect(), htmlentities($str, ENT_QUOTES));
	}
?>