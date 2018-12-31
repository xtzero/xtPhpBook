<?php
class animal{
	private $name;
	private $weight;
	private $height;

	public function __construct($name,$weight,$height){
		$this->name = $name;
		$this->weight = $weight;
		$this->height = $height;
	}

	public function speak(){
		echo "I'm a animal! I'm {$this->name}!\n";
	}
}

class human extends animal{
	public function __construct($name,$weight,$height){
		$this->name = $name;
		$this->weight = $weight;
		$this->height = $height;
	}

	public function speak(){
		echo "I'm a human. I'm {$this->name}. \n"; 
	}
}

$doge = new animal('doge','10kg','20cm');
$xiaoming = new human('xiaoming','60kg','170cm');

$doge -> speak();
$xiaoming -> speak();