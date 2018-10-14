<?php
	//ac是运算数，b是符号
	function calc($a,$b,$c){
		switch($b){
			case '+' : return $a + $c;
			case '-' : return $a - $c;
			case '*' : return $a * $c;
			case '/' : return $a / $c;
			default : return '不支持+-*/之外的运算';
		}
	}

	$a = $_GET['a'];
	$b = $_GET['b'];
	$c = $_GET['c'];
	if($a && $b && $c){
		echo '开始运算了！<br/>';
		echo '运算结果是：<br/>';
		echo calc($a,$b,$c);
		echo '<br/>';
	}else{
		echo '运算数或运算符不够！<br/>';
	}