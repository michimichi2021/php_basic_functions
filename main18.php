<?php

$numbers = range(1,10);

$evenNumbers = array_filter(
  $numbers,
  function ($n) {return $n % 2 == 0;},
);

print_r($evenNumbers);