<?php

$input = 'Call us at 03-3001-1256 or 03-3015-3222';
$pattern = '/\d{2}-\d{4}-\d{4}/';

// preg_match($pattern, $input, $matches);
// preg_match_all($pattern, $input, $matches);
// print_r($matches);

$input = preg_replace($pattern, '**-****-****', $input);
echo $input . PHP_EOL;