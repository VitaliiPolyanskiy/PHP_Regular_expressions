<?php
// Символ "i" после закрывающего ограничителя шаблона означает
// регистронезависимый поиск.
if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
    echo "Вхождение найдено.";
} else {
    echo "Вхождение не найдено.";
}
?>
