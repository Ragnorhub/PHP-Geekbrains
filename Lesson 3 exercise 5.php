<?php
    function change($str) {
        $arr = [" " => "_"];
        return strtr($str, $arr);
}
echo change("Привет Мир PHP!");
?>