<?php
function translit ($text) {
  $arr=["а"=>"a","б"=>"b","в"=>"v","г"=>"g","д"=>"d","е"=>"e","ё"=>"e","ж"=>"zh","з"=>"z","и"=>"i","й"=>"i","к"=>"k","л"=>"l","м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r","с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"kh","ц"=>"tc","ч"=>"ch","ш"=>"sh","щ"=>"shch","ы"=>"y","э"=>"e","ю"=>"iu","я"=>"ia","ь"=>""];
    return strtr(mb_strtolower($text), $arr);
}

function change($str) {
        $arr = [" " => "_"];
        return strtr($str, $arr);
}
echo change(translit('Привет мир PHP'));
?>