<?php

$input = '20200320Item-A 1200';
$input = substr_replace($input, 'Item-B', 8, 6);

$date = substr($input, 0, 8);
$product = substr($input, 8, 6);
// $amount = substr($input, 16, 4);
$amount = substr($input, 15);

echo $date . PHP_EOL;
echo $product . PHP_EOL;
echo $amount . PHP_EOL;
echo number_format($amount) . PHP_EOL;
