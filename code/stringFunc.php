<?php
// $str = 'Welcome to China';
// $subStr1 = substr($str,7,2);
// $subStr2 = substr($str,7);

// var_dump($str,$subStr1,$subStr2);

// $str = 'Welcome to China';
// $strPos = strpos($str,'China');

// var_dump($str,$strPos);

$str = 'Welcome to China';
$newStr = str_replace('China','my home',$str);

var_dump($str,$newStr);