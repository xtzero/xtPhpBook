<?php
class Class1{
	static public $value = 1;

	public function add(){
		self::$value++;
	}
}

$c1 = new Class1();
$c2 = new Class1();

var_dump($c2->value);
var_dump(Class1::$value);
$c1 -> add();
var_dump(Class1::$value);
$c2 -> add();
var_dump(Class1::$value);
