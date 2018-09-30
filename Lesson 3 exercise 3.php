<?php
    $arr = ['Московская область' => array('Москва', 'Зеленоград', 'Клин'), 
 'Ленинградская область' => array('Санкт-Петербург', 'Павловск', 'Кронштадт')];
    foreach($arr as $key => $value) {
        echo "<br>$key: <br>";
        $i = 0;
        foreach($value as $value1) {
            if ($i != 0 ) echo ", $value1";
            else echo "$value1";
            $i++;
        }
    }
    var_dump($arr);
?>