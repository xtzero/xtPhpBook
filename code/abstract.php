<?php
abstract class AClass{
	abstract function aFunc();
}

class Class1 extends AClass{
	function aFunc(){
		echo "aFunc here!\n\n";
	}
}

// $obj1 = new Class1();
// $obj1->aFunc();

$obj2 = new AClass();