<?php
    $arr = ['Московская область' => array('Москва', 'Зеленоград', 'Клин'), 
 'Ленинградская область' => array('Санкт-Петербург', 'Павловск', 'Кронштадт')];
    foreach($arr as $key => $value) {
        echo "<br>$key: <br>";
        foreach($value as $value1) {
            if (mb_substr($value1, 0, 1) == "К") echo $value1;
        }
    }
    var_dump($arr);
?>