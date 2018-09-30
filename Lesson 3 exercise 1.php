<?php
    $count = 0;
    while($count <= 100) {
        if ($count % 3 == 0 && $count > 0) echo $count . '<br>';
        $count++;
    }
?>