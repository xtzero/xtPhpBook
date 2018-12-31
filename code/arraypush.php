<?php
$arr = array(
	'first' => 'apple',
	'second' => 'banana'
);
$newValue = 'orange';

var_dump($arr);
$res = array_push($arr,$newValue);
var_dump($arr,$res);
$arr[] = 'cherry';
var_dump($arr);