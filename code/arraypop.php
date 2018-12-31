<?php
$arr = array(
	'first' => 'apple',
	'second' => 'banana'
);

$lastValue = array_pop($arr);

$fakeArr = 'fake';
$emptyArr = array();

$test1 = array_pop($fakeArr);
$test2 = array_pop($emptyArr);

var_dump($lastValue,$arr,$test1,$test2);