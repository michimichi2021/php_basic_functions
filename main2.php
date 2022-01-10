<?php

$name = 'Apple';
$score = 32.246;

// $info = "[$name][$score]";
// echo $info . PHP_EOL;

// $info = sprintf("[%15s][%10.2f]", $name, $score);
// // %s表示幅文字列、%d表示幅整数,%f表示幅浮動点小数
// echo $info . PHP_EOL;

// $info = sprintf("[%-15s][%010.2f]", $name, $score);
// // -は左詰め,0は0で埋めた
// echo $info . PHP_EOL;

printf("[%-15s][%010.2f]" . PHP_EOL, $name, $score);