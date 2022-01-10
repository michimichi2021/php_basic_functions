<?php

$input = ' dot_taguchi ';
$input = trim($input);
// echo strlen($input) . PHP_EOL;
echo strpos($input, '_') . PHP_EOL;
// strposは部分文字が文字列内で現れる最初の位置

$input = str_replace('_', '-', $input);
// 文字の置換
echo $input . PHP_EOL;
