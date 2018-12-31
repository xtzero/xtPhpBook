<?php
class Parents{
	private $pri = 'This is a private value';
	protected $pro = 'This is a protected value';
	public $pub = 'This is a public value';

	public function output(){
		var_dump($this->pri);
		var_dump($this->pro);
		var_dump($this->pub);
	}
}

class Child extends Parents{
	public function output(){
		var_dump($this->pri);
		var_dump($this->pro);
		var_dump($this->pub);
	}
}

// $parent = new Parents();
// $parent->output();
// var_dump($parent->pub);
// var_dump($parent->pri);
// var_dump($parent->pro);

$child = new Child();
$child->output();