<?php
class SingleInstance{
	private static $inst = false;
	public $testValue = 1;

	private function __construct(){

	}

	public static function getInstance(){
		if(self::$inst){
			return self::$inst;
		}else{
			self::$inst = new self();
			return self::$inst;
		}
	}

	public function inc(){
		echo "Call inc!\n";
		$this->testValue ++;
	}
}

// $obj1 = SingleInstance::getInstance();
// $obj2 = SingleInstance::getInstance();
// var_dump($obj1->testValue,$obj2->testValue);
// $obj1->inc();
// var_dump($obj1->testValue,$obj2->testValue);
// $obj2->inc();
// var_dump($obj1->testValue,$obj2->testValue);

if($obj1 === $obj2){
	echo "same!\n";
}