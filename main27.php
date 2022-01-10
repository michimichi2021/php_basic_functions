<?php

// $contents = "taro\njiro\nsaburo\n";
// file_put_contents('name.txt', $contents);

$contents = file_get_contents('name.txt');
echo $contents;

$lines = file('names.txt');
var_dump($lines);
