<?
	$files = scandir(ENGINE);
	foreach ($files as $file) {
		if (!in_array($file, ['.','..','autoload.php']) && !is_dir(ENGINE.'/'.$file)) {
			require_once ENGINE.'/'.$file;
		}
	}
?>