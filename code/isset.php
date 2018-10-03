<?php
	$a = '';
	$b = null;
	$c;
	$arr = [1,2,3];

	//输出上面三个变量，还有一个没有定义过的$d
	var_dump('$a的值和变量类型是：',$a);
	echo '<br/>';var_dump('$b的值和变量类型是：',$b);
	echo '<br/>';var_dump('$c的值和变量类型是：',$c);
	echo '<br/>';var_dump('$d的值和变量类型是：',$d);
	echo '<br/>';var_dump('$b是否已定义：',isset($b));
	echo '<br/>';var_dump('$c是否已定义：',isset($c));
	echo '<br/>';var_dump('$d是否为空：',is_null($d));
	echo '<br/>';var_dump('$d是否已定义：',isset($d));
	echo '<br/>';var_dump('$arr的第1个元素已定义：',isset($arr[0]));
	echo '<br/>';var_dump('$arr的第4个元素为空：',is_null($arr[3]));
	echo '<br/>';var_dump('$arr的第4个元素已定义：',isset($arr[3]));


	$a = null;
	var_dump((string)$a);