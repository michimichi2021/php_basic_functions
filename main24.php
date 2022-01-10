<?php

$fp = fopen('name.txt', 'w');
fwrite($fp, "taro\n");
fclose($fp);
