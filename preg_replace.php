<?php
$string = 'The quick brown fox jumped over the lazy dog.';
$patterns = array();
$patterns[0] = '/quick/';
$patterns[1] = '/brown/';
$patterns[2] = '/fox/';
$replacements = array();
$replacements[0] = 'bear';
$replacements[1] = 'black';
$replacements[2] = 'slow';
echo preg_replace($patterns, $replacements, $string);
?>