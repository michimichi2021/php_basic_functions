<?php

$scores = [30, 40, 50, 60, 70];
$partial = array_slice($scores, 2);
$partial2 = array_slice($scores, 1, 4);
print_r($scores);
print_r($partial);
print_r($partial2);