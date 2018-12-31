<?php
$str = 'I will destroy.';
$count = 0;
$newStr = str_replace(array('i','e','o'),array('~','|','+','_'),$str,$count);
var_dump($str,$newStr,$count);