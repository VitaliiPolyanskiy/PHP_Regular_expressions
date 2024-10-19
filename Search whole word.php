<?php
/* 
Специальная последовательность \b в шаблоне означает границу слова,
следовательно, только изолированное вхождение слова 'web' будет соответствовать
маске, в отличие от "webbing" или "cobweb".
 */
if (preg_match("/\bweb\b/i", "PHP is the web scripting language of choice.")) {
    echo "Вхождение найдено.";
} else {
    echo "Вхождение не найдено.";
}

if (preg_match("/\bweb\b/i", "PHP is the website scripting language of choice.")) {
    echo "Вхождение найдено.";
} else {
    echo "Вхождение не найдено.";
}
?>
