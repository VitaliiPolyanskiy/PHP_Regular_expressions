<?php
$str = "Контактный телефон: ".
"333-22-44. Дополнительные номера: ".
"222-44-55 и 323-22-33";
$pattern = "/\d{3}-\d{2}-\d{2}/";
$num_match = preg_match_all($pattern, $str, $result);
for ($i=0; $i<$num_match; $i++)
    echo "Совпадение $i: ". $result[0][$i]."<br>";
?>