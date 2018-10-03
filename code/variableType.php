<?php
	$a = 3;
	$b = 3.3;
	$c = true;
	$d = 'This is a string';
	$e = ['key' => 'value'];
	$f;

	echo 'a的变量类型是：'.gettype($a).'<br/>';
	echo 'b的变量类型是：'.gettype($b).'<br/>';
	echo 'c的变量类型是：'.gettype($c).'<br/>';
	echo 'd的变量类型是：'.gettype($d).'<br/>';
	echo 'e的变量类型是：'.gettype($e).'<br/>';
	echo 'f的变量类型是：'.gettype($f).'<br/>';

	var_dump($a);
	var_dump($b);
	var_dump($c);
	var_dump($d);
	var_dump($e);
	var_dump($f);