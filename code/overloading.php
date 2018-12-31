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

	public function speak($content,$loud){
		echo "I can speak what I want,".$content;
		for($i = 0;$i < $loud;$i ++){
			echo '!';
		}

		echo "\n\n";
	}
}

$specialAnimal = new animal('kriswu','70kg','180cm');
$specialAnimal -> speak();
$specialAnimal -> speak();