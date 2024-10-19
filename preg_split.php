<?php
// разбиваем строку по произвольному числу запятых и пробельных символов
$keywords = preg_split("/[\s,]+/", "hypertext language, programming");
print_r($keywords);
?>